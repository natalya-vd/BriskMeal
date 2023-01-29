<template>
    <div class="container footerBlock">
        <div class="footerBlockSection">
            <div v-if="isTopFooterShowed" class="footerTopBig">
                <div class="footerInfoPlace">
                    <div class="footerInfoPlaceItem">
                        <h4>Brisk Meal</h4>
                        <ul class="accordion-body">
                            <li class="accordionLi fixPadding">
                                <a href="/catalog">Weekly Menu</a>
                            </li>
                            <li class="accordionLi fixPadding">
                                <a href="/plans">Our Plans</a>
                            </li>
                            <li class="accordionLi fixPadding">
                                <a href="/catalog">Delivery Options</a>
                            </li>
                            <li class="accordionLi fixPadding">
                                <a href="/plans">How It Works</a>
                            </li>
                            <li class="accordionLi fixPadding">
                                <a href="/plans">Hero Discounts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footerInfoPlaceItem">
                        <h4>Help center</h4>
                        <ul class="accordion-body">
                            <li class="accordionLi fixPadding">
                                <a href="/catalog">Help center and FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="downloadAppPlace">
                    <h4>Download our app</h4>
                    <p>Manage your deliveries from anywhere, anytime.</p>
                    <div class="linksForDownload">
                        <a
                            href="/catalog"
                            class="myLinks"
                            style="
                                background-image: url('https://cdn.hellofresh.com/us/cms/ER/badges/appstore-badge-en.png');
                            "
                        ></a>
                        <a
                            href="/catalog"
                            class="myLinks"
                            style="
                                background-image: url('https://cdn.hellofresh.com/us/cms/ER/badges/playstore-badge-en.png');
                            "
                        ></a>
                    </div>
                </div>
            </div>
            <div class="adaptiveWrapper" v-else>
                <div class="downloadAppLinkPlace">
                    <a class="accordionLi downloadAppLink">Download our app</a>
                </div>
                <div class="accordion" id="accordionExample">
                    <hr class="lineHR" />
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                            >
                                Brisk Meal
                            </button>
                        </h2>
                        <div
                            id="collapseOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample"
                        >
                            <ul class="accordion-body">
                                <li class="accordionLi">
                                    <a href="/catalog">Weekly Menu</a>
                                </li>
                                <li class="accordionLi">
                                    <a href="/plans">Our Plans</a>
                                </li>
                                <li class="accordionLi">
                                    <a href="/catalog">Delivery Options</a>
                                </li>
                                <li class="accordionLi">
                                    <a href="/plans">How It Works</a>
                                </li>
                                <li class="accordionLi">
                                    <a href="/plans">Hero Discounts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="lineHR" />
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                Help center
                            </button>
                        </h2>
                        <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample"
                        >
                            <ul class="accordion-body">
                                <li class="accordionLi">
                                    <a href="/catalog">Help center and FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin: 0" />
        <div class="footerBlockSection">
            <div>&#169; Brisk Meal</div>
            <div class="socialLinks">
                <a
                    target="_blank"
                    rel="noopener noreferrer"
                    text-decoration="underline"
                    href="https://www.facebook.com/greenchefpage"
                    data-zest="greenchef"
                    class="sc-10c73c59-0 jExSfB"
                    ><span
                        type="body-md-regular"
                        data-zest="greenchef"
                        class="sc-10c73c59-0 ffCdwa"
                        ><svg
                            width="25"
                            height="25"
                            viewBox="0 0 48 48"
                            fill="#1877F2"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-labelledby="facebook"
                        >
                            <title id="facebook">facebook</title>
                            <path
                                d="M48 24C48 10.745 37.255 0 24 0S0 10.745 0 24c0 11.98 8.776 21.908 20.25 23.708v-16.77h-6.094V24h6.094v-5.288c0-6.014 3.583-9.337 9.065-9.337 2.626 0 5.372.469 5.372.469v5.906h-3.026c-2.981 0-3.911 1.85-3.911 3.748V24h6.656l-1.064 6.938H27.75v16.77C39.224 45.908 48 35.98 48 24"
                            ></path>
                            <path
                                fill="#fff"
                                d="M33.342 30.938L34.406 24H27.75v-4.502c0-1.898.93-3.748 3.911-3.748h3.026V9.844s-2.746-.469-5.372-.469c-5.482 0-9.065 3.322-9.065 9.337V24h-6.094v6.938h6.094v16.77a24.174 24.174 0 007.5 0v-16.77h5.592z"
                                class="facebook"
                            ></path></svg></span
                ></a>
                <a
                    target="_blank"
                    rel="noopener noreferrer"
                    text-decoration="underline"
                    href="https://www.instagram.com/greenchef"
                    data-zest="greenchef"
                    class="sc-10c73c59-0 jExSfB"
                    ><span
                        type="body-md-regular"
                        data-zest="greenchef"
                        class="sc-10c73c59-0 ffCdwa"
                        ><svg
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="#E1306C"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-labelledby="instagram"
                        >
                            <title id="instagram">instagram</title>
                            <path
                                d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0"
                            ></path>
                            <g class="instagram">
                                <path
                                    fill="#fff"
                                    d="M12.242 5.25c-1.9 0-2.137.008-2.883.042-.744.034-1.252.152-1.697.325-.46.179-.85.418-1.238.807a3.426 3.426 0 00-.807 1.238c-.173.445-.291.953-.325 1.697-.034.746-.042.984-.042 2.883s.008 2.137.042 2.882c.034.745.152 1.253.325 1.698.179.46.418.85.807 1.238.388.389.778.628 1.238.806.445.173.953.291 1.697.325.746.034.984.042 2.883.042s2.137-.008 2.882-.042c.745-.034 1.253-.152 1.698-.325a3.43 3.43 0 001.238-.806c.389-.389.628-.779.806-1.238.173-.445.291-.953.325-1.698.034-.745.042-.983.042-2.882 0-1.9-.008-2.137-.042-2.883-.034-.744-.152-1.252-.325-1.697a3.428 3.428 0 00-.806-1.238 3.428 3.428 0 00-1.238-.807c-.445-.173-.953-.291-1.698-.325-.745-.034-.983-.042-2.882-.042m0 1.26c1.867 0 2.088.007 2.825.04.682.032 1.052.146 1.298.241.327.127.56.279.804.523.245.245.396.478.523.804.096.247.21.617.241 1.298.034.738.04.959.04 2.826s-.006 2.088-.04 2.825c-.031.682-.145 1.052-.24 1.298-.128.327-.28.56-.524.804a2.168 2.168 0 01-.804.523c-.246.096-.616.21-1.298.24-.737.035-.958.042-2.825.042-1.867 0-2.088-.007-2.825-.041-.682-.031-1.052-.145-1.299-.24a2.167 2.167 0 01-.804-.524 2.167 2.167 0 01-.523-.804c-.095-.246-.21-.616-.24-1.298-.034-.737-.041-.958-.041-2.825 0-1.867.007-2.088.04-2.826.032-.681.146-1.051.241-1.298.127-.326.279-.56.523-.804.245-.244.478-.396.804-.523.247-.095.617-.21 1.299-.24.737-.034.958-.041 2.825-.041"
                                ></path>
                                <path
                                    fill="#fff"
                                    d="M12.242 14.572a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66m0-5.92a3.59 3.59 0 100 7.18 3.59 3.59 0 000-7.18M16.813 8.51a.839.839 0 11-1.678 0 .839.839 0 011.678 0"
                                ></path>
                            </g>
                            <defs>
                                <clipPath id="instagram">
                                    <path
                                        fill="#fff"
                                        transform="translate(.69)"
                                        d="M0 0h48v48H0z"
                                    ></path>
                                </clipPath>
                            </defs></svg></span
                ></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        myWidth: 1,
    }),
    computed: {
        isTopFooterShowed() {
            if (this.myWidth > 767) {
                return true;
            } else {
                return false;
            }
        },
    },
    methods: {
        updateWidth() {
            this.myWidth = window.innerWidth;
        },
    },
    mounted() {
        this.updateWidth();
        window.addEventListener("resize", this.updateWidth);
    },
};
</script>

