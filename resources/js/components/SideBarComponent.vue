<template>
    <div class="sideBar" v-if="this.visiblilitySideBar">
        <section class="sideBarSection">
            <div class="sideBarHeader">
                <a class="headerCrossBtn" @click="showSideBar">
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
            <div v-if="user == null" class="sideBarRegistration">
                <a class="sideBarSignup" href="/register"><span>Sign up</span></a>
                <a class="sideBarLogin" href="/login"><span>Log In</span></a>
            </div>
            <div v-else class="mt-3">
                <button class="sideBarLogin mb-4" type="button" @click="$emit('logout')">
                    Logout
                </button>
                <div class="d-flex align-items-center">
                    <img
                        class="profile me-4"
                        src="/images/face28.jpg"
                        alt="profile"
                    />
                    <span class="plansLinkText">{{ user.name }}</span>
                </div>
            </div>
            <div class="sideBarMenu">
                <a class="catalogLink" href="/catalog"
                    ><span class="isActive catalogLinkText"
                        ><svg
                            class="isActive catalogLinkSvg"
                            width="22"
                            height="18"
                            viewBox="0 0 22 18"
                            preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M20.4236 15.877H19.8946C19.8946 15.858 19.8946 15.84 19.8946 15.821C19.8881 11.2049 16.3658 7.35401 11.7686 6.93701C11.9177 6.75858 12.0014 6.53452 12.0056 6.30201C12.0056 5.72873 11.5409 5.26401 10.9676 5.26401C10.3943 5.26401 9.92958 5.72873 9.92958 6.30201C9.93381 6.53452 10.0174 6.75858 10.1666 6.93701C5.5708 7.35592 2.05036 11.2062 2.04358 15.821C2.04358 15.84 2.04358 15.858 2.04358 15.877H1.42358C1.00937 15.877 0.673584 16.2128 0.673584 16.627C0.673584 17.0412 1.00937 17.377 1.42358 17.377H20.4236C20.8378 17.377 21.1736 17.0412 21.1736 16.627C21.1736 16.2128 20.8378 15.877 20.4236 15.877ZM3.54458 15.821C3.59179 11.7536 6.90243 8.48118 10.9701 8.48118C15.0377 8.48118 18.3484 11.7536 18.3956 15.821C18.3956 15.84 18.3956 15.858 18.3956 15.877H3.54658C3.54658 15.858 3.54458 15.84 3.54458 15.821ZM6.92958 13.086C6.62263 13.0855 6.34697 12.898 6.23373 12.6127C6.12049 12.3274 6.19253 12.0019 6.41558 11.791C7.39218 10.8638 8.56829 10.1728 9.85358 9.77101C10.1125 9.67934 10.4009 9.73638 10.6055 9.91974C10.81 10.1031 10.8981 10.3835 10.8352 10.6509C10.7723 10.9183 10.5684 11.1301 10.3036 11.203C9.23488 11.5365 8.25683 12.1105 7.44458 12.881C7.30567 13.013 7.12123 13.0865 6.92958 13.086ZM7.96658 6.06401C7.72975 6.06406 7.50681 5.95225 7.36521 5.76241C7.22361 5.57256 7.18001 5.32699 7.24758 5.10001C7.34383 4.86009 7.36237 4.59602 7.30058 4.34501C7.2112 4.13311 7.08491 3.93876 6.92758 3.77101C6.6178 3.39504 6.45002 2.92215 6.45358 2.43501C6.45829 2.00492 6.56379 1.58194 6.76158 1.20001C6.88002 0.958103 7.11906 0.798279 7.38787 0.781284C7.65667 0.76429 7.91394 0.892735 8.0619 1.1178C8.20985 1.34286 8.22576 1.62997 8.10358 1.87001C8.01006 2.04314 7.95738 2.23538 7.94958 2.43201C7.94591 2.57272 7.99435 2.70982 8.08558 2.81701C8.36855 3.12821 8.58739 3.49215 8.72958 3.88801C8.88366 4.42595 8.86794 4.99833 8.68458 5.52701C8.59036 5.84511 8.29835 6.06351 7.96658 6.06401ZM5.05358 7.76101C4.7757 7.761 4.52059 7.60735 4.39065 7.36171C4.2607 7.11608 4.27723 6.81873 4.43358 6.58901C4.52213 6.44484 4.56404 6.27687 4.55358 6.10801C4.54634 5.90335 4.4901 5.70342 4.38958 5.52501C4.30253 5.3784 4.20773 5.23653 4.10558 5.10001L3.91458 4.83001C3.67659 4.50161 3.51032 4.12684 3.42658 3.73001C3.34946 3.28588 3.36307 2.83073 3.46658 2.39201C3.55897 1.99182 3.70037 1.60457 3.88758 1.23901C4.00179 0.989633 4.24301 0.82249 4.51661 0.803155C4.79021 0.78382 5.05254 0.915377 5.20068 1.14621C5.34882 1.37704 5.35914 1.67033 5.22758 1.91101C5.0951 2.16679 4.99436 2.4378 4.92758 2.71801C4.86841 2.96024 4.85855 3.21189 4.89858 3.45801C4.94571 3.64972 5.03221 3.82953 5.15258 3.98601L5.31858 4.21901C5.45422 4.40062 5.57974 4.58958 5.69458 4.78501C5.91699 5.17668 6.04024 5.61679 6.05358 6.06701C6.07324 6.55103 5.93917 7.02886 5.67058 7.43201C5.53175 7.6367 5.30092 7.75979 5.05358 7.76101Z"
                                fill="inherit"
                            ></path></svg>Weekly Menu</span
                    ></a
                >
                <a class="plansLink" href="/plans"
                    ><span class="plansLinkText">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 25 25"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            color="inherit"
                            class="plansLinkSvg"
                        >
                            <path
                                d="M13.416 6.5h-2v1.17a3.001 3.001 0 0 0 1 5.83 1 1 0 1 1-1 1h-2c0 1.306.835 2.417 2 2.83v1.17h2v-1.17a3.001 3.001 0 0 0-1-5.83 1 1 0 1 1 1-1h2a3.001 3.001 0 0 0-2-2.83V6.5Z"
                                fill="currentColor"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M22.416 12.5c0 5.523-4.477 10-10 10s-10-4.477-10-10 4.477-10 10-10 10 4.477 10 10Zm-2 0a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"
                                fill="currentColor"
                            ></path>
                        </svg>
                        Our Plans</span
                    ></a
                >
            </div>
            <div class="sideBarNavigation">
                <a v-if="user != null" class="navigationLink" href="/cart"
                    ><span class="navigationText">Your Cart</span></a
                >
                <a class="navigationLink" href="/faq"
                    ><span class="navigationText">FAQs</span></a
                >
                <a class="navigationLink" href="/giftcard"
                    ><span class="navigationText">Gift Cards</span></a
                >
            </div>
        </section>
    </div>
