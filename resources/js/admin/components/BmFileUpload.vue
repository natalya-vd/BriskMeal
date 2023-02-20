<template>
    <div>
        <div v-if="path_file != null && path_file.length > 0" class="d-flex flex-wrap align-items-center">
            <div class="d-flex flex-wrap">
                <a class="me-3 fs-5" :href="path_file">Text recipe</a>
                <button
                type="button"
                class="btn__delete btn btn-danger"
                @click="onDelete"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                    </svg>
                </button>
            </div>
        </div>
        <div v-else class="fw-bold fs-5">Not files</div>

        <input class="hidden" type="file" @input="uploadFile" ref="input" />
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-primary h-100" type="button" @click="addFile">
                {{ path_file != null && path_file.length > 0 ? 'Change file' : ' Add file'}}
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'BmFileUpload',

    props: {
        path_file: {
            type: String,
            default: ''
        },
    },

    emits: ['upload:file', 'delete:file'],

    methods: {
        uploadFile(event) {
            this.$emit('upload:file', event.target.files[0])
        },
        addFile() {
            this.$refs.input.click()
        },
        onDelete() {
            this.$emit('delete:file')
        }
    }
}
</script>

<style lang="scss" scoped>
.btn__delete {
    display: flex;
    align-items: center;
    width: 40px;
    height: 40px;
}

.hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0 0 0 0);
    border: 0;
}
</style>
