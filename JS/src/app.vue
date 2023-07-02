<template>
  <form @submit.prevent="login">
    <label>Email</label>
    <input type="text" v-model="email" />
    <label>Password</label>
    <input type="password" v-model="password" />
    <button type="submit">Login</button>
  </form>
</template>

<script>
import { defineComponent } from 'vue';
import { defineStore } from 'pinia';


export default defineComponent({
    name: 'App'

});
</script>