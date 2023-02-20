<template>
    <a :href="getPath" class="card border-0 h-100 text-dark text-decoration-none">
        <div class="img-wrapper">
            <img v-if="recipe.photo.length > 0" :src="recipe.photo[0].full_path" class="img" :alt="recipe.photo[0].name">
        </div>

        <div class="card-body">
            <div class="card__inner mb-3">
                <h3 class="fw-bold fs-4">
                    {{recipe.name}}
                </h3>
                <div class="d-flex">
                    <p class="fs-5 m-0 me-3"><span class="fw-bold">ID:</span> {{ recipe.id }}</p>
                    <p class="fs-5 m-0">
                        <span class="fw-bold">Price:</span> {{ recipePrice }}
                    </p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <meal-plan :plans="getPlans" />
            </div>
        </div>
    </a>
</template>

<script>
import MealPlan from '../../components/MealPlan.vue'
import {routes} from '../api/endpoints.js'

export default {
    name: 'BmWeekCard',

    components: {
        MealPlan
    },

    props: {
        recipe: {
            type: Object,
            default: () => ({})
        },
        recipePrice: {
            type: String,
            default: ''
        }
    },

    computed: {
        getPath() {
            return `${routes.recipe.index}/${this.recipe.id}/edit`
        },
        getPlans() {
            return JSON.stringify(this.recipe.preferences)
        },
    }
}
</script>

<style lang="scss" scoped>
.img-wrapper {
    width: 100%;
    height: 216px;
    background-color: rgb(207 215 222);
}

.img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card__inner {
    min-height: 90px;
}
</style>
