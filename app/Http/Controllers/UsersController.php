<?php

namespace App\Http\Controllers;

use AH;
use Auth;
use Cache;
use App\Models\User;
use App\Models\Enterprise;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
	public function __construct()
   {
     	$this->middleware('auth');
   }

	public function account()
	{
		return view('users.profile', [
			'title' => 'Mon Compte',
			'enterprises' => Auth::user()->enterprises
		]);
	}

	public function enterprises(Request $request)
	{
		return view('users.enterprises', [
			'enterprises' => Auth::user()->enterprises()->latest()->paginate(12),
			'page' => $request->has('page') ? "(page $request->page)" : ''
		]);
	}

	public function getEditForm()
	{
		return view('users.edit', [
			'user' => Auth::user(),
			'title' => trans('text.account.edit')
		]);
	}

	public function update(UpdateUserRequest $request)
	{
		// $image 		= $this->request::file('image');

		// if ( $image ) {
		// 	$imageext = $image->getClientOriginalExtension();
		// 	$imagename = Str::slug( $name, '-' ) . '-' . Str::random( 32 ) . '.' . $imageext;
		// 	$imageuploadpath = 'public/uploads/images';
		// 	$imagepath = 'uploads/images/';
		// 	$imagesuccess = $image->move( $imageuploadpath, $imagename );

		// 	if ( $imagesuccess ) {
		// 		Image::make( $imageuploadpath . '/' . $imagename )
		// 			->resize( 200, null, function( $constraint )
		// 			{
		// 				$constraint->aspectratio();
		// 			})
		// 			->save( $imageuploadpath . '/thumbs/' . $imagename );

		// 		Image::make( $imageuploadpath . '/' . $imagename )
		// 			->resize( 50, 50, function( $constraint )
		// 			{
		// 				$constraint->aspectratio();
		// 			})
		// 			->save( $imageuploadpath . '/thumbs/profile/' . $imagename );
		// 	}
		// }

		$user = Auth::user();

		$user->firstname = $request->firstname;
		$user->lastname = $request->lastname;
		$user->email = $request->email;

		if ($request->has('password')) {
			$user->password = bcrypt($request->password);
		}
		// if ( !empty( $image ) )
		// {
		// 	$user->image = $imagename;
		// }

		$user->save();

		return redirect(route('account.index'))
			->withMessage(trans('text.account.updated'))
			->withStatus('success');
	}
}