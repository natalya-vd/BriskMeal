<template>
    <div >
        <p v-if="title.length > 0" class="title">
            {{ title }}
        </p>
        <button type="button" class="btn btn-outline-primary mb-3" @click="addSelectData">
            Add
        </button>
        <div v-for="(item, index) in selectData" :key="index" class="d-flex justify-content-between wrapper">
            <div class="col-md-8 me-1">
                <bm-select
                    :data-dropdown="dataDropdown"
                    :select-prop="item.item"
                    :prop-name="propName"
                    :prop-id="propId"
                    @selected="(selectValue) => updateSelectData(selectValue, index)"
                />
            </div>
            <bm-input
                v-model.number="item.count"
                @update:modelValue="emitData"
                :input-id="inputId"
                placeholder="Count"
                class="form-group col-md-3 m-0 me-1"
                type="number"
            />
            <button
                type="button"
                class="btn-action btn btn-secondary"
                @click="deleteSelectData(index)"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                    </svg>
                </button>
        </div>
    </div>
</template>

<script>
import BmInput from './BmInput.vue'
import BmSelect from './BmSelect.vue'
import {isEmptyObject} from '../../helpers/common'

export default {
    name: 'BmSelectWithCount',

    components: {
        BmInput,
        BmSelect,
    },

    props: {
        title: {
            type: String,
            default: "",
        },
        dataDropdown: {
            type: Array,
            default: () => [],
        },
        selectDataProps: {
            type: Array,
            default: () => [
                {
                    item: {},
                    count: 0
                },
            ]
        },
        propName: {
            type: String,
            default: "name",
        },
        propId: {
            type: String,
            default: "id",
        },
        inputId: String,
    },

    emits: ['selected'],

    data() {
        return {
            selectData: [{
                    item: {},
                    count: 0
                }]
        }
    },

    created() {
        if(this.selectDataProps.length > 0) {
            this.selectData = this.selectDataProps
        }
    },

    methods: {
        updateSelectData(selectValue, index) {
            this.selectData[index].item = selectValue

            this.emitData()
        },
        emitData() {
            const data = this.selectData.filter(item => item.count !== 0 && !isEmptyObject(item.item))
            this.$emit('selected', data)
        },
        addSelectData() {
            this.selectData.push(
                {
                    item: {},
                    count: 0
                }
            )
        },
        deleteSelectData(index) {
            if(this.selectData.length > 1) {
                this.selectData = this.selectData.filter((_item, idx) => idx !== index)
                this.emitData()
            }
        }
    }
}
</script>

<style lang="scss" scoped>
.title {
    margin: 0 0 10px;
    font-size: 15px;
    line-height: 15px;
    color: #3d3d3d;
}

.wrapper:not(:last-child) {
    margin: 0 0 12px;
}
</style>
