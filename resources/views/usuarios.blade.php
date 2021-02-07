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
                             Generar reportes graficos de Usuarios
        
                         </div>
                         <div class="card-body">
                         
  <div class="md-card-content" style="overflow-x: auto;">
  <table class="table table-bordered" id="example">
        <thead>
            <tr>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>DISTRITO</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th>E-MAIL</th>
        <th>OBSERVACIONES</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $user)
            <tr>
                <td>{{ $user->nombre}}</td>
            <td>{{ $user->apellido}}</td>
            <td>{{ $user->distrito}}</td>
            <td>{{ $user->direccion }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->observaciones }}</td>
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
