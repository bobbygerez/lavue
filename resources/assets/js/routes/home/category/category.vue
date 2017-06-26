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
	import PageHeader from '../page-header.vue'
	import CategoryFilters from '../category-filters.vue'
	import CategoryResults from '../category-results.vue'
	import axios from 'axios'
	export default {

		data(){

			return {

				
			}

		},
		components: {
			PageHeader,
		  	CategoryFilters,
		  	CategoryResults
		},
		created(){

		},
		computed: {
			baseUrl(){

				return this.$store.getters.baseUrl
			}
		},
		methods: {

			getProducts(){

				axios.get(this.baseUrl + 'api/category-products')
			}
		},
		watch: {
		    '$route'(to, from) {
		      
		     	console.log(this.$route.params.id)
		    }
		}
	}
</script>