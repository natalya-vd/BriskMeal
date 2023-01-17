<template>
    <div
        class="input-box"
        v-click-outside="close"
    >
        <span v-if="title.length > 0" class="input-title fw-bold fs-5 mb-3">
            {{ title }}<span v-if="required" class="text-danger">*</span>
        </span>
        <div class="wrapper">
            <div class="input__wrapper">
                <input
                    class="form-control input"
                    :class="{ 'form-group--error': isError}"
                    type="text"
                    :placeholder="placeholder"
                    @focus="open"
                    readonly
                >
                <icon-drop-down
                    :isOpen="isOpen"
                    class="dropdown__icon"
                    @click="toggle"
                />
            </div>
            <span
                v-if="isError"
                class="message-error"
            >
                {{ errorMessage }}
            </span>

            <div
                class="dropdown"
                v-if="isOpen"
            >
                <div class="dropdown__inner">
                    <ul
                    class="dropdown__list"
                    v-if="dataDropdown.length"
                    >
                    <li
                        class="dropdown__item mb-1"
                        :class="{'dropdown__item_active': containSelect(item)}"
                        v-for="item in dataDropdown"
                        :key="item[propId]"
                        @click="selectHandler(item)"
                    >
                        <span class="dropdown__text">{{ item[propName] }}</span>
                    </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul v-if="select.length > 0" class="chips list py-2">
            <li v-for="chip in select" :key="chip[propId]">
                <button type="button" class="badge badge-primary badge-primary_outline" @click="deleteSelect(chip)">
                    {{ chip[propName] }}
                    <icon-close />
                </button>
            </li>
        </ul>
    </div>
</template>

<script>
import IconDropDown from "./IconDropDown.vue";
import IconClose from "./IconClose.vue";
import clickOutside from "../../helpers/directives/clickOutside";

export default {
    name: "BmMultiSelect",

    directives: {
        clickOutside
    },

    components: {
        IconDropDown,
        IconClose
    },

    props: {
        title: {
            type: String,
            default: "",
        },
        placeholder: {
            type: String,
            default: 'Select'
        },
        selectProp: {
            type: Array,
            default: () => []
        },
        dataDropdown: {
            type: Array,
            default: () => [],
        },
        propName: {
            type: String,
            default: "name",
        },
        propId: {
            type: String,
            default: "",
        },
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
            default: "Неверные данные",
        },
    },

    emits: ['selected'],

    data() {
        return {
            isOpen: false,
            select: [],
        };
    },

    created() {
        this.select = this.selectProp
    },

    computed: {
        isError() {
            return this.propsValidate && this.submitStatus === 'ERROR'
        }
    },

    methods: {
        selectHandler(item) {
            if(!this.containSelect(item)) {
                this.select.push(item);
            } else {
                this.select = this.select.filter(element => element[this.propId] !== item[this.propId])
            }
            this.$emit("selected", this.select.map(item => item));
        },
        deleteSelect(item) {
            this.select = this.select.filter(element => element[this.propId] !== item[this.propId])
            this.$emit("selected", this.select.map(item => item));
        },
        open() {
            this.isOpen = true;
        },
        toggle() {
            this.isOpen = !this.isOpen;
        },
        close() {
            this.isOpen = false;
        },
        containSelect(item) {
            return this.select.some(element => element[this.propId] === item[this.propId])
        }
    },
};
</script>

<style lang="scss" scoped>
.input-box {
    position: relative;
}
.wrapper {
    display: flex;
    flex-direction: column;
    position: relative;
}
.input-title {
    display: block;
    font-size: 15px;
    line-height: 15px;
    color: #3d3d3d;
}

.input__wrapper {
    position: relative;
}
.input {
    &[readonly] {
        background-color: #fff;
    }
    &:hover {
        cursor: pointer;
    }
}
.dropdown {
    position: absolute;
    top: 40px;
    z-index: 1;
    width: 100%;
    padding: 16px;
    background-color: #fff;
    box-shadow: 0px 10px 20px rgb(205 205 205 / 30%);
    border-radius: 0 0 6px 12px;

    &__inner {
        max-height: 200px;
        overflow-y: auto;
    }

    &__list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    &__item {
        padding: 12px 0;
        font-weight: 500;
        font-size: 18px;
        line-height: 18px;
        cursor: pointer;
        border-radius: 6px;

        &:hover {
            background-color: #4B49AC;
            color: #fff;
        }

        &_active {
            background-color: #d1d8e9;
        }
    }

    &__text {
        display: block;
        padding: 0 8px;
    }

    &__icon {
        position: absolute;
        top: 14px;
        right: 11px;
        fill: #727272;
    }
    &__icon:hover {
        fill: #4d4d9b;
        cursor: pointer;
    }
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

.chips {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}
</style>
