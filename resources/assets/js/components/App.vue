<template>
	<div class="app">
		<myappnav></myappnav>

		<router-view></router-view>
	</div>
</template>

<script>

	import Nav from './partials/Nav.vue';

	export default {
		components: {
			myappnav: Nav
		}
	}


</script>

<style lang="scss">

</style>