<template>
    <div class="giftCardBlock">
        <gift-card-top
            :showModalSuccess="showModalSuccess"
            :visiblilityModalSuccess="visiblilityModalSuccess"
        ></gift-card-top>
        <div class="whyLoveIt">
            <div class="whyLoveItWrapper">
                <div class="whyLoveItGrid">
                    <div class="whyLoveItRow">
                        <div class="whyLoveItTitle">
                            <h2 class="whyLoveItText">Why they'll love it</h2>
                        </div>
                        <div class="whyLoveItItemWrapper">
                            <div class="whyLoveItItem">
                                <div class="whyLoveItItemTitle">
                                    <h3>Save them time and money</h3>
                                    <div class="whyLoveItItemText">
                                        Quick meals without the grocery trip
                                    </div>
                                </div>
                                <div class="whyLoveItItemIcon">
                                    <svg
                                        class="whyLoveItItemSvg"
                                        width="150px"
                                        height="150px"
                                        viewBox="0 0 500.000000 500.000000"
                                    >
                                        <g
                                            transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
                                            fill="#000000"
                                            stroke="none"
                                        >
                                            <path
                                                d="M2360 3301 c-240 -65 -419 -248 -475 -486 -59 -256 50 -539 265 -685 98 -66 172 -94 288 -110 70 -10 108 -10 171 -1 129 19 176 46 147 86 -11 15 -17 15 -71 1 -105 -27 -185 -30 -271 -11 -216 47 -379 189 -450 395 -23 68 -27 272 -5 335 34 103 77 171 156 250 82 82 142 119 249 153 71 23 252 22 325 -1 112 -35 231 -118 296 -208 38 -50 63 -61 85 -34 19 23 -2 57 -91 146 -126 126 -286 190 -467 188 -48 0 -116 -9 -152 -18z"
                                            ></path>
                                            <path
                                                d="M2435 2888 c-3 -7 -6 -87 -7 -178 l-3 -165 -130 -3 c-118 -2 -132 -4 -143 -23 -9 -14 -10 -25 -2 -39 10 -19 22 -20 173 -20 114 0 167 4 175 12 17 17 17 399 0 416 -16 16 -57 15 -63 0z"
                                            ></path>
                                            <path
                                                d="M2997 2829 c-11 -7 -17 -22 -17 -45 0 -31 -4 -37 -42 -53 -113 -49 -147 -171 -73 -259 29 -34 82 -58 149 -67 38 -5 58 -15 83 -40 38 -38 41 -57 13 -103 -51 -83 -181 -65 -212 30 -26 78 -89 55 -67 -25 14 -51 52 -92 104 -114 39 -16 45 -22 45 -48 0 -41 13 -57 41 -53 20 2 24 9 27 45 3 36 7 43 35 54 76 30 126 112 112 182 -18 84 -80 132 -189 148 -47 6 -66 14 -83 34 -33 38 -31 89 6 126 60 59 178 28 199 -54 18 -69 80 -55 67 15 -11 57 -41 95 -95 123 -45 23 -50 28 -50 60 0 39 -24 60 -53 44z"
                                            ></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="whyLoveItItemWrapper">
                            <div class="whyLoveItItem">
                                <div class="whyLoveItItemTitle">
                                    <h3>The gift of choice</h3>
                                    <div class="whyLoveItItemText">
                                        Meals for their lifestyle
                                    </div>
                                </div>
                                <div class="whyLoveItItemIcon">
                                    <svg
                                        class="whyLoveItItemSvg"
                                        width="150px"
                                        height="150px"
                                        viewBox="0 0 500.000000 500.000000"
                                    >
                                        <g
                                            transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
                                            fill="#000000"
                                            stroke="none"
                                        >
                                            <path
                                                d="M2360 3323 c-188 -37 -370 -179 -445 -348 -77 -172 -72 -390 13 -545 81 -148 186 -239 347 -302 53 -20 77 -23 200 -23 150 0 181 7 308 71 69 35 194 163 234 239 155 296 70 636 -204 816 -108 70 -175 91 -313 94 -63 2 -126 1 -140 -2z m232 -74 c136 -28 282 -133 353 -254 86 -145 100 -334 38 -485 -34 -83 -52 -109 -118 -175 -112 -113 -236 -165 -390 -165 -97 0 -152 13 -243 57 -198 96 -316 307 -299 534 8 100 36 177 94 263 123 181 348 270 565 225z"
                                            />
                                            <path
                                                d="M2240 2898 c-41 -44 -10 -118 50 -118 31 0 70 39 70 70 0 10 -9 29 -21 44 -26 33 -70 35 -99 4z"
                                            />
                                            <path
                                                d="M2619 2902 c-47 -39 -16 -122 47 -122 33 0 64 34 64 70 0 60 -64 90 -111 52z"
                                            />
                                            <path
                                                d="M2187 2604 c-18 -18 25 -124 65 -160 59 -54 106 -69 223 -69 100 0 115 3 161 27 82 43 121 96 127 173 2 27 -1 30 -29 33 -29 3 -32 0 -39 -35 -9 -51 -68 -106 -128 -122 -144 -36 -279 14 -307 113 -11 40 -16 46 -40 46 -15 0 -29 -3 -33 -6z"
                                            />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="whyLoveItItemWrapper">
                            <div class="whyLoveItItem">
                                <div class="whyLoveItItemTitle">
                                    <h3>Easy-to-follow recipes</h3>
                                    <div class="whyLoveItItemText">
                                        Making home-cooking simple
                                    </div>
                                </div>
                                <div class="whyLoveItItemIcon">
                                    <svg
                                        class="whyLoveItItemSvg"
                                        width="150px"
                                        height="150px"
                                        viewBox="0 0 500.000000 500.000000"
                                    >
                                        <g
                                            transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
                                            fill="#000000"
                                            stroke="none"
                                        >
                                            <path
                                                d="M2346 3268 c-23 -33 -5 -56 47 -60 40 -3 42 -4 45 -38 l3 -36 -62 -13 c-137 -28 -272 -123 -342 -240 -168 -282 -44 -633 268 -753 50 -19 79 -23 170 -23 115 0 130 3 240 56 138 67 253 229 271 383 6 48 4 55 -15 65 -17 9 -24 8 -41 -9 -11 -11 -20 -29 -20 -41 0 -44 -33 -131 -70 -187 -82 -122 -213 -192 -359 -192 -181 1 -322 89 -400 250 -35 72 -36 79 -36 185 0 103 2 114 32 178 44 93 119 169 212 215 72 36 79 37 190 39 64 1 122 2 129 2 7 1 12 14 12 31 0 25 -5 30 -37 39 -21 6 -44 11 -50 11 -8 0 -13 15 -13 39 0 39 0 40 41 43 53 4 71 28 45 57 -17 19 -31 21 -132 21 -104 0 -114 -2 -128 -22z"
                                            />
                                            <path
                                                d="M2964 3241 c-200 -149 -419 -330 -422 -349 -3 -18 8 -27 62 -54 36 -18 66 -36 66 -40 0 -5 -31 -71 -70 -148 -38 -77 -70 -146 -70 -154 0 -28 26 -38 57 -22 25 13 217 145 381 262 83 59 82 76 -10 121 -38 18 -68 35 -68 38 0 3 34 75 75 161 41 86 75 164 75 175 0 10 -8 23 -19 28 -15 8 -27 4 -57 -18z m-99 -226 c-19 -41 -41 -88 -50 -104 -20 -40 -11 -58 46 -86 26 -14 50 -28 52 -32 5 -8 -234 -176 -240 -169 -2 2 17 47 43 99 46 92 47 97 31 115 -10 11 -36 27 -58 37 -22 10 -38 22 -37 26 4 10 231 189 240 189 4 0 -9 -34 -27 -75z"
                                            />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="whyLoveItItemWrapper">
                            <div class="whyLoveItItem">
                                <div class="whyLoveItItemTitle">
                                    <h3>Make their special day</h3>
                                    <div class="whyLoveItItemText">
                                        Scheduled delivery for the occasion
                                    </div>
                                </div>
                                <div class="whyLoveItItemIcon">
                                    <svg
                                        class="whyLoveItItemSvg"
                                        width="150px"
                                        height="150px"
                                        viewBox="0 0 500.000000 500.000000"
                                    >
                                        <g
                                            transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
                                            fill="#000000"
                                            stroke="none"
                                        >
                                            <path
                                                d="M2043 3279 c-21 -8 -27 -22 -35 -74 -3 -16 -12 -21 -53 -23 -34 -2 -57 -10 -72 -24 l-23 -21 0 -522 0 -522 23 -21 23 -22 570 0 c614 1 593 -1 614 54 14 38 14 982 0 1023 -13 37 -40 52 -100 55 -44 3 -45 4 -48 41 -2 26 -10 42 -28 53 -22 15 -26 15 -48 0 -18 -11 -26 -27 -28 -53 l-3 -38 -354 -3 c-385 -2 -371 -5 -371 54 0 36 -31 56 -67 43z m-26 -206 c15 -31 23 -38 47 -38 18 0 32 7 37 18 5 9 13 25 18 35 7 16 36 17 342 20 184 1 344 0 357 -3 15 -4 22 -13 22 -29 0 -31 22 -48 57 -44 22 2 30 10 39 38 10 31 16 35 45 35 l34 0 3 -62 3 -63 -541 0 -540 0 0 65 0 65 29 0 c24 0 33 -7 48 -37z m1001 -560 l2 -383 -540 0 -540 0 0 385 0 385 538 -2 537 -3 3 -382z"
                                            />
                                            <path
                                                d="M2034 2806 c-11 -29 1 -50 35 -59 60 -15 105 25 69 61 -17 17 -97 16 -104 -2z"
                                            />
                                            <path
                                                d="M2294 2806 c-12 -31 1 -51 37 -57 64 -10 103 23 67 59 -17 17 -97 16 -104 -2z"
                                            />
                                            <path
                                                d="M2550 2805 c-15 -18 -5 -51 19 -58 10 -2 35 -1 57 2 42 7 56 30 34 56 -16 20 -94 20 -110 0z"
                                            />
                                            <path
                                                d="M2810 2805 c-31 -37 27 -77 82 -56 30 11 39 29 26 54 -11 22 -90 24 -108 2z"
                                            />
                                            <path
                                                d="M2034 2626 c-10 -27 1 -51 29 -60 54 -19 108 22 77 59 -17 20 -99 20 -106 1z"
                                            />
                                            <path
                                                d="M2290 2621 c-13 -25 -13 -27 6 -45 30 -31 114 -14 114 22 0 29 -21 42 -67 42 -32 0 -45 -5 -53 -19z"
                                            />
                                            <path
                                                d="M2550 2625 c-30 -36 25 -76 84 -61 29 7 43 41 26 61 -16 20 -94 20 -110 0z"
                                            />
                                            <path
                                                d="M2812 2628 c-31 -31 -1 -68 55 -68 46 0 69 28 51 63 -10 20 -87 24 -106 5z"
                                            />
                                            <path
                                                d="M2037 2453 c-11 -11 -8 -48 5 -61 17 -17 83 -15 98 3 7 8 10 25 6 40 -6 22 -11 25 -55 25 -26 0 -51 -3 -54 -7z"
                                            />
                                            <path
                                                d="M2290 2440 c-18 -34 13 -62 63 -58 81 6 76 71 -6 76 -38 3 -48 0 -57 -18z"
                                            />
                                            <path
                                                d="M2552 2448 c-34 -34 2 -71 65 -66 43 4 64 29 47 56 -14 21 -93 29 -112 10z"
                                            />
                                            <path
                                                d="M2812 2448 c-31 -31 -1 -68 55 -68 41 0 55 13 51 46 -3 27 -7 29 -48 32 -26 2 -50 -2 -58 -10z"
                                            />
                                            <path
                                                d="M2042 2271 c-23 -14 -10 -55 21 -65 54 -19 108 22 77 59 -13 16 -77 20 -98 6z"
                                            />
                                            <path
                                                d="M2296 2264 c-9 -8 -16 -19 -16 -24 0 -19 33 -40 61 -40 58 0 89 36 57 68 -17 17 -84 15 -102 -4z"
                                            />
                                            <path
                                                d="M2552 2268 c-18 -18 -14 -46 7 -58 43 -22 111 -5 111 28 0 29 -21 42 -65 42 -23 0 -46 -5 -53 -12z"
                                            />
                                            <path
                                                d="M2812 2268 c-32 -32 -1 -68 57 -68 28 0 61 21 61 40 0 34 -91 55 -118 28z"
                                            />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="whyLoveIt">
            <div class="whyLoveItWrapper">
                <div class="whyLoveItGrid">
                    <div class="whyLoveItRow">
                        <div class="whyLoveItTitle">
                            <h2 class="whyLoveItText">Here's how it works</h2>
                        </div>
                        <div class="howItWorksItemWrapper">
                            <div class="whyLoveItItem">
                                <div
                                    class="whyLoveItItemTitle howItWorksItemTitle"
                                >
                                    <h3>
                                        Choose a date for us to email the gift
                                        card
                                    </h3>
                                </div>
                                <div class="whyLoveItItemIcon">
                                    <div
                                        class="whyLoveItItemImg firstImg"
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="howItWorksItemWrapper">
                            <div class="whyLoveItItem">
                                <div
                                    class="whyLoveItItemTitle howItWorksItemTitle"
                                >
                                    <h3>They choose their meals</h3>
                                </div>
                                <div class="whyLoveItItemIcon">
                                    <div
                                        class="whyLoveItItemImg secondImg"
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="howItWorksItemWrapper">
                            <div class="whyLoveItItem">
                                <div
                                    class="whyLoveItItemTitle howItWorksItemTitle"
                                >
                                    <h3>We deliver to their doorstep</h3>
                                </div>
                                <div class="whyLoveItItemIcon">
                                    <div
                                        class="whyLoveItItemImg thirdImg"
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="sendBtnWrapper" role="cell">
                            <button
                                @click="showModalSuccess"
                                class="sendGiftCard"
                            >
                                <span>Buy a card</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <questions-block
            v-for="item in questions"
            :key="item.id"
            :currBlock="1"
            :faqs="item.faqs"
            :item="item"
        ></questions-block>
        <button onclick="window.location.href='/faq'" class="allFaqsBtn">
            <span>See all FAQs</span>
        </button>
        <success-modal
            :showModalSuccess="showModalSuccess"
            :visiblilityModalSuccess="visiblilityModalSuccess"
            ><template v-slot:title
                ><h2 class="successTitle">Congratulations!</h2> </template
            ><template v-slot:text>
                <h3 class="successText">
                    Our operator will contact you for further card processing.
                    <a href="/catalog" class="successDelivery"
                        >Continue shopping</a
                    >
                </h3>
            </template></success-modal
        >
    </div>
