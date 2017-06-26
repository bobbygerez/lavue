<script type="text/javascript">

import subcategory from './home/category/subcategory'
import maincategory from './home/category/maincategory'
import category from './home/category/category'
import profile from './dashboard/profile.vue'
import index from './home/index.vue'

export const routes = [
  { path: '/', component: index },
  { path: '/user/:id', component: profile },
  { path: '/category/:id', component: category },
  { path: '/category/maincategory/:id', component: maincategory },
  { path: '/category/maincategory/subcategory/:id', component: subcategory }
]

</script>