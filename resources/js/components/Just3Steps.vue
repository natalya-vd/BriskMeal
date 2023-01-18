<template>
    <div class="just3steps" >
        <div class="just3stepsBlock">
            <div class="just3stepsTitle">Dinner's Just 3 Steps Away</div>
            <div class="just3stepsItems">
                <div class="just3stepsItem">
                    <div class="just3stepsItemImage" style="background-image: url(https://images.everyplate.com/f_auto,fl_lossy,q_auto,w_500/everyplate_contentful/5mIz4fhIwitKy0V8umaywu/69c0a4e2cbb83d875caac2098bef1faf/choose.png)"></div>
                    <div class="just3stepsItemTitle">Choose</div>
                    <div class="just3stepsItemText">
                        Now you can mix and match recipes from different preferences in the same weekly order - with 30 options!
                    </div>
                </div>
                <div class="just3stepsItem">
                    <div class="just3stepsItemImage"  style="background-image: url(https://images.everyplate.com/f_auto,fl_lossy,q_auto,w_500/everyplate_contentful/4A5vCP38CuhG8V0z96ujxR/080e2418f71e036943944e54400b02e2/cook.png)" ></div>
                    <div class="just3stepsItemTitle">Cook</div>
                    <div class="just3stepsItemText">
                        Our premium ingredients come pre-measured and prepped. Just follow our easy step-by-step instructions, photos included.
                    </div>
                </div>
                <div class="just3stepsItem">
                    <div class="just3stepsItemImage"  style="background-image: url(https://images.everyplate.com/f_auto,fl_lossy,q_auto,w_500/everyplate_contentful/3wcDjw42UWylTUQveRyIdX/4663aab4e9d6e3fb1d15756c21914f54/enjoy.png)"></div>
                    <div class="just3stepsItemTitle">Enjoy</div>
                    <div class="just3stepsItemText">
                        Our chef-curated recipes make it easier to try new flavors while keeping up with your lifestyle goals. 
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
    .just3steps{
        height:408px;
        width: 100%;
        margin: 56px 0 56px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .just3stepsBlock{
        height:100%;
        width: 1100px;
        display: flex;
        flex-direction: column;
    }
    .just3stepsTitle{
        width: 100%;
        height: 54px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #4b4d4c;
        font-size: 32px;
        line-height: 38px;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
    }
    .just3stepsItems{
        height: 354px;
        width: 100%;
        display: flex;
    }
    .just3stepsItem{
        height: 100%;
        width: 33.33%;
        padding: 0 15px 0 15px;

        display: flex;
        flex-direction: column;
    }
    .just3stepsItemImage{
        height: 228px;
        min-width: 326px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position-x: center;
   }
    .just3stepsItemTitle{
        height: 30px;
        min-width: 326px;
        margin-top:16px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #333;
        font-size: 24px;
        line-height: 30px;
        font-weight: bold;
    }

    .just3stepsItemText{
        height: 72px;
        min-width: 326px;
        color: #222;
        font-size: 15px;
        line-height: 24px;
    }
</style>
