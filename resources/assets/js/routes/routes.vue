<script type="text/javascript">

import subcategory from './home/category/subcategory'
import maincategory from './home/category/maincategory'
import category from './home/category/category'
import profile from './dashboard/profile.vue'
import index from './home/index.vue'



export const routes = [
  { path: '/', component: index },
  { path: '/user/:id', component: profile },
  { path: '/category/:category/:categoryid', component: category },
  { path: '/category/:category/:categoryid/:maincategory/:maincategoryid', component: maincategory },
  { path: '/category/:category/:categoryid/:maincategory/:maincategoryid/:subcategory/:subcategoryid', component: subcategory }
]


</script>