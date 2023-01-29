<template>
    <div class="plansMain">
        <div class="containerWrapper">
            <div class="createrPlan">
                <h1 class="titlePlan">Create Your First Box</h1>
                <div class="gridContainer">
                    <div class="gridWrapper">
                        <div class="preferences">
                            <div class="preferencesTitle">
                                <h4 class="preferencesTitleText">
                                    1. Choose your preferences
                                </h4>
                            </div>

                            <div class="preferencesDescription">
                                <span class="preferencesDescriptionText"
                                    >Your preferences will help us show you the
                                    most relevant recipes first. You'll still
                                    have access to all recipes each week.</span
                                >
                            </div>
                            <div
                                v-show="!choosenIds.length"
                                class="chooseError"
                            >
                                <span>Please select at least 1 option.</span>
                            </div>
                            <div class="preferencesBlock">
                                <section
                                    v-for="item in getData.preferences"
                                    :key="item.id"
                                    class="preferencesChoosing"
                                >
                                    <button
                                        class="preferencesButton"
                                        @click="choosenPreferences(item.id)"
                                    >
                                        <div
                                            :class="{
                                                choosen: choosenIds.includes(
                                                    item.id
                                                ),
                                            }"
                                        >
                                            <svg
                                                v-if="
                                                    choosenIds.includes(item.id)
                                                "
                                                width="16"
                                                height="16"
                                                viewBox="0 0 17 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                role="img"
                                                color="inherit"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="m14.5 4.06-8.308 8.31-3.359-3.36 1.06-1.06 2.299 2.298L13.44 3l1.06 1.06Z"
                                                    fill="currentColor"
                                                ></path>
                                            </svg>
                                        </div>
                                        <object
                                            type="image/svg+xml"
                                            :data="item.photo.full_path"
                                            width="48"
                                            height="48"
                                        ></object>
                                        <svg
                                            v-if="
                                                item.photo.full_path.length <= 0
                                            "
                                            class="web-1wjl8qi"
                                            width="39"
                                            height="32"
                                            viewBox="0 0 39 32"
                                            preserveAspectRatio="xMidYMid meet"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <g
                                                stroke="none"
                                                stroke-width="1"
                                                fill="none"
                                                fill-rule="evenodd"
                                            >
                                                <g
                                                    transform="translate(-980.000000, -132.000000)"
                                                >
                                                    <g
                                                        transform="translate(980.000000, 132.000000)"
                                                    >
                                                        <g
                                                            transform="translate(4.224031, 0.283000)"
                                                        >
                                                            <path
                                                                d="M30.5993801,16.8441 L27.9323801,8.8451 C27.9313801,8.8411 27.9273801,8.8401 27.9263801,8.8371 C27.8903801,8.7331 27.8253801,8.6461 27.7443801,8.5731 C27.7263801,8.5571 27.7083801,8.5441 27.6893801,8.5301 C27.6013801,8.4671 27.5023801,8.4171 27.3883801,8.4041 L15.3883801,7.0711 C15.3643801,7.0681 15.3403801,7.0781 15.3163801,7.0781 C15.2923801,7.0781 15.2683801,7.0681 15.2443801,7.0711 L3.24438005,8.4041 C3.13038005,8.4171 3.03238005,8.4661 2.94438005,8.5291 C2.92438005,8.5441 2.90638005,8.5571 2.88738005,8.5741 C2.80738005,8.6461 2.74338005,8.7321 2.70638005,8.8351 C2.70538005,8.8381 2.70138005,8.8411 2.69938005,8.8451 L0.033380051,16.8451 C-0.032619949,17.0421 0.000380050998,17.2611 0.122380051,17.4301 C0.244380051,17.6001 0.440380051,17.7001 0.649380051,17.7001 L2.66638005,17.7001 L2.66638005,27.7171 C2.66638005,28.0221 2.87738005,28.2851 3.17538005,28.3521 L15.1753801,31.0191 C15.2223801,31.0281 15.2693801,31.0341 15.3163801,31.0341 C15.3633801,31.0341 15.4103801,31.0281 15.4573801,31.0191 L27.4563801,28.3521 C27.7543801,28.2851 27.9663801,28.0221 27.9663801,27.7171 L27.9663801,17.7001 L29.9833801,17.7001 C30.1923801,17.7001 30.3883801,17.6001 30.5103801,17.4301 C30.6323801,17.2611 30.6653801,17.0421 30.5993801,16.8441 L30.5993801,16.8441 Z"
                                                                fill="#7D807F"
                                                            ></path>
                                                            <path
                                                                d="M15.9663801,12.3571 L17.3583801,17.2291 C17.4383801,17.5081 17.6933801,17.7001 17.9833801,17.7001 L26.6653801,17.7001 L26.6653801,27.1951 L15.9663801,29.5731 L15.9663801,12.3571 Z M14.6663801,12.3581 L14.6663801,29.5731 L3.96638005,27.1951 L3.96638005,17.7001 L12.6493801,17.7001 C12.9393801,17.7001 13.1953801,17.5081 13.2743801,17.2291 L14.6663801,12.3581 Z M16.2073801,8.4701 L26.8303801,9.6501 L29.0803801,16.4001 L18.4733801,16.4001 L16.2073801,8.4701 Z M14.4253801,8.4701 L12.1593801,16.4001 L1.55138005,16.4001 L3.80138005,9.6501 L14.4253801,8.4701 Z"
                                                                fill="#D4D9D8"
                                                            ></path>
                                                            <path
                                                                d="M5.52318005,1.924 C5.77718005,1.67 6.18818005,1.67 6.44218005,1.924 L6.44218005,1.924 L9.10918005,4.591 C9.36318005,4.845 9.36318005,5.256 9.10918005,5.51 C8.98218005,5.637 8.81618005,5.7 8.64918005,5.7 C8.48318005,5.7 8.31718005,5.637 8.19018005,5.51 L8.19018005,5.51 L5.52318005,2.843 C5.26918005,2.589 5.26918005,2.178 5.52318005,1.924 Z M24.1891801,1.9244 C24.4431801,1.6704 24.8551801,1.6704 25.1091801,1.9244 C25.3631801,2.1774 25.3631801,2.5894 25.1091801,2.8434 L25.1091801,2.8434 L22.4431801,5.5104 C22.3161801,5.6374 22.1491801,5.7004 21.9831801,5.7004 C21.8171801,5.7004 21.6501801,5.6374 21.5231801,5.5104 C21.2691801,5.2564 21.2691801,4.8454 21.5231801,4.5914 L21.5231801,4.5914 Z M15.3161801,1.7408297e-13 C15.6751801,1.7408297e-13 15.9661801,0.291 15.9661801,0.65 L15.9661801,0.65 L15.9661801,4.65 C15.9661801,5.009 15.6751801,5.3 15.3161801,5.3 C14.9571801,5.3 14.6661801,5.009 14.6661801,4.65 L14.6661801,4.65 L14.6661801,0.65 C14.6661801,0.291 14.9571801,1.7408297e-13 15.3161801,1.7408297e-13 Z"
                                                                fill="#7D807F"
                                                            ></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                        <span
                                            type="body-md-regular"
                                            class="preferencesName"
                                            >{{ item.name }}</span
                                        >
                                    </button>
                                </section>
                            </div>
                            <div class="someText">
                                <span
                                    >Carb conscious, high protein recipes free
                                    of gluten, grains, soy, and legumes</span
                                >
                            </div>
                        </div>
                        <div class="selectedBox">
                            <div class="selectedBoxTitle">
                                <h4 class="selectedBoxTitleText">
                                    2. Select Your Box Size
                                </h4>
                            </div>
                            <div class="quantityWeekWrapper">
                                <div class="quantityWeek">
                                    <div class="numberOfPeople">
                                        <div class="numberOfPeopleText">
                                            <span>Number of people</span>
                                        </div>
                                        <div class="numberOfPeopleNumbers">
                                            <div class="buttonWrapper">
                                                <button
                                                    v-for="item in quantityPeople"
                                                    :key="item.id"
                                                    @click="
                                                        choosenQuantity(item)
                                                    "
                                                    class="buttonOfNumbers"
                                                    :class="{
                                                        activeNumbers:
                                                            choosenQuantityPeople.id ===
                                                            item.id,
                                                    }"
                                                >
                                                    <span>{{
                                                        item.quantity
                                                    }}</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mealsPerWeek">
                                        <div class="mealsPerWeekText">
                                            <span>Meals per week</span>
                                        </div>
                                        <div class="mealsPerWeekNumbers">
                                            <div class="buttonWrapper">
                                                <button
                                                    v-for="item in mealsPerWeek"
                                                    :key="item.id"
                                                    @click="
                                                        choosenQuantityMealsPerWeek(
                                                            item
                                                        )
                                                    "
                                                    class="buttonOfNumbers"
                                                    :class="{
                                                        activeNumbers:
                                                            choosenMealsPerWeek.id ===
                                                            item.id,
                                                    }"
                                                >
                                                    <span>{{
                                                        item.quantity
                                                    }}</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blockTotalPrice">
                                <div class="totalPriceWrapper">
                                    <div class="totalPriceBorder">
                                        <div class="borderWrapper">
                                            <div
                                                class="borderWrapperStyled"
                                            ></div>
                                            <div
                                                v-if="choosenIds.length <= 1"
                                                class="planOfName"
                                            >
                                                <span class="planOfNameText">{{
                                                    planOfName
                                                }}</span>
                                            </div>
                                            <div v-else class="planOfName">
                                                <span class="planOfNameText"
                                                    >Multiple preferences</span
                                                >
                                            </div>
                                            <div class="quantityPerson">
                                                <span class="quantityPersonText"
                                                    >{{
                                                        choosenMealsPerWeek.quantity
                                                    }}
                                                    meals for
                                                    {{
                                                        choosenQuantityPeople.quantity
                                                    }}
                                                    people per week</span
                                                >
                                            </div>
                                            <div class="totalServings">
                                                <span class="totalServingsText"
                                                    >{{ totalServings }} total
                                                    servings</span
                                                >
                                            </div>
                                            <div class="separator"></div>
                                            <div class="pricePerServing">
                                                <div
                                                    class="pricePerServingText"
                                                >
                                                    <span
                                                        >Price per serving</span
                                                    >
                                                </div>
                                                <div class="resultedPrice">
                                                    <div class="oldPrice">
                                                        <h4>${{ oldPrice }}</h4>
                                                    </div>
                                                    <h4 class="discountPrice">
                                                        ${{ discountPrice }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="selectPlan">
                            <div class="selectPlanWrapper">
                                <div class="buttonPlanWrapper">
                                    <button
                                        class="buttonPlan"
                                        @click="selectedPlan"
                                    >
                                        <span class="buttonPlanText"
                                            >Select This Plan</span
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <error-modal
                :showModalError="showModalError"
                :visiblilityModalError="visiblilityModalError"
            ></error-modal>
        </div>
    </div>
</template>

<script>
import ErrorModal from "./ErrorModal.vue";

export default {
    components: {
        ErrorModal,
    },
    data() {
        return {
            choosenIds: [],
            quantityPeople: [
                { id: 1, quantity: 2 },
                { id: 2, quantity: 4 },
                { id: 3, quantity: 6 },
            ],
            choosenQuantityPeople: { id: 1, quantity: 2 },
            mealsPerWeek: [
                { id: 1, quantity: 2 },
                { id: 2, quantity: 3 },
                { id: 3, quantity: 4 },
            ],
            choosenMealsPerWeek: { id: 1, quantity: 2 },
            visiblilityModalError: false,
        };
    },

    props: ["dataResponse"],

    computed: {
        getData() {
            console.log(this.dataResponse);
            return JSON.parse(this.dataResponse);
        },
        totalServings() {
            return (
                this.choosenMealsPerWeek.quantity *
                this.choosenQuantityPeople.quantity
            );
        },
        oldPrice() {
            return (
                this.choosenMealsPerWeek.quantity *
                this.choosenQuantityPeople.quantity *
                1.13
            ).toFixed(2);
        },
        discountPrice() {
            return (
                this.choosenMealsPerWeek.quantity *
                this.choosenQuantityPeople.quantity *
                1.13 *
                0.5
            ).toFixed(2);
        },
        planOfName() {
            return this.choosenIds
                .map(
                    (id) =>
                        this.getData.preferences.find(
                            (preference) => preference.id === id
                        ).name
                )
                .join("");
        },
    },

    methods: {
        choosenPreferences(id) {
            if (this.choosenIds.includes(id)) {
                this.choosenIds = this.choosenIds.filter((choosenId) => {
                    return choosenId !== id;
                });
            } else {
                this.choosenIds.push(id);
            }
        },

        choosenQuantity(item) {
            this.choosenQuantityPeople = item;
        },

        choosenQuantityMealsPerWeek(item) {
            this.choosenMealsPerWeek = item;
        },

        selectedPlan() {
            if (this.choosenIds.length !== 0) {
                console.log(
                    `The buyer has chosen preferences: ${this.choosenIds
                        .map(
                            (id) =>
                                this.getData.preferences.find(
                                    (preference) => preference.id === id
                                ).name
                        )
                        .join(", ")} on ${
                        this.choosenMealsPerWeek.quantity
                    } meals for ${
                        this.choosenQuantityPeople.quantity
                    } people per week for the total amount: ${(
                        this.choosenMealsPerWeek.quantity *
                        this.choosenQuantityPeople.quantity *
                        1.13 *
                        0.5
                    ).toFixed(2)}`
                );
            } else {
                console.log(`Please choose preferences`);
                this.showModalError();
            }
        },
        showModalError() {
            this.visiblilityModalError = !this.visiblilityModalError;
        },
    },
};
</script>

<style scoped>
.plansMain {
    position: relative;
    -webkit-flex: 1 0 auto;
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #f7f7f7;
    min-height: 100px;
}

.containerWrapper {
    max-width: 1024px;
    margin: 0 auto;
    padding-bottom: 24px;
}

.createrPlan {
    text-align: center;
    margin: 40px auto 64px;
    max-width: 100%;
    padding: 0px;
}

.titlePlan {
    color: #4b4d4c;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    text-transform: none;
    font-size: 24px;
    font-weight: 700;
    line-height: 32px;
    margin: 0 0 12px;
}

.gridContainer {
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    box-sizing: border-box;
    width: auto;
    padding: 32px 24px;
    box-shadow: 0 3px 5px 0 rgb(0 0 0 / 20%);
    border-radius: 15px;
    background-color: #ffffff;
}

.gridWrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
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
    box-sizing: border-box;
}

