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
                             Generar reportes graficos de Denuncias
        
                         </div>
                         <div class="card-body">
                         
  <div class="md-card-content" style="overflow-x: auto;">
  <table class="table table-bordered" id="example">
        <thead>
            <tr>
        <th>USUARIO ID</th>
        <th>TIPO DE DENUNCIA</th>
        <th>ALTA DE DENUNCIA</th>
        <th>LONG DE DENUNCIA</th>
        
            </tr>
        </thead>
        <tbody>
        @foreach($denuncias as $d)
            <tr>
                <td>{{ $d->id_user}}</td>
            <td>{{ $d->den_tipo}}</td>
            <td>{{ $d->den_alt}}</td>
            <td>{{ $d->den_long}}</td>  
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
