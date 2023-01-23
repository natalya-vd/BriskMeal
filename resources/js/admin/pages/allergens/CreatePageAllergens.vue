<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <h1 class="mb-4">
            Create new allergen
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
                        </div>
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
import {createResource} from '../../api/api.js'
import {ADMIN_ALLERGENS, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'CreatePageAllergens',

    components: {
        BmInput,
    },

    data() {
        return {
            formData: {
                name: '',
            },
        }
    },

    methods: {
        async formSubmit() {
            try {
                const data = await createResource({ endpoint: ADMIN_ALLERGENS, resource: this.formData})

                if(data.status === 200) {
                    router.navigate(routes.allergen.index);
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
    width: 250px;
}
</style>
