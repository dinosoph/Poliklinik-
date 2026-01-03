<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Exception;

class ContactController extends Controller
{
    // Display the contact form
    public function showForm()
    {
        return view('contact');  // Display the form (contact.blade.php)
    }

    // Handle the form submission
  public function handleForm(Request $request)
{
    try {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // Insert data into the `messages` table
        Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        // Return response as JSON (for AJAX)
        return response()->json(['status' => 'success', 'message' => 'Your message has been sent. Thank you!']);
    } catch (\Exception $e) {
        // Return error response as JSON (for AJAX)
        return response()->json(['status' => 'error', 'message' => 'There was an error sending your message. Please try again later.']);
    }
}
}
