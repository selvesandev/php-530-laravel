<nav class="navbar navbar-expand-lg navbar-inverse navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>


	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item {{Route::current()->uri==='home'?'active':''}}">
				<a class="nav-link" href="{{route('home')}}">Home <span
							class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item {{Route::current()->uri==='about'?'active':''}}">
				<a class="nav-link" href="{{route('about')}}">About</a>
			</li>
			<li class="nav-item {{Route::current()->uri==='contact'?'active':''}}">
				<a class="nav-link disabled" href="{{route('contact')}}">Contact</a>
			</li>
		</ul>
	</div>
</nav>
