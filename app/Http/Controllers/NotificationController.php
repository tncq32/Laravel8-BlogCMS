<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use App\Notifications\BlogNotification;
use BlogCategory;
use Illuminate\Support\Facades\Auth;
use Log;

class NotificationController extends Controller
{
    public function sendBlogNotification()
    {
        $blogCategory = Blog::all();
        return view('auth.notifications',compact('blogCategory'));
    }
}
