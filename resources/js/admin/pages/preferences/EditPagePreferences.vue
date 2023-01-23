<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <div class="d-flex justify-content-end mb-2">
            <a :href="getPathBack" class="button me-2 btn  btn-outline-primary">
                Don't save
            </a>
            <button type="submit" class="button me-2 btn btn-primary" @click="formSubmit(getPreference.id)">
                Save
            </button>
            <button type="button" class="button btn btn-danger" @click="onDelete(getPreference.id)">
                Delete
            </button>
        </div>

        <h1 class="mb-4">
            Edit preference
        </h1>

        <form class="row" @submit.prevent="formSubmit(getPreference.id)">
            <div class="col-md-2 grid-margin stretch-card mb-3">
                <div class="card ">
                    <div class="card-body">
                        ID: {{ getPreference.id }}
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
                                required
                                class="form-group col-md-6"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card mb-3">
                <div class="card border-0">
                    <div class="card-body p-4">
                        <bm-color-picker
                            label="Color text"
                            :color="formData.color_text"
                            @update:color="updateColorText"
                            required
                        />
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card mb-3">
                <div class="card border-0">
                    <div class="card-body p-4">
                        <bm-color-picker
                            label="Color background"
                            :color="formData.color_background"
                            @update:color="updateColorBackground"
                            required
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
import {updateResource, deleteResource} from '../../api/api.js'
import {ADMIN_PREFERENCES, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'EditPagePreferences',

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
                color_text: '',
                color_background: '',
            },
        }
    },

    created() {
        this.formData.name = this.getPreference.name
        this.formData.color_text = this.getPreference.color_text
        this.formData.color_background = this.getPreference.color_background
    },

    computed: {
        getPreference() {
            return JSON.parse(this.dataResponse)
        },
        getPathBack(){
            return routes.preferences.index
        }
    },

    methods: {
        async onDelete(id) {
            try {
                const result = confirm('Delete?')

                if(result) {
                    await deleteResource({endpoint: ADMIN_PREFERENCES, id})
                    router.navigate(routes.preferences.index)
                }
            } catch(e) {
                alert(e.response.data.message)
            }
        },
        updateColorText(newColor) {
            this.formData.color_text = newColor
        },
        updateColorBackground(newColor) {
            this.formData.color_background = newColor
        },
        async formSubmit(id) {
            try {
                const response = await updateResource({endpoint: ADMIN_PREFERENCES, id, resource: this.formData})

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
