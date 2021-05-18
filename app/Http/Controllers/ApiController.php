<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //https://github.com/dise97/Laravel-PHP-app
    public function index()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://jsonplaceholder.typicode.com/todos/1',
        ]);

        $response = $client->request('GET', '/todos');
        //getting Body & JSON decoding of response
        $body = $response->getBody();
        $arr_body = json_decode($body);
        //returning results to 'todos' View
        return view('todos')->with('arr_body', $arr_body);
    }
}
