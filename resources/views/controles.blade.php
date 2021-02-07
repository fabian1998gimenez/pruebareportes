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
                             Generar reportes graficos de Controles
        
                         </div>
                         <div class="card-body">
                         
  <div class="md-card-content" style="overflow-x: auto;">
  <table class="table table-bordered" id="example">
        <thead>
            <tr>
        <th>PACIENTE ID</th>
        <th>FECHA ANÁLISIS</th>
        <th>ESTADO DEL PACIENTE</th>
        <th>RECOMENDACION</th>
        <th>FECHA DE ALTA</th>
        
            </tr>
        </thead>
        <tbody>
        @foreach($controles as $c)
            <tr>
                <td>{{ $c->paciente_id}}</td>
            <td>{{ $c->fecha_analisis}}</td>
            <td>{{ $c->estado_paciente}}</td>
            <td>{{ $c->recomendacion }}</td>
            <td>{{ $c->fecha_alta }}</td>
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
