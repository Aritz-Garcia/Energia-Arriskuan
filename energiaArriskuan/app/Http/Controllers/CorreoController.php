<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Mail\EmailErab;
use Illuminate\Http\Request;

class CorreoController extends Controller
{
    public function kontaktua(Request $request) {
        Mail::to('energiaarriskuan@gmail.com')->send(new Email($request));
        Mail::to($request->input('email'))->send(new EmailErab($request));
        return redirect()->route('kontaktua');
    }
}
