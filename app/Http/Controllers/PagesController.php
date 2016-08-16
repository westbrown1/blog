<?php 

namespace App\Http\Controllers;

use Mail;

use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

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
    public function postContact(Request $request)
    {   
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:5',
            'body' => 'min:10'
            ]);     

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body
        ];

        Mail::send('emails.contact', $data, function($m) use ($data) {
            $m->from($data['email']);
            $m->to('lawsonsdad@gmail.com');
            $m->subject($data['subject']);
        });

        Session::flash('success', 'Your message was sent!');
        return view('pages.contact');
    }
    public function getImage()
    {
        return view('pages.image');
    }
}	