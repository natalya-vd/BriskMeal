<template>
    <div class="container recipyPageHeader" >
        RecipyPageHeader
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('RecipyPageHeaderr Component mounted.')
        }
    }
</script>

<style scoped>
.recipyPageHeader{
    margin-bottom: 24px;
    background-color: pink;
    width: 100%;
    height: 140px;
}

@media only screen and (min-width: 1200px){
    .recipyPageHeader{
        width: 1100px;
        height: 70px;
        padding-right: 15px;
        padding-left: 15px;
    }
}

</style>
