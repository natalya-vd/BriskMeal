<template>
    <div class="cartComponent">
        <div class="cartComponentShadow" v-if="!this.carts.length">
            <h2 class="cartTitle">Your Carts</h2>
            <p class="fw-bold fs-3">
                Your Cart is empty.
                <a href="/catalog" class="orderDelivery">Order food delivery</a>
            </p>
        </div>
        <div v-else>
            <h2 class="cartTitle">Your Carts</h2>
            <div class="wrap">
                <div v-if="plans != null" class="blockChosenPlans mb-4">
                    <div class="chosenPlansWrapper">
                        <div class="chosenPlansBorder">
                            <div class="borderWrapper">
                                <div class="planOfName">
                                    <span class="planOfNameText">Your Plans:</span>
                                    <span class="quantityPersonText">{{ getPreferencesUser }}</span>
                                </div>
                                <div class="planOfName">
                                    <span class="planOfNameText">Meals:</span>
                                    <span class="quantityPersonText">{{ plans.meals_week }}</span>
                                </div>
                                <div class="planOfName">
                                    <span class="planOfNameText">People per week:</span>
                                    <span class="quantityPersonText">{{ plans.num_people }}</span>
                                </div>
                                <div class="planOfName">
                                    <span class="planOfNameText">Quantity recipes in cart:</span>
                                    <span class="quantityPersonText quantityPersonText_red">{{ plans.max_quantity_recipes }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <cart-component  
                    v-for="cart in carts" 
                    :cart="cart" 
                    :key="cart.cart_id"
                    :maxquantityrecipes ="plans.max_quantity_recipes"
                    @removecardfromarray="removecardfromarray"
                />
            </div>
        </div>
    </div>
</template>

<script>
import CartCardComponent from "./CartCardComponent.vue";
import {deleteResource, createResource} from "../api/api";
import {RECIPES_REMOVE, RECIPES_ADD} from "../api/endpoints";

export default {
    props: ["dataResponse"],
    components: {
        CartCardComponent,
    },
    data() {
        return {
            carts: [],
            plans: null
        }
    },
    created() {
        this.carts = this.getData.carts;
        this.plans = this.getData.plan_user;
    },
    computed: {
        getData() {
            return JSON.parse(this.dataResponse);
        },
        getPreferencesUser() {
            return this.plans.preferences.map(item => item.name).join(', ')
        },
        getCartsDisable() {
            const cartsDisable = {}
            for(const value of this.carts) {
                cartsDisable[value.cart_id] = {
                    disable: this.isMaxQuantityRecipes(value.recipes)
                }
            }
            return cartsDisable
        }
    },
    methods: {
        async removeCardFromCart(item) {
            console.log(item);
            const data = await createResource({
                endpoint: RECIPES_ADD,
                resource: {id: item.id, week_id: item.week_id, quantity: item.quantity}
            }).then(() => { console.log("OK")
            }).catch(()=> { console.log("Bad")});
         
        },
        getPathOrder(cartId) {
            return this.plans != null ? `/order/${cartId}` : '/plans'
        },
        getQuantityRecipesInCart(recipes) {
            return recipes?.reduce((prev, current) => {
                return prev + current.quantity
            }, 0)
        },
        isMaxQuantityRecipes(recipes) {
            const quantityRecipes = this.getQuantityRecipesInCart(recipes)
            return this.plans != null && quantityRecipes !== this.plans?.max_quantity_recipes
        },
        getDisabledFunction(isDisable) {
            return isDisable ? { click: (e) => e.preventDefault(), focus: (e) => e.preventDefault() } : {}
        },
        removecardfromarray(item){
            for (let i=0; i<this.carts.length; i++){
                if(this.carts[i].week_attributes.week === item.week_id ){
                    this.carts[i].recipes = this.carts[i].recipes.filter(recip => recip.recipe.id !== item.id);
                }
            };
         }
    },
    mounted(){
        console.log(this.plans);
        console.log(this.carts);
    },
    watch: {
        carts: function (newCarts, oldCarts) {
            console.log(this.carts);
        }
    }
};
</script>

<style scoped>
.cartComponent {
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: auto;
    max-width: 1024px;
    margin: 0 auto;
}

.cartComponentShadow {
    box-shadow: 0 3px 5px 0 rgb(0 0 0 / 20%);
    padding: 24px 24px;
    background-color: #ffffff;
    border-radius: 15px;
    box-sizing: border-box;
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
    border-color: rgb(204, 204, 204) rgb(204, 204, 204) rgb(255, 255, 255) rgb(255, 255, 255);
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

.quantityPersonText_red {
    color: rgb(193, 26, 26);
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

.order:hover {
    background-color: rgb(42, 78, 42);
    border-color: rgb(42, 78, 42);
}

.orderDisable:focus,
.orderDisable:hover,
.orderDisable {
    cursor: default;
    background-color: rgb(234 234 234);
    border-color: rgb(234 234 234);
    color: rgb(107 130 107);
}

.errorQuantityRecipes {
    color: rgb(193, 26, 26);
}

.totalPrice {
    display: flex;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    /*padding-top: 24px;
    padding-bottom: 24px;*/
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
    align-items: center;
    margin: 14px 14px;
}

@media only screen and (min-width: 0px) {
    .cartComponent {
        padding: 7px;
    }
}

@media only screen and (min-width: 768px) {
    .chosenPlansWrapper {
        max-width: 450px;
    }

    .cartComponent {
        padding: 14px;
    }

    .addRecipyWrapper {
        justify-content: flex-end;
        margin-right: 24px;
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
        /*padding-top: 24px;
        padding-bottom: 50px;*/
        height: 100%;
    }
}

@media only screen and (min-width: 1200px) {
    .cartComponent {
        padding: 24px;
    }
}
</style>
