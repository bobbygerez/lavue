<script type="text/javascript">
	
	export const mutations =  {
		provinces(state, provinces){
			state.provinces = provinces
		},
		countries(state, countries){
			state.countries = countries
		},
		categoryId(state, categoryId){
			state.categoryId = categoryId
		},
		catTitle(state, catTitle){
			state.catTitle = catTitle
		},
		loginText(state, loginText){
			state.loginText = loginText
		},
		userDashboard(state, userDashboard){
			store.state.userDashboard = userDashboard
		},
		user(state, user){

			store.state.user = user
		},
		maincategories(state, maincategories){

			store.state.maincategories = maincategories
		},
		alertMessage(state, alertMessage){
			store.state.alertMessage = alertMessage
		}
	}
</script>