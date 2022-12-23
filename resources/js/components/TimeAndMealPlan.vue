<template>
    <div class="mealCArdInfoItem mealCArdInfoItemTimePlace">
        <span class="mealCArdInfoItemTime">{{time}} min </span>
        <template v-if=" isVisiblePreferences">
            <span  v-for="value in getPreferences" 
                    class="mealPlan keto" 
                    :style="'color:'+ value.color_text  + ';background-color:'+ value.color_background+';'">
                {{value.name}}
            </span>
        </template>
    </div>
</template>

<script>
    export default {
        props: ['time', 'plans'],
        computed: {
            getPreferences() {
                return JSON.parse(this.plans)
            },
            isVisiblePreferences() {
                return this.getPreferences.length > 0
            }
        }
    }
</script>

<style scoped>
    .mealCArdInfoItemTime{
        margin-right: 12px;
    }
    .mealCArdInfoItemTimePlace{
        height: 24px;
    }
    .mealPlan{
        padding: 0 8px 0 8px;
        margin: 0 8px 4px 0;
        text-align: center;
        font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
        border-radius: 2px;
        white-space: nowrap;
    }
</style>