<style scoped>

.accordion {
    --bs-accordion-border-color: white;
}
.accordion-button {
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
    background-color: #42693d;
    background-size: 80% 80%;
    background-position-x: center;
    background-position-y: center;
    border-radius: 50%;
}
.accordion-body {
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: start;
    list-style-type: none;
}
.accordionLi {
    display: flex;
    justify-content: start;
    padding: 2px 0 2px;
    color: rgb(66, 105, 61);
    text-decoration: underline;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
}
.footerBlock {
    display: flex;
    flex-direction: column;
    padding: 0;
}
.footerBlockSection,
.downloadAppLinkPlace {
    width: 100%;
    min-height: 50px;
}
.lineHR {
    color: black;
    margin: 0;
    opacity: 0.7;
    size: 3px;
}
.downloadAppLinkPlace {
    width: 100%;
    min-height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
}
.downloadAppLink {
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
}
.footerTopBig {
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0px;
}
.downloadAppPlace,
.footerInfoPlace {
    height: 100%;
    min-width: 35%;
}
.footerInfoPlace {
    display: flex;
}
.footerInfoPlaceItem {
    width: 137px;
    height: 200px;
}
.downloadAppPlace {
    width: 245px;
    height: 200px;
    text-align: left;
}
h4 {
    color: rgb(34, 34, 34);
    margin: 0px;
    font-weight: 600;
    font-size: 16px;
    line-height: 24px;
    text-align: left;
    margin-bottom: 10px;
}
p {
    font-size: 16px;
}
.fixPadding {
    padding: 2px 0 2px 0;
}
.linksForDownload {
    width: 100%;
    height: 50%;
}
.myLinks {
    width: 126px;
    height: 42px;
    margin-bottom: 7px;
    display: block;
    background-size: 100% auto;
    background-repeat: no-repeat;
}
.footerBlockSection {
    width: 100%;
    min-height: 50px;
    padding: 5px 10px 5px 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.socialLinks {
    width: 146px;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.adaptiveWrapper {
    display: flex;
    width: 100%;
    flex-flow: column wrap;
}

@media only screen and (min-width: 0px) {
}

@media only screen and (min-width: 768px) {
    .footerTopBig {
        padding: 48px;
    }

    .adaptiveWrapper {
        /* width: 100%; */
        flex-direction: row;
    }
}

@media only screen and (min-width: 1200px) {
}

@media only screen and (max-width: 767px) {
}
</style>
