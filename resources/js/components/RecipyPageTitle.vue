<template>
    <div class="recipyPageTitle">
        <div class="recipyTitle">
            <div class="recipyColumn">
                <h1 class="headTitle">{{ title }}</h1>
                <div class="secondTitle">
                    <h3>
                        {{ getIngredients }}
                        <div class="blockCopyPrint">
                            <button
                                class="copyTitle"
                                @click="copyToClipBoard()"
                            >
                                <svg
                                    class="copySvg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M10.619 3.42857H12.7142C13.4506 3.42857 14.0475 4.02553 14.0475 4.7619V14.6667C14.0475 15.403 13.4506 16 12.7142 16H5.09516C4.35878 16 3.76182 15.403 3.76182 14.6667V12.5714H1.66659C0.930207 12.5714 0.333252 11.9745 0.333252 11.2381V1.33334C0.333252 0.596955 0.930206 0 1.66659 0H9.28563C10.022 0 10.619 0.596954 10.619 1.33333V3.42857ZM9.28563 1H1.66659C1.48249 1 1.33325 1.14924 1.33325 1.33334V11.2381C1.33325 11.4222 1.48249 11.5714 1.66659 11.5714H3.76182V4.76191C3.76182 4.02553 4.35878 3.42857 5.09516 3.42857H9.61897V1.33333C9.61897 1.14924 9.46973 1 9.28563 1ZM5.09516 4.42857H12.7142C12.8983 4.42857 13.0475 4.57781 13.0475 4.7619V14.6667C13.0475 14.8508 12.8983 15 12.7142 15H5.09516C4.91106 15 4.76182 14.8508 4.76182 14.6667V4.76191C4.76182 4.57781 4.91106 4.42857 5.09516 4.42857Z"
                                        fill="#42693D"
                                    ></path>
                                </svg>
                            </button>
                            <a href="/recipe/1" class="printTitle">
                                <svg
                                    class="printSvg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="m18 19v2c0 1.1045695-.8954305 2-2 2h-8c-1.1045695 0-2-.8954305-2-2v-2h-4c-1.1045695 0-2-.8954305-2-2v-9c0-1.1045695.8954305-2 2-2h4v-3c0-1.1045695.8954305-2 2-2h8c1.1045695 0 2 .8954305 2 2v3h4c1.1045695 0 2 .8954305 2 2v9c0 1.1045695-.8954305 2-2 2zm0-1.5h4c.2761424 0 .5-.2238576.5-.5v-9c0-.27614237-.2238576-.5-.5-.5h-20c-.27614237 0-.5.22385763-.5.5v9c0 .2761424.22385763.5.5.5h4v-4.5h12zm-1.5-11.5v-3c0-.27614237-.2238576-.5-.5-.5h-8c-.27614237 0-.5.22385763-.5.5v3zm-9 8.5v6.5c0 .2761424.22385763.5.5.5h8c.2761424 0 .5-.2238576.5-.5v-6.5zm12.25-3.5c-.4142136 0-.75-.3357864-.75-.75 0-.41421356.3357864-.75.75-.75s.75.33578644.75.75c0 .4142136-.3357864.75-.75.75z"
                                        fill="#42693D"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                            </a>
                        </div>
                    </h3>
                </div>
            </div>
        </div>
        <div class="recipyView">
            <a :href="recipePdf" :class="['recipyViewLink', {'recipyViewLinkDisable': recipePdf.length === 0}]" target="_blank" v-on="getDisabledFunction">
                <span class="linkText">View Recipe Card .PDF</span>
                <svg
                    class="linkSvg"
                    width="24"
                    height="20"
                    viewBox="0 0 24 20"
                    preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g fill="#42693D" fill-rule="evenodd">
                        <path
                            d="M6.48245 2.66666C6.48245 2.29847 6.18397 1.99999 5.81578 1.99999H0.966657C0.524829 1.99999 0.166656 2.35816 0.166656 2.79999V14.5333C0.166656 14.9752 0.524829 15.3333 0.966657 15.3333H12.7C13.1418 15.3333 13.5 14.9752 13.5 14.5333V9.6842C13.5 9.31601 13.2015 9.01753 12.8333 9.01753C12.4651 9.01753 12.1667 9.31601 12.1667 9.6842V14H1.49999V3.33332H5.81578C6.18397 3.33332 6.48245 3.03485 6.48245 2.66666Z"
                        ></path>
                        <path
                            d="M9.49999 0.99999C9.49999 0.815895 9.64923 0.666656 9.83332 0.666656H14.5C14.6841 0.666656 14.8333 0.815895 14.8333 0.99999V5.66666C14.8333 5.85075 14.6841 5.99999 14.5 5.99999H13.8333C13.6492 5.99999 13.5 5.85075 13.5 5.66666V2.8758L8.67855 7.69724C8.54838 7.82741 8.33733 7.82742 8.20716 7.69725L7.73571 7.22585C7.60553 7.09567 7.60553 6.88461 7.73571 6.75443L12.4902 1.99999H9.83332C9.64923 1.99999 9.49999 1.85075 9.49999 1.66666V0.99999Z"
                        ></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    props: ["title", "ingredients", "recipePdf"],

    computed: {
        getIngredients() {
            const ingredients = JSON.parse(this.ingredients);
            return ingredients.map((item) => item.ingredient).join(", ");
        },
        getDisabledFunction() {
            return this.recipePdf.length === 0 ? { click: (e) => e.preventDefault(), focus: (e) => e.preventDefault() } : {}
        }
    },

    methods: {
        copyToClipBoard() {
            const link = window.location.href;
            console.log(window.location.href);
            navigator.clipboard.writeText(link);
        },
    },
};
</script>

