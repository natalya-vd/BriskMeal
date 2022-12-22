<template>
    <div class="container recipyPageNutrition" >
        RecipyPageNutrition
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('RecipyPageNutrition Component mounted.')
        }
    }
</script>

<style scoped>
    .recipyPageNutrition{
        width:100%;
        min-height: 400px;
        background-color: aqua;
    }


@media only screen and (min-width: 1200px){
    .recipyPageNutrition{
        width: 309px;
        min-height: 400px;
    }
}
</style>
