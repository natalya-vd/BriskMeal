<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <div class="d-flex justify-content-end mb-2">
            <a :href="getPathBack" class="button me-2 btn  btn-outline-primary">
                Don't save
            </a>
            <button type="submit" class="button me-2 btn btn-primary" @click="formSubmit(getRecipe.id)">
                Save
            </button>
            <button type="button" class="button btn btn-danger" @click="onDelete(getRecipe.id)">
                Delete
            </button>
        </div>

        <h1 class="mb-4">
            Edit recipe
        </h1>

        <form class="row" @submit.prevent="formSubmit(getRecipe.id)">
            <div class="col-md-2 grid-margin stretch-card mb-3">
                <div class="card ">
                    <div class="card-body fw-bold fs-5">
                        ID: {{ getRecipe.id }}
                    </div>
                </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card mb-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <bm-input
                                v-model="formData.name"
                                label="Name"
                                required
                                input-id="name-recipe"
                                placeholder="Name"
                                class="form-group col-md-6"
                            />
                            <bm-input
                                v-model="formData.cook_time"
                                label="Cook time"
                                required
                                input-id="cook_time"
                                placeholder="Cook time"
                                type="number"
                                class="form-group col-md-6"
                            />
                            <bm-textarea
                                label="Description"
                                input-id="description"
                                placeholder="Description"
                                required
                                v-model="formData.description"
                                class="form-group col-md-6"
                            />
                            <bm-textarea
                                label="Recipe text"
                                input-id="recipe_text"
                                placeholder="Recipe text"
                                required
                                v-model="formData.recipe_text"
                                class="form-group col-md-6"
                            />
                            <div class="col-md-12 mb-4">
                                <div class="card">
                                    <bm-img-upload
                                        class="card-body"
                                        :photos="formData.photo"
                                        @upload:photo="onUploadPhoto"
                                        @delete:photo="onDeletePhoto"
                                        @update:input="onUpdatePhotoName"
                                    />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <bm-file-upload
                                        class="card-body"
                                        :path_file="formData.path_file"
                                        @upload:file="onUploadFile"
                                        @delete:file="onDeleteFile"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card mb-5">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <bm-multi-select
                                    title="Weeks"
                                    :data-dropdown="getWeeksList"
                                    :select-prop="formData.weeks"
                                    prop-name="week_name"
                                    prop-id="id"
                                    @selected="(item) => updateSelect(item, 'weeks')"
                                />
                            </div>
                            <div class="col-md-6">
                                <p class="fw-bold fs-5 mb-3">
                                    Active weeks:
                                </p>
                                <ul v-if="getActiveWeeks.length > 0">
                                    <li v-for="item in getActiveWeeks">
                                        {{ item.week_name }}
                                    </li>
                                </ul>
                                <div v-else>Not active weeks</div>
                            </div>
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
                                :select-prop="formData.allergens"
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
                                :select-prop="formData.preferences"
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
                            :select-data-props="formData.ingredients"
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
                            :select-data-props="formData.nutrition_values"
                            prop-name="name"
                            prop-id="id"
                            input-id="nutrition-value"
                            @selected="(item) => updateSelect(item, 'nutrition_values')"
                        />
                    </div>
                </div>
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
import BmImgUpload from '../../components/BmImgUpload.vue'
import BmFileUpload from '../../components/BmFileUpload.vue'
import {updateResource, deleteResource, createResource} from '../../api/api.js'
import {ADMIN_RECIPES, ADMIN_RECIPES_PHOTO, ADMIN_RECIPES_FILE, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'EditPageRecipes',

    components: {
        BmInput,
        BmSelect,
        BmMultiSelect,
        BmTextarea,
        BmSelectWithCount,
        BmImgUpload,
        BmFileUpload
    },

    props: {
        dataResponse: String
    },

    data() {
        return {
            formData: {
                name: '',
                cook_time: 0,
                description: '',
                recipe_text: '',
                path_file: '',
                allergens: [],
                preferences: [],
                ingredients: [],
                nutrition_values: [],
                weeks: [],
                photo: []
            },
        }
    },

    created() {
        this.formData.name = this.getRecipe.name
        this.formData.cook_time = this.getRecipe.cook_time
        this.formData.description = this.getRecipe.description
        this.formData.recipe_text = this.getRecipe.recipe_text
        this.formData.path_file = this.getRecipe.path_pdf
        this.formData.allergens = this.getRecipe.allergens
        this.formData.preferences = this.getRecipe.preferences
        this.formData.ingredients = this.getRecipe.ingredients
        this.formData.nutrition_values = this.getRecipe.nutrition_values
        this.formData.weeks = this.getRecipe.weeks
        this.formData.photo = this.getRecipe.photo
    },

    computed: {
        getRecipe() {
            return JSON.parse(this.dataResponse).recipe
        },
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
        getWeeksList() {
            return JSON.parse(this.dataResponse).listWeeks
        },
        getActiveWeeks() {
            return this.formData.weeks.filter(item => item.active_week)
        },
        getPathBack(){
            return routes.recipe.index
        },
    },

    methods: {
        async onDelete(id) {
            try {
                const result = confirm('Delete?')

                if(result) {
                    await deleteResource({endpoint: ADMIN_RECIPES, id})
                    router.navigate(routes.recipe.index);
                }
            } catch(e) {
                alert(e.response.data.message)
            }
        },
        async formSubmit(id) {
            try {
                const photo = this.formData.photo.map(item => ({
                    id: item.id,
                    name: item.name,
                }))

                const data = {
                    ...this.formData,
                    weeks: this.formData.weeks.map(item => ({id: item.id})),
                    photo
                }

                const response = await updateResource({endpoint: ADMIN_RECIPES, id, resource: data})

                if(response.status === 200) {
                    alert('Update success!')
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
            }
        },
        updateSelect(item, nameSelect) {
            this.formData[nameSelect] = item;
        },
        async onUploadPhoto(photo) {
            try {
                const formData = new FormData()

                for(const [key, value] of Object.entries(photo)) {
                    formData.append(`image[${key}]`, value)
                }
                formData.append('recipe_id', this.getRecipe.id)

                const response = await createResource({endpoint: ADMIN_RECIPES_PHOTO, resource: formData})

                if(response.status === 200) {
                    this.formData.photo = response.data
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
            }
        },
        async onDeletePhoto(id) {
            const data = await deleteResource({endpoint: ADMIN_RECIPES_PHOTO, id})
            if(data.status === 200) {
                this.formData.photo = this.formData.photo.filter(item => item.id !== id)
            }
        },
        onUpdatePhotoName({value, id}) {
            this.formData.photo = this.formData.photo.map(item => {
                return item.id === id
                ? { ...item, name: value}
                : item
            })
        },
        async onUploadFile(file) {
            try {
                const formData = new FormData()

                formData.append('recipe_id', this.getRecipe.id)
                formData.append('file', file)

                const response = await createResource({endpoint: ADMIN_RECIPES_FILE, resource: formData})

                if(response.status === 200) {
                    this.formData.path_file = response.data
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
            }
        },
        async onDeleteFile() {
            const data = await deleteResource({endpoint: ADMIN_RECIPES_FILE, id: this.getRecipe.id})
            if(data.status === 200) {
                this.formData.path_file = null
            }
        },
    }
}
</script>

<style lang="scss" scoped>
.button {
    width: 150px;
}
</style>