.preferences {
    width: 100%;
}

.preferencesTitle,
.selectedBoxTitle {
    padding-bottom: 16px;
}

.preferencesTitleText,
.selectedBoxTitleText {
    color: rgb(34, 34, 34);
    margin: 0px;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 24px;
}

.chooseError {
    margin-bottom: 16px;
    height: 20px;
    color: rgb(220, 30, 30);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
}

.preferencesDescription {
    padding-right: 8px;
    padding-left: 8px;
    margin-bottom: 24px;
}

.preferencesDescriptionText {
    color: rgb(51, 51, 51);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    margin: 0px;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
}

.preferencesBlock {
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    -webkit-box-pack: center;
    justify-content: center;
}

.preferencesButton {
    display: flex;
    flex: 1 1 100%;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    width: 100%;
    height: 80px;
    border-radius: 3px;
    padding: 8px;
    border-style: solid;
    border-width: thin;
    border-color: rgb(34, 34, 34);
    background-color: rgb(247, 247, 247);
    transition: transform 0.5s ease 0s;
}

.preferencesChoosing {
    flex-basis: 50%;
    max-width: 50%;
    padding-bottom: 8px;
    padding-right: 4px;
    padding-left: 8px;
}

.choosen {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    border-radius: 50%;
    width: 27px;
    height: 27px;
    background-color: rgb(70, 167, 72);
    border-color: rgb(42, 78, 42);
    border-width: 1px;
    border-style: solid;
    position: absolute;
    top: 8px;
    left: 8px;
    color: rgb(255, 255, 255);
}

