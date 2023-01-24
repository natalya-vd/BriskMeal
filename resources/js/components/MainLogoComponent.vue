<template>
    <div class="mainLogoBlock">
        <a class="navbar-brand" href="/" style="background-image: url(http://localhost/storage/BriskMealLogo.png);"></a>
    </div>
</template>

<script>
export default {
    name: "MainLogoComponent",
    mounted() {
        console.log("MainLogo Component mounted.");
    },
};
</script>

<style scoped>
.container {
    max-width: 1100px;
}
.mainLogoBlock {
    width: 110px;
    height: 58px;
    display: block;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    padding: 2px 16px 0 0;
}
a{
    display: block;
    width: 100%;
    height: 100%;
    background-size: contain;
}
</style>
