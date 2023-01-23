<template>
    <form action="" @submit.prevent="createPost">
        <h4 class="text-center font-weight-bold">Post creation form</h4>
        <div class="form-group">
            <input type="text" placeholder="Post title" v-model="post.title" class="form-control">

        </div>
        <div class="form-group">
                <textarea v-model="post.content" placeholder="Post content" class="form-control">

                </textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">Submit
            </button>
        </div>
    </form>
</template>

<script>
import {createResource} from "../api/api";
import {POSTS} from "../api/endpoints";

export default {
    name: "CreatePost",
    data() {
        return {
            post: {
                title: '',
                content: ''
            }
        }
    },
    methods: {
        async createPost() {
            const data = await createResource({endpoint: POSTS, resource: this.post})
            console.log(data)
        }
    },
    computed: {
        isValid() {
            return this.post.title !== '' && this.post.content !== ''
        }
    }
}
</script>

<style scoped>

</style>
