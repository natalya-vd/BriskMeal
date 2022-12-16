<template>
    <div class="mealCArd" >
      <a class="mealCArdLink" href="/meals/1">
            card
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
        margin-bottom: 10px;
    }
    .mealCArdLink{
        display:block;
        width: 100%;
        height: 100%;
    }
</style>
