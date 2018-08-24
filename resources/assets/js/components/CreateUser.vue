<template>
	<div id="posts">
		<div class="container user_registration_form">
			<form v-on:submit.prevent="createUserAction()" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input v-model="users.email" type="email" class="form-control" id="exampleInputEmail1"
						   aria-describedby="emailHelp"
						   placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
					</small>
				</div>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" v-model="users.name" class="form-control" id="name"
						   placeholder="Enter name">

				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" v-model="users.password" class="form-control" id="exampleInputPassword1"
						   placeholder="Password">
				</div>

				<label class="form-check-label">Gender</label>
				<div class="form-group form-check">
					<input type="radio" value="male" v-model="users.gender" name="gender" class="form-check-input"
						   id="male">
					<label class="form-check-label" for="male">Male</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<input type="radio" value="female" name="gender" v-model="users.gender" class="form-check-input"
						   id="female">
					<label class="form-check-label" for="female">Female</label>
				</div>

				<label class="form-check-label">Hobby</label>
				<div class="form-group form-check">

					<input type="checkbox" value="dancing" v-model="users.hobby" class="form-check-input" id="dancing">
					<label class="form-check-label" for="dancing">Dancing</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<input type="checkbox" value="playing" v-model="users.hobby" class="form-check-input" id="playing">
					<label class="form-check-label" for="playing">Playing</label>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<input type="checkbox" value="coding" v-model="users.hobby" class="form-check-input" id="coding">
					<label class="form-check-label" for="coding">Coding</label>
				</div>


				<div class="form-group">
					<label for="country">Country</label>
					<select class="form-control" v-model="users.country" id="country"
					>
						<option value="">Select Country</option>
						<option value="nepal">Nepal</option>
						<option value="china">China</option>
						<option value="bhutan">Bhutan</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				users: {
					name: '',
					email: '',
					password: '',
					country: '',
					gender: '',
					hobby: []
				}
			}
		},
		methods: {
			createUserAction() {
				console.log(this.users);

			},
		}
	}
</script>

<style lang="scss">

	.user_registration_form {
		padding-top: 40px;
	}

</style>