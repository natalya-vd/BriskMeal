<template>
    <div class="flex-item">
        <div class="headerBlock">
            <nav class="header-navigation">
                <a class="header-navigation-link" href="/catalog"
                    ><span class="text-link">Weekly Menu</span></a
                >
                <a class="header-navigation-link" href="/catalog"
                    ><span class="text-link">Our Plans</span></a
                >
                <a class="header-navigation-link" href="/catalog"
                    ><span class="text-link">FAQs</span></a
                >
                <a class="header-navigation-link" href="/catalog"
                    ><span class="text-link">Gift Cards</span></a
                >
            </nav>
            <div class="registration-block">
                <a href="/catalog" class="login"><span>Log In</span></a
                ><a href="/catalog" class="signup"><span>Sign up</span></a>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    mounted() {
        console.log("Header Component mounted.");
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
    width: 100%;
}

.headerBlock {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* background-color: green; */
    height: 80px;
    padding: 12px 0;
    width: 100%;
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
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style-type: none;
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
    /* margin-bottom: 16px; */
    transition-property: color, background, border, box-shadow, opacity !important;
}

.signup:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
}
</style>
