<template>
    <div>
      <form>
        <input type="text" v-model="form.name">
        <input type="text" v-model="form.desctiption">
        <input type="text" v-model="form.user_id">
        <input type="text" v-model="form.latitude">
        <input type="text" v-model="form.longitude">
        <input type="text" v-model="form.mark_color_id">
        <input type="text" v-model="form.mark_status_id">                
        <button class="uk-button uk-button-primary" @click.prevent="store">
          SUBMIT
                </button>
      </form>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        name: "Index",
        data: () => ({
            form: {
                name: "",
                desctiption: "",
                user_id: "",
                latitude: "",
                longitude: "",
                mark_color_id: "",
                mark_status_id: ""
            },
        }),
        methods: {
          store() {
            console.log(this.form)
            axios.post('/api/mark', this.form);
          }
        }
    }
</script>

<style scoped>
</style>