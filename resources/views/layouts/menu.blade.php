<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pacientes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pacientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('SugerenciaController@index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sugerencias</span>
    </a>
</li>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('DenunciaController@index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Denuncias</span>
    </a>
</li>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('ControlController@index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Controles</span>
    </a>
</li>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ action('CasoPositivoController@index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Casos Positivos</span>
    </a>
</li>