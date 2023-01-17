<template>
    <main>
        <div class="admin-container my-5 px-3">
            <h1 class="mb-4 ms-4">
                List preferences
            </h1>

            <div class="card border-0 ">
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a class="btn btn-outline-primary" :href="getPathCreate">
                            Add preferences
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th class="text-center">Color text</th>
                                <th class="text-center">Color background</th>
                                <th class="title-action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in getData" :key="item.id">
                                <td class="align-middle">
                                    {{ item.id }}
                                </td>
                                <td class="align-middle">
                                    {{ item.name }}
                                </td>
                                <td class="align-middle">
                                    <div
                                        :style="{
                                            'background-color': item.color_text,}"
                                        class="cell-color"
                                    >
                                        <span class="color__text">
                                            {{ item.color_text }}
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div
                                        :style="{
                                            'background-color': item.color_background,
                                            'color': item.color_text,
                                            }"
                                        class="cell-color"
                                    >
                                        <span>
                                            {{ item.color_background }}
                                        </span>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="cell-action">
                                        <a :href="getPathEdit(item.id)" class="btn-action btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                            </svg>
                                        </a>
                                        <button
                                        type="button"
                                        class="btn-action btn btn-secondary"
                                        @click="onDelete(item.id)"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <bm-pagination :pagination="getPagination" />
            </div>
        </div>
    </main>
</template>

<script>
import BmPagination from '../../components/BmPagination.vue'
import {deleteResource, getListResource} from '../../api/api.js'
import {ADMIN_PREFERENCES, routes} from '../../api/endpoints.js'
import router from '../../router'

export default {
    name: 'IndexPagePreferences',

    components: {
        BmPagination
    },

    props: {
        dataResponse: String
    },

    data() {
        return {
            data: {}
        }
    },

    created() {
        this.data = JSON.parse(this.dataResponse)
    },

    computed: {
        getData() {
            return this.data.data;
        },

        getPagination() {
            let pagination = {}
            Object.keys(this.data).forEach(item => {
                if(item !== 'data') {
                    pagination = {
                        ...pagination,
                        [item]: this.data[item]
                    }
                }
            })
            return pagination
        },
        getPathCreate() {
            return `${routes.preferences.index}/create`
        }
    },

    methods: {
        async onDelete(id) {
            try {
                const result = confirm('Delete?')

                if(result) {
                    await deleteResource({ endpoint: ADMIN_PREFERENCES , id})
                    router.navigate(routes.preferences.index)
                    // TODO: Некорректно работает пагинация. Нужно ее полностью переделать на фронте иначи при запросах по АПИ приходят неверные УРЛ
                    // const dataResponse = await getListResource(ADMIN_PREFERENCES)
                    // this.data = dataResponse.data
                }
            } catch(e) {
                alert(e.response.data.message)
            }
        },
        getPathEdit(id) {
            return `${routes.preferences.index}/${id}/edit`
        }
    },
}
</script>

<style lang="scss" scoped>
.cell-color {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    width: 80px;
    height: 30px;
    border-radius: 6px;
    box-shadow: 0 3px 5px -1px #0003, 0 5px 8px #00000024, 0 1px 14px #0000001f;
}

.color__text {
    -webkit-filter: invert(100%);
    filter: invert(100%);
    mix-blend-mode: difference;
}

.title-action {
    width: 120px;
}

.cell-action {
    display: flex;
    justify-content: space-between;
}
.btn-action {
    display: flex;
    align-items: center;
    width: 42px;
    height: 42px;
}
</style>
