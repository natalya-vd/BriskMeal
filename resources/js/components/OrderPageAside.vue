<template>
    <div class="orderPageAside">
        <div class="orderSummary">
            <h3 class="summaryTitle">Order summary</h3>
            <section>
                <dl class="plansBlock">
                    <dt>
                        <div class="plans">
                            <span class="plansName">{{ getPreferences }} plan</span>
                            <div>
                                <span class="meals">{{ plan.max_quantity_recipes }} recipes for {{ plan.num_people }} people</span
                                ><a class="edit" href="/plans">Edit</a>
                            </div>
                        </div>
                    </dt>
                    <dd><span class="planPrice">$103.92</span></dd>
                </dl>
                <dl class="shippingBlock">
                    <dt class="shippingName">Standard Shipping</dt>
                    <dd>
                        <span class="shippingPrice">$9.99</span>
                    </dd>
                </dl>
                <dl class="priceBlock">
                    <dt>Total</dt>
                    <dd>
                        <span data-total-price="true" class="totalPrice"
                            >$51.92</span
                        >
                    </dd>
                </dl>
                <div
                    v-if="this.formValidation.delivery_day.date"
                    class="deliveryInfo"
                >
                    <span class="deliveryInfoText"
                        >Your first delivery arrives on
                        {{ this.formValidation.delivery_day.date }} between
                        <br />
                        8:00 AM - 8:00 PM</span
                    >
                </div>
            </section>
        </div>
        <div class="stickyBlock"></div>
        <div class="buttonWrapper">
            <button
                :disabled="isDisabled"
                type="submit"
                form="checkout-form-delivery"
                class="buttonSubmit"
                @click="submitForm"
            >
                <span>PLACE ORDER</span>
            </button>
        </div>
        <section class="benefits">
            <svg
                version="1.1"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 30.6 31"
                style="enable-background: new 0 0 30.6 31"
                xml:space="preserve"
                class="benefitsIcon"
            >
                <g>
                    <g transform="translate(-980.000000, -132.000000)">
                        <g transform="translate(980.000000, 132.000000)">
                            <g transform="translate(4.224031, 0.283000)">
                                <path
                                    class="st0"
                                    d="M26.4,16.6l-2.7-8c0,0,0,0,0,0c0-0.1-0.1-0.2-0.2-0.3c0,0,0,0-0.1,0c-0.1-0.1-0.2-0.1-0.3-0.1l-12-1.3
					c0,0,0,0-0.1,0c0,0,0,0-0.1,0L-1,8.1c-0.1,0-0.2,0.1-0.3,0.1c0,0,0,0-0.1,0c-0.1,0.1-0.1,0.2-0.2,0.3c0,0,0,0,0,0l-2.7,8
					c-0.1,0.2,0,0.4,0.1,0.6c0.1,0.2,0.3,0.3,0.5,0.3h2v10c0,0.3,0.2,0.6,0.5,0.6l12,2.7c0,0,0.1,0,0.1,0s0.1,0,0.1,0l12-2.7
					c0.3-0.1,0.5-0.3,0.5-0.6v-10h2c0.2,0,0.4-0.1,0.5-0.3C26.4,17,26.4,16.8,26.4,16.6L26.4,16.6z"
                                />
                                <path
                                    class="st1"
                                    d="M11.7,12.1l1.4,4.9c0.1,0.3,0.3,0.5,0.6,0.5h8.7v9.5l-10.7,2.4V12.1z M10.4,12.1v17.2l-10.7-2.4v-9.5h8.7
					c0.3,0,0.5-0.2,0.6-0.5L10.4,12.1z M12,8.2l10.6,1.2l2.2,6.8H14.2L12,8.2z M10.2,8.2l-2.3,7.9H-2.7l2.3-6.8L10.2,8.2z"
                                />
                                <path
                                    class="st2"
                                    d="M1.3,1.6c0.3-0.3,0.7-0.3,0.9,0l0,0l2.7,2.7c0.3,0.3,0.3,0.7,0,0.9C4.8,5.4,4.6,5.4,4.4,5.4
					C4.3,5.4,4.1,5.4,4,5.2l0,0L1.3,2.6C1,2.3,1,1.9,1.3,1.6z M20,1.6c0.3-0.3,0.7-0.3,0.9,0c0.3,0.3,0.3,0.7,0,0.9l0,0l-2.7,2.7
					c-0.1,0.1-0.3,0.2-0.5,0.2c-0.2,0-0.3-0.1-0.5-0.2C17,5,17,4.6,17.3,4.3l0,0L20,1.6z M11.1-0.3c0.4,0,0.6,0.3,0.6,0.6l0,0v4
					c0,0.4-0.3,0.7-0.6,0.7s-0.7-0.3-0.7-0.7l0,0v-4C10.4,0,10.7-0.3,11.1-0.3z"
                                />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
            <p class="benefitsText">
                We prepare, chill, and pack right before each day's shipment to
                ensure you get the freshest meals possible. And no need to be
                home for delivery - our boxes include insulating liners and ice
                packs to keep your meals cool and fresh.
            </p>
        </section>
        <success-modal
            :showModalSuccess="showModalSuccess"
            :visiblilityModalSuccess="visiblilityModalSuccess"
        ></success-modal>
    </div>
