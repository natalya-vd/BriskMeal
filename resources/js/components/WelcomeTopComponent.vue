<template>
    <div class="welcomeTop" >
        <div class="welcomeTopBack container" >
           <div class="welcomeTopInfo">
                <h1>MORE OPTIONS,<br/>  MORE FLAVOR</h1>
                <h2>Now choose from all 30 weekly recipes - double the options! Plus, mix and match meals from different preferences in one weekly box: Keto + Paleo, Gluten Free, Fast & Fit, Mediterranean, Vegan and Vegetarian.</h2>
                <a  href="/plans" >Get Started</a>
           </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('welcomeTop Component mounted.')
        }
    }
</script>

<style scoped>
    .welcomeTop{
        height: 460px;
        margin: 0;
        background-image: url(https://www.greenchef.com/assets/greenchef/images/banners/homepage/cg/merged-menu-banner-sm.jpg);
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .welcomeTopBack{
        height: 100%;
        padding-top:50px;
        background-image: url(https://www.greenchef.com/assets/greenchef/images/banners/homepage/cg/merged-menu-banner-lg.jpg);
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .welcomeTopInfo{
        height: 98%;
        width: 50%;

        background-color: grey;
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
