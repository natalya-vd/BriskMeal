<template>
    <div v-if="pagination.links.length > 3" class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" :href="pagination.first_page_url" rel="prev">
                        « Previous
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" :href="pagination.next_page_url" rel="next">
                        Next »
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between p-3">
            <div>
                <p class="small text-muted">
                    Showing <span class="fw-semibold">{{ pagination.from }}</span> to <span class="fw-semibold">{{ pagination.to }}</span> of <span class="fw-semibold">{{ pagination.total }}</span> results
                </p>
            </div>
            <div>
                <ul class="pagination">
                    <li
                        v-for="(item, index) in pagination.links"
                        :key="index"
                        :class="[
                            'page-item',
                            {active: item.active, disabled: !item.url}
                        ]"
                        :aria-disabled="!item.url"
                    >
                        <span v-if="item.active" class="page-link">
                            {{ getLabel(item.label) }}
                        </span>
                        <a
                            v-else-if="item.url"
                            class="page-link"
                            :href="item.url"
                        >
                        {{ getLabel(item.label) }}
                        </a>
                        <span v-else class="page-link">
                            {{ getLabel(item.label) }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'BmPagination',

    props: {
        pagination: Object
    },

    methods: {
        getLabel(label) {
            if(label.includes('Previous')) {
                return '‹'
            }
            if(label.includes('Next')) {
                return '›'
            }

            return label
        }
    }
}
</script>
