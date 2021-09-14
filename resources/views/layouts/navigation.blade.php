<ul class="metismenu side-nav">
	<li class="menu-caption menu-item">Navigation</li>

	<li class="menu-item">
		<a href="{{route('home.index')}}" class="menu-link">
			<i class="feather icon-circle"></i>
			<span> Inicio </span>
		</a>

		<a href="{{route('biblioteca.index')}}" class="menu-link">
			<i class="feather icon-circle"></i>
			<span> Biblioteca </span>
		</a>

		@foreach ($tipos as $tipo)
		<a href="{{route('coleccion.tipo',[$tipo->slug])}}" class="menu-link">
			<i class="feather icon-circle"></i>
			<span> {{$tipo->nombre}} </span>
		</a>
		@endforeach
	</li>

</ul>