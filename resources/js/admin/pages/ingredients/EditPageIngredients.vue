<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <div class="d-flex justify-content-end mb-2">
            <a :href="getPathBack" class="button me-2 btn  btn-outline-primary">
                Don't save
            </a>
            <button type="submit" class="button me-2 btn btn-primary" @click="formSubmit(getIngredient.id)">
                Save
            </button>
            <button type="button" class="button btn btn-danger" @click="onDelete(getIngredient.id)">
                Delete
            </button>
        </div>

        <h1 class="mb-4">
            Edit ingredient
        </h1>

        <form class="row" @submit.prevent="formSubmit(getIngredient.id)">
            <div class="col-md-2 grid-margin stretch-card mb-3">
                <div class="card ">
                    <div class="card-body fw-bold fs-5">
                        ID: {{ getIngredient.id }}
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
import {ADMIN_INGREDIENTS, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'EditPageIngredients',

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
        this.formData.name = this.getIngredient.name
        this.formData.unit = {
            id: this.getIngredient.unit.id,
            name: this.getIngredient.unit.name,
        }
    },

    computed: {
        getIngredient() {
            return JSON.parse(this.dataResponse).ingredient
        },
        getUnits() {
            return JSON.parse(this.dataResponse).units
        },
        getPathBack(){
            return routes.ingredient.index
        }
    },

    methods: {
        async onDelete(id) {
            try {
                const result = confirm('Delete?')

                if(result) {
                    await deleteResource({endpoint: ADMIN_INGREDIENTS, id})
                    router.navigate(routes.ingredient.index);
                }
            } catch(e) {
                alert(e.response.data.message)
            }
        },
        async formSubmit(id) {
            try {
                const response =  await updateResource({endpoint: ADMIN_INGREDIENTS, id, resource: this.formData})

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
