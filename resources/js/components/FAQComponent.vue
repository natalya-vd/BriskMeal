<template >
    <div class="container">
        <h1 class="text-center font-weight-bold">Frequently Asked Questions</h1>

    </div>
</template>

<script>

export default {
    name: "FAQComponent",
    mounted() {
        console.log(JSON.parse(this.dataResponse))
    },
    props: [ ],
}
</script>

<style scoped>
    h1{
        width: 100%;
        font-size: 32px;
        line-height: 40px;
        margin-top: 20px;
        margin-bottom: 32px;
        text-align: center;
        font-weight: 600;
    }
</style>
