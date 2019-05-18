<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Tmail;
use Mail;
use App\Helpers\MailHelper;

class MailController extends Controller
{
    public function index()
    {
        $mails =  Tmail::simplePaginate(5);
        return view('mail.index', compact('mails'));
    }

    public function create()
    {
        return view('mail.create');
    }

    public function store(Request $request)
    {
        $request->validate(MailHelper::mailValidator());

        $mail = new Tmail([
            'target_mail' => $request->get('target_mail'),
            'subject' => $request->get('subject'),
            'body' => $request->get('body'),
        ]);
        Mail::to($request->target_mail)->send( new SendMail($mail->subject, $mail->body));
        $mail->save();
        return redirect('/mail');
    }

    public function destroy($id)
    {
        $mail = Tmail::find($id);
        $mail->delete();
        return redirect('/mail');
    }
}
