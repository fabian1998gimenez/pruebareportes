<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Paciente;
use App\Models\Control;
use DB;
use Carbon\Carbon;
use GuzzleHttp\Client;
class GraficoController extends Controller
{
    private $femenino;
    private $otro;
    private $masculino;
    private $encarnacion;
    private $cambyreta;
    private $ciudadnueva;
    private $fatima;
    private $itapaso;
    private $mboikae;
    private $sagradafamilia;
    private $sanisidro;
    private $santamaria;
    private $chaipe;
    private $buenavista;
    private $eleccion;
    private $infectados;
    private $max;
    private $min;
    private $muertos;
    private $negativos;
    private $negatotal;
    private $otro_estado;
    private $positivos;
    private $positotal;
    private $promedio;
    private $recuperados;


    public function __construct(){
    
    $this->femenino = new Client (['base_uri'=>'http://127.0.0.1:6060/generos/femenino']);
    $this->otro = new Client (['base_uri'=>'http://127.0.0.1:6060/generos/otro']);
    $this->masculino = new Client (['base_uri'=>'http://127.0.0.1:6060/generos/masculino']);

    $this->encarnacion = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/encarnacion']);
    $this->buenavista = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/buenavista']);
    $this->cambyreta = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/cambyreta']);
    $this->ciudadnueva = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/ciudadnueva']);
    $this->fatima = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/fatima']);
    $this->itapaso = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/itapaso']);
    $this->mboikae = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/mboikae']);
    $this->sagradafamilia = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/sagradafamilia']);
    $this->sanisidro = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/sanisidro']);
    $this->santamaria = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/santamaria']);
    $this->chaipe = new Client (['base_uri'=>'http://127.0.0.1:6060/barrios/chaipe']);

    $this->eleccion = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/eleccion']);
    $this->infectados = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/infectados']);
    $this->max = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/max']);
    $this->min = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/minima']);
    $this->muertos = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/muertos']);
    $this->negativos = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/negativo']);
    $this->negatotal = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/negatotal']);
    $this->otro_estado = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/otro_estado']);
    $this->positivos = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/positivo']);
    $this->positotal = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/positotal']);
    $this->promedio = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/promedio']);
    $this->recuperados = new Client (['base_uri'=>'http://127.0.0.1:6060/estados/recuperados']);
 
    
    }

    public function index ()
    {
        //generos
        $repuesta=$this->masculino->get('masculino');

        $masculino = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->femenino->get('femenino');

        $femenino = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->otro->get('otro');

        $otro = json_decode($repuesta->getBody()->getContents());

        // Barrios

        //
        $repuesta=$this->encarnacion->get('encarnacion');

        $encarnacion = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->buenavista->get('buenavista');

        $buenavista = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->cambyreta->get('cambyreta');

        $cambyreta = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->ciudadnueva->get('ciudadnueva');

        $ciudadnueva = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->fatima->get('fatima');

        $fatima = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->itapaso->get('itapaso');

        $itapaso = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->mboikae->get('mboikae');

        $mboikae = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->sagradafamilia->get('sagradafamilia');

        $sagradafamilia = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->sanisidro->get('sanisidro');

        $sanisidro = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->santamaria->get('santamaria');

        $santamaria = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->chaipe->get('chaipe');

        $chaipe = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->eleccion->get('eleccion');

        $eleccion = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->infectados->get('infectados');

        $infectados = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->max->get('max');

        $max = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->min->get('minima');

        $min = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->muertos->get('muertos');

        $muertos = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->negativos->get('negativo');

        $negativos = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->negatotal->get('negatotal');

        $negatotal = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->otro_estado->get('otro_estado');

        $otro_estado = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->positivos->get('positivo');

        $positivos = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->positotal->get('positotal');

        $positotal = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->promedio->get('promedio');

        $promedio = json_decode($repuesta->getBody()->getContents());
        //
        $repuesta=$this->recuperados->get('recuperados');

        $recuperados = json_decode($repuesta->getBody()->getContents());
    

        return view('generos', compact('masculino','femenino','otro','encarnacion','chaipe','cambyreta','mboikae','sanisidro','sagradafamilia','ciudadnueva','santamaria','itapaso','buenavista','fatima','muertos','infectados','recuperados','eleccion','otro_estado','positivos','negativos','positotal','negatotal','promedio','max','min'));

    }
}
   