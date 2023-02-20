<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <h1 class="mb-4">
            Create new preference
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

            <div class="d-flex justify-content-end mt-5">
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
import BmColorPicker from '../../components/BmColorPicker.vue'
import {createResource} from '../../api/api.js'
import {ADMIN_PREFERENCES, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'CreatePagePreferences',

    components: {
        BmInput,
        BmColorPicker
    },

    data() {
        return {
            formData: {
                name: '',
                color_text: '#fff',
                color_background: '#fff',
            },
        }
    },

    methods: {
        async formSubmit() {
            try {
                const response = await createResource({ endpoint: ADMIN_PREFERENCES, resource: this.formData})

                if(response.status === 200) {
                    router.navigate(routes.preferences.index);
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
            }
        },
        updateColorText(newColor) {
            this.formData.color_text = newColor
        },
        updateColorBackground(newColor) {
            this.formData.color_background = newColor
        }
    }
}
</script>

<style lang="scss" scoped>
.button {
    width: 250px;
}
</style>
