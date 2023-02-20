<template v-if="isVisiblePreferences">
    <span
        v-for="value in getPreferences"
        class="mealPlan"
        :key="value.id"
        :style="{
            color: value.color_text,
            'background-color': value.color_background,
        }"
    >
        {{ value.name }}
    </span>
</template>

<script>
export default {
    name: "MealPlan",

    props: ["time", "plans"],

    computed: {
        getPreferences() {
            return JSON.parse(this.plans);
        },
        isVisiblePreferences() {
            return this.getPreferences.length > 0;
        },
    },
};
</script>

<style scoped>
.mealPlan {
    display: flex;
    align-items: center;
    text-align: center;
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    border-radius: 2px;
    white-space: nowrap;
}

.mealPlan:last-child {
    margin-right: 0;
}

@media only screen and (min-width: 0px) {
    .mealPlan {
        padding: 0 4px 0 4px;
        margin: 0 6px 4px 0;
        font-size: 12px;
    }
}

@media only screen and (min-width: 768px) {
    .mealPlan {
        padding: 0 8px 0 8px;
        margin: 0 8px 4px 0;
        font-size: 14px;
    }
}
</style>
