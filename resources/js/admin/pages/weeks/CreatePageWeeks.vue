<template>
<main class="admin">
    <div class="admin-container my-5 px-3">
        <h1 class="mb-4">
            Job with weeks
        </h1>
        <form class="row" @submit.prevent="formSubmitDataGenerate">
            <div class="col-md-12 grid-margin stretch-card mb-5">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="mb-3">Generate randomly recipes</h2>
                        <div class="row">
                            <bm-select
                                title="Select week"
                                :data-dropdown="listWeeks"
                                :select-prop="formDataGenerate.week"
                                prop-name="week_name"
                                required
                                class="col-md-6"
                                @selected="updateGenerateWeek"
                            />
                            <bm-input
                                v-model="formDataGenerate.count"
                                label="Count recipes"
                                input-id="count-week"
                                type="number"
                                required
                                placeholder="count"
                                class="form-group col-md-4"
                            />
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="button btn btn-primary">
                                Generate
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form v-if="dataWeek.length > 0" class="mb-5" @submit.prevent="formSubmitDataWeek">
            <div class="card border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Year</th>
                                    <th>Name week</th>
                                    <th>First week day</th>
                                    <th>Last week day</th>
                                    <th>Count assigned recipes</th>
                                    <!-- <th>Closed week</th> -->
                                    <th>Active week</th>
                                    <th>Price week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in dataWeek" :key="item.id">
                                    <td class="align-middle">{{ item.id }}</td>
                                    <td class="align-middle">
                                        {{ item.year }}
                                    </td>
                                    <td class="align-middle">{{ item.week_name }}</td>
                                    <td class="align-middle">{{ item.first_week_day }}</td>
                                    <td class="align-middle">
                                        {{ item.last_week_day }}
                                    </td>
                                    <td class="align-middle">
                                        {{ item.recipe_count }}
                                    </td>
                                    <td class="align-middle">
                                        <input
                                            v-model="item.active_week"
                                            :value="item.active_week"
                                            type="checkbox"
                                            :checked="item.active_week"
                                            @input="(event) => updateActiveWeek(event.target.checked, item)"
                                        />
                                    </td>
                                    <td class="align-middle">
                                        <bm-input
                                            v-model="item.price_recipe"
                                            input-id="price-recipe"
                                            placeholder="Price"
                                            @update:model-value="(value) => updatePrice(value, item)"
                                        />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="button btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <form class="row" @submit.prevent="formSubmit">
            <div class="col-md-12 grid-margin stretch-card mb-3">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="mb-3">Add a new working year</h2>
                        <div class="row">
                            <bm-input
                                v-model="formDataYear.year"
                                label="Enter year"
                                input-id="year"
                                required
                                placeholder="count"
                                class="form-group col-md-4"
                            />
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="button btn btn-primary">
                                Save
                            </button>
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
import BmMultiSelect from '../../components/BmMultiSelect.vue'
import {createResource, updateDataWeek} from '../../api/api.js'
import {ADMIN_WEEKS} from '../../api/endpoints.js'

// TODO: Добавить столбец Closed week, в т.ч. в БД. На закрытую неделю нельзя формировать меню, нельзя изменить цену, нельзя сделать ее активной
// TODO: доделать блок добавления нового года
export default {
    name: 'CreatePageWeeks',

    components: {
        BmInput,
        BmSelect,
        BmMultiSelect
    },

    props: {
        dataResponse: String
    },

    data() {
        return {
            listWeeks: [],
            activeWeeks: [],
            formDataGenerate: {
                week: {},
                count: 30
            },
            dataWeek: [],
            formDataWeek: [],
            formDataYear: {
                year: new Date().getFullYear(),
            },
        }
    },

    created() {
        this.activeWeeks = JSON.parse(this.dataResponse).activeWeeks
        this.listWeeks = JSON.parse(this.dataResponse).listWeeks.map(item => ({
            ...item,
            week_name: `${item.week_name}: ${item.first_week_day} - ${item.last_week_day}`
        }))
        this.dataWeek = JSON.parse(this.dataResponse).listWeeks.map(item => ({
            ...item,
            active_week: this.isActiveWeek(item)
        }))
    },

    methods: {
        async formSubmitDataGenerate() {
            try {
                const resource = {
                    count: this.formDataGenerate.count,
                    week_id: this.formDataGenerate.week.id
                }
                const data = await createResource({ endpoint: ADMIN_WEEKS, resource})

                if(data.status === 200) {
                    alert('Generated list recipes for week!')
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
            }
        },
        async formSubmitDataWeek() {
            try {
                const data = await updateDataWeek({ endpoint: ADMIN_WEEKS, data: this.formDataWeek})

                if(data.status === 200) {
                    alert('Update success!')
                }
            } catch(e) {
                if(e.response.status === 422) {
                    alert(e.response.data.message)
                }
            }
        },
        updateGenerateWeek(week) {
            this.formDataGenerate.week = week
        },
        updateActiveWeek(value, item) {
            const idxFormDataWeek = this.indexFormDataWeek(item)
            if(idxFormDataWeek >= 0) {
                this.formDataWeek[idxFormDataWeek] = {
                    week_id: item.id,
                    active_week: value,
                    price_recipe: item.price_recipe
                }
            } else {
                this.formDataWeek.push({
                    week_id: item.id,
                    active_week: value,
                    price_recipe: item.price_recipe
                })
            }
        },
        updatePrice(value, item) {
            const idxFormDataWeek = this.indexFormDataWeek(item)
            if(idxFormDataWeek >= 0) {
                this.formDataWeek[idxFormDataWeek] = {
                    week_id: item.id,
                    active_week: item.active_week,
                    price_recipe: value
                }
            } else {
                this.formDataWeek.push({
                    week_id: item.id,
                    active_week: item.active_week,
                    price_recipe: value
                })
            }
        },
        isActiveWeek(week) {
            return this.activeWeeks.some(item => item.id === week.id)
        },
        indexFormDataWeek(item) {
            return this.formDataWeek.findIndex(element => element.week_id === item.id)
        }
    }
}
</script>

<style lang="scss" scoped>
.button {
    width: 150px;
}
</style>
