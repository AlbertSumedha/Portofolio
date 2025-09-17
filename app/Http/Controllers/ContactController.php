<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // validasi sederhana
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // kirim email
        Mail::to('albertsk2581@gmail.com')->send(new ContactMail($validated));

        // redirect atau response
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
