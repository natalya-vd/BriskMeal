<template>
    <section class="container faqArea">
        <h1 class="text-center font-weight-bold">Frequently Asked Questions</h1>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="What can we help you with?" aria-label="What can we help you with?" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#128269;</button>
        </div>

        <div class="faqBtnsDesk">
            <div class="faqBtnsCard">
                <div>
                    <div class="web-ukuwzk">
                        <img class="web-1qm0795" src="https://www.everyplate.com/assets/greenchef/icons/heart_health_2.svg.svg" alt="Food Safety and Covid-19 Updates" />
                    </div>
                    <h2>Food Safety and Covid-19 Updates</h2>
                </div>
            </div>
            <div class="faqBtnsCard"> 
                <div>
                    <div class="web-ukuwzk">
                         <img class="web-1qm0795" src="https://cdn.everyplate.com/cg/faq/about.svg" alt="About Green Chef"/>
                    </div>
                    <h2>About Brisk Meal</h2>
                </div>
            </div>
            <div class="faqBtnsCard">
                <div>
                    <div class="web-ukuwzk">
                         <img class="web-1qm0795" src="https://cdn.everyplate.com/cg/faq/recipes.svg" alt="Recipes &amp; Ingredients"/>
                    </div>
                    <h2>Recipes & Ingredients</h2>
                </div>
            </div>
            <div class="faqBtnsCard"> 
                <div>
                    <div class="web-ukuwzk">
                        <img class="web-1qm0795" src="https://cdn.everyplate.com/cg/faq/shipping.svg" alt="Shipping &amp; Delivery"/>
                    </div>
                    <h2>Shipping & Delivery</h2>
                </div>
            </div>
            <div class="faqBtnsCard"> 
                <div>
                    <div class="web-ukuwzk">
                        <img class="web-1qm0795" src="https://cdn.everyplate.com/cg/faq/billing.svg" alt="Billing"/>
                    </div>
                    <h2>Billing</h2>
                </div>
            </div>
            <div class="faqBtnsCard"> 
                <div>
                    <div class="web-ukuwzk">
                        <img class="web-1qm0795" src="https://cdn.everyplate.com/cg/faq/subscription.svg" alt="Managing My Subscription"/>
                    </div>
                    <h2>Managing My Subscription</h2>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    props: [ ],
    mounted() {
        
    }  
}
</script>

<style scoped>
    .faqArea{
        background-color: rgb(247, 247, 247);
    }
    h1{
        width: 100%;
        font-size: 32px;
        line-height: 40px;
        margin-top: 20px;
        margin-bottom: 32px;
        text-align: center;
        font-weight: 600;
    }
    h2{
        font-size: 18px;
        line-height: 24px;
        color: #333333;
        text-transform: uppercase;
        font-weight: bold;
        text-align: center;
     
    }
    .web-ukuwzk{
        width: 98%;
        height: 60%;
    }
    .web-1qm0795{
        height:50%;
        width: auto;
        margin-top: 50px;
    }
    .mb-3{
        width: 60%;
        margin-left: 15%;
    }
    .faqBtnsDesk{
        width: 98%;
        padding: 0 1% 0 1%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 60px;
    }
    .faqBtnsCard{
        width: 32%;
        min-height: 180px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        background-color: white;
        border-radius: 9px;
        box-shadow: rgb(212 217 216) 0px 2px 0px;
        text-align: center;
        user-select: none;
        color: rgb(51, 51, 51);
        transition: color 0.15s ease 0s, box-shadow 0.15s ease 0s, transform 0;
        padding: 16px 16px 32px 16px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        -webkit-text-size-adjust: 100%;
    }
@media only screen and (max-width: 1100px) {
    .faqBtnsCard{
        width: 48%;
        min-height: 180px;
    }
}
@media only screen and (max-width: 700px) {
    .faqBtnsCard{
        width: 98%;
        min-height: 180px;
    }
}
</style>
