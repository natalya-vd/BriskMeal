<template>
    <div class="cartComponentShadow mb-4">
        <div class="totalPrice">
            <div class="weekLabel">
                <h5>{{ this.cart.week_attributes.week_name }}</h5>
            </div>
            <div class="fullPriceBlock">
                <div class="totalPriceText">
                    <span>Total Price:</span>
                </div>
                <div class="resultedPrice">
                    <span class="discountPrice">{{ getAmountRecipesInCart.toFixed(2) }} $</span>
                </div>
            </div>
        </div>
        <cart-card-component
            v-for="item in cart.recipes"
            :quantity="item.quantity"
            :key="item.recipe.id"
            :id="item.recipe.id"
            :name="item.recipe.name"
            :photo="item.photo"
            :description="item.recipe.description"
            :price="cart.week_attributes.price_recipe"
            :week="cart.week_attributes.id"
            @removecard="removeCardFromCart"
        />
        <div class="cartFooter">
            <div class="orderWrapper">
                <span  class="errorQuantityRecipes me-3">
                    Quantity recipes: {{ getQuantityRecipesInCart }}
                </span>
                <div>
                    <div v-if=" isAddMoreShowed" class="addRecipyWrapper">
                        <a href="/catalog" class="addRecipy"><span>Add More</span></a>
                    </div>
                    <div v-else-if="isOrderingActive" class="addRecipyWrapper">
                        <a :href="getPathOrder(cart.cart_id)" class="addRecipy">Place Order</a>
                    </div> 
                    <div v-else class="addRecipyWrapper">
                        <a href="/plans" class="addRecipy">Change Plan</a>
                    </div>    
                </div>
            </div>
        </div> 
    </div>       
</template>

<script>
import {deleteResource, createResource} from "../api/api";
import {RECIPES_REMOVE, RECIPES_ADD} from "../api/endpoints";
export default {
    props: [ 'cart', 'maxquantityrecipes'],
    emits: ['removecardfromarray'],
    data() {
        return {
            carts: [],
        }
    }, 
    computed: {
        getAmountRecipesInCart() {
            return this.cart.recipes?.reduce((prev, current) => {
                return prev + current.quantity*this.cart.week_attributes.price_recipe
            }, 0)
        },
        getQuantityRecipesInCart() {
            return this.cart.recipes?.reduce((prev, current) => {
                return prev + current.quantity
            }, 0)
        },
        isAddMoreShowed(){
            if (this.getQuantityRecipesInCart < this.maxquantityrecipes){
                return true
            } else {
                return false
            }
        },
        isOrderingActive(){
            if (this.getQuantityRecipesInCart === +this.maxquantityrecipes){
                return true
            } else {
                return false
            }
        }
    },
    methods: {
        async removeCardFromCart(item) {
            const data = await createResource({
                endpoint: RECIPES_ADD,
                resource: {id: item.id, week_id: item.week_id, quantity: item.quantity}
            }).then(() => { 
                this.$emit('removecardfromarray', {'week_id':item.week_id , 'id': item.id, 'quantity': 0});
            }).catch(()=> { console.log("Bad")});
         
        },
        getPathOrder(cartId) {
            return `/order/${cartId}`
        }
    },
    mounted(){
        console.log(this.maxquantityrecipes);
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
    justify-content: space-between;
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

.fullPriceBlock{
    display: flex;
    justify-content: flex-end;
}

.weekLabel{
    background-color: #339900;
    border-radius: 5px;
    color: white;
    padding: 2px 10px;
}
.cartFooter{
    display: flex;
    justify-content: flex-end;
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
        justify-content: space-between;
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
