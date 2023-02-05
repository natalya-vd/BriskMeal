<template>
    <main>
        <div class="admin-container my-5 px-3">
            <h1 class="mb-4 ms-4">
                List orders
            </h1>

            <div class="card border-0 ">
                <div class="card-body">
                    <div v-if="getData.length > 0" class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Status</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Phone</th>
                                <th>Delivery day</th>
                                <th class="title-action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in getData" :key="item.id">
                                <td class="align-middle">
                                    {{ item.id }}
                                </td>
                                <td class="align-middle">
                                    {{ item.order_statuses.name }}
                                </td>
                                <td class="align-middle">
                                    {{ item.first_name }}
                                </td>
                                <td class="align-middle">
                                    {{ item.last_name }}
                                </td>
                                <td class="align-middle">
                                    {{ item.phone }}
                                </td>
                                <td class="align-middle">
                                    {{ item.delivery_day }}
                                </td>
                                <td class="align-middle">
                                    <div class="cell-action">
                                        <a :href="getPathVisible(item.id)" class="btn-action btn btn-primary">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 4.5C7 4.5 2.73 7.61 1 12C2.73 16.39 7 19.5 12 19.5C17 19.5 21.27 16.39 23 12C21.27 7.61 17 4.5 12 4.5ZM12 17C9.24 17 7 14.76 7 12C7 9.24 9.24 7 12 7C14.76 7 17 9.24 17 12C17 14.76 14.76 17 12 17ZM12 9C10.34 9 9 10.34 9 12C9 13.66 10.34 15 12 15C13.66 15 15 13.66 15 12C15 10.34 13.66 9 12 9Z" fill="#fff"/>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div v-else class="card border-0 p-5 fw-bold fs-3">Not orders</div>
                </div>
                <bm-pagination :pagination="getPagination" />
            </div>
        </div>
    </main>
</template>

<script>
import BmPagination from '../../components/BmPagination.vue'
import {routes} from '../../api/endpoints.js'

export default {
    name: 'IndexPageOrders',

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
    },

    methods: {
        getPathVisible(id) {
            return `${routes.orders.index}/${id}`
        }
    },
}
</script>

<style lang="scss" scoped>
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
