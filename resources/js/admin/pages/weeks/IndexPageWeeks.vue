<template>
    <main>
        <div class="admin-container my-5 px-3">
            <h1 class="mb-4 ms-4">
                List recipes of {{ data.currentWeek.week_name }} week
            </h1>

            <div class="card border-0 mb-5">
                <div class="card-body row">
                    <bm-select
                        title="Select active week"
                        :data-dropdown="data.activeWeeks"
                        prop-name="week_name"
                        :select-prop="selectActiveWeek"
                        class="col-md-6"
                        @selected="updateActiveWeek"
                    />
                    <bm-select
                        title="Select week in all weeks"
                        :data-dropdown="data.listWeeks"
                        prop-name="week_name"
                        :select-prop="selectWeek"
                        class="col-md-6"
                        @selected="updateWeek"
                    />
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <div class="card mb-4">
                    <div class="card-body fs-5">
                        <span class="fw-bold">Count recipes:</span> {{ data.recipes.length }}
                    </div>
                </div>
            </div>

            <ul v-if="data.recipes.length > 0" class="list list-recipes">
                <li v-for="recipe in data.recipes" :key="recipe.id">
                    <bm-week-card
                        :recipe="recipe"
                        :recipe-price="data.recipePriceWeek"
                    />
                </li>
            </ul>
            <div v-else class="card border-0 p-5 fw-bold fs-3">
                Not recipes
            </div>
        </div>
    </main>
</template>

<script>
import BmWeekCard from '../../components/BmWeekCard.vue'
import BmSelect from '../../components/BmSelect.vue'
import {ADMIN_WEEKS_RECIPES} from '../../api/endpoints.js'
import {getListResource} from '../../api/api.js'

export default {
    name: 'IndexPageWeeks',

    components: {
        BmWeekCard,
        BmSelect
    },

    props: {
        dataResponse: String
    },

    data() {
        return {
            data: {},
            selectActiveWeek: {},
            selectWeek: {},
        }
    },

    created() {
        this.data = JSON.parse(this.dataResponse)
        this.selectActiveWeek = this.data.currentWeek
    },

    methods: {
        async updateActiveWeek(week) {
            this.selectActiveWeek = {...week}
            this.selectWeek = {}

            try {
                const response =  await getListResource(`${ADMIN_WEEKS_RECIPES}/${week.id}`)

                if(response.status === 200) {
                    this.data = {
                        ...this.data,
                        currentWeek: week,
                        recipes: response.data.recipes,
                        recipePriceWeek:  response.data.recipePriceWeek
                    }
                    alert('Update list recipes!')
                }
            } catch(e) {
                alert(e)
            }
        },
        async updateWeek(week) {
            this.selectWeek = {...week}
            this.selectActiveWeek = {}

            try {
                const response =  await getListResource(`${ADMIN_WEEKS_RECIPES}/${week.id}`)

                if(response.status === 200) {
                    this.data = {
                        ...this.data,
                        currentWeek: week,
                        recipes: response.data.recipes,
                        recipePriceWeek:  response.data.recipePriceWeek
                    }
                    alert('Update list recipes!')
                }
            } catch(e) {
                alert(e.response.data.message)
            }
        },
    }
}
</script>

<style lang="scss" scoped>
.list-recipes {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 30px;
}
</style>
