<nav class="navbar navbar-expand">
	<div class="container">
		<div class="collapse navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
					<a class="nav-link" href="{{ url('/') }}"> Home <span class="sr-only"></span></a>
				</li>
				<li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
					<a class="nav-link" href="{{ url('blog') }}"> Blog <span class="sr-only"></span></a>
				</li>

				<!-- Authentication Links -->
				@if (!Auth::guest())
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
								 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
									 onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				@endif
			</ul>
		</div>
	</div>
</nav>
