<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Phpfastcache\Helper\Psr16Adapter;

class GalleryController extends Controller
{
    public function gallery()
    {
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'name', 'password', new Psr16Adapter('Files'));
        $instagram->login(); // will use cached session if you want to force login $instagram->login(true)
        $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
        $account = $instagram->getAccount('name');
        // dd($account);
        $accountMedias = $account->getMedias(); 
        foreach ($accountMedias as $key  => $accountMedia) {
            $images[$key] = str_replace("&amp;","&", $accountMedia->getimageHighResolutionUrl());     
            $path = $images[$key];
            $imageName = $key.'.png';
            $img = public_path('insta/images/') . $imageName;
            file_put_contents($img, file_get_contents($path));
        }
        return view('gallery', compact('images'));
    }
}
