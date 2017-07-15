<template>
	<div class="col-md-4">
        <aside class="category-filters">
            <!-- <div class="category-filters-section">
                <h3 class="widget-title-sm">Filter Results</h3>
                <div class="form-group">
                      <label>Category</label>
                       <v-select :on-change="categoryCallback" value="id" label="name" v-model="vCategorySelected" :options="vCategories"></v-select>
                  </div>
                <div class="form-group">
                      <label>Sub-Category</label>
                       <v-select :on-change="merchantCategoryCallback" value="id" label="name" v-model="vMerchantCategorySelected" :options="vMerchantCategories"></v-select>
                  </div>
            </div> -->

            <div class="category-filters-section">
                  <h3 class="widget-title-sm">Filter Results</h3>
                  <div class="form-group">
                      <label>Province</label>
                       <v-select :on-change="provinceCallback" value="id" label="description" v-model="vProvinceSelected" :options="vProvinces"></v-select>
                  </div>

                  <div class="form-group">
                      <label>City</label>
                       <v-select :on-change="cityCallback" value="id" label="description" v-model="vCitySelected" :options="vCities"></v-select>
                  </div>
            </div>
            
          
        </aside>
    </div>
</template>

<script type="text/javascript">
    import vSelect from 'vue-select' 
    import axios from 'axios'

    export default {
        data(){

            return {

                windowLocation: window.location.origin + '/',
                vCountrySelected: '',
                vProvinceSelected: '',
                vCitySelected: '',
                vCategorySelected: '',
                vMerchantCategorySelected: ''
            }
        },
        components: {
            vSelect
        },

        created(){

            this.getProvinces()
            this.getMainCategories()
        },
        computed:{
            vMerchantCategories(){
                return this.$store.getters.merchantCategories
            },
            vCategories(){
                return this.$store.getters.maincategories
            },
            vProvinces(){

                return this.$store.getters.provinces
            },
            vCountries(){

                return this.$store.getters.countries
            },
            vCities(){

                return this.$store.getters.cities
            }
        },
        methods: {

             getMainCategories(){

                var store = this.$store
                axios.get(this.windowLocation + 'api/main-categories')
                .then(function(response){
                   store.commit('maincategories', response.data.maincategories);
               })
            },

            getProvinces(val){
                 var store = this.$store
                 axios.get(this.windowLocation + 'api/province')
                 .then(function(response){
                     store.commit('provinces', response.data.provinces);

                 })
                 .catch(function(){

                 })
              },

            provinceCallback(val){

                 var store = this.$store
                 axios.get(this.windowLocation + 'api/city?provCode='+val.provCode)
                 .then(function(response){
                     store.commit('cities', response.data.cities);

                 })
                 .catch(function(){

                 })
            },
            cityCallback(val){
                console.log(val)

            },
            // categoryCallback(val){

            //     var store = this.$store
            //      axios.get(this.windowLocation + 'api/merchant_category?maincategory_id='+val.id)
            //      .then(function(response){
            //          store.commit('merchantCategories', response.data.merchantCategories);

            //      })
            //      .catch(function(){

            //      })
            //     // this.$store.commit('pageTitle', val.name);
            // },
            // merchantCategoryCallback(val){

            //     // this.$store.commit('pageTitle', val.name);
            // }

        }
    }
</script>