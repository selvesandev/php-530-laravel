<template>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Vuejs App</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<!--<a class="nav-link" href="">Users</a>-->
					<router-link class="nav-link" to="/">Users</router-link>
				</li>

				<li class="nav-item">
					<!--<a class="nav-link" href="#">Create User</a>-->
					<router-link class="nav-link" to="/create-user">Create User</router-link>
				</li>
			</ul>
		</div>
	</nav>
</template>
