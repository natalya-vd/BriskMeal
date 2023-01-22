<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <div class="d-flex justify-content-end mb-2">
            <a :href="getPathBack" class="button me-2 btn  btn-outline-primary">
                Don't save
            </a>
            <button type="submit" class="button me-2 btn btn-primary" @click="formSubmit(getNutritionValues.id)">
                Save
            </button>
            <button type="button" class="button btn btn-danger" @click="onDelete(getNutritionValues.id)">
                Delete
            </button>
        </div>

        <h1 class="mb-4">
            Edit nutrition values
        </h1>

        <form class="row" @submit.prevent="formSubmit(getNutritionValues.id)">
            <div class="col-md-2 grid-margin stretch-card mb-3">
                <div class="card ">
                    <div class="card-body fw-bold fs-5">
                        ID: {{ getNutritionValues.id }}
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
                                input-id="name-recipe"
                                placeholder="Name"
                                class="form-group col-md-6"
                            />
                            <bm-select
                                title="Unit"
                                :data-dropdown="getUnits"
                                :select-prop="formData.unit"
                                required
                                class="col-md-6"
                                @selected="updateUnit"
                            />
                        </div>
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
import {updateResource, deleteResource} from '../../api/api.js'
import {ADMIN_NUTRITION_VALUES, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'EditPageNutritionValues',

    components: {
        BmInput,
        BmSelect
    },

    props: {
        dataResponse: {
            type: String,
            default: ''
        }
    },

    data() {
        return {
            formData: {
                name: '',
                unit: {}
            },
        }
    },

    created() {
        this.formData.name = this.getNutritionValues.name
        this.formData.unit = {
            id: this.getNutritionValues.unit.id,
            name: this.getNutritionValues.unit.name,
        }
    },

    computed: {
        getNutritionValues() {
            return JSON.parse(this.dataResponse).nutrition_value
        },
        getUnits() {
            return JSON.parse(this.dataResponse).units
        },
        getPathBack(){
            return routes.nutritionValue.index
        }
    },

    methods: {
        async onDelete(id) {
            try {
                const result = confirm('Delete?')

                if(result) {
                    await deleteResource({endpoint: ADMIN_NUTRITION_VALUES, id})
                    router.navigate(routes.nutritionValue.index);
                }
            } catch(e) {
                alert(e.response.data.message)
            }
        },
        async formSubmit(id) {
            try {
                const response =  await updateResource({endpoint: ADMIN_NUTRITION_VALUES, id, resource: this.formData})

                if(response.status === 200) {
                    alert('Update success!')
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
            }
        },
        updateUnit(unit) {
            this.formData.unit = {
                id: unit.id,
                name: unit.name,
            }
        }
    }
}
</script>

<style lang="scss" scoped>
.button {
    width: 150px;
}
</style>
