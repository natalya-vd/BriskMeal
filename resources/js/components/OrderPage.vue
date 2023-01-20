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
                                    :active_weeks="active_weeks"
                                    :acceptTextForm="acceptTextForm"
                                ></order-page-form>
                            </div>
                            <order-page-aside
                                :formValidation="formValidation"
                                :isFormValid="isFormValid"
                            ></order-page-aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import OrderPageForm from "./OrderPageForm.vue";
import OrderPageAside from "./OrderPageAside.vue";

export default {
    name: "OrderPage",
    components: {
        OrderPageForm,
        OrderPageAside,
    },
    props: ["active_weeks"],

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
                active_weeks: [
                    {
                        id: 1,
                        week_name: "2023-W4",
                        first_week_day: "2023-01-16",
                        last_week_day: "2023-01-22",
                    },
                    {
                        id: 5,
                        week_name: "2023-W5",
                        first_week_day: "2023-01-23",
                        last_week_day: "2023-01-29",
                    },
                ],
            },
        };
    },
    mounted() {
        console.log("Delivery Component mounted.");
        // console.log(this.acceptNumber());
        // console.log(this.acceptZipCode());
    },
    methods: {
        acceptNumber() {
            let x = this.formValidation.phone
                .replace(/\D/g, "")
                .match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            this.formValidation.phone = !x[2]
                ? x[1]
                : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
            console.log(
                x[1].length === 3 && x[2].length === 3 && x[3].length === 4
                    ? true
                    : false
            );

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
                this.acceptNumber()
                ? true
                : false;
        },
    },

    // computed: {
    //     getactive_weeks() {
    //         // console.log(JSON.parse(this.active_weeks));
    //         return JSON.parse(this.active_weeks);
    //     },
    // },
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
