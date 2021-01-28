<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Repositories\PacienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use GuzzleHttp\Client;


class PacienteController extends AppBaseController
{
     private $client;

    public function __construct(){
    //Ruta de api para consumir pacientes.
    $this->client = new Client (['base_uri'=>'http://127.0.0.1:6060/api/']);
    
    }

    public function index ()
    {
        $repuesta=$this->client->get('pacientes');

        $pacientes = json_decode($repuesta->getBody()->getContents());
       
        return view('pacientes.index',compact('pacientes'));

    }

   
}
