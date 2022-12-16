<template>
    <div class="container mainLogoBlock" >
        <a class="navbar-brand" href="/">
            MainLogo
        </a>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('MainLogo Component mounted.')
        }
    }
</script>

<style scoped>
    .mainLogoBlock{
        background-color: red;
        width: 20vw;
    }
</style>
