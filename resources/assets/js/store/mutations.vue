<script type="text/javascript">
	
	export const mutations =  {
		
		categoryId(state, categoryId){
			state.categoryId = categoryId
		},
		pageTitle(state, pageTitle){
			state.pageTitle = pageTitle
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