<template>
    <div v-if="currBlock === item.id" class="questionsBlock">
        <div class="container">
            <h3>{{ item.title }}</h3>
            <div
                v-for="faq in faqs"
                :key="faq.id"
                class="accordion accordion-flush"
            >
                <div class="accordion-item">
                    <h2 class="accordion-header" :id="'heading' + faq.id">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            :data-bs-target="'#collapse' + faq.id"
                            aria-expanded="true"
                            aria-controls="collapseOne"
                        >
                            {{ faq.question }}
                        </button>
                    </h2>
                    <div
                        :id="'collapse' + faq.id"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample"
                    >
                        <div class="accordion-body">
                            {{ faq.answer }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["item", "currBlock", "faqs", "isShown"],
    data() {
        return {};
    },
    methods: {},
    mounted() {
        console.log(this.faqs);
    },
};
</script>

<style scoped>
h3 {
    text-align: left;
    padding-left: 20px;
    font-size: 20px;
    line-height: 30px;
    margin: 0px 0px 16px;
    font-weight: 700;
}
.accordion-button {
    color: rgb(51, 51, 51);
    text-transform: none;
    font-size: 16px;
    line-height: 22px;
    cursor: pointer;
    font-weight: bold;
}
.accordion-button:not(.collapsed) {
    background-color: white;
    box-shadow: none;
}
.accordion-button::after {
    background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'><path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/></svg>");
    background-color: #42693d;
    background-size: 80% 80%;
    background-position-x: center;
    background-position-y: center;
    border-radius: 50%;
}
.accordion-body {
    text-align: left;
}
</style>
