<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; // Import your model

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // 1. Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Save directly to the messages table
        Message::create($validated);

        // 3. Go back to the page with a success alert
        return redirect()->back()->with('success', 'Your message has been saved. We will contact you soon!');
    }
}