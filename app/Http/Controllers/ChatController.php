<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function index()
    {
        return view('feature.chat');
    }

    public function chat(Request $request)
    {
        $message = $request->input('message');
        $response = Http::post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'prompt' => $message,
            'max_tokens' => 50,
        ])->json();

        $reply = $response['choices'][0]['text'] ?? 'I am sorry, I cannot generate a reply at the moment.';

        return response()->json([
            'reply' => $reply,
        ]);
    }
}
