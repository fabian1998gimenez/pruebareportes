@extends('layouts.app')

@section('content')
<!-- jQuery 3.1.1 -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="//code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>  
<!-- optional -->  
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>  
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
<script type="text/javascript">
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
            text: 'Gráfico Personalizado',
        },
         tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
     plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
        series: [
            {
                name: 'Detalles',
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
        .column(0, { search: 'applied' })
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
