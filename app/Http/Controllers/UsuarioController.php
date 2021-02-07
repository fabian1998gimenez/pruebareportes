<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class UsuarioController extends Controller
{
    private $client;

    public function __construct(){
    //Ruta de api para consumir usuarios.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/usuarios']);
    
    }
    public function index ()
    {
        $repuesta=$this->client->get('usuarios');

        $usuarios = json_decode($repuesta->getBody()->getContents());
       
        return view('usuarios',compact('usuarios'));

    }

   
}