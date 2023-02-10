<template>
    <input
        type="number"
        class="displayQ"
        :value="modelValue"
        :onchange="submitInput"
        v-on:keyup.13="submitInput"
        :disabled="disabled"/>
</template>

<script>
export default {
    props: {
        modelValue: Number,
        modelModifiers: {
            default: () => ({})
        },
        disabled: Boolean
    },
    emits: ['update:modelValue', 'retrive'],
    methods: {
        submitInput(event) {
            this.$emit('retrive', Number(event.target.value));
        }
    }
};
</script>

<style scoped>
</style>
