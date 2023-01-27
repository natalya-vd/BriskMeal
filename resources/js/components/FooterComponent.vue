<template>
    <div class="container footerBlock" >
        <div class="footerBlockSection">
            <div v-if="isTopFooterShowed">BigTopFooter</div>
            <div v-else>
                <div class="downloadAppLinkPlace">
                    <a class="accordionLi downloadAppLink">Download our app</a>
                </div>
                <div class="accordion" id="accordionExample">
                    <hr class="lineHR" />
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Brisk Meal
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <ul class="accordion-body">
                            <li class="accordionLi"><a href="/catalog">Weekly Menu</a></li>
                            <li class="accordionLi"><a href="/plans">Our Plans</a></li>
                            <li class="accordionLi"><a href="/catalog">Delivery Options</a></li>
                            <li class="accordionLi"><a href="/plans">How It Works</a></li>
                            <li class="accordionLi"><a href="/plans">Hero Discounts</a></li>
                        </ul>
                    </div>
                    </div>
                    <hr class="lineHR"/>
                    <div class="accordion-item">

                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Help center
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <ul class="accordion-body">
                            <li class="accordionLi"><a href="/catalog">Help center and FAQ</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin:0"/>
        <div class="footerBlockSection">DownFooter</div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            myWidth: 1,
        }),
        computed: {
            isTopFooterShowed(){
                if (this.myWidth > 767){
                    return true
                }else {
                    return false
                } 
            }
        },
        methods: {
            updateWidth() {
                this.myWidth = window.innerWidth;
            }
        },
        mounted() {
            this.updateWidth();
            window.addEventListener('resize', this.updateWidth);
        }
    }
</script>

<style scoped>
    .accordion{
        --bs-accordion-border-color:white;
    }
    .accordion-button{
        font-weight: 700;
        font-size: 16px;
        line-height: 24px;
    }
    .accordion-button:not(.collapsed) {
        color: grey;
        background-color: white;
        box-shadow: none;
    }
    .accordion-button:focus {
        box-shadow: none;
    }
    .accordion-button::after {
        background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'><path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/></svg>");
        background-color: #42693D;
        background-size: 80% 80%;
        background-position-x: center;
        background-position-y: center;
        border-radius: 50%;
    }
    .accordion-body{
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: start;
        list-style-type: none;
    }
    .accordionLi{
        display: flex;
        justify-content: start;
        padding: 2px 0 2px 10% ;
        color: rgb(66, 105, 61);
        text-decoration: underline;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
    }
    .footerBlock{
        display: flex;
        flex-direction: column;
        padding: 0;
        margin: 0;
    }
    .footerBlockSection, .downloadAppLinkPlace{
        width: 100%;
        min-height: 50px;

    }
    .lineHR{
        color: black;
        margin: 0;
        opacity: 0.7;
        size: 3px;
    }
    .downloadAppLinkPlace{
        width: 100%;
        min-height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 15px;
    }
    .downloadAppLink{
        font-weight: 400;
        font-size: 16px;
        line-height: 24px; 
    }

</style>