</template>

<script>
import GiftCardTop from "./GiftCardTop.vue";
import QuestionsBlock from "./QuestionsBlock.vue";
import SuccessModal from "./SuccessModal.vue";
export default {
    components: {
        GiftCardTop,
        QuestionsBlock,
        SuccessModal,
    },
    data() {
        return {
            questions: [
                {
                    id: 1,
                    title: "Have Questions?",
                    faqs: [
                        {
                            id: 1,
                            question: "How do I redeem a gift card?",
                            answer: "If you’re an existing user, access your profile at the top right corner and select ‘Payment, Gifts and Vouchers’ to redeem your card. For new users, you can redeem your card here or check the email you received with your gift card for instructions.",
                        },
                        {
                            id: 2,
                            question: "How do I check my remaining balance?",
                            answer: "Your remaining balance will appear as credits under your account settings. We’ll automatically apply it to upcoming orders.",
                        },
                        {
                            id: 3,
                            question:
                                "I have received more than one gift card. Can I use them together?",
                            answer: "You can only redeem one gift card per plan at one time. Please contact our Customer Care team if you need further assistance.",
                        },
                        {
                            id: 4,
                            question:
                                "Can I use my gift card code with other Green Chef discount codes?",
                            answer: "You can’t use a gift card code together with other discount codes. Only one gift card or discount code can be used per plan.",
                        },
                        {
                            id: 5,
                            question:
                                "Can I use my gift card code on top of credits?",
                            answer: "Yes, if you have existing credits, we’ll apply both the gift card credit and your existing credits to your order.",
                        },
                        {
                            id: 6,
                            question:
                                "If I purchase a gift card for someone, will that automatically create a subscription for me?",
                            answer: "No, it will only create an account and not subscribe you to a plan. You have the option to sign up for a subscription under your account settings.",
                        },
                        {
                            id: 7,
                            question:
                                "Why is my credit card information needed to redeem a gift card?",
                            answer: "In case the gift card amount doesn’t fully cover the order, we need an alternative payment method to make sure it goes through.",
                        },
                        {
                            id: 8,
                            question: "Can I purchase a physical gift card?",
                            answer: "We don’t offer physical gift cards, but we take care of sending the digital gift card to your recipient.",
                        },
                        {
                            id: 9,
                            question:
                                "If I send someone a gift card in another country, can they use it there?",
                            answer: "Our gift cards can only be used in the US.",
                        },
                        {
                            id: 10,
                            question:
                                "Can I purchase multiple gift cards in one transaction?",
                            answer: "If you’d like to purchase gift cards in bulk for a large group, please complete the request form.",
                        },
                    ],
                },
            ],
            visiblilityModalSuccess: false,
        };
    },
    methods: {
        showModalSuccess() {
            this.visiblilityModalSuccess = !this.visiblilityModalSuccess;
        },
    },
};
</script>

