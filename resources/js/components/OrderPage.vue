<template>
    <div class="orderComponent">
        <div class="container">
            <div class="orderWrapper">
                <div class="orderAdaptive">
                    <div>
                        <div class="deliveryForm">
                            <div class="formWrapper">
                                <order-page-form
                                    :formValidation="formValidation"
                                    :acceptNumber="acceptNumber"
                                    :acceptZipCode="acceptZipCode"
                                    :acceptTextForm="acceptTextForm"
                                    :blurEventHandler="blurEventHandler"
                                    :bluredFields="bluredFields"
                                ></order-page-form>
                            </div>
                            <order-page-aside
                                :formValidation="formValidation"
                                :isFormValid="isFormValid"
                                :showModalSuccess="showModalSuccess"
                                :visiblilityModalSuccess="
                                    visiblilityModalSuccess
                                "
                                :plan="getPlan"
                                :cartId="getCartId"
                            ></order-page-aside>
                        </div>
                    </div>
                </div>
            </div>
            <success-modal
                :showModalSuccess="showModalSuccess"
                :visiblilityModalSuccess="visiblilityModalSuccess"
            ></success-modal>
        </div>
    </div>
</template>

<script>
import OrderPageForm from "./OrderPageForm.vue";
import OrderPageAside from "./OrderPageAside.vue";
import SuccessModal from "./SuccessModal.vue";
import router from '../router'
import {routes} from '../api/endpoints'

export default {
    name: "OrderPage",
    components: {
        OrderPageForm,
        OrderPageAside,
        SuccessModal,
    },
    props: ["dataResponse"],

    data() {
        return {
            formValidation: {
                first_name: "",
                last_name: "",
                address: "",
                address_line_2: "",
                city: "",
                region: "",
                zip_code: "",
                phone: "",
                active_weeks: [],
                delivery_day: "",
                delivery_instructions: "Select",
            },
            visiblilityModalSuccess: false,
            bluredFields: {
                firstName: false,
                lastName: false,
                address: false,
                addressLine2: false,
                city: false,
                region: false,
                zipCode: false,
                phone: false,
            },
        };
    },
    created() {
        if(this.getPlan == null) {
            router.navigate(routes.plans)
        }
        this.formValidation.active_weeks = [this.getWeek];
    },
    methods: {
        acceptNumber() {
            let x = this.formValidation.phone
                .replace(/\D/g, "")
                .match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            this.formValidation.phone = !x[2]
                ? x[1]
                : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
            return x[1].length === 3 && x[2].length === 3 && x[3].length === 4
                ? true
                : false;
        },
        acceptZipCode() {
            let x = this.formValidation.zip_code
                .replace(/\D/g, "")
                .match(/(\d{0,5})/);

            this.formValidation.zip_code = x[1];
            return /(\d{5})/.test(this.formValidation.zip_code);
        },
        acceptTextForm(text) {
            return !text ? false : true;
        },

        isFormValid() {
            return this.acceptTextForm(this.formValidation.first_name) &&
                this.acceptTextForm(this.formValidation.last_name) &&
                this.acceptTextForm(this.formValidation.address) &&
                this.acceptTextForm(this.formValidation.address_line_2) &&
                this.acceptTextForm(this.formValidation.city) &&
                this.acceptTextForm(this.formValidation.region) &&
                this.acceptZipCode() &&
                this.acceptNumber() &&
                this.formValidation.delivery_instructions !== "Select" &&
                this.formValidation.delivery_day.length > 0
                ? true
                : false;
        },
        showModalSuccess() {
            this.visiblilityModalSuccess = !this.visiblilityModalSuccess;
        },

        blurEventHandler(e) {
            this.bluredFields[e.target.id] = true;
        },
    },

    computed: {
        getPlan() {
            return JSON.parse(this.dataResponse).plan;
        },
        getCartId() {
            return JSON.parse(this.dataResponse).cart_id;
        },
        getWeek() {
            return JSON.parse(this.dataResponse).week;
        },
    },
};
</script>

<style scoped>
.orderComponent {
    position: relative;
    -webkit-box-flex: 1;
    flex-grow: 1;
    background: rgb(247, 247, 247);
    padding: 16px 0px 0px;
    padding-top: 32px;
}
.orderWrapper {
    display: flex;
    height: 100%;
    width: 100%;
    flex-flow: row wrap;
}

.orderAdaptive {
    flex: 1 1 0px;
    /* display: flex; */
}

.deliveryForm {
    display: flex;
    flex-direction: column;
    margin-bottom: 32px;
}

.formWrapper {
    margin-bottom: 32px;
}

@media only screen and (min-width: 1200px) {
    .orderAdaptive {
        flex-direction: row;
    }

    .formWrapper {
        flex: 0 0 60%;
        margin-right: 32px;
    }

    .deliveryForm {
        flex-direction: row;
    }
}

@media only screen and (min-width: 0px) {
    .orderAdaptive {
        flex-basis: 100%;
        max-width: 100%;
    }
}
</style>
