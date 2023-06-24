<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        // Ambil teks pesan dari permintaan
        $message = $request->input('message');

        // Kirim permintaan ke API OpenAI
        $response = $this->callOpenAPI($message);

        // Ambil balasan dari respon API
        $reply = $response['choices'][0]['text'];

        // Kembalikan balasan sebagai respons JSON
        return response()->json(['reply' => $reply]);
    }

    private function callOpenAPI($message)
    {
        $client = new Client();

        $response = $client->post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'headers' => [
                'Authorization' => 'Bearer your-api-key',
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'prompt' => $message,
                'max_tokens' => 50,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
