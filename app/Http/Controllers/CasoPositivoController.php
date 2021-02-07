<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class CasoPositivoController extends Controller
{
     private $client;

    public function __construct(){
    //Ruta de api para consumir casos positivos.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/CasoPositivo']);
    
    }

    public function index ()
    {
        $repuesta=$this->client->get('casos_positivos');

        $casos_positivos = json_decode($repuesta->getBody()->getContents());
       
        return view('casos_positivos',compact('casos_positivos'));

    }

   
}
