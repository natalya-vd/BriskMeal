<template>
    <div  v-if="currBlock===item.id" class="questionsBlock">
        <h3>{{ item.title }}</h3>
        <div v-for="faq in faqs"  :key="faq.id">
            <h5>Qestion:{{ faq.question }}</h5>
            <h5>Answer:{{ faq.answer }}</h5>
        </div>
    </div>
</template>

<script>

export default {
    props: ['item', 'currBlock', 'faqs'],
    data() {
        return {
            
        }
    },
    methods: {
    
    },
    mounted() {
        console.log(this.faqs);
    }  
}
</script>

<style scoped>
   
</style>
