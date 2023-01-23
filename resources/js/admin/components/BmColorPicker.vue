<template>
    <div class="mb-3 fw-bold fs-5">
        {{ label }}<span v-if="required" class="text-danger">*</span>
    </div>

    <div class="d-flex justify-content-around">
        <div class="color me-3 fw-bold fs-5 d-flex justify-content-center align-items-center" :style="{'background-color': hexColor}">
        <span class="color__text">{{ hexColor }}</span>
        </div>

        <div>
            <color-picker v-model:pureColor="hexColor" disable-alpha format="hex" is-widget round-history @update:pure-color="updateColor" />
        </div>

    </div>
</template>

<script>
import { ColorPicker } from "vue3-colorpicker";

export default {
    name: 'BmColorPicker',

    components: {
        ColorPicker
    },

    props: {
        color: {
            type: String,
            default: ""
        },
        label: {
            type: String,
            default: ''
        },
        required: {
            type: Boolean,
            default: false
        },
    },

    emits: ['update:color'],

    data() {
        return {
            hexColor: "",
        }
    },

    created() {
        this.hexColor = this.color
    },

    methods: {
        updateColor(newColor) {
            this.$emit('update:color', newColor)
        }
    }
}
</script>

<style lang="scss" scoped>
.color {
    width: 200px;
    height: 80px;
    border-radius: 6px;
    box-shadow: 0 3px 5px -1px #0003, 0 5px 8px #00000024, 0 1px 14px #0000001f;
}

.color__text {
    -webkit-filter: invert(100%);
    filter: invert(100%);
    mix-blend-mode: difference;
}
</style>
