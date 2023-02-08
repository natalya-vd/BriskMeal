<template>
    <div class="flex-item">
        <div class="headerBlock">
            <nav class="header-navigation">
                <a class="header-navigation-link" href="/catalog"
                    ><span class="text-link">Weekly Menu</span></a
                >
                <a class="header-navigation-link" href="/plans"
                    ><span class="text-link">Our Plans</span></a
                >
                <a class="header-navigation-link" href="/faq"
                    ><span class="text-link">FAQs</span></a
                >
                <a class="header-navigation-link" href="/giftcard"
                    ><span class="text-link">Gift Cards</span></a
                >
                <a
                    v-if="!isGuest(guest)"
                    class="header-navigation-link"
                    href="/cart"
                    ><span class="text-link">Your Cart</span></a
                >
            </nav>
            <div class="registration-block">
                <a v-if="isGuest(guest)" href="/login" class="login"
                    ><span>Log In</span></a
                >
                <a v-if="isGuest(guest)" href="/register" class="signup"
                    ><span>Sign up</span></a
                >
                <div v-if="!isGuest(guest)" class="dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                    >
                        <img
                            class="profile me-4"
                            src="/images/face28.jpg"
                            alt="profile"
                        />
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-end">
                        <button class="login" type="button" @click="onLogout">
                            Logout
                        </button>
                    </div>
                </div>
            </div>

            <button
                data-hamburger-menu="true"
                class="hamburgerBtn"
                aria-label="Menu"
                @click="showSideBar"
            >
                <svg
                    class="hamburgersvg"
                    width="24"
                    height="18"
                    viewBox="0 0 20 15"
                    preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M0 1c0-.552.455-1 .992-1h18.016c.548 0 .992.444.992 1 0 .552-.455 1-.992 1H.992A.993.993 0 0 1 0 1zm0 6.333c0-.552.455-1 .992-1h18.016c.548 0 .992.444.992 1 0 .553-.455 1-.992 1H.992a.993.993 0 0 1-.992-1zm0 6.334c0-.553.455-1 .992-1h18.016c.548 0 .992.444.992 1 0 .552-.455 1-.992 1H.992a.993.993 0 0 1-.992-1z"
                        fill="#222222"
                        fill-rule="evenodd"
                    ></path>
                </svg>
            </button>
        </div>
        <side-bar-component
            :showSideBar="showSideBar"
            :visiblilitySideBar="visiblilitySideBar"
        ></side-bar-component>
        <error-modal
            :showModalError="showModalError"
            :visiblilityModalError="visiblilityModalError"
        ></error-modal>
    </div>
</template>

<script>
import SideBarComponent from "./SideBarComponent.vue";
import { isGuest } from "../helpers/common";
import { logout } from "../api/api";
import { LOGOUT } from "../api/endpoints";
import router from "../router";
import ErrorModal from "./ErrorModal.vue";

export default {
    components: {
        SideBarComponent,
        ErrorModal,
    },
    props: {
        guest: {
            type: String,
            default: "1",
        },
        showModalError: Function,
        visiblilityModalError: Boolean,
    },
    data() {
        return {
            visiblilitySideBar: false,
        };
    },
    setup() {
        return { isGuest };
    },

    methods: {
        showSideBar() {
            this.visiblilitySideBar = !this.visiblilitySideBar;
        },
        async onLogout() {
            try {
                const response = await logout(LOGOUT);
                if (response.status === 204) {
                    router.navigate("/");
                }
            } catch (e) {
                this.showModalError();
                console.log(e.response.data.message);
            }
        },
    },
};
</script>

<style scoped>
.header-component {
    position: fixed;
    width: 100%;
    top: 0px;
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
    background-color: white;
    box-shadow: 0 1px 0 0 rgb(77 65 51 / 5%);
    z-index: 105;
}

.logo {
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
}

.flex-item {
    display: flex;
    width: 80%;
}

.headerBlock {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 80px;
    padding: 12px 0;
    width: 90%;
    z-index: 100;
}

.header-navigation {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
.header-navigation-link {
    font-weight: 400;
    color: #42693d;
    text-decoration: none;
    display: inline-block;
    position: relative;
    cursor: pointer;
}

.text-link {
    margin: 0px;
    padding: 8px 12px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    margin: 0px;
    padding: 8px 12px;
    border-radius: 3px;
    font-weight: 700;
    font-size: 16px;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    line-height: 24px;
    text-transform: none;
    text-decoration: none;
    color: rgb(51, 51, 51);
}

.text-link:hover {
    color: rgb(70, 167, 72);
}

.registration-block {
    font-weight: 600;
    display: none;
}

.profile {
    width: 46px;
    height: 46px;
}

.hamburgerBtn {
    margin-left: 16px;
    cursor: pointer;
    padding: 4px 0px;
    border: 0px;
    background: rgb(255, 255, 255);
}

.login {
    border-width: 2px;
    border-radius: 4px;
    border-style: solid;
    opacity: 1;
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
    color: rgb(34, 34, 34);
    border-color: transparent;
    margin-right: 12px;
    cursor: pointer;
}

.login > span {
    color: #42693d;
}

.login > span:hover {
    border-color: transparent;
    color: rgb(30, 54, 30);
}

.signup {
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
}

.signup:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
}

@media only screen and (min-width: 0px) {
    .hamburgerBtn {
        padding: 12px 0px;
    }

    .flex-item {
        display: flex;
        width: auto;
        justify-content: space-between;
        margin-right: 20px;
    }
}

@media only screen and (min-width: 768px) {
    .flex-item {
        width: calc(100% - 110px);
    }
}

@media only screen and (min-width: 1200px) {
    .registration-block {
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style-type: none;
    }

    .hamburgerBtn {
        display: none;
    }
}

@media only screen and (max-width: 767px) {
    .header-navigation {
        display: none;
    }
}
</style>
