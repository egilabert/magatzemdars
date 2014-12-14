  <div class="icon_magatzemdars">
    <a href="/"><img src="/assets/img/logos/icon_magatzemdars.jpg" alt="Magatzem d'ars"></a>
  </div>
  <nav class="navbar navbar-default
  @if (Auth::guest())
  @endif
    " role="navigation">
    <div class="container-fluid">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="/">
          
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        @if (Auth::guest())
          <ul class="nav navbar-nav">
            <li><a href="/espectacles">Espectacles</a></li>
            <li><a href="/empresa">Empreses</a></li>
            <li><a href="/escola">Escola</a></li>
            <li><a href="/sales">Lloguer de sales</a></li>
            <li><a href="/companyia">Companyia</a></li>
            <li><a href="/agenda">Agenda</a></li>
            {{--<li><a href="/entrades">Compra d'entrades</a></li>--}}
            {{--<li><a href="/botiga">Botiga</a></li>--}}
            <li><a href="/contacte">Contacte</a></li>
          </ul>
        @else
        	{{ Form::open([
        		'method' => 'GET',
        		'class' => 'navbar-form navbar-left',
        		'role' => 'search',
            'url' => '/clients/'
        	]) }}
        		<div class="input-group">
  			      <div class="input-group-btn">
                {{ Form::select('search_key', array(
                  '0' => 'Clients', 
                  '1' => 'Ajuntaments',
                  '2' => 'Cases de colònies',
                  '3' => 'Companyies',
                  '4' => 'Empreses',
                  '5' => 'Entitats',
                  '6' => 'Escoles',
                  '7' => 'Persones',
                  '8' => 'Programadors',
                  '9' => 'Teatres',
                  '10' => 'Treballadors',
                  ), null,['class'=>'form-control btn btn-default dropdown-toggle', 'required' => 'required', 'id'=>'client_filter']); 
                }}
              <?php //Javascript::put(['client_filter' => Request::get('search_key')])?>
  			      </div><!-- /btn-group -->
          		<div class="form-group">
          			{{Form::input('search', 'q', null, ['class' => 'form-control','placeholder' => 'Search...'])}}
          		</div>
          		<div class="form-group">
      					{{ Form::submit('Buscar', ['class'=>'btn btn-default']) }}
      				</div>
  				</div><!-- /input-group -->
        	{{ Form::close() }}
          <ul class="nav navbar-nav navbar-right">
            @if (!(Auth::user()->hasRole('Membre')))
                <li><a href="{{ route('users.index') }}">Treballadors</a></li>
            @endif
            <li><a href="/clients">Clients</a></li>
            <li><a href="/agenda">Agenda</a></li>
            <li>{{ link_to_profile(Auth::user()->name) }}</li>
            <li><a href="/logout"><i class="fa fa-sign-out fa-1x"></i></a></li>
          </ul>
        @endif

        @if (Auth::guest())
        <div class="social_icons">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://es-es.facebook.com/Magatzemdars" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
            <li><a href="https://www.youtube.com/user/MAGATZEMDARS" target="_blank"><i class="fa fa-youtube fa-2x"></i></a></li>
            <li><a href="/clients"><i class="fa fa-user fa-2x" target="_blank"></i></a></li>
          </ul>
        </div>
        @endif
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>