.preferencesName {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    margin: 0px;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
}

.someText {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    margin: 0px;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    padding: 8px 8px 16px;
}

.selectedBox {
    -webkit-flex: 1 1 0;
    -ms-flex: 1 1 0;
    flex: 1 1 0;
    box-sizing: border-box;
    margin-top: 0;
    padding: 24px 8px 0;
}

.quantityWeekWrapper {
    width: 100%;
    margin: 0 auto;
    max-width: 402px;
}

.quantityWeek {
    width: 100%;
    padding-left: 0px;
    padding-right: 0px;
}

.numberOfPeople,
.mealsPerWeek {
    padding-bottom: 8px;
    display: block;
    -webkit-box-align: center;
    align-items: center;
}

.numberOfPeopleText,
.mealsPerWeekText {
    width: 100%;
    text-align: left;
    margin-top: 16px;
    margin-bottom: 16px;
}

.numberOfPeopleText > span,
.mealsPerWeekText > span {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    margin: 0px;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
}

.numberOfPeopleNumbers,
.mealsPerWeekNumbers {
    width: 60%;
}

.buttonWrapper {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    height: 50px;
    position: relative;
}

.buttonOfNumbers {
    width: 33.3333%;
    height: 40px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    background-color: inherit;
    font-size: 16px;
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    color: rgb(66, 105, 61);
    border-style: solid;
    border-width: 1px;
    border-color: rgb(66, 105, 61);
    cursor: pointer;
    border-left-width: 0px;
}

