<template>
    <form class="orderPageForm">
        <h3 class="formTitle">Delivery Address</h3>
        <div class="grid">
            <div class="gridWrapper">
                <div class="gridElement">
                    <div class="elementName">
                        <label for="firstName">
                            <p>First name *</p>
                            <div class="inputWrapper">
                                <input
                                    id="firstName"
                                    type="text"
                                    v-model="formValidation.first_name"
                                    @blur="blurEventHandler"
                                    :class="{
                                        errorInput:
                                            bluredFields.firstName &&
                                            !formValidation.first_name,
                                        inputValidate:
                                            formValidation.first_name,
                                    }"
                                />
                                <svg
                                    v-if="
                                        bluredFields.firstName &&
                                        !formValidation.first_name
                                    "
                                    class="errorIcon"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g
                                        fill="none"
                                        fill-rule="evenodd"
                                        transform="translate(4 4)"
                                    >
                                        <circle
                                            cx="8"
                                            cy="8"
                                            r="8"
                                            fill="#DC1E1E"
                                        ></circle>
                                        <path
                                            fill="#FFF"
                                            d="M7.289 10.795a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 11.51c0-.28.096-.518.289-.715zm1.305-1.443a1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417 316.96 316.96 0 0 1-.03-2.467c-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467a.525.525 0 0 1-.278.443z"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div
                                v-if="
                                    bluredFields.firstName &&
                                    !formValidation.first_name
                                "
                                class="errorText"
                            >
                                Required
                            </div>
                        </label>
                    </div>
                </div>
                <div class="gridElement">
                    <div class="elementName">
                        <label for="lastName">
                            <p>Last name *</p>
                            <div class="inputWrapper">
                                <input
                                    id="lastName"
                                    type="text"
                                    v-model="formValidation.last_name"
                                    @blur="blurEventHandler"
                                    :class="{
                                        errorInput:
                                            bluredFields.lastName &&
                                            !formValidation.last_name,
                                        inputValidate: formValidation.last_name,
                                    }"
                                />
                                <svg
                                    v-if="
                                        bluredFields.lastName &&
                                        !formValidation.last_name
                                    "
                                    class="errorIcon"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g
                                        fill="none"
                                        fill-rule="evenodd"
                                        transform="translate(4 4)"
                                    >
                                        <circle
                                            cx="8"
                                            cy="8"
                                            r="8"
                                            fill="#DC1E1E"
                                        ></circle>
                                        <path
                                            fill="#FFF"
                                            d="M7.289 10.795a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 11.51c0-.28.096-.518.289-.715zm1.305-1.443a1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417 316.96 316.96 0 0 1-.03-2.467c-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467a.525.525 0 0 1-.278.443z"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div
                                v-if="
                                    bluredFields.latName &&
                                    !formValidation.last_name
                                "
                                class="errorText"
                            >
                                Required
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="gridWrapper">
                <div class="gridElement">
                    <div class="elementName">
                        <label for="address">
                            <p>Address *</p>
                            <div class="inputWrapper">
                                <input
                                    id="address"
                                    type="text"
                                    v-model="formValidation.address"
                                    @blur="blurEventHandler"
                                    :class="{
                                        errorInput:
                                            bluredFields.address &&
                                            !formValidation.address,
                                        inputValidate: formValidation.address,
                                    }"
                                />
                                <svg
                                    v-if="
                                        bluredFields.address &&
                                        !formValidation.address
                                    "
                                    class="errorIcon"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g
                                        fill="none"
                                        fill-rule="evenodd"
                                        transform="translate(4 4)"
                                    >
                                        <circle
                                            cx="8"
                                            cy="8"
                                            r="8"
                                            fill="#DC1E1E"
                                        ></circle>
                                        <path
                                            fill="#FFF"
                                            d="M7.289 10.795a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 11.51c0-.28.096-.518.289-.715zm1.305-1.443a1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417 316.96 316.96 0 0 1-.03-2.467c-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467a.525.525 0 0 1-.278.443z"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div
                                v-if="
                                    bluredFields.address &&
                                    !formValidation.address
                                "
                                class="errorText"
                            >
                                Required
                            </div>
                        </label>
                    </div>
                </div>
                <div class="gridElement">
                    <div class="elementName">
                        <label for="AddressLine2">
                            <p>Address line 2 *</p>
                            <div class="inputWrapper">
                                <input
                                    id="addressLine2"
                                    type="text"
                                    v-model="formValidation.address_line_2"
                                    @blur="blurEventHandler"
                                    :class="{
                                        errorInput:
                                            bluredFields.addressLine2 &&
                                            !formValidation.address_line_2,
                                        inputValidate:
                                            formValidation.address_line_2,
                                    }"
                                />
                                <svg
                                    v-if="
                                        bluredFields.addressLine2 &&
                                        !formValidation.address_line_2
                                    "
                                    class="errorIcon"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g
                                        fill="none"
                                        fill-rule="evenodd"
                                        transform="translate(4 4)"
                                    >
                                        <circle
                                            cx="8"
                                            cy="8"
                                            r="8"
                                            fill="#DC1E1E"
                                        ></circle>
                                        <path
                                            fill="#FFF"
                                            d="M7.289 10.795a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 11.51c0-.28.096-.518.289-.715zm1.305-1.443a1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417 316.96 316.96 0 0 1-.03-2.467c-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467a.525.525 0 0 1-.278.443z"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div
                                v-if="
                                    bluredFields.addressLine2 &&
                                    !formValidation.address_line_2
                                "
                                class="errorText"
                            >
                                Required
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="gridWrapper">
                <div class="gridElementCity">
                    <div class="elementName">
                        <label for="city">
                            <p>City *</p>
                            <div class="inputWrapper">
                                <input
                                    id="city"
                                    type="text"
                                    v-model="formValidation.city"
                                    @blur="blurEventHandler"
                                    :class="{
                                        errorInput:
                                            bluredFields.city &&
                                            !formValidation.city,
                                        inputValidate: formValidation.city,
                                    }"
                                />
                                <svg
                                    v-if="
                                        bluredFields.city &&
                                        !formValidation.city
                                    "
                                    class="errorIcon"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g
                                        fill="none"
                                        fill-rule="evenodd"
                                        transform="translate(4 4)"
                                    >
                                        <circle
                                            cx="8"
                                            cy="8"
                                            r="8"
                                            fill="#DC1E1E"
                                        ></circle>
                                        <path
                                            fill="#FFF"
                                            d="M7.289 10.795a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 11.51c0-.28.096-.518.289-.715zm1.305-1.443a1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417 316.96 316.96 0 0 1-.03-2.467c-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467a.525.525 0 0 1-.278.443z"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div
                                v-if="bluredFields.city && !formValidation.city"
                                class="errorText"
                            >
                                Required
                            </div>
                        </label>
                    </div>
                </div>
                <div class="gridElementState">
                    <div class="elementName">
                        <label for="region">
                            <p>State *</p>
                            <div class="inputWrapper arrow">
                                <select
                                    id="region"
                                    name="region"
                                    class="selectState"
                                    input="true"
                                    v-model="formValidation.region"
                                    @blur="blurEventHandler"
                                    :class="{
                                        errorInput:
                                            bluredFields.region &&
                                            !formValidation.region,
                                        inputValidate: formValidation.region,
                                    }"
                                >
                                    <option disabled value="">Select</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>Arizona</option>
                                    <option>Arkansas</option>
                                    <option>California</option>
                                    <option>Colorado</option>
                                    <option>Connecticut</option>
                                    <option>Delaware</option>
                                    <option>District of Columbia</option>
                                    <option>Florida</option>
                                    <option>Georgia</option>
                                    <option>Hawaii</option>
                                    <option>Idaho</option>
                                    <option>Illinois</option>
                                    <option>Indiana</option>
                                    <option>Iowa</option>
                                    <option>Kansas</option>
                                    <option>Kentucky</option>
                                    <option>Louisiana</option>
                                    <option>Maine</option>
                                    <option>Maryland</option>
                                    <option>Massachusetts</option>
                                    <option>Michigan</option>
                                    <option>Minnesota</option>
                                    <option>Mississippi</option>
                                    <option>Missouri</option>
                                    <option>Montana</option>
                                    <option>Nebraska</option>
                                    <option>Nevada</option>
                                    <option>New Hampshire</option>
                                    <option>New Jersey</option>
                                    <option>New Mexico</option>
                                    <option>New York</option>
                                    <option>North Carolina</option>
                                    <option>North Dakota</option>
                                    <option>Ohio</option>
                                    <option>Oklahoma</option>
                                    <option>Oregon</option>
                                    <option>Pennsylvania</option>
                                    <option>Rhode Island</option>
                                    <option>South Carolina</option>
                                    <option>South Dakota</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Utah</option>
                                    <option>Vermont</option>
                                    <option>Virginia</option>
                                    <option>Washington</option>
                                    <option>West Virginia</option>
                                    <option>Wisconsin</option>
                                    <option>Wyoming</option>
                                </select>
                            </div>
                            <div
                                v-if="
                                    bluredFields.region &&
                                    !formValidation.region
                                "
                                class="errorText"
                            >
                                Required
                            </div>
                        </label>
                    </div>
                </div>
                <div class="gridElementZip">
                    <div class="elementName">
                        <label for="zip">
                            <p>ZIP code *</p>
                            <div class="inputWrapper">
                                <input
                                    id="zipCode"
                                    type="text"
                                    v-model="formValidation.zip_code"
                                    @input="acceptZipCode"
                                    @blur="blurEventHandler"
                                    :class="{
                                        errorInput:
                                            bluredFields.zipCode &&
                                            !acceptZipCode(),
                                        inputValidate: acceptZipCode(),
                                    }"
                                />
                                <svg
                                    v-if="
                                        bluredFields.zipCode && !acceptZipCode()
                                    "
                                    class="errorIcon"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g
                                        fill="none"
                                        fill-rule="evenodd"
                                        transform="translate(4 4)"
                                    >
                                        <circle
                                            cx="8"
                                            cy="8"
                                            r="8"
                                            fill="#DC1E1E"
                                        ></circle>
                                        <path
                                            fill="#FFF"
                                            d="M7.289 10.795a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 11.51c0-.28.096-.518.289-.715zm1.305-1.443a1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417 316.96 316.96 0 0 1-.03-2.467c-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467a.525.525 0 0 1-.278.443z"
                                        ></path>
                                    </g>
                                </svg>
                                <svg
                                    v-if="
                                        formValidation.zip_code.length === 5 &&
                                        acceptZipCode()
                                    "
                                    class="svgValidate"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="10"
                                        fill="#009646"
                                    ></circle>
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M10.4499 13.5916L8.20416 11.3645C7.81202 10.9756 7.17886 10.9782 6.78996 11.3703C6.40106 11.7625 6.40369 12.3956 6.79584 12.7845L9.74576 15.71C10.1356 16.0967 10.7642 16.0967 11.1541 15.71L17.2042 9.71004C17.5963 9.32114 17.5989 8.68798 17.21 8.29584C16.8211 7.90369 16.188 7.90106 15.7958 8.28996L10.4499 13.5916Z"
                                        fill="white"
                                    ></path>
                                </svg>
                            </div>
                            <div
                                v-if="bluredFields.zipCode && !acceptZipCode()"
                                class="errorText"
                            >
                                Required
                            </div>
                        </label>
                    </div>
                </div>
                <div class="gridElementPhone">
                    <div class="elementName">
                        <label for="phone">
                            <p>Phone *</p>
                            <div class="inputWrapper">
                                <input
                                    id="phone"
                                    type="text"
                                    placeholder="(***)-***-**-**"
                                    v-model="formValidation.phone"
                                    @input="acceptNumber"
                                    @blur="blurEventHandler"
                                    :class="{
                                        errorInput:
                                            bluredFields.phone &&
                                            !acceptNumber(),
                                        inputValidate: acceptNumber(),
                                    }"
                                />
                                <svg
                                    v-if="bluredFields.phone && !acceptNumber()"
                                    class="errorIcon"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g
                                        fill="none"
                                        fill-rule="evenodd"
                                        transform="translate(4 4)"
                                    >
                                        <circle
                                            cx="8"
                                            cy="8"
                                            r="8"
                                            fill="#DC1E1E"
                                        ></circle>
                                        <path
                                            fill="#FFF"
                                            d="M7.289 10.795a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 11.51c0-.28.096-.518.289-.715zm1.305-1.443a1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417 316.96 316.96 0 0 1-.03-2.467c-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467a.525.525 0 0 1-.278.443z"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div
                                v-if="bluredFields.phone && !acceptNumber()"
                                class="errorText"
                            >
                                Required
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="agreementBlock" v-if="formValidation.phone.length >= 14">
            <div class="subscriptionBlock">
                <span class="agreementBox"
                    ><input
                        type="checkbox"
                        name="box"
                        class="inputBox"
                        value="" /><span></span
                    ><svg
                        class="web-10a7mn4"
                        width="14"
                        height="10"
                        viewBox="0 0 14 10"
                        preserveAspectRatio="xMidYMid meet"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill="white"
                            d="M11.512.371a1.5 1.5 0 1 1 1.976 2.258l-8 7a1.5 1.5 0 0 1-2.049-.068l-3-3a1.5 1.5 0 1 1 2.122-2.122l2.007 2.008L11.512.371z"
                        ></path></svg
                ></span>
                <label for="box"
                    ><p class="subscribeText">
                        Receive offers and promotions via text message and
                        automated calls
                    </p></label
                >
            </div>
            <small
                ><span class="agreementText"
                    >By checking the box above, you agree to receive automated
                    calls and/or texts for marketing or other purposes by or on
                    behalf of GreenChef even after any subscription
                    deactivation. I understand that consent is not a condition
                    of any purchase, that message &amp; data rates may apply,
                    and that I may opt out at any time by texting STOP.</span
                ></small
            >
        </div>
        <delivery-day-component
            :formValidation="formValidation"
        ></delivery-day-component>
    </form>
