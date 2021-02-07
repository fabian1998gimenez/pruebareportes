<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class DenunciaController extends Controller
{
     private $client;

    public function __construct(){
    //Ruta de api para consumir denuncias.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/denuncias']);
    
    }

    public function index ()
    {
        $repuesta=$this->client->get('denuncias');

        $denuncias = json_decode($repuesta->getBody()->getContents());
       
        return view('denuncias',compact('denuncias'));

    }

   
}

