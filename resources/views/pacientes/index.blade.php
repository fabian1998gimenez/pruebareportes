@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Pacientes</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Pacientes
                             <a class="pull-right" href="{{ route('pacientes.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                              <!-- Bootstrap CSS -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
<script src="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"></script>


 <div id="contenedor" class="shadow-lg p-3 mb-5 bg-white"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>Datos Personales</th>
        <th>Genero</th>
        <th>Fecha de Nacimiento</th>
        <th>Edad</th>
        <th>Ci</th>
        <th>Barrio</th>
        <th>Telefono</th>
        <th>Grupo Sanguineo</th>
        <th>Comorbilidad</th>
        <th>Prueba</th>
        <th>Resutado</th>
         <th>Latitud</th>
          <th>Longitud</th>
           <th>Creado</th>
            <th>Actualizado</th>
             <th>Usuario</th>
                
            </tr>
        </thead>
        <tbody>
       @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombre_apellido }}</td>
            <td>{{ $paciente->genero }}</td>
            <td>{{ $paciente->fechanac }}</td>
            <td>{{ $paciente->edad }}</td>
            <td>{{ $paciente->ci }}</td>
            <td>{{ $paciente->barrio }}</td>
            <td>{{ $paciente->telefono }}</td>
            <td>{{ $paciente->grupo_sanguineo }}</td>
            <td>{{ $paciente->enfermedad_referencial }}</td>
            <td>{{ $paciente->tipo_prueba_id }}</td>
           <td>{{ $paciente->resultado }}</td>
            <th>{{ $paciente->latitud }}</th>
            <th>{{ $paciente->longitud }}</th>
            <th>{{ $paciente->created_at }}</th>
            <th>{{ $paciente->updated_at }}</th>
            <th>{{$paciente->usuario}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<br><script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>    
    <script src=https://code.highcharts.com/highcharts.js></script>
    <script>
   $(document).ready(function () {
    // Create DataTable
    var table = $('#example').DataTable({
        dom: 'Pfrtip',
    });
 
    // Create the chart with initial data
var container = $('<div/>').insertBefore(table.table().container());
 
    var chart = Highcharts.chart(container[0], {
        chart: {
            type: 'pie',
        },
        title: {
            text: 'Cantidad por Barrios ',
        },
        series: [
            {
                data: chartData(table),
            },
        ],
    });
 
    // On each draw, update the data in the chart
    table.on('draw', function () {
        chart.series[0].setData(chartData(table));
    });
});
 
function chartData(table) {
    var counts = {};
 
    // Count the number of entries for each position
    table
        .column(5, { search: 'applied' })
        .data()
        .each(function (val) {
            if (counts[val]) {
                counts[val] += 1;
            } else {
                counts[val] = 1;
            }
        });
 
    // And map it to the format highcharts uses
    return $.map(counts, function (val, key) {
        return {
            name: key,
            y: val,
        };
    });
}
    </script>

                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

