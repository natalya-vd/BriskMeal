<template>
    <div class="input-wrapper">
        <label :for="inputId">{{ label }}</label>
        <textarea
            :value="modelValue"
            :class="[
                'form-control',
                {'form-group--error': isError}
                ]"
            :id="inputId"
            :placeholder="placeholder"
            :rows="rows"
            @input="inputHandler($event.target.value)"
        />
        <span
            v-if="isError"
            class="message-error"
        >
            {{ errorMessage }}
        </span>
    </div>
</template>

<script>
export default {
    name: 'BmTextarea',

    props: {
        modelValue: String,
        label: String,
        inputId: String,
        placeholder: String,
        rows: {
            type: String,
            default: "5"
        },
        propsValidate: {
            type: Boolean,
            default: false,
        },
        submitStatus: {
            type: String,
            default: "PENDING",
        },
        errorMessage: {
            type: String,
            default: "Incorrect data",
        },
    },

    emits: ['update:modelValue'],

    computed: {
        isError() {
            return this.propsValidate && this.submitStatus === 'ERROR'
        }
    },

    methods: {
        inputHandler(value) {
            this.$emit('update:modelValue', value);
        },
    },
}
</script>

<style lang="scss" scoped>
.input-wrapper {
    position: relative;
}

.form-group--error {
    border: 1px solid red;
}
.message-error {
    color: red;
    font-size: 13px;
    line-height: 14px;
    position: absolute;
    bottom: -16px;
}
</style>
