<template>
	<div>
		{{ count }}
	</div>
</template>

<script type="text/javascript">

export default{
	
  computed: {
    count () {
      return this.$store.state.count
    }
  }
}


</script>
