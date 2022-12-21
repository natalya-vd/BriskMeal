<template >
    <div class="container recipyPageIngredients" >
      
        RecipyPageIngredients
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('RecipyPageIngredients Component mounted.')
        }
    }
</script>

<style scoped>
    .recipyPageIngredients{
    margin-bottom: 24px;
    background-color: yellow;
    width: 100%;
    height: auto;
    min-height: 380px;
}

@media only screen and (min-width: 1200px){
    .recipyPageIngredients{
        width: 730px;
        height: 460px;
        padding-right: 15px;
        padding-left: 15px;
        margin-left: 0px;
    }
}
</style>