<style scoped>
.giftCardBlock {
    background-color: transparent;
}

.whyLoveIt {
    padding: 32px 0px;
    text-align: center;
    background-color: white;
}

.whyLoveItWrapper {
    flex: 1 1 auto;
    box-sizing: border-box;
    width: 100%;
    max-width: 1140px;
    margin: 0px auto;
    display: block !important;
}

.whyLoveItGrid {
    flex: 1 1 auto;
    box-sizing: border-box;
    width: auto;
    margin: 0px auto;
}

.whyLoveItRow {
    display: flex;
    height: 100%;
    width: 100%;
    flex-flow: row wrap;
    box-sizing: border-box;
    justify-content: space-between;
}

.whyLoveItTitle {
    flex: 1 1 0px;
    box-sizing: border-box;
}

.whyLoveItItemWrapper,
.howItWorksItemWrapper {
    flex: 1 1 0px;
    box-sizing: border-box;
}

.whyLoveItText {
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: 16px !important;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-size: 24px;
    line-height: 32px;
    color: #4b4d4c;
    text-transform: none;
    font-weight: 700;
}

.whyLoveItItem {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    text-align: left;
}

.whyLoveItItemTitle {
    flex: 1 1 0%;
    padding-right: 8px;
}

.whyLoveItItemTitle > h3 {
    margin: 0px 0px 8px;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-size: 20px;
    line-height: 30px;
    color: #333;
    text-transform: none;
    font-weight: 700;
}

