<template>
	<div class="container">
		
		<page-header></page-header>
		<div class="row">
			<category-filters></category-filters>
			<category-results></category-results>
		</div>
	</div>
</template>

<script type="text/javascript">

import PageHeader from './page-header.vue'
import CategoryFilters from './category-filters.vue'
import CategoryResults from './category-results.vue'

	export default{

		components: {
			PageHeader,
		  	CategoryFilters,
		  	CategoryResults
		},
		created(){

			this.$store.commit('pageTitle', 'RbSell');
		}
	}
</script>