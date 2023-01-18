<template>
    <div class="feelgreat" >
        <div class="container">
            <div class="feelgreatInfoBox">
                <h2>Feel Great About Your Food</h2>
                <h3>It's right in the name: Green Chef is all about eating and living green. We are a USDA certified organic company. We work with farmers to source sustainable, delicious ingredients</h3>
                <div class="feelgreatJoinBtnPlace"><a href="/plans"> Join Now</a></div>
            </div>        
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Welcome feelgreat Component mounted.')
        }
    }
</script>

<style scoped>
    .feelgreat{
        background-image: url(https://www.everyplate.com/assets/everyplate/images/banners/bottombanner/footer-hero-bg.jpg);
        background-position-x: center;
        background-position-y: top;
        background-size: cover;
        height:400px;
        width:100%;
    }
    .feelgreatInfoBox{
        margin-top: 56px;
        margin-left: 0px;
        height: 344px;
        min-width: 200px;
        display: flex;
        flex-direction: column;
    }
    .feelgreatJoinBtnPlace{
        width: 100%;
        height: 48px;
        margin-bottom: 12px;
        display: flex;
        justify-content: start;
    }
    a {
        border-width: 2px;
        border-style: solid;
        cursor: pointer;
        opacity: 1;
        display: inline-block;
        text-align: center;
        transition-duration: 0.3s;
        transition-timing-function: ease-in-out;
        transition-delay: 0s;
        font-weight: 700;
        font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
        font-size: 18px;
        min-width: 100px;
        text-decoration: none;
        text-transform: none;
        position: relative;
        line-height: 36px;
        height: 40px;
        background-color: rgb(66, 105, 61);
        color: rgb(255, 255, 255);
        border-color: rgb(66, 105, 61);
        box-shadow: none;
        border-radius: 4px;
        padding-left: 24px;
        padding-right: 24px;
        transition-property: color, background, border, box-shadow, opacity !important;
        text-decoration: none;
        margin-bottom: 24px;
    }
</style>