.whyLoveItItemText {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    text-align: left;
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
    color: #222;
}

.whyLoveItItemIcon {
    width: 130px;
}

.whyLoveItItemSvg {
    overflow: hidden;
    border-radius: 3px;
}

.whyLoveItItemImg {
    overflow: hidden;
    padding-top: 88%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    border-radius: 3px;
}

.howItWorksItemTitle {
    margin-top: 16px;
}

.firstImg {
    background-image: url("../../../public/gift_card_img/card-1.png");
}

.secondImg {
    background-image: url("../../../public/gift_card_img/card-2.png");
}

.thirdImg {
    background-image: url("../../../public/gift_card_img/card-3.png");
}

.sendBtnWrapper {
    flex: 1 1 0px;
    box-sizing: border-box;
}

.sendGiftCard {
    border-width: 2px;
    border-style: solid;
    cursor: pointer;
    opacity: 1;
    display: inline-block;
    text-align: center;
    padding-left: 20px;
    padding-right: 20px;
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
    line-height: 46px;
    background-color: rgb(66, 105, 61);
    color: rgb(255, 255, 255);
    border-color: rgb(66, 105, 61);
    box-shadow: none;
    border-radius: 4px;
    margin-top: 24px;
    height: 48px;
    width: 208px;
    transition-property: color, background, border, box-shadow, opacity !important;
}