.buttonOfNumbers:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}

.buttonOfNumbers:first-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    border-width: 1px;
}

.buttonOfNumbers:hover {
    background-color: rgb(181, 220, 182);
    font-weight: 700;
}

.activeNumbers {
    color: rgb(255, 255, 255);
    background-color: rgb(66, 105, 61);
    border-radius: 4px;
    width: 36.3333%;
    height: 42px;
    border-style: solid;
    border-width: 1px;
    transition: left 0.3s cubic-bezier(0, 0, 0.2, 1) 0s;
    margin-left: -1px;
    font-weight: bold;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

.buttonOfNumbers > span {
    position: relative;
}

/* .buttonWrapper::after {
    display: flex;
    z-index: 1;
    top: 3px;
    color: rgb(255, 255, 255);
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    left: calc(-1.5%);
    content: "2";
    position: absolute;
    background-color: rgb(66, 105, 61);
    border-radius: 4px;
    width: 36.3333%;
    height: 42px;
    border-style: solid;
    border-width: 1px;
    transition: left 0.3s cubic-bezier(0, 0, 0.2, 1) 0s;
    margin-left: -1px;
    font-weight: bold;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
} */

.blockTotalPrice {
    margin-top: 0px;
    width: 100%;
}

.totalPriceWrapper {
    max-width: 550px;
    margin-left: auto;
    margin-right: auto;
    max-width: 440px;
}

.totalPriceBorder {
    margin-top: 12px;
    border-color: rgb(204, 204, 204);
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
    background-color: rgb(255, 255, 255);
}

.borderWrapper {
    position: relative;
    border-radius: 4px;
    width: 100%;
    padding: 16px 16px 0px;
    text-align: left;
}

.borderWrapperStyled {
    display: block;
    position: absolute;
    background-color: rgb(255, 255, 255);
    width: 15px;
    height: 15px;
    left: 50%;
    top: 0px;
    border-color: rgb(204, 204, 204) rgb(204, 204, 204) rgb(255, 255, 255)
        rgb(255, 255, 255);
    border-width: 1px;
    border-style: solid;
    border-top-right-radius: 4px;
    transform-origin: 0% 0%;
    transform: rotate(-45deg) translate(-50%, -50%);
}
.planOfName {
    width: 100%;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
}

.planOfNameText {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    font-size: 16px;
    margin: 0px;
    font-weight: 700;
}

.quantityPerson {
    padding-top: 12px;
    padding-bottom: 12px;
}

.quantityPersonText {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    font-size: 16px;
    margin: 0px;
}

.totalServings {
    padding-bottom: 8px;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
}

.totalServingsText {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    font-size: 16px;
    margin: 0px;
}

.separator {
    margin-top: 8px;
    margin-bottom: 8px;
    width: 100%;
    border-top: 1px solid rgb(204, 204, 204);
}

.pricePerServing {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding-top: 8px;
    padding-bottom: 16px;
    height: 100%;
}

.pricePerServingText {
    text-align: left;
    width: 50%;
}

.pricePerServingText > span {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    font-size: 16px;
    margin: 0px;
}

.resultedPrice {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: end;
    justify-content: flex-end;
    width: 50%;
    white-space: nowrap;
}

.oldPrice {
    margin-right: 16px;
}

.oldPrice > h4 {
    color: rgb(75, 77, 76);
    margin: 0px;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-weight: 600;
    font-size: 16px;
    line-height: 20px;
    text-decoration: line-through;
}

.discountPrice {
    color: rgb(193, 26, 26);
    margin: 0px;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-weight: 600;
    font-size: 16px;
    line-height: 20px;
}

.selectPlan {
    -webkit-flex: 1 1 0;
    -ms-flex: 1 1 0;
    flex: 1 1 0;
    box-sizing: border-box;
}

.selectPlanWrapper {
    display: flex;
    flex-direction: column;
    width: 100%;
    align-self: center;
    margin: auto;
}

.buttonPlanWrapper {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    z-index: 2;
    align-self: center;
    background-color: rgb(255, 255, 255);
    width: 100%;
    margin: 0px;
    padding: 16px;
    bottom: 0px;
    left: 0px;
    background-color: inherit;
    margin: auto;
    padding: 0px;
    margin-top: 24px;
    width: 100%;
}

.buttonPlan {
    width: 100%;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    border-radius: 4px;
    border-style: none;
    font-size: 16px;
    line-height: 24px;
    padding: 12px 24px;
    background-color: rgb(66, 105, 61);
    color: rgb(255, 255, 255);
    text-decoration: none;
    cursor: pointer;
}

.buttonPlan:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
}

