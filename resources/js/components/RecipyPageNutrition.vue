<template>
    <div class="Nutr-val">
        <h3 class="Nutr-val1">Nutrition Values</h3>
        <div class="title">
            Per serving
        </div>

        <div v-for="(item, index) in getNutritionValues" :key="index" class="Nutr-val2">
            <span class="Nutr-val3">
                {{ item.nutrition_values }}
            </span>
            <span> {{`${item.count}${item.unit}`}}</span>
        </div>

        <div class="Nutr-val5">
            <button aria-label="Additional nutritional information" tabindex="0"  class="Nutr-val6">
                <svg class="Nutr-val7" width="16" height="16" viewBox="0 0 16 16" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"          >
                    <g fill="none" fill-rule="evenodd">
                        <circle cx="8" cy="8" r="8" fill="#AFB3B2">

                        </circle>
                        <path fill="white" d="M7 4.51c0-.28.096-.518.289-.715a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 4.51zM8.873 11.909a.525.525 0 0 1-.279.443 1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417c-.013-.806-.023-1.628-.03-2.467-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467z">

                        </path>
                    </g>
                </svg>
            </button>
            <small  class="Nutr-val8">Nutrition info may vary slightly by time of delivery. Please refer to FAQ page for more related information.</small>
        </div>
        <buy-button :id="recipeId"></buy-button>
    </div>
</template>

<script>
import {createResource} from "../api/api";
import {ADD_RECIPES} from "../api/endpoints";

export default {
    name: 'RecipyNutrition',

    props: ['nutritionValues', 'recipeId'],

    methods: {
        async addToCart(recipe_id) {
            const data = await createResource({endpoint: ADD_RECIPES, resource: {id: +recipe_id}})
            console.log(data)
        }
    },

    computed: {
        getNutritionValues() {
            return JSON.parse(this.nutritionValues);
        }
    }
};
</script>

<style scoped>
.Nutr-val {
    display: flex;
    flex-direction: column;
    flex-basis: 30%;
    background-color: white;
    border-radius: 3px;
    box-shadow: rgb(0 0 0 / 10%) 0px 2px 3px 0px;
    position: relative;
    height: 100%;
    padding: 16px;
}

.Nutr-val1 {
    margin: 0px 0px 16px;
    text-transform: capitalize;
    text-align: start;
    font-weight: 700;
}

.title {
    display: flex;
    justify-content: flex-end;
    padding: 4px 0;
    border-bottom: 1px solid rgb(240, 242, 242);
    font-size: 16px;
    line-height: 24px;
}

.Nutr-val2 {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    padding: 4px 0px;
    border-bottom: 1px solid rgb(240, 242, 242);
}

.Nutr-val5 {
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    margin-top: 24px;
    color: rgb(125, 128, 127);
}

.Nutr-val6 {
    background: none;
    border: none;
    padding: 0px;
    position: relative;
    height: 24px;
}

.Nutr-val7 {
    vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
}
.Nutr-val8 {
    width: 85%;
}
</style>
