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
        </div>
    </div>
</template>

<script>
export default {
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
        };
    },

    props: ["dataResponse"],

    computed: {
        getData() {
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
            }
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
    font-size: 32px;
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
    padding: 32px 0;
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
    width: 50%;
    border-right: 1px dashed rgb(108, 108, 108);
    padding-left: 32px;
    padding-right: 32px;
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
    margin: 0px;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
}

.preferencesDescription {
    margin-bottom: 36px;
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
    height: 115px;
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
    padding-bottom: 40px;
    padding: 16px 0px;
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
    padding-top: 0;
    padding-left: 0;
    padding-right: 0;
    flex-basis: 50%;
    max-width: 50%;
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
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}

.numberOfPeopleText,
.mealsPerWeekText {
    width: 40%;
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
    font-size: 20px;
    line-height: 24px;
}

.discountPrice {
    color: rgb(193, 26, 26);
    margin: 0px;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-weight: 600;
    font-size: 16px;
    line-height: 20px;
    font-size: 20px;
    line-height: 24px;
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
    width: 30%;
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
</style>
