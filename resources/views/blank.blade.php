<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title>CIBIOMA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Centro de Investigación en Biodiversidad y Medio Ambiente" />
    <meta name="author" content="CIBIOMA" />
	<link rel="shortcut icon" href="{{ asset('shimba/assets/images/icon.png') }}">
	<link href="{{ asset('shimba/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('shimba/assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
		<div class="left-side-menu">
			<div class="slimscroll-menu">
				<div class="sidenav-user mt-2">
					<h4 class="mb-1 mt-0">CIBIOMA</h4>
					<p class="mb-2">Centro de Investigación en Biodiversidad y Medio Ambiente</p>
					<img src="{{ asset('shimba/assets/images/users/userdefault.png') }}" alt="" class="rounded-circle">
				</div>
				@include('layouts.navigation')
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="content-page">
			<div class="content">
				<div class="navbar-custom">
					<ul class="list-unstyled topbar-right-menu float-right mb-0">
						<li class="dropdown notification-list">
							<a class="nav-link dropdown-toggle nav-user arrow-none mx-0" data-toggle="dropdown" href="#" role="button"
								aria-haspopup="false" aria-expanded="false">
								<span class="account-user-avatar">
									<img src="{{ asset('shimba/assets/images/users/userdefault.png')}}" alt="user-image"
										class="rounded-circle">
								</span>
								<span>
									<span class="account-user-name">{{auth()->user()->name}}</span>
								</span>
							</a>
							<div
								class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
								{{-- <a href="javascript:" class="dropdown-item"><i class="feather icon-user text-muted"></i> &nbsp; My
									profile</a>
								<a href="javascript:" class="dropdown-item"><i class="feather icon-mail text-muted"></i> &nbsp;
									Messages</a>
								<a href="javascript:" class="dropdown-item"><i class="feather icon-settings text-muted"></i> &nbsp;
									settings</a> --}}
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									<i class="feather icon-power text-danger"></i>
									Salir
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					</ul>
					<button class="button-menu-mobile open-left">
						<i class="feather icon-menu"></i>
					</button>
				</div>
				<div class="container-fluid mt-4">

					@yield('contend')

				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('shimba/assets/js/app.min.js') }}"></script>
	@yield('scripts')

</body>

</html>