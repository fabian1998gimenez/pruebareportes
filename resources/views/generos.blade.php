@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>  
        <!-- optional -->  
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>  
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<br>
<div class="container">

<div class="card">
         <div class="card-body">
            <h6 class="card-title"><a><i class="fas fa-chart-pie"></i>   <strong>Grafico de Generos.</strong> </h6>
            </div>
          </div>
           <div class="card">
             <!-- Card content -->
                 <div class="card-body">
                      <div class="container"></div>
                          <div id="containers" style="min-width: 10px; height: 450px; margin: 0 auto"></div>
                           </div>
                             <script type="text/javascript">
                               var masculino =  <?php echo json_encode($masculino) ?>;
                                var femenino =  <?php echo json_encode($femenino) ?>; 
                                var otro =  <?php echo json_encode($otro) ?>;  
                              Highcharts.chart('containers', {
                              chart: {
                      type: 'bar'
                  },
                  title: {
                      text: 'Generos'
                  },
                  subtitle: {
                      text: 'Listado de Generos'
                  },
                  xAxis: {
                      categories: ['Generos'],
                      title: {
                          text: null
                      }
                  },
                  yAxis: {
                      min: 0,
                      title: {
                          text: 'Cantidad ',
                          align: 'high'
                      },
                      labels: {
                          overflow: 'justify'
                      }
                  },
                  tooltip: {
                      valueSuffix: ' total'
                  },
                  plotOptions: {
                      bar: {
                          dataLabels: {
                              enabled: true
                          }
                      }
                  },
                    
                  credits: {
                      enabled: false
                  },
                  series: [{
                      name: 'Femenino',
                      data: femenino,
                  }, {
                      name: 'Masculino',
                      data: masculino,
                  }, {
                      name: 'Otros',
                      data: otro,
              
                  }]
              });                                   
</script>
  </div>
    </div>    
</br>
@endsection