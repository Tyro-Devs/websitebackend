<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'email' => 'nullable|email',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        Message::create($validatedData);

        return redirect()->route('messages.index')
            ->with('success', 'Message created successfully.');
    }








}
