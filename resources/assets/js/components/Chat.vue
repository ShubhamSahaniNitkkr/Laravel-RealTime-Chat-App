<style scoped>

</style>
<template>

    <div>
      <div v-if="chats.length!=0">
        <div v-for="chat in chats" >
          <div class="text-right alert alert-success shadow-sm p-3 mb-5  rounded text-primary" v-if="chat.user_id ==userid">
            {{chat.chat}}
          </div>
          <div class="text-left alert alert-info shadow-sm p-3 mb-5  rounded text-info" v-else>
            {{chat.chat}}
          </div>

        </div>
      </div>

        <div class="text-left shadow-sm p-3 mb-5 bg-white rounded text-danger" v-else>
          No Chats
      </div>

      <chat-composer v-bind:chats="chats" v-bind:userid="userid" v-bind:friendid="friendid"></chat-composer>
    </div>
</template>

<script>
    export default {
        props:['chats','userid','friendid'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
