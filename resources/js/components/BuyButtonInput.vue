<template>
    <input type="number" class="displayQ" :value="modelValue" :onchange="submitInput" v-on:keyup.13="submitInput" />
</template>

<script>
import {createResource, updateResource} from "../api/api";
import { RECIPES_ADD, RECIPES_PLUS,RECIPES_MINUS} from "../api/endpoints";

export default {
    props: {
        modelValue: Number,
        modelModifiers: {
        default: () => ({})
        }
    },
  emits: ['update:modelValue', 'retrive'],
    data() {
        return {
    
        };
    },
    computed: {
  
    },
    methods: {
        submitInput(event) {
            this.$emit('retrive', event.target.value);
        }
    }
};
</script>

<style scoped>

</style>
