<template>
    <div >
        Favorites
        <p v-if="$auth.check()"> Auth </p>
        <p v-if="!$auth.check()">Not Auth </p>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log( 'Favorites' )
        }
    }
</script>

<style>

</style>