<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <h1 class="mb-4">
            Create new recipe
        </h1>
        <form class="row" @submit.prevent="formSubmit">
            <div class="col-md-12 grid-margin stretch-card mb-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <bm-input
                                v-model="formData.name"
                                label="Name"
                                input-id="name-recipe"
                                required
                                placeholder="Name"
                                class="form-group col-md-6"
                            />
                            <bm-input
                                v-model="formData.cook_time"
                                label="Cook time"
                                input-id="cook_time"
                                required
                                placeholder="Cook time"
                                type="number"
                                class="form-group col-md-6"
                            />
                            <bm-textarea
                                label="Description"
                                input-id="description"
                                required
                                placeholder="Description"
                                v-model="formData.description"
                                class="form-group col-md-6"
                            />
                            <bm-textarea
                                label="Recipe text"
                                input-id="recipe_text"
                                required
                                placeholder="Recipe text"
                                v-model="formData.recipe_text"
                                class="form-group col-md-6"
                            />
                            <div class="col-md-12">Photo</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card mb-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <bm-multi-select
                                title="Allergens"
                                :data-dropdown="getAllergensList"
                                prop-name="name"
                                prop-id="id"
                                @selected="(item) => updateSelect(item, 'allergens')"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card mb-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <bm-multi-select
                                title="Preferences"
                                :data-dropdown="getPreferencesList"
                                prop-name="name"
                                prop-id="id"
                                @selected="(item) => updateSelect(item, 'preferences')"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card mb-5">
                <div class="card border-0">
                    <div class="card-body">
                        <bm-select-with-count
                            title="Ingredients"
                            :data-dropdown="getIngredientsList"
                            prop-name="name"
                            prop-id="id"
                            input-id="ingredients"
                            @selected="(item) => updateSelect(item, 'ingredients')"
                        />
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card mb-5">
                <div class="card border-0">
                    <div class="card-body">
                        <bm-select-with-count
                            title="Nutrition value"
                            :data-dropdown="getNutritionValuesList"
                            prop-name="name"
                            prop-id="id"
                            input-id="nutrition-value"
                            @selected="(item) => updateSelect(item, 'nutrition_values')"
                        />
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="button btn btn-primary">
                    Save
                </button>
            </div>
        </form>
    </div>
</main>
</template>

<script>
import BmInput from '../../components/BmInput.vue'
import BmSelect from '../../components/BmSelect.vue'
import BmMultiSelect from '../../components/BmMultiSelect.vue'
import BmTextarea from '../../components/BmTextarea.vue'
import BmSelectWithCount from '../../components/BmSelectWithCount.vue'
import {createResource} from '../../api/api.js'
import {ADMIN_RECIPES, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'CreatePageRecipes',

    components: {
        BmInput,
        BmSelect,
        BmMultiSelect,
        BmTextarea,
        BmSelectWithCount
    },

    props: { // Приходят данные из blade-шаблона
        dataResponse: String
    },

    data() {
        return {
            formData: {
                name: '',
                cook_time: 0,
                description: '',
                recipe_text: '',
                allergens: [],
                preferences: [],
                ingredients: [],
                nutrition_values: [],
            },
        }
    },

    computed: { // Приходит JSON-строка
        getPreferencesList() {
            return JSON.parse(this.dataResponse).preferences
        },
        getNutritionValuesList() {
            return JSON.parse(this.dataResponse).nutritionValues
        },
        getIngredientsList() {
            return JSON.parse(this.dataResponse).ingredients
        },
        getAllergensList() {
            return JSON.parse(this.dataResponse).allergens
        },
    },

    methods: {
        async formSubmit() {
            try {
                const data = await createResource({ endpoint: ADMIN_RECIPES, resource: this.formData})

                if(data.status === 200) {
                    router.navigate(routes.recipe.index);
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
            }
        },
        updateSelect(item, nameSelect) {
            this.formData[nameSelect] = item;
        }
    }
}
</script>

<style lang="scss" scoped>
.button {
    width: 250px;
}
</style>
