<template>
    <div class="mealCArd" >
        <a class="mealCArdInfo" :href="`/recipe/${+id}`">
            <div class="mealCArdLinkBlock">
                <img class="meal-card__img" :src="getPhoto.path" :alt="getPhoto.name" width="360" height="215" />
            </div>
            <div class="meal-card__inner">
                <div class="mealCArdInfoItem mealCArdInfoItemTitle">{{title}}</div>
                <div class="mealCArdInfoItem mealCArdInfoItemIngridients">{{getIngredients}}</div>
                <div class="mealCArdInfoItem mealCArdInfoItemTimePlace">
                    <span class="mealCArdInfoItemTime">{{time}} min </span>
                    <meal-plan :plans="plans" />
                </div>
            </div>
        </a>
        <buy-button id="id"></buy-button>
    </div>
</template>

<script>
import MealPlan from './MealPlan.vue'
import {createResource} from "../api/api";
import {ADD_RECIPES} from "../api/endpoints";

export default {
    components: {
        MealPlan
    },
    props: ['id', 'time', 'title', 'ingredients', 'plans', 'photo'],
    computed: {
        getIngredients() {
            const ingredients = JSON.parse(this.ingredients)
            return ingredients.map(item => item.ingredient).join(', ')
        },
        getPhoto() {
            const photo = JSON.parse(this.photo)

            return {
                id: photo[0].id,
                name: photo[0].name,
                path: photo[0].full_path
            }
        },
        posts() {
            return JSON.parse(this.dataResponse)
        }
    }
}
</script>

<style scoped>
    .mealCArd{
        background-color: white;
        width: 360px;
        display: flex;
        flex-direction: column;
        border-radius: 9px;
        box-shadow: rgb(50 0 0 / 20%) 0px 3px 5px 0px;
        overflow: hidden;
        margin-bottom: 5px;
    }

    .mealCArdInfo{
        display: flex;
        flex-direction:column;
        width: 100%;
        min-height: 340px;
        justify-content: flex-start;
        text-decoration: none;
        color: black;

    }
    .mealCArdLinkBlock{
        width: 100%;
        height: 215px;
        background-color: rgb(207 215 222);
    }
    .meal-card__img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .meal-card__inner {
        padding: 8px 12px;
    }

    .mealCArdInfoItem{
        width: 100%;
        display: flex;
        justify-content: flex-start;
    }
    .mealCArdInfoItemTitle{
        line-height: 24px;
        font-size: 18px;
        font-weight: bold;
        margin: 0 0 4px;
    }
    .mealCArdInfoItemIngridients{
        min-height: 40px;
        margin: 8px 0 12px;
        font-size: 16px;
        font-weight: 400;
        line-height: 18px;
        text-align:left;
    }
    .mealCArdInfoItemTime{
        margin-right: 12px;
    }
    .mealCArdInfoItemTimePlace{
        height: 24px;
    }
</style>
