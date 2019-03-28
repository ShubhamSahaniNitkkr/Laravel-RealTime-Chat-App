<style scoped>

</style>
<template>
    <div class="container text-right">
      <input type="text" class="input" v-model="chat" v-on:keyup.enter="sendChat">
      <input type="button" class="button" value="Send" v-on:click="sendChat">
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
