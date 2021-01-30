<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class SugerenciaController extends Controller
{
    private $client;

    public function __construct(){
    //Ruta de api para consumir sugerencias.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/sugerencias']);
    
    }
    public function index ()
    {
        $repuesta=$this->client->get('sugerencias');

        $sugerencias = json_decode($repuesta->getBody()->getContents());
       
        return view('sugerencias',compact('sugerencias'));

    }

   
}

