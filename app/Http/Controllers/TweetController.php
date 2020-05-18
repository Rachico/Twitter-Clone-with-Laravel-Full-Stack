<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function store ()
    {


        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $this->validateTweet()['body']
        ]);

        return redirect()->route('home');
    }

    public function validateTweet()
    {
        return request()->validate([
            'body' => 'required|min:3|max:255'
        ]);
    }

    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline(),
        ]);
    }
}
