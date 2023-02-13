<template>
    <div class="welcomeTop" style="background-image: url('images/merged-menu-banner-sm.jpg')">
        <div class="welcomeTopBack container">
            <div class="welcomeTopInfo">
                <h1>
                    MORE OPTIONS,<br />
                    MORE FLAVOR
                </h1>
                <h2>
                    Now choose from all 30 weekly recipes - double the options!
                    Plus, mix and match meals from different preferences in one
                    weekly box: Keto + Paleo, Gluten Free, Fast & Fit,
                    Mediterranean, Vegan and Vegetarian.
                </h2>
                <a href="/plans">Get Started</a>
                <div class="feelgreatJoinSighns">
                    <img
                        class="sign"
                        alt="csasc"
                        src="images/usda-organic.svg"
                    />
                    <div class="certifiedBox">
                        <div class="certified">
                            BRISK MEAL IS A CERTIFIED ORGANIC COMPANY
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {},
};
</script>

<style scoped>
.welcomeTop {
    height: 460px;
    margin: 0;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
}
.welcomeTopBack {
    height: 100%;
    padding-top: 50px;
    background-image: url("images/merged-menu-banner-lg.jpg");
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
}
.welcomeTopInfo {
    height: 98%;
    width: 50%;
    text-align: left;
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
    padding-left: 64px;
    padding-right: 64px;
    transition-property: color, background, border, box-shadow, opacity !important;
    text-decoration: none;
    margin-bottom: 24px;
}
h1 {
    color: #333333;
    font-size: 40px;
    line-height: 50px;
    font-weight: bold;
}
h2 {
    color: #333333;
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 24px;
    font-weight: 400;
}
.feelgreatJoinSighns {
    width: 100%;
    height: 84px;
    display: flex;
    justify-content: start;
}
.sign {
    height: 60px;
    min-width: 45px;
    margin: 12px;
}
.certifiedBox {
    width: 185px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: start;
}
.certified {
    width: 100%;
    height: 48px;
    text-align: center;
    color: #222;
    font-weight: 500;
    font-size: 14px;
}
@media only screen and (max-width: 770px) {
    .welcomeTopBack {
        height: 460px;
        width: 100%;
        background-image: none;
    }
    .welcomeTopInfo {
        height: 98%;
        width: 100%;
        text-align: center;
        padding: 0 3% 0 3%;
    }
    h1 {
        font-size: 35px;
        line-height: 42px;
    }

    .feelgreatJoinSighns {
        justify-content: center;
    }
}
@media only screen and (max-width: 500px) {
    .welcomeTopBack {
        height: 460px;
        padding-top: 10px;
    }
    .welcomeTopInfo {
        height: 98%;
        width: 100%;
        text-align: center;
        padding: 0 3% 0 3%;
    }
    h1 {
        font-size: 30px;
        line-height: 40px;
    }
}
@media only screen and (max-width: 350px) {
    .welcomeTopBack {
        height: 460px;
        padding-top: 5px;
    }
    .welcomeTopInfo {
        height: 98%;
        width: 100%;
        text-align: center;
        padding: 0 3% 0 3%;
    }
    h1 {
        font-size: 26px;
        line-height: 35px;
    }
    h2 {
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 18px;
    }
}
</style>
