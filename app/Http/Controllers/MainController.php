<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Snowfire\Beautymail\Beautymail;

use Mail;
use App\User;
use Cache;
use App;

class MainController extends Controller
{
    public function getIndex()
    {
    	return view('home');
    }

    public function postRegister(Request $request)
    {
        if ( User::whereEmail( $request->input('email') )->first() )
        {
            return $response = ['success' => true, 'status' => 2];
        }

        $data = $request->all();

        if ( ! App::isLocal() )
        {

            $data['titre'] = 'Inscription Réussie!';

            $beautymail = app()->make(Beautymail::class);

            $beautymail->send('emails.welcome', $data, function($message) use ($data)
            {
                $message
                    ->from( config('site.email'), config('site.name') )
                    ->to( $data['email'], $data['firstname'] . ' ' . $data['lastname'] )
                    ->cc( config('site.email'), config('site.name') )
                    ->subject( $data['titre'])
                    ->replyTo( config('site.email') );
            });

            if (Mail::failures())
            {
               return $response = ['success' => false];
            }
        }

        User::create($data);

        return $response = ['success' => true, 'status' => 1];
    }

    public function postContact(Request $request)
    {
    	$data = $request->all();

        $data['fullname'] = $request->input('firstname') . ' ' . $request->input('lastname');
    	$data['titre'] = 'Nouveau contact';
    	$data['body'] = $data['message'];

    	$beautymail = app()->make(Beautymail::class);

	    $beautymail->send('emails.contact', $data, function($message) use ($data)
	    {
	        $message
	            ->from( $data['email'], $data['firstname'] . ' ' . $data['lastname'] )
	            ->to( config('site.email'), config('site.name') )
	            ->subject($data['titre'])
	            ->replyTo( $data['email'] );
	    });

    	if (Mail::failures())
    	{
		        // return response showing failed emails
		}

    	return $response = ['success' => true];
    }

    public function getCount()
    {
        // $registered = User::count();
        return User::count();

        $value = Cache::remember('users', 0, function()
        {
            return User::count();
        });
    }

    public function getParticipants()
    {
        $users = User::latest()->paginate(50);
        $title = 'Liste des participants';

        return view('users', compact('users', 'title'));
    }

    public function getSearch($name)
    {
        return User::where('firstname', 'LIKE', "%$name%")
                    ->orWhere('lastname', 'LIKE', "%$name%")
                    ->take(10)
                    ->get();
    }
}