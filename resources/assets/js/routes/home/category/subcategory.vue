<template>
	<div class="container">
		<page-header></page-header>
	</div>
</template>

<script type="text/javascript">

import PageHeader from '../page-header.vue'

	export default {

		components: {
			PageHeader
		},

		created(){

			this.$store.commit('pageTitle', this.$route.params.subcategory);

		},
		watch: {
		    '$route'(to, from) {
		      
		     	this.$store.commit('pageTitle', this.$route.params.subcategory);
		    }
		}
	}
</script>