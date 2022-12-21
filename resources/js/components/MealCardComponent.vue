<template>
    <div class="mealCArd" >
      <a class="mealCArdLink" href="/meals/1">
        <div class="photoWrappper">
            <img class="cardPhoto" src="cardPhoto.jpg" >
        </div>    
        </a>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('MealCard Component mounted.')
        }
    }
</script>

<style scoped>
    .mealCArd{
        background-color: silver;
        width: 300px;
        height: 300px;
    }
    .mealCArdLink{
        display:flex;
        width: 100%;
        height: 100%;
    }

    .photoWrapper{
        position: relative;
        overflow: hidden;
        flex: 0 0 auto;
        height: auto;
        width: 100%;
        margin-right: 0px;
        padding-top: 60%;
        border-radius: 9px 9px 0px 0px;
    }
    
    .cardPhoto{
        display: block;
        position: absolute;
        left: 0px;
        height: auto;
        width: 100%;
        top: 50%;
    }
</style>
