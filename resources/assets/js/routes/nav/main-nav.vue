<template>
    <nav class="navbar navbar-inverse navbar-main yamm">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo-w.png" alt="Image Alternative text" title="Image Title" />
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu dropdown-menu-category">
                            <li v-for="maincategory in maincategories"><router-link :to="'/category/'+ maincategory.name + '/' + maincategory.id"> {{ maincategory.name }} </router-link>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6" v-for="merchantCat in maincategory.merchant_category">
                                                    <h5 class="dropdown-menu-category-title">
                                                    <router-link :to="'/category/'
                                                    + maincategory.name + '/' + maincategory.id + '/'
                                                    + merchantCat.name + '/' + merchantCat.id">{{ merchantCat.name }}</router-link></h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li v-for="sub in merchantCat.merchant_subcategory"><router-link 
                                                        :to="'/category/' 
                                                        + maincategory.name + '/' + maincategory.id + '/'
                                                        + merchantCat.name +'/'+ merchantCat.id 
                                                        +'/'+ sub.name + '/' + sub.id"> 
                                                        {{ sub.name }} </router-link>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
                <form class="navbar-form navbar-left navbar-main-search" role="search">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search the Entire Store..." />
                    </div>
                    <a class="fa fa-search navbar-main-search-submit" href="#"></a>
                </form>
                <navbar-right></navbar-right>
            </div>
        </div>
    </nav>
    
</template>
<script type="text/javascript">
    import axios from 'axios'
    import navbarRight from '../home/navbar-right'

    export default {

      data(){

         return {

            windowLocation: window.location.origin + '/'
        }
    },
    components:{
        navbarRight
    },
    created(){

     this.mainCategories()
 },
 computed: {

    maincategories(){

        return this.$store.getters.maincategories
    }
},  
methods: {

 mainCategories(){

    var store = this.$store
    axios.get(this.windowLocation + 'api/main-categories')
    .then(function(response){
       store.commit('maincategories', response.data.maincategories);
   })
}
}
}
</script>