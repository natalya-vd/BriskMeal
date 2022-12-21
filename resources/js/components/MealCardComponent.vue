<template>
    <div class="mealCArd" >
        <div class="mealCArdLinkBlock">
        <a class="mealCArdLink" :href="'/recipe/'+id+''" :style="'background-image:url(http://svoyapi.ru/brisk-meal/300/photo/'+ id +');'">
          
        </a>
        </div>
        <a class="mealCArdInfo" href="/recipe/1">
            <div class="mealCArdInfoItem">{{title}}</div>
            <div class="mealCArdInfoItem">{{ingredients}}</div>
        </a>
    </div>
</template>

<script>
    export default {
        props: ['id', 'title', 'ingredients'],
        mounted() {
            console.log('MealCard Component mounted.')
        }
    }
</script>

<style scoped>
    .mealCArd{
        background-color: white;
        width: 360px;
        height: 340px;
        margin-bottom: 10px;
        display: flex;
        flex-direction: column;
    }
    .mealCArdLinkBlock{
        width: 100%;
        height: 215px;
    }
    .mealCArdLink{
        display: block;
        width: 360px;
        height: 215px;
        background-repeat: no-repeat;
        background-size: auto 100% ;
        background-position: center center;
    }
    .mealCArdInfo{
        display: flex;
        flex-direction:column;
        width: 100%;
        height: 125px;
        padding: 8px 12px 8px 12px;
        justify-content: flex-start;
        text-decoration: none;
        color: black;
        
    }
    .mealCArdInfoItem{
        width: 100%;
        display: flex;
        justify-content: flex-start;
    }
</style>
