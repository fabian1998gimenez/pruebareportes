<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pacientes.index') }}">
     <i class="fas fa-bed"></i>
        <span>Pacientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('SugerenciaController@index') }}">
      <i class="fas fa-archive"></i>
        <span>Sugerencias</span>
    </a>
</li>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('DenunciaController@index') }}">
              <i class="fas fa-book-open"></i>
        <span>Denuncias</span>
    </a>
</li>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('ControlController@index') }}">
      <i class="fas fa-book-medical"></i>
        <span>Controles</span>
    </a>
</li>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('CasoPositivoController@index') }}">
       <i class="far fa-address-book"></i>
        <span>Casos Positivos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('GraficoController@index') }}">
        <i class="fas fa-chart-pie"></i>
        <span>Reportes Graficos</span>
    </a>
</li>