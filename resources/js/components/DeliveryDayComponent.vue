<template>
    <div class="deliveryDayComponent">
        <h3 class="summaryTitle">Delivery day</h3>
        <div class="weeklyDelivery">
            <div class="weeklyDay">
                <div>
                    <div class="legend">
                        <span>When do you want your weekly delivery? </span>
                    </div>
                    <div class="choosingDay">
                        <template v-for="item in week" :key="item.id">
                            <input
                                class="inputDay"
                                type="radio"
                                :id="item.id"
                                :name="item.name"
                            /><label :for="item.name"
                                ><div
                                    aria-checked="false"
                                    class="dayWeek"
                                    @click="onPickedWeekly(item)"
                                    :class="{
                                        dayChecked: weeklyPicked.id === item.id,
                                    }"
                                >
                                    {{ item.name }}
                                </div></label
                            >
                        </template>
                    </div>
                </div>
            </div>
            <div class="weeklyDay">
                <div>
                    <div class="legend">
                        <span>Pick your first day of Brisk Meal. </span>
                    </div>

                    <div class="choosingDay">
                        <template v-for="item in deliveryDays" :key="item.id">
                            <input
                                class="inputDay"
                                type="radio"
                                :id="item.id"
                                :name="item.date"
                            /><label :for="item.id"
                                ><div
                                    aria-checked="false"
                                    class="dayWeek"
                                    @click="onPickedDay(item)"
                                    :class="{
                                        dayChecked: dayPicked.id === item.id,
                                    }"
                                >
                                    {{ item.date }}
                                </div></label
                            >
                        </template>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="gridWrapper">
                    <div class="gridElementState">
                        <div class="elementName">
                            <label for="region">
                                <p>Delivery Instructions</p>
                                <div class="inputWrapper arrow">
                                    <select
                                        id="address2Comment"
                                        name="address2Comment"
                                        data-input="address2Comment"
                                        data-input-error="false"
                                        class="selectState"
                                        v-model="
                                            formValidation.delivery_instructions
                                        "
                                    >
                                        <option value="Select">Select</option>
                                        <option value="Leave at front door">
                                            Leave at front door
                                        </option>
                                        <option value="Leave at back door">
                                            Leave at back door
                                        </option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "deliveryDayComponent",
    props: {
        formValidation: Object,
    },
    data() {
        return {
            week: [
                { id: 0, name: "Sun" },
                { id: 1, name: "Mon" },
                { id: 2, name: "Tue" },
                { id: 3, name: "Wed" },
                { id: 4, name: "Thu" },
                { id: 5, name: "Fri" },
                { id: 6, name: "Sat" },
            ],
            deliveryDays: [
                { id: 1, date: "" },
                { id: 2, date: "" },
            ],
            weeklyPicked: { id: 0, name: "Sun" },
            dayPicked: { id: 1, date: "" },

            closestDay: new Date(
                Date.parse(this.formValidation.active_weeks[0].last_week_day)
            ),
        };
    },
    mounted() {
        this.getClosestDay();
        this.getFirstDate();
        this.dayPicked = this.deliveryDays[0];
        this.getSecondDate();
        this.setDeliveryDay();
    },
    methods: {
        onPickedWeekly(item) {
            this.weeklyPicked = item;
            this.getClosestDay();
            this.getFirstDate();
            this.getSecondDate();
            this.setDeliveryDay();
        },
        onPickedDay(item) {
            this.dayPicked = item;
            this.getClosestDay();
            this.getFirstDate();
            this.getSecondDate();
            this.setDeliveryDay();
        },
        getFirstDate() {
            let day = this.closestDay.getDate();
            let month = this.closestDay.getMonth() + 1;
            const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            const weeklyDay = days[this.closestDay.getDay()];
            const lastDayOfMonth = new Date(
                this.closestDay.getFullYear(),
                this.closestDay.getMonth() + 1,
                0
            ).toLocaleString("RU", { day: "numeric" });

            let result = "";

            day < 10 ? (day = `0${day}`) : day;

            if (month < 10) {
                result = `${weeklyDay} 0${month}/${day}`;
                this.deliveryDays[0].date = result;
            } else {
                result = `${weeklyDay} ${month}/${day}`;
                this.deliveryDays[0].date = result;
            }
            if (day > lastDayOfMonth) {
                month = month + 1;
                day = `0${day - lastDayOfMonth}`;
                result = `${weeklyDay} 0${month}/${day}`;

                this.deliveryDays[0].date = result;
            }
            return this.deliveryDays;
        },
        getSecondDate() {
            let day = this.closestDay.getDate() + 7;
            let month = this.closestDay.getMonth() + 1;
            const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            const weeklyDay = days[this.closestDay.getDay()];
            const lastDayOfMonth = new Date(
                this.closestDay.getFullYear(),
                this.closestDay.getMonth() + 1,
                0
            ).toLocaleString("RU", { day: "numeric" });

            let result = "";

            day < 10 ? (day = `0${day}`) : day;

            if (month < 10) {
                result = `${weeklyDay} 0${month}/${day}`;
                this.deliveryDays[1].date = result;
            } else {
                result = `${weeklyDay} ${month}/${day}`;
                this.deliveryDays[1].date = result;
            }
            if (day > lastDayOfMonth) {
                month = month + 1;
                day = `0${day - lastDayOfMonth}`;
                result = `${weeklyDay} 0${month}/${day}`;
                this.deliveryDays[1].date = result;
            }
            return this.deliveryDays;
        },

        getClosestDay() {
            let startDay = new Date(
                Date.parse(this.formValidation.active_weeks[0].last_week_day)
            );
            let choosenDay = new Date(
                startDay.setDate(startDay.getDate() + this.weeklyPicked.id)
            );
            this.closestDay = choosenDay;
        },

        setDeliveryDay() {
            let day = +this.dayPicked.date.split(" ")[1].split("/")[1];
            let month = +this.dayPicked.date.split(" ")[1].split("/")[0];
            let year = this.closestDay.getFullYear();
            day < 10 ? (day = `0${day}`) : day;
            month < 10 ? (month = `0${month}`) : month;
            this.formValidation.delivery_day = `${year}-${month}-${day}`;
        },
    },
};
</script>

