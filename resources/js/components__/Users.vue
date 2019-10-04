<template>
 <div>
 <h2>Hi I am users</h2>

 <p v-if="$auth.check()">auth</p>

 </div>

</template>

<script>
 import router from 'vue-router'


 export default {
        mounted() {
            console.log( router )
        }
    }
</script>