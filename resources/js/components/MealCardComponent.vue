<template>
    <div class="mealCArd" >
        <div class="mealCArdLinkBlock">
         <a class="mealCArdLink" :href="'/recipe/'+id+''" :style="'background-image:url(http://svoyapi.ru/brisk-meal/300/photo/'+ id +');'">
          
         </a>
        </div>
        <a class="mealCArdInfo" :href="'/recipe/'+id+''">
            <div class="mealCArdInfoItem mealCArdInfoItemTitle">{{title}}</div>
            <div class="mealCArdInfoItem mealCArdInfoItemIngridients">{{ingredients}}</div>
            <div class="mealCArdInfoItem mealCArdInfoItemTimePlace">
                <span class="mealCArdInfoItemTime">{{time}} min </span>
                <span class="keto">Keto</span>
                <span class="glutenFree">Gluten-Free</span>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        props: ['id', 'title', 'ingredients', 'time'],
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
        border-radius: 9px;
        box-shadow: rgb(50 0 0 / 20%) 0px 3px 5px 0px;
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
        border-radius: 9px 9px 0 0;
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

    .mealCArdInfoItemTitle{
        height: 24px;
        font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
        line-height: 24px;
        font-size: 18px;
        font-weight: bold;
    }
    .mealCArdInfoItemIngridients{
        height: 76px;
    }
    .mealCArdInfoItemTimePlace{
        height: 24px;
    }
    .mealCArdInfoItemTime{
        margin-right: 12px;
    }
    .glutenFree{
        padding: 0 8px 0 8px;
        margin: 0 8px 4px 0;
        text-align: center;
        font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
        border-radius: 2px;
        background-color: rgb(61, 69, 75);
        white-space: nowrap;
        color: rgb(255, 255, 255);
    }
    .keto{
        padding: 0 8px 0 8px;
        margin: 0 8px 4px 0;
        text-align: center;
        font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
        border-radius: 2px;
        background-color: rgb(229, 166, 178);
        white-space: nowrap;
        color: rgb(34, 34, 34);
    }

</style>
