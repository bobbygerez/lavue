<template>
	<div>
		<div class="category-filters-section">
            <h3 class="widget-title-sm">Locations</h3>
            <select class="form-control" v-model="selectedProvince">
            	<option value="">Select Province</option>
            	<option v-for="province in provinces.provinces" :value="province.id">{{ province.provDesc }}</option>
            </select>
        </div>
	</div>
</template>

<script type="text/javascript">

import { mapGetters } from 'vuex'
import axios from 'axios'
	export default{

		data() {

			return {

				selectedProvince: ''
			}

		},
		created(){

			var store = this.$store
			var vm = this
			axios.get('api/provinces')

				.then( function(response){

					store.commit('locations/provinces', response.data)
					vm.provinces = store.state.locations.provinces
				})
				.catch( function(response){

				})
		},

		computed: {

			provinces(){
				return this.$store.getters.getProvinces
			}
		},
		watch: {

			selectedProvince(){

				this.$store.commit('locations/selectedProvince', this.selectedProvince)
			}
		}
	}
</script>