</template>

<script>
import SuccessModal from "./SuccessModal.vue";
import {createResource} from '../api/api'
import {ORDER} from '../api/endpoints'

export default {
    name: "OrderPageAside",
    components: {
        SuccessModal,
    },
    props: {
        formValidation: Object,
        isFormValid: Function,
        showModalSuccess: Function,
        visiblilityModalSuccess: Boolean,
        plan: Object,
        cartId: Number
    },
    data() {
        return {
            // checkForm: null,
            disabledBtn: true,
        };
    },

    methods: {
        async submitForm() {
            try {
                const data = {
                    cart_id: this.cartId,
                }

                for(const [key, value] of Object.entries(this.formValidation)) {
                    if(key !== 'active_weeks') {
                        data[key] = value
                    }
                }

                const response = await createResource({endpoint: ORDER, resource: data})
                if(response.status === 200) {
                    this.showModalSuccess();
                }
            } catch(e) {
                // TODO: тут бы модалку об ошибке
                console.log(e)
            }
        },
    },

    computed: {
        isDisabled() {
            return this.isFormValid() === true
                ? !this.disabledBtn
                : this.disabledBtn;
        },

        getPreferences() {
            return this.plan.preferences.map(item => item.name).join(', ')
        }
    },
};
</script>

<style scoped>
.orderPageAside {
    flex: 1 1 0%;
}

.orderSummary {
    background: rgb(255, 255, 255);
    box-shadow: rgb(212 217 216) 0px 2px 0px;
    border-radius: 9px;
    padding: 32px;
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

.plansBlock,
.shippingBlock {
    padding-bottom: 8px;
    vertical-align: middle;
    display: flex;
    flex-direction: row;
    -webkit-box-pack: justify;
    justify-content: space-between;
    margin-bottom: 0px;
    margin-top: 0px;
}

.plans {
    display: flex;
    flex-direction: column;
    text-align: start;
}

.plansName {
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
    color: #222;
    font-weight: 600;
    display: flex;
}

.meals,
.shippingName {
    margin-right: 4px;
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
    color: #222;
    font-weight: 300;
}

.edit {
    text-decoration: underline;
    color: rgb(66, 105, 61);
    margin-left: 4px;
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
    font-weight: 300;
}

.planPrice,
.shippingPrice,
.totalPrice {
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
    color: #222;
    font-weight: 300;
}

.edit:hover {
    color: rgb(30, 54, 30);
}

.priceBlock {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    border-top: 1px solid rgb(212, 217, 216);
    padding: 8px 0px;
    font-weight: 600;
    font-size: 18px;
    margin-bottom: 0px;
    margin-top: 8px;
}

.deliveryInfo {
    display: flex;
    text-align: start;
}

.deliveryInfoText {
    font-family: "Source Sans Pro", sans-serif, Helvetica, Arial;
    font-size: 16px;
    line-height: 24px;
    color: #222;
}

.stickyBlock {
    position: sticky;
    bottom: 60px;
    height: 2px;
    margin-top: 4px;
    margin-bottom: -4px;
    background-color: rgb(212, 217, 216);
    z-index: 10;
}

.buttonWrapper {
    position: sticky;
    bottom: 0px;
    z-index: 10;
    display: flex;
    flex-direction: column;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    height: 60px;
    margin-bottom: 16px;
    background-color: rgb(247, 247, 247);
}

.buttonSubmit {
    border-width: 2px;
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
    position: relative;
    line-height: 46px;
    background-color: rgb(66, 105, 61);
    color: rgb(255, 255, 255);
    border-color: rgb(66, 105, 61);
    box-shadow: none;
    border-radius: 4px;
    height: 48px;
    transition-property: color, background, border, box-shadow, opacity !important;
    width: 100% !important;
    text-transform: none !important;
}

.buttonSubmit:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
    color: rgb(255, 255, 255);
}

.buttonSubmit:disabled {
    cursor: not-allowed;
    opacity: 70%;
}

.st0 {
    fill: #46a748;
}
.st1 {
    fill: #ffffff;
}
.st2 {
    fill: #d0438f;
}

.benefits {
    display: flex;
    flex-wrap: wrap;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    padding: 0px 16px;
    margin-bottom: 32px;
}

.benefitsIcon {
    flex: 0 0 auto;
    height: 68px;
    width: 68px;
}

.benefitsText {
    flex: 1 0 100%;
    text-align: center;
    margin: 16px 0px 0px;
}

@media only screen and (min-width: 768px) {
    .buttonWrapper {
        margin-bottom: 32px;
    }

    .benefits {
        flex-wrap: nowrap;
        margin-bottom: 40px;
        padding: 0px;
    }

    .benefitsText {
        flex-basis: 25%;
        margin: 0px 16px;
        text-align: left;
    }
}
@media only screen and (min-width: 1200px) {
    .summaryTitle {
        font-size: 24px;
        line-height: 30px;
    }

    .stickyBlock {
        display: none;
    }

    .buttonWrapper {
        position: static;
        height: auto;
        margin-top: 16px;
        padding: 0px;
    }

    .buttonSubmit {
        height: 48px;
        line-height: 44px;
    }
}
</style>
