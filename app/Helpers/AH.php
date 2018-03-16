<?php

namespace App\Helpers;

use App;
use Auth;
use Cache;
use Storage;

class AH
{
	// public static function image($in, $width = null, $height = null, $out)
	// {
	// 	Image::make(storage_path('app/public/images/' . $in))
	// 		->resize($width, $height, function($constraint) {
	// 			$constraint->aspectratio();
	// 		})->save(storage_path("app/public/images/$out/" . $in));
	// }

	// public static function profileLink($username = null, $id = null )
	// {
	// 	if ($username) {
	// 		return route('user.public', ['username'=>$username]);
	// 	} else {
	// 		return route('user.public', ['id'=>$id]);
	// 	}
	// }

	// public static function tweet($obj, $type)
	// {
	// 	if ( $type === 'music' ) {
	// 		$status = '#NouvoMizik ';
	// 	} elseif ( $type === 'video' ) {
	// 		$status = '#NouvoVideyo ';
	// 	}

	// 	$status .= "$obj->title " . $obj->url .
	// 				" via @TKPMizik @TiKwenPam #" . $obj->category->slug;

 //        	Twitter::postTweet([
 //        		'status' => $status,
 //        		'format' => 'json'
 //        	]);
	// }

	public static function asset($asset, $size = 'null')
	{
		$imgSize = [
			'thumbs' 	=> config('site.image_upload_path') .'/thumbs/',
			'images' 	=> config('site.image_upload_path') .'/',
			'show'  	=> config('site.image_upload_path') .'/show/',
			'tiny' 		=> config('site.image_upload_path') .'/thumbs/tiny/',
			'profile' 	=> config('site.image_upload_path') .'/thumbs/profile/',
			'null'		=> ''
		];

		$relativeUrl = $imgSize[$size] . $asset;

		if (App::isLocal()) {
			return asset($relativeUrl);
		}

		$cdnUrl = 'https://annuairehaiti.com';

		return url($cdnUrl . $relativeUrl);
	}

	public static function route($path, $params = [])
	{
		if (!App::isLocal()) {
			return secure_url(route($path, $params, false));
		}

		return url(route($path, $params));
	}

	public static function store($file)
	{
		$ext = $file->getClientOriginalExtension();

		$name = str_random(8) . time() . '.' . $ext;

		$fileIsUploaded = Storage::put($name, file_get_contents($file->getRealPath()));

		$response = new \stdClass();
		$response->success = $fileIsUploaded;
		$response->name = $name;

		return $response;
	}

	public static function logout($route)
	{
		Auth::logout();
      	return redirect($route);
	}
}
