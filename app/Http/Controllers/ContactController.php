<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        ContactMessage::create($validated);

        // Send email to admin
        Mail::to('admin@example.com')->send(new ContactFormMail($validated));

        return redirect()->route('contact.create')->with('success', 'Message sent successfully!');
    }
}

