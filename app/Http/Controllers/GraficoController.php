<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GraficoController extends Controller
{
    private $femenino;
    private $otro;
    private $client;

    public function __construct(){
    //Ruta de api para consumir casos positivos.
    $this->femenino = new Client (['base_uri'=>'http://127.0.0.1:6060/femenino']);
    $this->otro = new Client (['base_uri'=>'http://127.0.0.1:6060/otro']);
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/masculino']);
    
    }

    public function index ()
    {
        $repuesta=$this->client->get('masculino');

        $masculino = json_decode($repuesta->getBody()->getContents());
        //

        $repuesta=$this->client->get('femenino');

        $femenino = json_decode($repuesta->getBody()->getContents());
        //
         $repuesta=$this->client->get('otro');

        $otro = json_decode($repuesta->getBody()->getContents());
        return view('generos',compact('masculino','femenino', 'otro'));

    }
}