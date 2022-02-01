<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProjectController extends Controller
{

    public function apiwithoutkey()
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://jsonplaceholder.typicode.com/posts";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

        echo '<pre>';
        print_r($responseBody);
        echo '</pre>';

        //return view('projects.apiwithoutkey', compact('responseBody'));

        // return 'hola';
    }

}