<style scoped>
.deliveryDayComponent {
    margin-top: 24px;
}

.summaryTitle {
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-size: 20px;
    line-height: 30px;
    color: #333;
    text-transform: none;
    margin: 0px 0px 24px;
    font-weight: 700;
    display: flex;
}

.weeklyDelivery {
    display: block;
}

.weeklyDay {
    margin-bottom: 32px;
}

fieldset {
    display: flex;
    -webkit-box-align: stretch;
    align-items: stretch;
    border: 0px;
    padding: 0px;
    margin: 0px;
    width: 100%;
    margin-inline-start: 2px;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
}

.legend {
    color: inherit;
    display: table;
    max-width: 100%;
    padding: 0;
    white-space: normal;
    margin-bottom: 16px;
    font-size: 16px;
    line-height: 24px;
}

.choosingDay {
    display: flex;
    flex: 1 1 0%;
    border-radius: 4px;
    border: 1px solid rgb(66, 105, 61);
}

.inputDay {
    position: fixed;
    left: -1000vw;
}

.choosingDay > label {
    flex: 1 1 0%;
}

.dayWeek {
    position: relative;
    -webkit-box-flex: 1;
    flex-grow: 1;
    height: 40px;
    line-height: 24px;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    color: rgb(66, 105, 61);
    background-color: transparent;
    border: 2px solid rgb(66, 105, 61);
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-size: 16px;
    font-weight: 400;
    width: auto;
}

.dayChecked {
    position: relative;
    -webkit-box-flex: 1;
    flex-grow: 1;
    height: 40px;
    line-height: 24px;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    color: rgb(255, 255, 255);
    background-color: rgb(66, 105, 61);
    border: 2px solid rgb(66, 105, 61);
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-size: 16px;
    font-weight: 400;
    width: auto;
}

.grid {
    flex: 1 1 auto;
    box-sizing: border-box;
    width: auto;
}

.gridWrapper {
    display: flex;
    height: 100%;
    width: 100%;
    flex-flow: row wrap;
}

.gridElement {
    flex: 1 1 0px;
}

.gridElementState {
    flex-basis: 100%;
    max-width: 100%;
}

.elementName {
    position: relative;
}

label {
    display: block;
}

label > p {
    margin-bottom: 16px;
    font-size: 16px;
    line-height: 24px;
    display: flex;
}

.selectState {
    height: 48px;
    font-size: 16px;
    font-weight: normal;
    border-radius: 4px;
    background: rgb(255, 255, 255);
    outline: none;
    padding: 2px 16px;
    border: 1px solid rgb(108, 108, 108);
    color: rgb(51, 51, 51);
    appearance: none;
    width: 100%;
    display: block;
}

.inputWrapper {
    position: relative;
}

.arrow::after {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
    content: "";
    pointer-events: none;
    border-right: 5px solid transparent;
    border-bottom: 0px solid transparent;
    border-left: 5px solid transparent;
    width: 0px;
    height: 0px;
    border-top-width: 7px;
    border-top-style: solid;
    border-top-color: rgb(0, 0, 0) !important;
}

@media only screen and (min-width: 1200px) {
    .summaryTitle {
        font-size: 24px;
        line-height: 30px;
    }
}
</style>
