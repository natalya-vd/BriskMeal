<template>
    <main>
        <div class="admin-container my-5 px-3">
            <div class="d-flex justify-content-between">
                <div class="col-md-2 grid-margin stretch-card mb-3">
                    <div class="card ">
                        <div class="card-body fw-bold fs-5">
                            Order ID: {{ getOrder.id }}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card mb-3">
                    <div class="card ">
                        <div class="card-body fw-bold fs-5">
                            Total price: {{ getOrder.total_price }}$
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 mb-4">
                <div class="card-body fs-5">
                    <p>
                        <span class="fw-bold">Status order:</span> {{ getOrder.status.name }}
                    </p>
                    <p>
                        <span class="fw-bold">First name:</span> {{ getOrder.first_name }}
                    </p>
                    <p>
                        <span class="fw-bold">Last name:</span> {{ getOrder.last_name }}
                    </p>
                    <p>
                        <span class="fw-bold">Phone:</span> {{ getOrder.phone }}
                    </p>
                    <p>
                        <span class="fw-bold">Address:</span> {{ getOrder.address }}
                    </p>
                    <p>
                        <span class="fw-bold">Address line 2:</span> {{ getOrder.address_line_2 }}
                    </p>
                    <p>
                        <span class="fw-bold">Region:</span> {{ getOrder.region }}
                    </p>
                    <p>
                        <span class="fw-bold">Zip code:</span> {{ getOrder.zip_code }}
                    </p>
                    <p>
                        <span class="fw-bold">Delivery day:</span> {{ getOrder.delivery_day }}
                    </p>
                    <p>
                        <span class="fw-bold">Delivery instructions:</span> {{ getOrder.delivery_instructions }}
                    </p>
                </div>
            </div>
            <div class="card border-0 fs-5">
                <div class="card-body">
                    <h3>List recipes:</h3>
                    <ul class="list-group">
                        <li v-for="recipe in getOrder.recipes" :key="recipe.id" class="list-group-item">
                        <a :href="getPathEdit(recipe.id)" target="_blank">{{ recipe.name }}</a>
                        <span class="fw-bold"> Quantity:</span> {{ recipe.quantity }}
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </main>
</template>

<script>
import {routes} from '../../api/endpoints.js'

export default {
    name: 'OrderPageOrders',

    props: {
        dataResponse: String
    },

    computed: {
        getOrder() {
            return JSON.parse(this.dataResponse);
        },
    },
    methods: {
        getPathEdit(id) {
            return `${routes.recipe.index}/${id}/edit`
        }
    }
}
</script>
