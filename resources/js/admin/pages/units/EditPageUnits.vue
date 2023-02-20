<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <div class="d-flex justify-content-end mb-2">
            <a :href="getPathBack" class="button me-2 btn  btn-outline-primary">
                Don't save
            </a>
            <button type="submit" class="button me-2 btn btn-primary" @click="formSubmit(getUnit.id)">
                Save
            </button>
            <button type="button" class="button btn btn-danger" @click="onDelete(getUnit.id)">
                Delete
            </button>
        </div>

        <h1 class="mb-4">
            Edit unit
        </h1>

        <form class="row" @submit.prevent="formSubmit(getUnit.id)">
            <div class="col-md-2 grid-margin stretch-card mb-3">
                <div class="card ">
                    <div class="card-body fw-bold fs-5">
                        ID: {{ getUnit.id }}
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
import {ADMIN_UNITS, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'EditPageUnits',

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
        this.formData.name = this.getUnit.name
    },

    computed: {
        getUnit() {
            return JSON.parse(this.dataResponse)
        },
        getPathBack(){
            return routes.units.index
        }
    },

    methods: {
        async onDelete(id) {
            try {
                const result = confirm('Delete?')

                if(result) {
                    await deleteResource({endpoint: ADMIN_UNITS, id})
                    router.navigate(routes.units.index);
                }
            } catch(e) {
                alert(e.response.data.message)
            }
        },
        async formSubmit(id) {
            try {
                const response =  await updateResource({endpoint: ADMIN_UNITS, id, resource: this.formData})

                if(response.status === 200) {
                    alert('Update success!')
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
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
