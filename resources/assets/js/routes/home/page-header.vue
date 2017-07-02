<template>
	<header class="page-header">
                <h3 class="page-title">{{ pageTitle }}</h3>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="active"><router-link to="/">Home</router-link>
                    </li>
                    <li class="active" v-if="$route.params.category != null">
                        <router-link :to="/category/
                            + $route.params.category + '/' + $route.params.categoryid">
                            {{ $route.params.category }}
                        </router-link>
                    </li>
                    <li class="active" v-if="$route.params.maincategory != null">
                        <router-link 
                            :to="/category/
                            + $route.params.category + '/' + $route.params.categoryid + '/' 
                            + $route.params.maincategory + '/' + $route.params.maincategoryid">
                            {{ $route.params.maincategory }}
                        </router-link>
                    </li>
                    <li class="active" v-if="$route.params.subcategory != null">
                        <router-link 
                            :to="/category/
                            + $route.params.category + '/' + $route.params.categoryid + '/' 
                            + $route.params.maincategory + '/' + $route.params.maincategoryid + '/'
                            + $route.params.subcategory + '/' + $route.params.subcategoryid
                            ">
                            {{ $route.params.subcategory }}
                        </router-link>
                    </li>
                </ol>
                <ul class="category-selections clearfix">
                    <li>
                        <a class="fa fa-th-large category-selections-icon active" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-th-list category-selections-icon" href="#"></a>
                    </li>
                    <li><span class="category-selections-sign">Sort by :</span>
                        <select class="category-selections-select">
                            <option selected>Newest First</option>
                            <option>Price : Lowest First</option>
                            <option>Price : Highest First</option>
                        </select>
                    </li>
                    <li><span class="category-selections-sign">Items :</span>
                        <select class="category-selections-select">
                            <option>12 / page</option>
                            <option selected>16/ page</option>
                            <option>20 / page</option>
                            <option>24 / page</option>
                        </select>
                    </li>
                </ul>
            </header>
</template>

<script type="text/javascript">
    
    export default{

        computed: {

            categoryId(){

                return this.$store.getters.categoryId
            },

            pageTitle(){

                return this.$store.getters.pageTitle
            }
        }
     
    }
</script>
<style type="text/css" scoped>
    .page-title {

        font-size: 40px;
    }
</style>