<template>
    <div>
        <div v-if="photos.length > 0" class="d-flex flex-wrap align-items-center">
            <div class="me-3 mb-3" v-for="photo in photos" :key="photo.id">
                <bm-input
                    :model-value="photo.name"
                    label="Name photo"
                    input-id="photo-recipe"
                    placeholder="Name"
                    class="input mb-3"
                    required
                    @update:model-value="(value) => updateInput(value, photo.id)"
                />
                <div class="image">
                    <img
                        v-if="photo.full_path.length > 0"
                        :src="photo.full_path_thumbnail != null ? photo.full_path_thumbnail : photo.full_path"
                        class="image__photo"
                        width="250"
                        height="250"
                    >
                    <button
                    type="button"
                    class="image__delete btn btn-danger"
                    @click="onDelete(photo.id)"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <input class="hidden" type="file" @input="uploadFile" ref="input" />
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-primary h-100" type="button" @click="addPhoto">
                Add photo
            </button>
        </div>
    </div>
</template>

<script>
import BmInput from './BmInput.vue'

export default {
    name: 'BmImgUpload',

    components: {
        BmInput
    },

    props: {
        photos: {
            type: Array,
            default: () => ([])
        },
    },

    emits: ['upload:photo', 'delete:photo', 'update:input'],

    methods: {
        updateInput(value, id) {
            this.$emit('update:input', {value, id})
        },
        uploadFile(event) {
            this.$emit('upload:photo', event.target.files)
        },
        addPhoto() {
            this.$refs.input.click()
        },
        onDelete(id) {
            this.$emit('delete:photo', id)
        }
    }
}
</script>

<style lang="scss" scoped>
.image {
    position: relative;

    &__photo {
        width: 250px;
        height: 250px;
        object-fit: cover;
    }

    &__delete {
        position: absolute;
        top: 10px;
        right: 10px;
        display: flex;
        align-items: center;
        width: 40px;
        height: 40px;
    }
}

.input {
    width: 250px;
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
