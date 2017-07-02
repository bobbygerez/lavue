<template>
	<div class="col-md-4">
                    <aside class="category-filters">
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Filter Results</h3>
                              <div class="form-group">
                                  <label>Select Country:</label>
                                   <v-select :on-change="countryCallback"  value="id" label="name" v-model="vCountrySelected" :options="vCountries"></v-select>
                              </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Price</h3>
                            <input type="text" id="price-slider" />
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Relese Date</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Last 30 days<span class="category-filters-amount">(59)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Last 90 days<span class="category-filters-amount">(29)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Comming Soon<span class="category-filters-amount">(20)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Brand</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Apple<span class="category-filters-amount">(31)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Samsung<span class="category-filters-amount">(66)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />LG<span class="category-filters-amount">(71)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Sony<span class="category-filters-amount">(53)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Micosoft<span class="category-filters-amount">(16)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Dell<span class="category-filters-amount">(72)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />HP<span class="category-filters-amount">(30)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Discount</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />10% Off or More<span class="category-filters-amount">(78)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />25% Off or More<span class="category-filters-amount">(26)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />50% Off or More<span class="category-filters-amount">(37)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />75% Off or More<span class="category-filters-amount">(89)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Features</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />New<span class="category-filters-amount">(75)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Featured<span class="category-filters-amount">(27)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />On Sale<span class="category-filters-amount">(32)</span>
                                </label>
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
                vCountrySelected: ''
            }
        },
        components: {
            vSelect
        },

        created(){

            this.getCountries()
        },
        computed:{

            vCountries(){

                return this.$store.getters.countries
            }
        },
        methods: {

            getCountries(){

                var store = this.$store
                axios.get(this.windowLocation + 'api/countries')
                    .then(function(response){
                        store.commit('countries', response.data.countries );
                    })
                    .catch(function(){

                    })

            },
            countryCallback(val){
                 var store = this.$store
                 axios.get(this.windowLocation + 'api/provinces?country_id=' + val.id)
                 .then(function(response){


                 })
                 .catch(function(){

                 })
              }
        }
    }
</script>