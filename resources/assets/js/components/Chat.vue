<style scoped>

</style>
<template>
    <div class="container">
      <div class="chat" v-if="chats.length!=0">
        <div v-for="chat in chats" >
          <div class="text-right" v-if="chat.user_id ==userid">
            {{chat.chat}}
          </div>
          <div class="text-left py-4" v-else>
            {{chat.chat}}
          </div>

        </div>
      </div>
      <div v-else class="no-message">
        No Chats
      </div>
      <chat-composer v-bind:chats="chats" v-bind:userid="userid"
        v-bind:friendid="friendid"></chat-composer>

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