</template>

<script>
import DeliveryDayComponent from "./DeliveryDayComponent.vue";

export default {
    name: "OrderPageForm",
    components: {
        DeliveryDayComponent,
    },

    props: {
        formValidation: Object,
        acceptNumber: Function,
        acceptZipCode: Function,
        acceptTextForm: Function,
        blurEventHandler: Function,
        bluredFields: Object,
        // activeWeeks: Object,
    },

    data() {
        return {
            phoneValue: "",
        };
    },

    mounted() {
        console.log("Delivery Component mounted.");
        // console.log(this.formValidation);
        // console.log(this.getActiveWeeks());
    },

    // computed() {
    //     console.log(this.formValidation);
    // },

    // computed: {
    //     getActiveWeeks() {
    //         console.log(JSON.parse(this.activeWeeks));
    //         return JSON.parse(this.activeWeeks);
    //     },
    // },
};
</script>

<style scoped>
.orderPageForm {
    background: rgb(255, 255, 255);
    box-shadow: rgb(212 217 216) 0px 2px 0px;
    border-radius: 9px;
    padding: 32px 8px;
    margin-top: 12px;
}

.formTitle {
    margin: 0px 0px 32px;
    transition: opacity 0.2s ease 0s;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-size: 20px;
    line-height: 30px;
    color: #333;
    text-transform: none;
    font-weight: 700;
    display: flex;
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

.elementName {
    margin-top: 24px;
    position: relative;
}

label {
    display: block;
}

label > p {
    margin-bottom: 4px;
    font-size: 16px;
    line-height: 24px;
    display: flex;
}

.inputWrapper {
    position: relative;
}

.inputWrapper > input {
    height: 48px;
    font-size: 16px;
    font-weight: normal;
    border-radius: 4px;
    background: rgb(255, 255, 255);
    outline: none;
    padding: 12px 16px;
    border: 1px solid rgb(108, 108, 108);
    color: rgb(34, 34, 34);
    width: 100%;
    display: block;
    line-height: 1.5em;
    opacity: 1;
    appearance: none;
}

.inputWrapper > input:focus,
.inputWrapper > select:focus {
    border: 2px solid rgb(75, 77, 76);
}

.gridElementCity,
.gridElementState {
    flex: 1 1 0px;
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

.gridElementZip {
    flex: 1 1 0px;
}

.svgValidate {
    vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
    width: 20px;
    height: 20px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
    border-radius: 50%;
}

.inputWrapper > .inputValidate {
    height: 48px;
    font-size: 16px;
    font-weight: normal;
    border-radius: 4px;
    background: rgb(255, 255, 255);
    outline: none;
    padding: 12px 16px;
    border: 1px solid rgb(0, 120, 56);
    color: rgb(34, 34, 34);
    width: 100%;
    display: block;
    line-height: 1.5em;
    opacity: 1;
    appearance: none;
}

.gridElementPhone {
    flex: 1 1 0px;
}

.agreementBlock {
    margin-top: 24px;
    position: relative;
}

.subscriptionBlock {
    display: flex;
    margin-bottom: 8px;
}

.subscriptionBlock > label {
    margin-left: 8px;
}

.agreementBox {
    display: inline-flex;
    position: relative;
    -webkit-box-align: center;
    align-items: center;
}

.agreementBox > span {
    position: relative;
    pointer-events: none;
    display: inline-block;
    vertical-align: bottom;
    height: 20px;
    width: 20px;
    background-color: white;
    border: 2px solid rgb(108, 108, 108);
    box-sizing: border-box;
    border-radius: 4px;
    transition: border-color 0.15s ease 0s, background-color 0.15s ease 0s;
}

.agreementBox > svg {
    vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
    pointer-events: none;
    position: absolute;
    left: 50%;
    top: 50%;
    opacity: 0;
    transform: translate(-49%, -53%) scale(0);
    transition: opacity 0.15s ease 0s, transform 0.15s ease 0s;
}

.inputBox {
    position: absolute;
    left: 0px;
    top: 0px;
    margin: 0px;
    height: 20px;
    width: 20px;
    padding: 0px;
    opacity: 0;
    cursor: pointer;
}

.inputBox:checked ~ span {
    border-color: rgb(66, 105, 61);
    background-color: rgb(66, 105, 61);
}

.inputBox:checked ~ svg {
    opacity: 1;
    width: 11px;
    height: 8px;
    transform: translate(-49%, -53%) scale(1);
    transition: opacity 0.15s ease 0s,
        transform 0.15s cubic-bezier(0.15, 0.6, 0.5, 1.25) 0s;
}

.subscribeText {
    margin: 0px;
    font-size: 16px;
    line-height: 24px;
}

.agreementText {
    font-size: 12px;
    line-height: 24px;
}

small {
    display: flex;
    text-align: left;
}

.errorIcon {
    vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
    opacity: 1;
    visibility: visible;
    transition: visibility 0s ease 0s, opacity 0.2s ease 0s;
}

.inputWrapper > .errorInput {
    height: 48px;
    font-size: 16px;
    font-weight: normal;
    border-radius: 4px;
    background: rgb(255, 255, 255);
    outline: none;
    padding: 12px 16px;
    border: 1px solid rgb(220, 30, 30);
    color: rgb(34, 34, 34);
    width: 100%;
    display: block;
    line-height: 1.5em;
    opacity: 1;
    appearance: none;
}

.errorText {
    color: rgb(220, 30, 30);
    margin: 4px 0px -12px;
    font-size: 14px;
    line-height: 20px;
    text-align: left;
    z-index: 1;
}

@media only screen and (min-width: 0px) {
    .grid {
        margin-right: -7.5px;
        margin-left: -7.5px;
    }

    .gridElement {
        flex-basis: 50%;
        max-width: 50%;
        padding-right: 7.5px;
        padding-left: 7.5px;
    }

    .gridElementCity,
    .gridElementState {
        flex-basis: 100%;
        max-width: 100%;
        padding-right: 7.5px;
        padding-left: 7.5px;
    }

    .gridElementZip {
        flex-basis: 50%;
        max-width: 50%;
        padding-right: 7.5px;
        padding-left: 7.5px;
    }

    .gridElementPhone {
        flex-basis: 100%;
        max-width: 100%;
        padding-right: 7.5px;
        padding-left: 7.5px;
    }
}

@media only screen and (min-width: 768px) {
    .orderPageForm {
        padding: 32px;
    }

    .grid {
        margin-right: -15px;
        margin-left: -15px;
    }

    .gridElement {
        flex-basis: 50%;
        max-width: 50%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .gridElementCity,
    .gridElementState {
        flex-basis: 40%;
        max-width: 40%;
    }

    .gridElementZip {
        flex-basis: 20%;
        max-width: 20%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .gridElementPhone {
        padding-right: 15px;
        padding-left: 15px;
    }
}

@media only screen and (min-width: 1200px) {
    .orderPageForm {
        margin-top: unset;
    }

    .formTitle {
        font-size: 24px;
        line-height: 30px;
    }

    .grid {
        margin-right: -15px;
        margin-left: -15px;
    }

    .gridElement {
        padding-right: 15px;
        padding-left: 15px;
    }

    .elementName {
        margin-top: 16px;
    }

    .gridElementCity,
    .gridElementState {
        padding-right: 15px;
        padding-left: 15px;
    }

    .gridElementZip {
        padding-right: 15px;
        padding-left: 15px;
    }

    .gridElementPhone {
        padding-right: 15px;
        padding-left: 15px;
    }

    .agreementBlock {
        margin-top: 16px;
    }
}
</style>
