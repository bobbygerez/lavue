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
import CategoryFilters from '../category-filters'
import CategoryResults from '../category-results'
import PageHeader from '../page-header.vue'

    export default {

        components: {
            PageHeader, CategoryFilters, CategoryResults
        },
        created(){

            this.$store.commit('pageTitle', this.$route.params.category);

        },
        watch: {
            '$route'(to, from) {
              
                this.$store.commit('pageTitle', this.$route.params.category);
            }
        }
    }
</script>