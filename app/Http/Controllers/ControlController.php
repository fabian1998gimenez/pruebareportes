<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ControlController extends Controller
{
   private $client;

    public function __construct(){
    //Ruta de api para consumir controles.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/controles']);
    
    }
    public function index ()
    {
        $repuesta=$this->client->get('controles');

        $controles = json_decode($repuesta->getBody()->getContents());
       
        return view('controles',compact('controles'));

    }

   
}