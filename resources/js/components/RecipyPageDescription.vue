<template>
    <div class="recipyPageDescription">
        <div :class="{descriptionToggle: isShown, descriptionToggleCollapse: !isShown}">
            <div class="descriptionWrapper">
                <div :class="{descriptionText: isShown, descriptionTextCollapse: !isShown}">
                    <p>
                        {{ description }}
                    </p>
                </div>
            </div>
            <div :class="{collapsibleOverlay: !isShown}"></div>
        </div>

        <button class="toggleLink" @click="toggleDescription" v-if="isShown">
            Read Less
            <svg
                class="toggleLinkSvg"
                width="10"
                height="6"
                viewBox="0 0 10 6"
                preserveAspectRatio="xMidYMid meet"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M5.002 1.809L1.21 5.79A.696.696 0 0 1 .714 6C.32 6 0 5.664 0 5.25c0-.202.076-.386.2-.52L4.486.23a.698.698 0 0 1 1.031 0l4.286 4.5c.121.136.197.319.197.52 0 .414-.32.75-.714.75a.699.699 0 0 1-.542-.261l-3.742-3.93z"
                    fill="#222222"
                ></path>
            </svg>
        </button>

        <button class="toggleLink" @click="toggleDescription" v-else>
            Read More
            <svg
                class="toggleLinkSvg"
                width="10"
                height="6"
                viewBox="0 0 10 6"
                preserveAspectRatio="xMidYMid meet"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M4.998 4.191L8.79.21A.696.696 0 0 1 9.286 0C9.68 0 10 .336 10 .75a.767.767 0 0 1-.2.52l-4.286 4.5a.698.698 0 0 1-1.031 0L.197 1.27A.783.783 0 0 1 0 .75C0 .336.32 0 .714 0c.217 0 .411.101.542.261l3.742 3.93z"
                    fill="#222222"
                ></path>
            </svg>
        </button>
    </div>
</template>

<script>
export default {
    props: ['description'],
    data() {
        return {
            isShown: false,
        };
    },
    mounted() {
        console.log("RecipyPageDescription Component mounted.");
    },

    methods: {
        toggleDescription() {
            this.isShown = !this.isShown;
        },
    },
};
</script>

<style scoped>
.recipyPageDescription {
    background-color: blue;
    display: flex;
    background-color: white;
    flex-direction: column;
    border-radius: 3px;
    box-shadow: rgb(0 0 0 / 10%) 0px 2px 3px 0px;
    position: relative;
    padding: 24px 16px;
    margin-bottom: 24px;
}
.descriptionToggle {
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: height 0.3s ease-in-out 0s;
    margin-top: 16px;
    font-size: 16px;
    line-height: 24px;
}

.descriptionText p:not(:last-of-type) {
    margin-bottom: 16px;
}

.descriptionText p {
    margin-bottom: 0;
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
    color: #222;
}

.descriptionTextCollapse {
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
    color: #222;
}

.descriptionToggleCollapse {
    height: 85px;
    position: relative;
    overflow: hidden;
    transition: height 0.3s ease-in-out 0s;
    margin-top: 16px;
}

.collapsibleOverlay {
    width: 100%;
    position: absolute;
    background: linear-gradient(rgba(255, 255, 255, 0), rgb(255, 255, 255));
    height: 100%;
    top: 0px;
}

.toggleLink {
    width: 100%;
    background: none;
    border: none;
    padding: 0px;
    display: flex;
    color: rgb(34, 34, 34);
    margin: 8px auto 0px;
    font-weight: bold;
    cursor: pointer;
}

.toggleLinkSvg {
    vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
    align-self: center;
    margin-left: 8px;
}
</style>
