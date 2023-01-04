<template>
    <ul>
        <li v-for="item in getActiveWeeks" :key="item.id">
            <a :href="`/catalog/${item.week_name}`">
                {{ item.week_name }}
            </a>
        </li>
    </ul>
</template>

<script>
export default {
    name: 'WeeksNavigation',
    props: ['activeWeeks'],

    computed: {
        getActiveWeeks() {
            return JSON.parse(this.activeWeeks);
        }
    }
}
</script>
