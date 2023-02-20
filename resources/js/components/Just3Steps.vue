<template>
    <div class="just3steps">
        <div class="just3stepsBlock">
            <div class="just3stepsTitle">Dinner's Just 3 Steps Away</div>
            <div class="just3stepsItems">
                <div class="just3stepsItem">
                    <div
                        class="just3stepsItemImage"
                        style="background-image: url('images/choose.png')"
                    ></div>
                    <div class="just3stepsItemInfo">
                        <div class="just3stepsItemTitle">Choose</div>
                        <div class="just3stepsItemText">
                            Now you can mix and match recipes from different
                            preferences in the same weekly order - with 30
                            options!
                        </div>
                    </div>
                </div>
                <div class="just3stepsItem">
                    <div
                        class="just3stepsItemImage"
                        style="background-image: url('images/cook.png')"
                    ></div>
                    <div class="just3stepsItemInfo">
                        <div class="just3stepsItemTitle">Cook</div>
                        <div class="just3stepsItemText">
                            Our premium ingredients come pre-measured and
                            prepped. Just follow our easy step-by-step
                            instructions, photos included.
                        </div>
                    </div>
                </div>
                <div class="just3stepsItem">
                    <div
                        class="just3stepsItemImage"
                        style="background-image: url('images/enjoy.png')"
                    ></div>
                    <div class="just3stepsItemInfo">
                        <div class="just3stepsItemTitle">Enjoy</div>
                        <div class="just3stepsItemText">
                            Our chef-curated recipes make it easier to try new
                            flavors while keeping up with your lifestyle goals.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped>
.just3steps {
    width: 100%;
    margin: 56px 0 56px 0;
    display: flex;
    justify-content: center;
    align-items: center;
}
.just3stepsBlock {
    height: 100%;
    width: 1100px;
    display: flex;
    flex-direction: column;
}
.just3stepsTitle {
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
.just3stepsItems {
    height: 354px;
    width: 100%;
    display: flex;
}
.just3stepsItem {
    height: 100%;
    width: 33.33%;
    padding: 0 15px 0 15px;
    display: flex;
    flex-direction: column;
}
.just3stepsItemImage {
    height: 228px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position-x: center;
}
.just3stepsItemTitle {
    height: 30px;
    margin-top: 16px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #333;
    font-size: 24px;
    line-height: 30px;
    font-weight: bold;
}

.just3stepsItemText {
    height: 115px;
    color: #222;
    font-size: 15px;
    line-height: 24px;
    margin-top: 10px;
}
@media only screen and (max-width: 1100px) {
    .just3stepsBlock {
        width: 100%;
    }
}
@media only screen and (max-width: 770px) {
    .just3stepsItems {
        flex-direction: column;
        max-height: 438px;
    }
    .just3stepsItem {
        height: 33.33%;
        width: 100%;
        padding: 0 15px 0 15px;
        display: flex;
        flex-direction: row-reverse;
    }
    .just3stepsItemImage {
        height: 100%;
        width: 30%;
        background-size: contain;
        background-repeat: no-repeat;
        background-position-x: center;
    }
    .just3stepsItemInfo {
        height: 100%;
    }
    .just3stepsItemText {
        min-height: 50px;
        width: 100%;
        color: #222;
        font-size: 12px;
        line-height: 18px;
        padding: 0 5% 0 5%;
    }
    .just3stepsItemTitle {
        height: 30px;
        width: 100%;
        margin-top: 1px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #333;
        font-size: 22px;
        line-height: 26px;
        font-weight: bold;
    }
}
@media only screen and (max-width: 1200px) {
    .just3stepsItemText {
        padding: 0 5% 0 5%;
    }
}
@media only screen and (max-width: 350px) {
    .just3steps {
        max-height: 700px;
        min-height: 600px;
    }
    .just3stepsItems {
        flex-direction: column;
        max-height: 660px;
        min-height: 600px;
    }
    .just3stepsItem {
        height: 33.33%;
        width: 100%;
        padding: 0 15px 0 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .just3stepsItemImage {
        height: 100px;
        width: 100%;
    }
    .just3stepsItemText {
        width: 95%;
        padding: 0 2.5%;
        min-width: 250px;
    }
    .just3stepsItemTitle {
        min-width: 250px;
        font-size: 20px;
    }
}
</style>
