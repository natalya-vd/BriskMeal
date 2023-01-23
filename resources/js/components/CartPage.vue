<template>
    <div class="cartComponent">
        <h2 class="cartTitle">Your Cart</h2>
        <h3 v-if="!this.cart.length">
            Your Cart is empty.
            <a href="/catalog" class="orderDelivery">Order food delivery</a>
        </h3>
        <div class="wrap" v-if="this.cart.length">
            <div class="blockChosenPlans">
                <div class="chosenPlansWrapper">
                    <div class="chosenPlansBorder">
                        <div class="borderWrapper">
                            <div class="planOfName">
                                <span class="planOfNameText">Your Plans: </span
                                ><span class="quantityPersonText">{{
                                    plans.preferences
                                }}</span>
                            </div>
                            <div class="planOfName">
                                <span class="planOfNameText">Meals: </span
                                ><span class="quantityPersonText">{{
                                    plans.quantityMeals
                                }}</span>
                            </div>
                            <div class="planOfName">
                                <span class="planOfNameText"
                                    >People per week: </span
                                ><span class="quantityPersonText">{{
                                    plans.quantityPeople
                                }}</span>
                            </div>
                            <!-- <div class="quantityPerson">
                                <span class="quantityPersonText"
                                    >Keto + Paleo 2 meals for 2 people per
                                    week</span
                                >
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <template class="cart" v-for="" :key="item.id"></template> -->
            <cart-card-component
                v-for="item in cart"
                :key="item.id"
                :cartItem="item"
                :removeItem="removeItem"
            />
            <!-- <cart-card-component :cart="cart" /> -->

            <div class="addRecipyWrapper">
                <a href="/catalog" class="addRecipy"><span>Add Recipy</span></a>
            </div>
            <div class="totalPrice">
                <div class="totalPriceText">
                    <span>Total Price:</span>
                </div>
                <div class="resultedPrice">
                    <span class="discountPrice">$6.49</span>
                </div>
            </div>
            <div class="orderWrapper">
                <a href="/order" class="order"><span>To Ordering</span></a>
            </div>
        </div>
    </div>
</template>

<script>
import CartCardComponent from "./CartCardComponent.vue";

export default {
    name: "CartPage",
    components: {
        CartCardComponent,
    },

    props: ["data"],

    data() {
        return {
            cart: [
                {
                    id: 1,
                    name_recipy:
                        "Unde eligendi eum quis officiaUnde eligendi eum quis officiaUnde eligendi eum quis officia",
                    description_recipy:
                        "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate libero blanditiis impedit. Dolorum dolorem iste sed mollitia est ad itaque provident nisi voluptates reprehenderit, consequatur quidem placeat! Iusto, error explicabo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate libero blanditiis impedit. Dolorum dolorem iste sed mollitia est ad itaque provident nisi voluptates reprehenderit, consequatur quidem placeat! Iusto, error explicabo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate libero blanditiis impedit. Dolorum dolorem iste sed mollitia est ad itaque provident nisi voluptates reprehenderit, consequatur quidem placeat! Iusto, error explicabo.",
                    path: "/preferences_svg/Keto_Paleo.svg",
                    price: 100,
                },
                {
                    id: 2,
                    name_recipy: "Unde eligendi eum quis officia",
                    description_recipy:
                        "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate libero blanditiis impedit. Dolorum dolorem iste sed mollitia est ad itaque provident nisi voluptates reprehenderit, consequatur quidem placeat! Iusto, error explicabo.",
                    path: "/preferences_svg/Keto_Paleo.svg",
                    price: 150,
                },
                {
                    id: 3,
                    name: "Mediterranien",
                    name_recipy: "Unde eligendi eum quis officia",
                    description_recipy:
                        "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate libero blanditiis impedit. Dolorum dolorem iste sed mollitia est ad itaque provident nisi voluptates reprehenderit, consequatur quidem placeat! Iusto, error explicabo.",
                    path: "/preferences_svg/Keto_Paleo.svg",
                    price: 200,
                },
            ],
            plans: {
                preferences: "Keto + Paleo",
                quantityPeople: 3,
                quantityMeals: 2,
            },
        };
    },
    mounted() {
        console.log(this.data);
    },
    methods: {
        removeItem(removedItem) {
            this.cart = this.cart.filter((item) => item.id !== removedItem.id);
        },
    },
};
</script>
<style scoped>
.cartComponent {
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    box-sizing: border-box;
    width: auto;
    padding: 32px 0;
    box-shadow: 0 3px 5px 0 rgb(0 0 0 / 20%);
    border-radius: 15px;
    background-color: #ffffff;
    padding: 24px 24px;
    max-width: 1024px;
    margin: 0 auto;
}

.cartTitle {
    text-align: left;
}
.orderDelivery {
    color: rgb(70, 167, 72);
}
.orderDelivery:hover {
    border-color: transparent;
    color: rgb(66, 105, 61);
}

.blockChosenPlans {
    margin-top: 0px;
    width: 100%;
    padding-bottom: 12px;
}

.chosenPlansWrapper {
    max-width: 320px;
}

.chosenPlansBorder {
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
    padding: 16px 16px;
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
    flex-basis: 40%;
}

.quantityPerson {
    padding-top: 6px;
    padding-bottom: 6px;
}

.quantityPersonText {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    font-size: 16px;
    margin: 0px;
    flex-basis: 60%;
    text-align: end;
}

.totalServings {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    padding-bottom: 0;
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

.addRecipyWrapper {
    display: flex;
    padding-top: 24px;
    justify-content: center;
    margin: 14px 14px;
}

.addRecipy,
.order {
    border-width: 2px;
    border-style: solid;
    cursor: pointer;
    opacity: 1;
    display: inline-block;
    text-align: center;
    transition-duration: 0.3s;
    transition-timing-function: ease-in-out;
    transition-delay: 0s;
    font-weight: 500;
    font-family: sofia-pro, "Helvetica Neue", Arial, sans-serif;
    font-size: 18px;
    width: 100%;
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

.addRecipy:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
}

.totalPrice {
    display: flex;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    padding-top: 24px;
    padding-bottom: 24px;
    height: 100%;
}

.totalPriceText {
    text-align: center;
    padding-bottom: 3px;
}

.totalPriceText > span {
    color: rgb(34, 34, 34);
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
    font-size: 16px;
    margin: 0px 14px;
    font-weight: 700;
}

.resultedPrice {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: end;
    justify-content: flex-end;
    padding-bottom: 5px;
    white-space: nowrap;
    border-bottom: 2px solid rgb(193, 26, 26);
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

.orderWrapper {
    display: flex;
    justify-content: flex-end;
    margin: 14px 14px;
}

.order:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
}

@media only screen and (min-width: 0px) {
    .cartComponent {
        padding: 7px;
    }
}

@media only screen and (min-width: 768px) {
    .cartComponent {
        padding: 14px;
    }

    .addRecipyWrapper {
        justify-content: flex-start;
        margin: 0;
    }

    .addRecipy,
    .order {
        width: 160px;
    }

    .orderWrapper {
        margin: 0;
    }

    .totalPrice {
        display: flex;
        justify-content: flex-end;
        -webkit-box-align: center;
        align-items: center;
        padding-top: 24px;
        padding-bottom: 50px;
        height: 100%;
    }
}

@media only screen and (min-width: 1200px) {
    .cartComponent {
        padding: 24px;
    }
}

@media only screen and (max-width: 768px) {
}
</style>
