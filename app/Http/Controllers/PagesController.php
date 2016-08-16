<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout() {
        $first = 'Nazarii';
        $last = 'Bodnarchuk';

        $fullname = $first . ' ' . $last;
        $email = 'zendik8@ukr.net';
        $data = [];
        $data['fullname'] = $fullname;
        $data['email'] = $email;
        return view('pages.about')->withData($data);
    }
    public function getContact() {
        return view('pages.contact');
    }
}

