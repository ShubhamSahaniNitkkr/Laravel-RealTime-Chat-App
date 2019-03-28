<style scoped>

</style>
<template>
  <div>
    <span v-if="checkUser()"><i class="fas fa-dot-circle text-success h2"></i></span>
    <span v-else><i class="far fa-dot-circle text-danger h2"></i></span>
  </div>

</template>

<script>
    export default {
      props :['friend','onlineusers'],
      methods:{
        checkUser:function(){
          return _.find(this.onlineusers,{id:this.friend.id});
        }
      }
    }
</script>
