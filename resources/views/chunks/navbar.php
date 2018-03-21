<nav class="navbar navbar-expand-a11y navbar-light fixed-top">
    <div class="container">
        <a href="/" class="navbar-brand align-self-start">
            <img src="images/logo-w-line-navbar.svg" alt="ChileAtiende" class="hidden-xs" />
        </a>
        <div class="nav-content">
            <a href="#" class="btn btn-search btn-search--mobile toggle-search">
                <i class="ic-search btn-search_icon">
                </i>
                <i class="ic-close btn-search_icon">
                </i>
            </a>
            <div class="dropdown lang">
                <a id="dropdownMenuLang" href="#" data-toggle="dropdown" role="button" aira-haspopup="true" aria-expanded="false" class="btn btn-seconday dropdown-toggle">es
                </a>
                <div aria-labelledby="dropdownMenuLang" class="dropdown-menu">
                    <a href="#" title="Escoge un idioma: Español" class="dropdown-item">ES
                    </a>
                    <a href="#" title="Escoge un idioma: Inglés" class="dropdown-item">EN
                    </a>
                </div>
            </div>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" class="navbar-toggler">
    <span class="navbar-toggler-icon">
    </span>
            </button>
        </div>
        <div id="navbarSupportedContent" class="navbar-collapse collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/que-es-chileatiende" class="nav-link">¿Qué es ChileAtiende?</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Centro de Ayuda
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="/ayuda/preguntas-frecuentes" class="dropdown-item <?= Request::path() == 'ayuda/preguntas-frecuentes' ? 'active' : '' ?>" title="Ir a preguntas frecuentes">
                            <div>Preguntas Frecuentes</div>
                            <p><small>Revisa la lista de preguntas frecuentes.</small></p>
                        </a>
                        <a href="/ayuda/sucursales" class="dropdown-item <?= Request::path() == 'ayuda/sucursales' ? 'active' : '' ?>" title="ir a sucursales">
                            <div>Sucursales</div>
                            <p><small>Busca tu sucursal de ChileAtiende más cercana.</small></p>
                        </a>
                        <a href="/ayuda/atencion-telefonica" class="dropdown-item <?= Request::path() == 'ayuda/atencion-telefonica' ? 'active' : '' ?>" title="Ir a atención telefónica">
                            <div>Atención Telefónica</div>
                            <p><small>Aprende a utilizar el servicio de telefónica 101.</small></p>
                        </a>
                        <a href="/ayuda/oficinas-moviles" class="dropdown-item <?= Request::path() == 'ayuda/oficinas-moviles' ? 'active' : '' ?>">
                            <div>Oficinas Móviles</div>
                            <p><small>Conoce la ubicación de nuestras oficinas móviles.</small></p>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-item-action nav-item-desktop">
                    <a href="#" class="btn btn-search toggle-search">
                        <i class="ic-search btn-search_icon">
                        </i>
                        <i class="ic-close btn-search_icon">
                        </i>
                    </a>
                </li>
                <li class="nav-item dropdown nav-item-desktop lang">
                    <a id="navbarDropdownMenuLang" href="#" data-toggle="dropdown" aira-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">ES
                    </a>
                    <div aria-labelledby="navbaºrDropdownMenuLang" class="dropdown-menu">
                        <a href="#" title="Escoge un idioma: Español" class="dropdown-item">ES
                        </a>
                        <a href="#" title="Escoge un idioma: Inglés" class="dropdown-item">EN
                        </a>
                    </div>
                </li>
                <?php if(Auth::check()):?>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="images/clave-logo.svg" alt="Logo Claveúnica"> <?=Auth::user()->first_name?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="/perfil"  class="dropdown-item">
                                Perfil
                            </a>
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>
                            <form id="logout-form" action="logout" method="POST" class="d-none">
                                <?= csrf_field() ?>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/notificaciones" class="nav-link">
                            <span class="badge badge-primary">
                                <?=Auth::user()->notifications()->where('read',0)->count()?>
                            </span>
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item nav-item-access">
                        <a href="/mi-chileatiende" class="nav-link">Iniciar sesión</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>