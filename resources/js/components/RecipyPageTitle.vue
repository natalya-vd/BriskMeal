<template>
    <div class="container recipyPageTitle" >
        RecipyPageTitle
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('RecipyPageTitle Component mounted.')
        }
    }
</script>

<style scoped>
.recipyPageTitle{
    margin-bottom: 24px;
    background-color: pink;
    width: 100%;
    height: 140px;
}

@media only screen and (min-width: 1200px){
    .recipyPageTitle{
        width: 1100px;
        height: 70px;
        padding-right: 15px;
        padding-left: 15px;
    }
}

</style>
