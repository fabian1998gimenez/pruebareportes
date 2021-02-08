@extends('layouts.app')

@section('content')
 <br>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <div class="container-fluid">
        <div class="animated fadeIn">
        <div class="animated fadeIn">
                    <!-- Widgets -->
        </div> 
             <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                        </svg>
                      </div>
                   
                     <div class="text-value-lg"> <i class="fa fa-book fa-2x"></i><td><span class="badge badge-info"></span></td> </div><small class="text-muted text-uppercase font-weight-bold"> Denuncias <br><a href="{{ action('DenunciaController@index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
                      </small>
                      <div class="progress progress-xs mt-3 mb-0">

                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- /.col-->
                 
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg"><i class="fas fa-address-book fa-2x"></i> <span class="badge badge-success"></span></div><small class="text-muted text-uppercase font-weight-bold"> Paciente <br><a href="{{ route('pacientes.index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a></small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                  <!-- /.col-->
                 
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg"><i class="far fa-chart-bar fa-2x"></i> <span class="badge badge-success"></span></div><small class="text-muted text-uppercase font-weight-bold"> Casos Positivos <br><a href="{{ action('CasoPositivoController@index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a></small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="fa fa-users fa-2x"></i> <span class="badge badge-primary">
                    </span></div><small class="text-muted text-uppercase font-weight-bold"> Controles <br><a href="{{ action('ControlController@index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a></small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                        </svg>
                      </div>
                   
                     <div class="text-value-lg"> <i class="far fa-clone fa-2x"></i><td><span class="badge badge-info"></span></td> </div><small class="text-muted text-uppercase font-weight-bold"> Sugerencias <br><a href="" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
                      </small>
                      <div class="progress progress-xs mt-3 mb-0">

                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                      </div>
                    </div>
                  </div>
                </div>
<!-- /.col-->
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                     <div class="text-value-lg"><i class="fas fa-chart-pie fa-2x"></i> <span class="badge badge-info">
                    </span></div><small class="text-muted text-uppercase font-weight-bold"> Graficos <br><a href="{{ action('GraficoController@index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a></small>
                      <div class="progress progress-xs mt-3 mb-0">
                         <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