.sendGiftCard:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
    color: rgb(255, 255, 255);
}

.allFaqsBtn {
    border-width: 2px;
    border-style: solid;
    cursor: pointer;
    opacity: 1;
    display: inline-block;
    text-align: center;
    padding-left: 20px;
    padding-right: 20px;
    transition-duration: 0.3s;
    transition-timing-function: ease-in-out;
    transition-delay: 0s;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-size: 18px;
    min-width: 100px;
    text-decoration: none;
    text-transform: none;
    position: relative;
    line-height: 46px;
    background-color: rgb(66, 105, 61);
    color: rgb(255, 255, 255);
    border-color: rgb(66, 105, 61);
    box-shadow: none;
    border-radius: 4px;
    margin-top: 24px;
    font-weight: 700;
    height: 48px;
    width: 208px;
    transition-property: color, background, border, box-shadow, opacity !important;
}

.allFaqsBtn:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
    color: rgb(255, 255, 255);
}

@media only screen and (min-width: 0px) and (max-width: 767px) {
    .whyLoveIt {
        padding: 40px 0px;
    }

    /* .whyLoveItItem {
        padding-bottom: 32px;
    } */
}

@media only screen and (min-width: 0px) {
    .whyLoveItWrapper {
        padding-left: 10px;
        padding-right: 10px;
    }

    .whyLoveItTitle {
        flex-basis: 100%;
        max-width: 100%;
    }

    .whyLoveItItemWrapper,
    .howItWorksItemWrapper {
        flex-basis: 100%;
        max-width: 100%;
    }

    .sendBtnWrapper {
        padding-left: 7.5px;
        padding-right: 7.5px;
    }
}

