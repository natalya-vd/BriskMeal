<template>
    <div class="sideBar" v-if="this.visiblilityModalError">
        <section class="sideBarSection">
            <div class="sideBarHeader">
                <a class="headerCrossBtn" @click="showModalError">
                    <svg
                        class="headerCross"
                        width="14"
                        height="14"
                        viewBox="0 0 14 14"
                        preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M2.4042 0.806603C2.20894 0.611341 1.89236 0.611341 1.6971 0.806603L0.636437 1.86726C0.441175 2.06253 0.441175 2.37911 0.636437 2.57437L5.23259 7.17052L0.989897 11.4132C0.794635 11.6085 0.794635 11.9251 0.989897 12.1203L2.05056 13.181C2.24582 13.3762 2.5624 13.3762 2.75766 13.181L7.00036 8.93829L11.243 13.181C11.4383 13.3762 11.7549 13.3762 11.9501 13.181L13.0108 12.1203C13.2061 11.925 13.2061 11.6085 13.0108 11.4132L8.76812 7.17052L13.3643 2.57438C13.5595 2.37912 13.5595 2.06254 13.3643 1.86728L12.3036 0.806615C12.1083 0.611353 11.7918 0.611353 11.5965 0.806615L7.00036 5.40276L2.4042 0.806603Z"
                            fill="#222222"
                        ></path>
                    </svg>
                </a>
            </div>
            <h2 class="errorTitle">Error!</h2>
            <h3 class="errorText">
                Something went wrong.
                <a href="/plans" class="errorDelivery">Please, try again</a>
            </h3>
        </section>
    </div>
</template>

<script>
export default {
    props: {
        showModalError: Function,
        visiblilityModalError: Boolean,
    },

    mounted() {},
};
</script>

<style scoped>
.sideBar {
    position: fixed;
    inset: -10px 0px 0px;
    z-index: 109;
    background-color: rgba(0, 0, 0, 0.5);
    visibility: visible;
    opacity: 1;
    transition: visibility 0ms ease 0ms, opacity 300ms ease 0ms;
}

.sideBarSection {
    overflow: hidden;
    position: absolute;
    top: 10%;
    left: 25%;
    width: 50vw;
    padding: 1px 14px 14px;
    background-color: rgb(255, 255, 255);
    opacity: 1;
    transform: translateX(0px);
    transition: all 300ms ease 100ms;
    box-shadow: 0 3px 5px 0 rgb(0 0 0 / 20%);
    border-radius: 15px;
}

.sideBarHeader {
    display: flex;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 4px;
}

.headerCrossBtn {
    margin-top: 10px;
    flex: 0 0 auto;
    align-self: flex-end;
    outline: none;
}

.headerCross {
    vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
}

.errorTitle {
    text-align: left;
    color: #881c1c;
    font-size: 20px;
}

.errorDelivery {
    color: #d15656;
}

.errorDelivery:hover {
    border-color: transparent;
    color: #e88282;
}

.errorText {
    text-align: left;
    font-size: 16px;
}

@media only screen and (min-width: 0px) {
    .sideBar {
        position: fixed;
        inset: 0px;
        z-index: 109;
        background-color: rgba(0, 0, 0, 0.5);
        visibility: visible;
        opacity: 1;
        transition: visibility 0ms ease 0ms, opacity 300ms ease 0ms;
    }
}

@media only screen and (min-width: 768px) {
    .sideBar {
        position: fixed;
        inset: -10px 0px 0px;
        z-index: 109;
        background-color: rgba(0, 0, 0, 0.5);
        visibility: visible;
        opacity: 1;
        transition: visibility 0ms ease 0ms, opacity 300ms ease 0ms;
    }

    .sideBarSection {
        padding: 1px 24px 24px;
    }

    .errorTitle {
        font-size: 24px;
    }

    .errorText {
        font-size: 20px;
    }
}

@media only screen and (min-width: 1200px) {
    /* .sideBar {
        display: none;
    } */
    .sideBarSection {
        padding-bottom: 32px;
        padding-top: 16px;
    }

    .errorTitle {
        font-size: 28px;
    }

    .errorText {
        font-size: 25px;
    }
}

@media only screen and (max-width: 1199px) {
}

@media only screen and (max-width: 767px) {
}
</style>