</template>

<script>
export default {
    props: {
        showSideBar: Function,
        visiblilitySideBar: Boolean,
        user: {
            type: Object,
            default: null
        }
    },
    emits: ['logout']
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
    top: 10px;
    right: 0px;
    bottom: 0px;
    width: 80vw;
    padding: 16px 24px 32px;
    background-color: rgb(255, 255, 255);
    opacity: 1;
    transform: translateX(0px);
    transition: all 300ms ease 100ms;
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

.sideBarRegistration {
    font-weight: 600;
    margin-top: 24px;
}

.sideBarSignup {
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
    margin-bottom: 16px;
    transition-property: color, background, border, box-shadow, opacity !important;
}

.sideBarSignup:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
    color: rgb(255, 255, 255);
}

.sideBarLogin {
    border-width: 2px;
    border-radius: 4px;
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
    line-height: 36px;
    height: 40px;
    background-color: transparent;
    color: rgb(66, 105, 61);
    border-color: rgb(66, 105, 61);
    margin-bottom: 16px;
    transition-property: color, background, border, box-shadow, opacity !important;
}

.sideBarLogin:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
    color: rgb(255, 255, 255);
}

.sideBarMenu {
    margin-top: 24px;
}

.catalogLink,
.plansLink {
    display: block;
    position: relative;
    margin-bottom: 16px;
}

.catalogLinkText,
.plansLinkText {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    font-weight: 700;
    text-decoration: none;
    color: rgb(51, 51, 51);
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
}

.catalogLinkSvg,
.plansLinkSvg {
    vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
    margin-right: 8px;
    width: 24px;
}

.isActive {
    color: rgb(70, 167, 72);
    fill: rgb(70, 167, 72);
}

.sideBarNavigation {
    border-top: 1px solid rgb(212, 217, 216);
    margin-top: 24px;
    padding: 24px 0px;
}

.navigationLink {
    display: block;
    position: relative;
    margin-bottom: 16px;
}

.navigationText {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    font-weight: 700;
    text-decoration: none;
    color: rgb(51, 51, 51);
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
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
        width: 60vw;
    }
}

@media only screen and (min-width: 1200px) {
    .sideBar {
        display: none;
    }
}

@media only screen and (max-width: 1199px) {
}
.sideBarSignup,
.sideBarLogin {
    width: 100%;
}

@media only screen and (max-width: 767px) {
    .sideBarSection {
        top: 0px;
    }
}
</style>
