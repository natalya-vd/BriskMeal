<template>
    <div class="container welcomeSliderBlock" >
        <h2>Next Week’s Menu</h2>
        <h3>Choose from 30 delicious and affordable recipes that change with every week</h3>
        <welcome-caruselle></welcome-caruselle>
        <div class="welcomeSliderDungeon">
            <a href="/catalog" style="color: white;">See The Menu</a>
            <p>Simply select recipes after signing up</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['recepies'],
        computed: {
            getAllergens() {
                return JSON.parse(this.recepies);
            }
        },
        mounted() {
            console.log(JSON.parse(this.getAllergens.photo))
        }
    }
</script>

<style scoped>
    .welcomeSliderBlock{
        width: 100%;
        height: 564px;
        margin-top: 32px;
        margin-bottom: 32px;
        display: flex;
        flex-direction: column;
    }
    h2{
        color: #4b4d4c;
        font-size: 32px;
        line-height: 38px;
        font-weight: bold;
        margin-bottom: 12px !important;
    }
    h3{
        color: rgb(51, 51, 51);
        font-size: 18px;
        line-height: 24px;
        font-weight: bold;
        margin-bottom: 32px;
    }
    .welcomeSliderDungeon{
        width: 100%;
        height: 88px;
        text-align: center;
    }
    p{
        color: #222;
        font-size: 16px;
        line-height: 24px;
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
    padding-left: 84px;
    padding-right: 84px;
    transition-property: color, background, border, box-shadow, opacity !important;
    text-decoration: none;
    margin-bottom: 24px;
}
</style>
