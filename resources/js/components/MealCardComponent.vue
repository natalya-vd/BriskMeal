<template>
    <div class="mealCArd" >
        <div class="mealCArdLinkBlock">
            <a class="mealCArdLink" :href="`/recipe/${+id}`" :style="'background-image:url(http://svoyapi.ru/brisk-meal/300/photo/'+ id +');'">
            </a>
        </div>
        <a class="mealCArdInfo" :href="`/recipe/${+id}`">
            <div class="mealCArdInfoItem mealCArdInfoItemTitle">{{title}}</div>
            <div class="mealCArdInfoItem mealCArdInfoItemIngridients">{{getIngredients}}</div>

            <div class="mealCArdInfoItem mealCArdInfoItemTimePlace">
                <span class="mealCArdInfoItemTime">{{time}} min </span>
                <time-meal-plan :plans="plans" />
            </div>

        </a>
    </div>
</template>

<script>
import TimeMealPlan from './TimeAndMealPlan.vue'

export default {
    components: {
        TimeMealPlan
    },

    props: ['id', 'time', 'title', 'ingredients','plans'],

    computed: {
        getIngredients() {
            const ingredients = JSON.parse(this.ingredients)
            return ingredients.map(item => item.ingredient).join(', ')
        },
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
        text-align:left;
    }
    .mealCArdInfoItemTime{
        margin-right: 12px;
    }
    .mealCArdInfoItemTimePlace{
        height: 24px;
    }
</style>
