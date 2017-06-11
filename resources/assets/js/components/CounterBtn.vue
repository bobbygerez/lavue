<template>
	<div>
		<button @click="increment">+</button>
   	 	<button @click="decrement">-</button>
	</div>
</template>

<script type="text/javascript">
	
	export default{

		methods: {

			increment(){
				this.$store.commit({
					type: 'increment',
					amount: 10
				})
			},
			decrement(){
				this.$store.commit({
					type: 'decrement',
					amount: 10
				})
			}
		}
	}
</script>