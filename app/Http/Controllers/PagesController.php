<?php 

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('id', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout()
    {
    	return view('pages.about');
    }
    public function getContact()
    {
    	return view('pages.contact');
    }
    public function getUploadimage()
    {
        return view('pages.uploadimage');
    }
    public function getImage()
    {
        return view('pages.image');
    }
}	