<template>
    <div class="input-wrapper">
        <label v-if="label.length > 0" :for="inputId" class="fw-bold fs-5">{{ label }}<span v-if="required" class="text-danger">*</span></label>
        <input
            :value="modelValue"
            :type="type"
            :class="[
                'form-control',
                {'form-group--error': isError}
                ]"
            :id="inputId"
            :step="type === 'number' ? 'any' : undefined"
            :placeholder="placeholder"
            @input="inputHandler($event.target.value)"
        >
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
    name: 'BmInput',

    props: {
        modelValue: String | Number,
        label: {
            type: String,
            default: ''
        },
        inputId: String,
        type: {
            type: String,
            default: 'text'
        },
        placeholder: String,
        required: {
            type: Boolean,
            default: false
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
