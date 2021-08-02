<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailtestController extends Controller
{
    public function index(Request $request)
    {
        Mail::raw('This is sample message', function ($message) {
            $message->to('contact@contact.com');
        });
    }
}