@media only screen and (min-width: 768px) {
    .whyLoveItWrapper {
        padding-left: 15px;
        padding-right: 15px;
    }

    .whyLoveItItem {
        -webkit-box-pack: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .whyLoveItItemWrapper {
        flex-basis: 25%;
        max-width: 25%;
    }

    .whyLoveItItemTitle {
        padding-right: 0px;
        order: 1;
    }

    .whyLoveItItemText {
        -webkit-box-pack: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .whyLoveItItemIcon {
        width: 100%;
    }

    .whyLoveItItemImg {
        background-position: center center;
        padding-top: 70%;
    }

    .howItWorksItemWrapper {
        flex-basis: 33.3%;
        max-width: 33.3%;
    }

    .sendBtnWrapper {
        padding-left: 15px;
        padding-right: 15px;
    }
}

@media only screen and (min-width: 769px) and (max-width: 1199px) {
    .whyLoveItGrid {
        width: 705px;
    }
}

@media only screen and (min-width: 1200px) {
    .whyLoveIt {
        padding: 56px 0px;
    }

    .whyLoveItWrapper {
        padding-left: 20px;
        padding-right: 20px;
    }

    .whyLoveItGrid {
        padding: 0px 16px;
    }

    .whyLoveItText {
        font-size: 32px;
        line-height: 38px;
    }

    .whyLoveItItemWrapper,
    .howItWorksItemWrapper {
        padding-right: 15px;
        padding-left: 15px;
    }

    .whyLoveItItemTitle > h3 {
        font-size: 24px;
        line-height: 30px;
    }
}

@media only screen and (max-width: 767px) {
}
</style>
