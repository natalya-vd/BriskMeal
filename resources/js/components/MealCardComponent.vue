<template>
    <div class="mealCArd">
        <a class="mealCArdInfo" :href="`/recipe/${+id}/week/${+week}`">
            <div class="mealCArdLinkBlock">
                <img
                    class="meal-card__img"
                    :src="getPhoto.path"
                    :alt="getPhoto.name"
                    width="360"
                    height="215"
                />
            </div>
            <div class="meal-card__inner">
                <div
                    class="mealCArdInfoItem mealCArdInfoItemTitle"
                    :title="title"
                >
                    <span class="mealCArdInfoItemText">{{ title }}</span>
                </div>

                <div class="mealCArdInfoItem mealCArdInfoItemIngridients">
                    {{ text }}
                </div>

                <div class="mealCArdInfoItem mealCArdInfoItemTimePlace">
                    <span class="mealCArdInfoItemTime">{{ time }} min </span>
                    <meal-plan :plans="plans" />
                </div>
            </div>
        </a>

        <buy-button
            v-if="!isGuest(guest)"
            :id="id"
            :weekId="week"
            :quantity-from-db="quantity"
        >
        </buy-button>
    </div>
</template>

<script>
import MealPlan from "./MealPlan.vue";
import { isGuest } from "../helpers/common";

export default {
    components: {
        MealPlan,
    },
    props: [
        "id",
        "time",
        "title",
        "ingredients",
        "plans",
        "photo",
        "week",
        "guest",
        "quantity",
        "text"
    ],
    setup() {
        return { isGuest };
    },
    computed: {
        getIngredients() {
            const ingredients = JSON.parse(this.ingredients);
            return ingredients.map((item) => item.ingredient).join(", ");
        },
        getPhoto() {
            const photo = JSON.parse(this.photo);

            return {
                id: photo[0].id,
                name: photo[0].name,
                path: photo[0].full_path,
            };
        },
    },
};
</script>

<style scoped>
.mealCArd {
    background-color: white;
    width: 360px;
    display: flex;
    flex-direction: column;
    border-radius: 9px;
    box-shadow: rgb(50 0 0 / 20%) 0px 3px 5px 0px;
    overflow: hidden;
    margin-bottom: 5px;
}

.mealCArdInfo {
    display: flex;
    flex-direction: column;
    width: 100%;
    min-height: 340px;
    justify-content: flex-start;
    text-decoration: none;
    color: black;
}

.mealCArdLinkBlock {
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

.mealCArdInfoItem {
    width: 100%;
    display: flex;
    justify-content: flex-start;
}

.mealCArdInfoItemTitle {
    line-height: 24px;
    font-size: 18px;
    font-weight: bold;
    margin: 0 0 4px;
    max-width: 100%;
}

.mealCArdInfoItemText {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}

.mealCArdInfoItemIngridients {
    min-height: 40px;
    margin: 8px 0 12px;
    font-size: 16px;
    font-weight: 400;
    line-height: 18px;
    text-align: left;
}

.mealCArdInfoItemTimePlace {
    height: 24px;
}

@media only screen and (min-width: 0px) {
    .mealCArdInfoItemTime {
        margin-right: 6px;
        font-size: 12px;
    }
}

@media only screen and (min-width: 768px) {
    .mealCArdInfoItemTime {
        font-size: 14px;
        margin-right: 12px;
    }
}
</style>
