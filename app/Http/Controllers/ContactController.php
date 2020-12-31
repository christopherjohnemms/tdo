<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'messageBody' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('christopherjohnemms@gmail.com', 'Admin')->subject('New Website Enquiry');
        });

        return redirect()->back()->with(['success' => 'Thank you for your enquiry!']);
    }
}
