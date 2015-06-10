    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{$_layoutParams.configs.app_name}</a>
        </div>
      <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li {if $_layoutParams.pageCurrent eq "index"}class="active"{/if}><a href="{$_layoutParams.root}">Inicio</a></li>
            {if $_privileges.AccesPag.all eq 1 || $_privileges.AccesPag.all}
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Catalogos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                {*}<li class="active"><a href="#">Usuarios</a></li>{*}
                <li {if $_layoutParams.pageCurrent eq "season"} class="active"{/if}><a href="{$_layoutParams.root}season">Temporada</a></li>
                <li {if $_layoutParams.pageCurrent eq "destination"} class="active"{/if}><a href="{$_layoutParams.root}destination">Destino</a></li>
                <li {if $_layoutParams.pageCurrent eq "lobby"} class="active"{/if}><a href="{$_layoutParams.root}lobby">Lobby</a></li>
                <li class="divider"></li>
                <li {if $_layoutParams.pageCurrent eq "habitation"} class="active"{/if}><a href="{$_layoutParams.root}habitation">Tipo de habitación</a></li>
                <li {if $_layoutParams.pageCurrent eq "reservation"} class="active"{/if}><a href="{$_layoutParams.root}reservation">Tipo de reservación</a></li>
                <li {if $_layoutParams.pageCurrent eq "week"} class="active"{/if}><a href="{$_layoutParams.root}week">Tipo de semana</a></li>
                {*}<li {if $_layoutParams.pageCurrent eq "rate"} class="active"{/if}><a href="{$_layoutParams.root}rate">Tipo de tarifa</a></li>{*}
                <li class="divider"></li>
                <li {if $_layoutParams.pageCurrent eq "bookingwindows"} class="active"{/if}><a href="{$_layoutParams.root}bookingwindows">Booking windows</a></li>
                <li {if $_layoutParams.pageCurrent eq "travelwindows"} class="active"{/if}><a href="{$_layoutParams.root}travelwindows">Travel Windows</a></li>
                <li {if $_layoutParams.pageCurrent eq "discount"} class="active"{/if}><a href="{$_layoutParams.root}dicount">Descuento</a></li>
                {*}<li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>{*}
              </ul>
            </li>
            {/if}
            {*}
            {if $_privileges.AccesPag.about eq 1 || 
                $_privileges.AccesPag.all}
              <li><a href="#about">Acerca de</a></li>
            {/if}
            {if $_privileges.AccesPag.contact eq 1 || 
                $_privileges.AccesPag.all}
              <li><a href="#contact">Contato</a></li>
            {/if}
            {*}
            {if $_privileges.AccesPag.login eq 1 || 
                $_privileges.AccesPag.all}
            <li class="dropdown {if $_layoutParams.pageCurrent eq 'login'} active {/if}">
              <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{if $_privileges.Current.userCurrent} {$_privileges.Current.userCurrent|truncate:10}{else}Ingresa{/if}<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                {if $_privileges.Logged.isLogged eq 1}
                  {*}<li><a href="javascript:void(0)" id="logout">Salir</a></li>{*}
                  <li><a id="btnLogout"  name="btnLogout" href="javascript:logout()">Salir</a></li>
                {/if}
                {if empty($_privileges.Logged.isLogged)}
                  <li {if $_layoutParams.pageCurrent eq "login"} class="active" {/if}><a href="{$_layoutParams.root}login">Iniciar Sesión</a></li>
                {/if}
              </ul>
            </li>
            {/if}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    {*}
      <pre>{$_privileges|print_r}<pre>
    {*}