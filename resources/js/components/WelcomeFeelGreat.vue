<template>
    <div class="feelgreat" >
        <div class="container">
            <div class="feelgreatInfoBox">
                <h2>Feel Great About Your Food</h2>
                <h3>It's right in the name: BRISK MEAL is all about eating and living green. We are a USDA certified organic company. We work with farmers to source sustainable, delicious ingredients</h3>
                <div class="feelgreatJoinBtnPlace"><a href="/plans"> Join Now</a></div>
                <div class="feelgreatJoinSighns">
                    <img class="sign"  alt="saca" src="https://images.ctfassets.net/4frik3v39clf/7aGq7V1LkUFa8qEqewEg7l/9dd12d653d9805ebd2bd45f47022fccf/ccof-organic.svg"/>
                    <img class="sign"  alt="csasc" src="https://images.ctfassets.net/4frik3v39clf/75xdvbWDKkGGuhFOKoVHyi/c12f58753966365c6260aade5f2832cc/usda-organic.svg"/>
                    <div class="certifiedBox">
                        <div class="certified">BRISK MEAL IS A CERTIFIED ORGANIC COMPANY</div> 
                    </div>
                </div>
            </div>        
        </div>
    </div>
</template>

<script>
    export default {
        
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
        margin-left:5px;
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
    h2{
        color: #333333;
        margin: 0 0 16px;
        font-size: 32px;
        line-height: 38px;
        font-weight: bold;
        text-align: left;
    }
    h3{
        color: #333333;
        font-size: 18px;
        line-height: 24px;
        font-weight: normal;
        text-align: left;
        margin-bottom: 32px;
    }
    .feelgreatJoinSighns{
        width: 100%;
        height: 84px;
        display: flex;
        justify-content: start;
    }
    .sign{
        height: 60px;
        min-width: 45px;
        margin:12px;
    }
    .certifiedBox{
        width: 185px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: start;
    }
    .certified{
        width: 100%;
        height: 48px;
        text-align: center;
        color: #222;
        font-weight: 500;
        font-size: 14px;
    }

@media only screen and (min-width: 1601px) and (max-width: 2500px) {
    .feelgreatInfoBox{
        margin-left: calc((2600px - 100vw)/3);
    }
}
@media only screen and (min-width: 1301px) and (max-width: 1600px) {
    .feelgreatInfoBox{
        margin-left: calc((1600px - 100vw)/3 + 280px);
    }
}
@media only screen and (min-width: 1101px) and (max-width: 1300px) {
    .feelgreatInfoBox{
        margin-left: calc((1300px - 100vw)/9 + 380px);
    }
}
@media only screen  and (max-width: 1100px) {
    .feelgreatInfoBox{
        margin-left: 25%;
    }
}
@media only screen and (max-width: 770px) {
    .feelgreat{
        background: url(https://www.everyplate.com/assets/everyplate/images/banners/bottombanner/footer-hero-bg-sm.jpg);
        background-position-x: left;
        background-position-y: top;
        background-size:  100% auto;
        height:800px;
        width:100%;
    }
    .feelgreatInfoBox{
        margin-top: 500px;
        margin-left:5px;
        height: 300px;
        min-width: 250px;
        display: flex;
        flex-direction: column;
    }
    .feelgreatJoinBtnPlace{
        justify-content: center;
    }
    .feelgreatJoinSighns{
        justify-content: center;
    }
}
@media only screen and (max-width: 600px) {
    .feelgreatInfoBox{
        margin-top: 380px;
    }
}
@media only screen and (max-width: 500px) {
    .feelgreat{
        height:700px;
    }
    .feelgreatInfoBox{
        margin-top: 350px;
        height: 250px;
    }
}
@media only screen and (max-width: 470px) {
    .feelgreat{
        height:700px;
    }
    .feelgreatInfoBox{
        margin-top: 320px;
        height: 380px;
    }
}
@media only screen and (max-width: 380px) {
    .feelgreat{
        height:700px;
    }
    .feelgreatInfoBox{
        margin-top: 300px;
        height: 400px;
    }
    .certified{
        font-weight: 400;
        font-size: 12px;
    }
}
</style>
