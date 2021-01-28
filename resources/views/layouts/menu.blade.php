<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pacientes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pacientes</span>
    </a>
</li>
