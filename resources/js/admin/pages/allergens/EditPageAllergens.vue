<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <div class="d-flex justify-content-end mb-2">
            <a :href="getPathBack" class="button me-2 btn  btn-outline-primary">
                Don't save
            </a>
            <button type="submit" class="button me-2 btn btn-primary" @click="formSubmit(getAllergen.id)">
                Save
            </button>
            <button type="button" class="button btn btn-danger" @click="onDelete(getAllergen.id)">
                Delete
            </button>
        </div>

        <h1 class="mb-4">
            Edit allergen
        </h1>

        <form class="row" @submit.prevent="formSubmit(getAllergen.id)">
            <div class="col-md-2 grid-margin stretch-card mb-3">
                <div class="card ">
                    <div class="card-body">
                        ID: {{ getAllergen.id }}
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
import {updateResource, deleteResource} from '../../api/api.js'
import {ADMIN_ALLERGENS, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'EditPageAllergens',

    components: {
        BmInput,
    },

    props: {
        dataResponse: String
    },

    data() {
        return {
            formData: {
                name: '',
            },
        }
    },

    created() {
        this.formData.name = this.getAllergen.name
    },

    computed: {
        getAllergen() {
            return JSON.parse(this.dataResponse)
        },
        getPathBack(){
            return routes.allergen.index
        }
    },

    methods: {
        async onDelete(id) {
            try {
                await deleteResource({endpoint: ADMIN_ALLERGENS, id})
                router.navigate(routes.allergen.index);
            } catch(e) {
                console.error(e)
            }
        },
        async formSubmit(id) {
            try {
                await updateResource({endpoint: ADMIN_ALLERGENS, id, resource: this.formData})
            } catch(e) {
                console.error(e)
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
