<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ThankYouMail;

class ContactController extends Controller
{
    public function contactFunction(Request $request)
    {
        return view("contact");
    }

    // app/Http/Controllers/ContactController.php

    public function sendContactForm(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email to adebayonathaniel79@gmail.com and ola@gmail.com
        Mail::to('healingheartsyahweh@gmail.com')->send(new ContactFormMail($request->all()));
        Mail::to('healingheartsyahweh2@gmail.com')->send(new ContactFormMail($request->all()));
        Mail::to('bggentertainment.developer@gmail.com')->send(new ContactFormMail($request->all()));

        // Send thank you email to the user
        Mail::to($request->email)->send(new ThankYouMail($request->name));

        // Flash a success message to the session
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