<style scoped>
.recipyPageTitle {
    display: flex;
    height: 100%;
    width: 100%;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    flex: 1 1 0px;
    margin-bottom: 16px;
}

.recipyTitle {
    flex: 1 1 0px;
}

.recipyColumn {
    display: flex;
    flex-direction: column;
    box-shadow: none;
    background-color: transparent;
    border-radius: 0px;
    padding: 0px;
}

.headTitle {
    color: rgb(34, 34, 34);
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    text-transform: none;
    font-size: 24px;
    line-height: 32px;
    margin: 0px;
    font-weight: 700;
    text-align: left;
}

.secondTitle {
    display: flex;
    flex-direction: column;
}

.secondTitle > h3 {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-size: 20px;
    line-height: 30px;
    color: #333;
    text-transform: none;
    font-weight: 700;
    margin-bottom: 8px;
    text-align: left;
}

.blockCopyPrint {
    display: flex;
    align-items: flex-end;
}

.copyTitle,
.printTitle {
    height: 24px;
    width: 24px;
    border: 1px solid rgb(66, 105, 61);
    border-radius: 50%;
    display: inline-block;
    position: relative;
    background: transparent;
    margin-left: 8px;
    vertical-align: middle;
}

.copyTitle:hover {
    background: rgb(66, 105, 61);
}

.copyTitle:hover path {
    fill: white;
}

.copySvg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 14px;
    width: 14px;
    cursor: pointer;
    vertical-align: middle;
    box-sizing: content-box;
}

.printTitle:hover {
    background: rgb(66, 105, 61);
}

.printTitle:hover path {
    fill: white;
}

.printSvg {
    width: 16px;
    height: 16px;
    cursor: pointer;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.recipyView {
    flex: 1 1 0px;
}

.recipyViewLink {
    padding: 0px;
    border-width: 2px;
    border-style: solid;
    cursor: pointer;
    opacity: 1;
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
    height: 50px;
    line-height: 46px;
    box-shadow: none;
    border-radius: 4px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    background-color: transparent;
    border-color: rgb(66, 105, 61);
    vertical-align: bottom;
    transition-property: color, background, border, box-shadow, opacity, fill !important;
    color: rgb(66, 105, 61);
}

.recipyViewLink:focus,
.recipyViewLink:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
    color: white;
}

.recipyViewLinkDisable,
.recipyViewLinkDisable:focus,
.recipyViewLinkDisable:hover {
    cursor: default;
    background-color: rgb(234 234 234);
    border-color: rgb(234 234 234);
    color: rgb(107 130 107);
}

.recipyViewLink:hover path {
    fill: white;
}
.recipyViewLinkDisable path,
.recipyViewLinkDisable:hover path {
    fill: rgb(107 130 107);
}

.linkText {
    margin-right: 12px;
}

.linkSvg {
    display: flex;
    justify-content: center;
    -ms-align-items: center;
    align-items: center;
    /* vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
    text-align: center; */
}

@media only screen and (min-width: 0px) {
    .recipyPageTitle {
        flex-basis: 100%;
        max-width: 100%;
    }

    .recipyTitle {
        flex-basis: 100%;
        max-width: 100%;
    }
}

@media only screen and (min-width: 768px) {
    .recipyTitle {
        flex-basis: 100%;
        max-width: 100%;
    }

    .secondTitle {
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        /* margin: 0px; */
    }

    .secondTitle > h3 {
        margin: 0px;
    }

    .blockCopyPrint {
        align-items: flex-start;
    }

    .recipyView {
        flex-basis: 100%;
        max-width: 100%;
    }

    .recipyViewLink {
        padding: 12px;
        padding-left: 20px;
        padding-right: 20px;
    }
}

@media only screen and (min-width: 1200px) {
    .recipyPageTitle {
        margin-bottom: 24px;
    }

    .recipyTitle {
        flex-basis: 70%;
        max-width: 70%;
    }

    .headTitle {
        font-size: 32px;
        line-height: 38px;
        font-weight: 700;
    }

    .secondTitle > h3 {
        font-size: 24px;
        line-height: 30px;
    }

    .blockCopyPrint {
        align-items: flex-end;
    }

    .copyTitle,
    .printTitle {
        height: 32px;
        width: 32px;
    }

    .copySvg {
        height: 18px;
        width: 18px;
    }

    .printSvg {
        height: 20px;
        width: 20px;
    }

    .recipyView {
        flex-basis: 30%;
        max-width: 30%;
    }
}

@media only screen and (max-width: 767px) {
    .printTitle {
        display: none;
    }
}
</style>
