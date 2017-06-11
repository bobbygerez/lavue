<template>
	<div>
		  <p>@{{ count }}</p>
		  <p>
		    <button @click="increment">+</button>
		    <button @click="decrement">-</button>
		  </p>
	</div>
</template>

<script type="text/javascript">

	export default{

	  computed: {
		    count () {
			    return this.$store.state.count
		    }
		  }

	  methods: {
	    increment () {
	      return this.$store.commit('increment')
	    },
	    decrement () {
	      return this.$store.commit('decrement')
	    }
	  }
	}

</script>