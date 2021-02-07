@extends('layouts.app')

@section('content')
  <br>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Generar reportes graficos Casos Positivos
        
                         </div>
                         <div class="card-body">
                         
  <div class="md-card-content" style="overflow-x: auto;">
  <table class="table table-bordered" id="example">
        <thead>
            <tr>
        <th>Paciente ID</th>
        <th>Codigo</th>
        <th>Region</th>
        <th>Distrito ID</th>
        <th>Distrito</th>
        <th>Fecha de Notificacion</th>
        <th>Medico</th>
        <th>Edad Media</th>
        <th>Residente</th>
        <th>Hospedaje</th>
        <th>Telefono</th>
        <th>Departamento ID</th>
        <th>Departamento</th>
        <th>Zona</th>
        <th>Personal de Blanco</th>
        <th>Albergue</th>
        <th>Lugar de Blanco</th>
        <th>¿Sintomas de Fiebre?</th>
        <th>Hospitalizado</th>
        <th>Signo de Sintomas</th>
        <th>Vacuna para la Influenza</th>
        <th>Fecha de vacunación</th>
        <th>Viajes recientes</th>
        <th>Centro Asistenical Covid</th>
        <th>Lugar del C.A.</th>
        <th>Ciudad del C.A. </th>
        <th>Nombre del C.A. </th>
        <th>Fecha asistida</th>
        <th>¿Contacto con animales?</th>
        <th>¿Contacto con personas?</th>
        <th>Tipo de contacto</th>
        <th>Otros contactos</th>
        <th>¿Contacto con algún infectado?</th>
        <th>Datos del contacto</th>
        <th>Muestra</th>
        <th>Laboratorio</th>
        <th>N° de Planilla</th>
        <th>Año</th>
        <th>Lugar de Usuario</th>
          <th>Usuario</th>

            </tr>
        </thead>
        <tbody>
        @foreach($casos_positivos as $cp)
            <tr>
                <td>{{ $cp->nombre_apellido  }}</td>
            <td>{{ $cp->codigo}}</td>
            <td>{{ $cp->region}}</td>
            <td>{{ $cp->codigo_distrito}}</td>
            <td>{{ $cp->distrito}}</td>
            <td>{{ $cp-> fecha_notificacion}}</td>
            <td>{{ $cp->medico}}</td>
            <td>{{ $cp->media_edad}}</td>
            <td>{{ $cp->residente}}</td>
            <td>{{ $cp->hospedaje}}</td>
            <td>{{ $cp->telefono_verificado}}</td>
            <td>{{ $cp->codigo_departamento}}</td>
            <td>{{ $cp->departamento}}</td>
            <td>{{ $cp->zona}}</td>
            <td>{{ $cp->personal_de_blanco}}</td>
            <td>{{ $cp->albergue}}</td>
            <td>{{ $cp->lugar_albergue}}</td>
            <td>{{ $cp->sintomas_fiebre}}</td>
            <td>{{ $cp->hospitalizado}}</td>
            <td>{{ $cp->signo_sintoma}}</td>
            <td>{{ $cp->vacuna_para_la_influenza}}</td>
            <td>{{ $cp->fecha_vacunacion}}</td>
            <td>{{ $cp->viajo_reciente}}</td>
            <td>{{ $cp->centro_asistencia_covid}}</td>
            <td>{{ $cp->centro_asistencia_pais}}</td>
            <td>{{ $cp->centro_asistencia_ciudad}}</td>
            <td>{{ $cp->nombre_centro_asistencia}}</td>
            <td>{{ $cp->fecha_asistida}}</td>
            <td>{{ $cp->contacto_con_animales}}</td>
            <td>{{ $cp->contacto_persona}}</td>
            <td>{{ $cp->tipo_contacto}}</td>
            <td>{{ $cp->contacto_otro}}</td>
            <td>{{ $cp->contacto_con_infectado}}</td>
            <td>{{ $cp->dato_de_contacto}}</td>
            <td>{{ $cp->toma_de_muestra}}</td>
            <td>{{ $cp->laboratorio}}</td>
            <td>{{ $cp->nro_planilla}}</td>
            <td>{{ $cp->anho}}</td>
            <td>{{ $cp->responsable_de_carga}}</td>
            <td>{{ $cp->usuario_lugar}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
                    </br>
             </div>
         </div>
    </div>



@endsection
