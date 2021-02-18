@extends('layouts.app')
@section('content')
<br>
<link href="{{ asset('css/all.min.css') }}"  rel="stylesheet">
<link href="{{ asset('css/flag.min.css') }}"  rel="stylesheet">
<link href="{{ asset('css/brand.min.css') }}"  rel="stylesheet">
<link href="{{ asset('css/free.min.css') }}"  rel="stylesheet">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>  
        <!-- optional -->  
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>  
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
 <link rel="icon" type="image/png" href="/laboratorio.png" />
<div class="container">
 
 <div class="card">
   <!-- Card content -->
   <div class="card-body">
    <!-- Title -->
       <h6 class="card-title"><a><i class="fas fa-chart-line fa-2x"></i> <strong>Grafico por Barrio.</strong> </h6>
       </div>
     </div>
     <div class="card">
   <!-- Card content -->
   <div class="card-body">
         <div class="container">
            <div id="container" style="min-width: 10px; height: 450px; margin: 0 auto"></div>
            </div>
                <script type="text/javascript">
                  var encarnacion =  <?php echo json_encode($encarnacion) ?>;
                          var chaipe =  <?php echo json_encode($chaipe) ?>;
                          var cambyreta =  <?php echo json_encode($cambyreta) ?>;
                          var mboikae =  <?php echo json_encode($mboikae) ?>;
                          var sanisidro =  <?php echo json_encode($sanisidro) ?>;
                          var sagradafamilia =  <?php echo json_encode($sagradafamilia) ?>;
                          var ciudadnueva =  <?php echo json_encode($ciudadnueva) ?>;
                          var santamaria =  <?php echo json_encode($santamaria) ?>;
                          var itapaso =  <?php echo json_encode($itapaso) ?>;
                          var buenavista =  <?php echo json_encode($buenavista) ?>;
                          var santamaria =  <?php echo json_encode($santamaria) ?>;
                          var fatima =  <?php echo json_encode($fatima) ?>;

                        Highcharts.chart('container', {

                          

                  chart: {
                      type: 'bar'
                  },
                  title: {
                      text: 'Barrios mas afectados.'
                  },
                  subtitle: {
                      text: 'Listado de casos por Barrio.'
                  },
                  xAxis: {
                      categories: ['Oct','Nov', 'Dec','Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                      title: {
                          text: null
                      }
                  },
                  yAxis: {
                      min: 0,
                      title: {
                          text: 'Cantiadad total.',
                          align: 'high'
                      },
                      labels: {
                          overflow: 'justify'
                      }
                  },
                  tooltip: {
                      valueSuffix: ' Casos totales.'
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
                          name: 'Encarnacion',
                          data: encarnacion,
                      }, {
                          name: 'Chaipe',
                          data: chaipe,
                      }, {
                      name: 'Cambyreta',
                      data: cambyreta,
                      }, {
                      name: 'Mboi_kae',
                      data: mboikae,
                      }, {
                      name: 'Sagrada Familia',
                      data: sagradafamilia,
                      }, {
                      name: 'Ciudad nueva',
                      data: ciudadnueva,
                       }, {
                      name: 'Itapaso',
                      data: itapaso,
                      }, {
                      name: 'Buena vista',
                      data: buenavista,
                      }, {
                      name: 'Fatima',
                      data: fatima,
                      }, {
                      name: 'San Isidro',
                      data: sanisidro,
                  }]
              });
                            
      </script>
    </div>
       
      </div>   
        <div class="card">
         <div class="card-body">
            <h6 class="card-title"><a><i class="fas fa-head-side-mask fa-2x"></i>  <strong>Grafico de estados de casos mensuales.</strong> </h6>
            </div>
          </div>
           <div class="card">
             <!-- Card content -->
                 <div class="card-body">
                      <div class="container">
                          <div id="casos_diarios" style="min-width: 10px; height: 450px; margin: 0 auto"></div>
                           </div>
                           <script type="text/javascript">
                          
                          
           var positivos =  <?php echo json_encode($positivos) ?>;
            var negativos =  <?php echo json_encode($negativos) ?>;
               Highcharts.chart('casos_diarios', {

    chart: {
                      type: 'bar'
                  },
                  title: {
                      text: ' Casos mensaules.'
                  },
                  subtitle: {
                      text: 'Listado de casos mensaules.'
                  },
                  xAxis: {
                      categories: ['Oct','Nov', 'Dec','Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                      title: {
                          text: null
                      }
                  },
                  yAxis: {
                      min: 0,
                      title: {
                          text: 'Cantiadad total.',
                          align: 'high'
                      },
                      labels: {
                          overflow: 'justify'
                      }
                  },
                  tooltip: {
                      valueSuffix: ' Casos totales.'
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
                          name: 'Negativo',
                          data: negativos,
                      }, {
                          name: 'Positivo',
                          data: positivos,
                     
                  }]
              });
                           </script>  
                         </div>
                       </div>
      <div class="card">
         <div class="card-body">
            <h6 class="card-title"><a><i class="fas fa-head-side-mask fa-2x"></i>  <strong>Total de casos y estados.</strong> </h6>
            </div>
          </div>
           <div class="card">
             <!-- Card content -->
                 <div class="card-body">
                      <div class="container">
                          <div id="containerss" style="min-width: 10px; height: 450px; margin: 0 auto"></div>
                           </div>
                             <script type="text/javascript">
                          var muertos =  <?php echo json_encode($muertos) ?>;
                          var infectados =  <?php echo json_encode($infectados) ?>;
                          var recuperados =  <?php echo json_encode($recuperados) ?>;
                          var eleccion =  <?php echo json_encode($eleccion) ?>;
                          var otro_estado =  <?php echo json_encode($otro_estado) ?>;

                         Highcharts.chart('containerss', {

                  chart: {
                      type: 'bar'
                  },
                  title: {
                      text: 'Cantidades totales segun el estado.'
                  },
                  subtitle: {
                      text: 'Mas detalles'
                  },
                  xAxis: {
                     categories: ['Oct','Nov', 'Dec','Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                      crosshair: true
                  },
                  yAxis: {
                      min: 0,
                      title: {
                          text: 'Cantidades'
                      }
                  },
                   
                  plotOptions: {
                      column: {
                          pointPadding: 0.2,
                          borderWidth: 0
                      }
                  },
                  series: [{
                      name: 'Recuperados',
                      data: recuperados,

                  }, {
                      name: 'Fallecidos',
                      data: muertos,

                  }, {
                      name: 'Infectados',
                      data: infectados,
                  }, {
                     name: 'Sin eleccion',
                     data: eleccion,
                  }, {
                     name: 'Otro',
                     data: otro_estado,

                  }]
              });
                            
      </script>
</div>
</div>
<div class="card">
         <div class="card-body">
            <h6 class="card-title"><a><i class="fas fa-venus-mars fa-2x"></i>   <strong>Estados segun el genero.</strong> </h6>
            </div>
          </div>
           <div class="card">
             <!-- Card content -->
                 <div class="card-body">
                      <div class="container">
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
                      text: 'Generos mas afectados'
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
                          text: 'Cantidad total',
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
