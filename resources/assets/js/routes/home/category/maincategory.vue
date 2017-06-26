<template>
	<div>
		<h1>Main Category {{ $route.params.id }}</h1>
	</div>
</template>

<script type="text/javascript">
	
	export default {

		watch: {
		    '$route'(to, from) {
		      
		     	console.log(this.$route.params.id)
		    }
		}
	}
</script>