.buttonPlanText {
    color: inherit;
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    margin: 0px;
    font-weight: 700;
    font-size: 16px;
    line-height: 24px;
}

@media only screen and (min-width: 0px) {
    .gridContainer {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-right: -7.5px;
        margin-left: -7.5px;
    }

    .selectedBox {
        -webkit-flex-basis: 100%;
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        max-width: 100%;
        padding-right: 7.5px;
        padding-left: 7.5px;
    }

    .numberOfPeopleNumbers,
    .mealsPerWeekNumbers {
        width: 100%;
    }
}

@media only screen and (min-width: 768px) {
    .titlePlan {
        margin-bottom: 24px;
    }

    .gridContainer {
        width: 582px;
        margin: 40px auto 40px;
        padding: 32px;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-right: -15px;
        margin-left: -15px;
    }
    .preferences {
        width: 100%;
    }

    .preferencesButton {
        height: 115px;
    }

    .selectedBox {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-flex-basis: 100%;
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        max-width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .selectPlanWrapper {
        width: 60%;
    }

    .preferencesTitle,
    .selectedBoxTitle {
        padding-bottom: 8px;
    }

    .preferencesDescription {
        padding-left: 0px;
        padding-right: 0px;
    }

    .someText {
        padding: 16px 0px;
    }

    .quantityWeekWrapper {
        min-width: 332px;
    }

    .numberOfPeople,
    .mealsPerWeek {
        display: inline;
        width: 100%;
    }

    .numberOfPeopleNumbers,
    .mealsPerWeekNumbers {
        width: 100%;
    }

    .numberOfPeopleText,
    .mealsPerWeekText {
        width: 40%;
    }

    .oldPrice > h4,
    .discountPrice {
        font-size: 16px;
        line-height: 20px;
    }
}

@media only screen and (min-width: 1200px) {
    .titlePlan {
        font-size: 32px;
        line-height: 38px;
    }

    .gridContainer {
        width: auto !important;
        padding: 32px 0;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        margin-right: -15px;
        margin-left: -15px;
    }

    .preferences {
        width: 50%;
        border-right: 1px dashed rgb(108, 108, 108);
        padding-left: 32px;
        padding-right: 32px;
    }

    .selectedBox {
        padding-top: 0;
        padding-left: 0;
        padding-right: 0;
        -webkit-flex-basis: 50%;
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
        max-width: 50%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .selectPlanWrapper {
        width: 30%;
    }

    .preferencesTitle,
    .selectedBoxTitle {
        padding-bottom: 16px;
    }

    .someText {
        padding-bottom: 40px;
    }

    .numberOfPeople,
    .mealsPerWeek {
        display: flex;
    }

    .numberOfPeopleText,
    .mealsPerWeekText {
        width: 100%;
    }

    .oldPrice > h4,
    .discountPrice {
        font-size: 20px;
        line-height: 24px;
    }
}

@media only screen and (max-width: 768px) {
    .preferencesName {
        font-size: 14px;
    }
}
</style>
