<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
{
    // Cek honeypot: jika terisi, anggap spam dan tolak
    if (!empty($request->input('website'))) {
        return back()->with('success', 'Permintaan Anda terdeteksi sebagai spam dan tidak dikirim.');
    }

    // Validasi input dari user
    $data = $request->validate([
        'name'    => 'required|string',
        'email'   => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    // Kirim email
    Mail::raw("From: {$data['name']} ({$data['email']})\n\n{$data['message']}", function ($message) use ($data) {
        $message->to(env('MAIL_TO_ADDRESS'))
                ->subject($data['subject']);
    });

    return back()->with('success', 'Email berhasil dikirim!');
}


}
