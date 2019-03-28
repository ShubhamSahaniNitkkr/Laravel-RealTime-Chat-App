<style scoped>

</style>
<template>

    <div class="container text-right shadow-sm p-3 mb-5  rounded alert alert-secondary ">
      <input type="text" class="form-control" v-model="chat" v-on:keyup.enter="sendChat" placeholder="Type Your mesaage here ..">
      <!-- <input type="button" class="btn btn-success" value="Send" v-on:click="sendChat"> -->
    </div>
</template>

<script>

export default {
    props:['chats','userid','friendid'],
    data() {
        return {
          chat:''
        }
    },
    methods:{
      sendChat:function(e){
        if(this.chat!=''){
          var data = {
            chat:this.chat,
            friend_id:this.friendid,
            user_id:this.userid
          }
          this.chat='';
          axios.post('/chat/sendChat',data).then((response)=>{
            this.chats.push(data)
          })

        }
      }
    }
}


</script>

<style scoped>
</style>
