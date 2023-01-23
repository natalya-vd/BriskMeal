<template>
    <div>
        <h4 class="text-center font-weight-bold">Posts</h4>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="post in posts">
                <td>{{post.title}}</td>
                <td>{{post.content}}</td>
                <td>
                    <button class="btn btn-danger" @click="deletePost(post)"><i style="color:white" class="fa fa-trash"></i></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import {deleteResource} from '../api/api.js'
import {POSTS} from '../api/endpoints.js'

export default {
    name: "Posts",
    mounted() {
        console.log(JSON.parse(this.dataResponse))
    },
    props: [
        "dataResponse",
    ],
    methods: {
        async deletePost(post) {
            const data = await deleteResource({endpoint: POSTS, id: post.id})
            console.log(data)
        }
    },
    computed: {
        posts() {
            return JSON.parse(this.dataResponse)
        }
    }
}
</script>

<style scoped>

</style>
