<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>Friend.am Intership</title>

	<link rel="stylesheet" href="{{  asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/animations.css') }}" />

	<script src="{{ asset('js/vue.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/axios.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/httpVueLoader.js') }}" type="text/javascript"></script>

	@stack('headrsc')

	<script type="text/javascript">
		window.loggedin = {{ Auth::check()? 1: 0 }};
		window.sessionCheckURL = "{{ route('checksession') }}";
		window.sessionLifetime = {{ env('SESSION_LIFETIME') }} * 61000;

		/**
		 * logout function
		 */
		window.logout = function(ev) {
			ev.preventDefault();
			document.querySelector('#logoutform').submit();
		};
	</script>
</head>

<body>
	<section class="container-fluid">

		<header id="pageheader" class="container">
			<nav class="navbar navbar-expand-sm navbar-light bg-light">

				<h3><a class="navbar-brand" href="{{ route('categories.index') }}"><strong>Friend.am</strong></a></h3>

				<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="@lang('navbar.togglenavigation')">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="collapsibleNavId">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

						<li class="nav-item active">
							<a class="nav-link" @click="toggleSendEmail" href="#">@lang('common.btnsendemail')</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('common.lang')</a>
							<div class="dropdown-menu" aria-labelledby="dropdownId">
								<a class="nav-link" href="{{ route('lang', ['lang' => 'en']) }}" title="English">Eng</a>
								<a class="nav-link" href="{{ route('lang', ['lang' => 'am']) }}" title="Հայերեն">Հայ</a>
							</div>
						</li>
						<!-- Authentication Links -->

						@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">@lang('common.login')</a>
						</li>
						@if (Route::has('register'))
						<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">@lang('common.register')</a></li>
						@endif
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a id="logoutanchor" class="dropdown-item" href="{{ route('logout') }}" @click="logout(event)">
									{{ __('Logout') }}
								</a>
								<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</nav>

			@if (count($errors) > 0 || session('success') || session('error'))
			<transition leave-active-class="scale-out-ver-top">
				<p class="container-lg container-xl container-fluid" v-show="messages">
					<section class="py-3">
						<strong id="messages" class="p-2 mb-2 alert-danger" @click="messages=false" title="@lang('common.clicktoclose')">&#9932;</strong>
					</section>

					@if (count($errors) > 0)
					@foreach ($errors->all() as $error)
					<div class="alert alert-danger">{{ $error }}</div>
					@endforeach
					@endif

					@if (session('success'))
					<div class="alert alert-success">{{ session('success') }}</div>
					@endif

					@if (session('error'))
					<div class="alert alert-danger">{{ session('error') }}</div>
					@endif
				</p>
			</transition>
			@endif

			@include('rest.logout-modal')
			@include('rest.email-modal')
		</header>

		@yield('content')

		<footer id="pagefooter" class="container"></footer>
	</section>

	<script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

	@stack('groundrsc')

	<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>