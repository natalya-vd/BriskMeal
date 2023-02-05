<template>
    <div class="cardCart" v-if="isCardShowed">
        <div class="cardBorder">
            <img src="/card_image/card_1.jpg" alt="" class="cardImage"/>

            <div class="recipyInfo">
                <div class="recipyTitle" :title="cartItem.recipe.name">
                    <h4 class="recipyTitleText">
                        {{ cartItem.recipe.name }}
                    </h4>
                </div>
                <div class="recipyDescription">
                    <span class="recipyDescriptionText">{{
                            cartItem.recipe.description
                        }}</span>
                    <div
                        class="recipyDescriptionOverlay"
                        :title="cartItem.recipe.description"
                    ></div>
                </div>
            </div>

            <div class="priceQuantity">
                <div class="pricePerOne">{{ price }}</div>
                <div class="quantityThings">
                    <div class="leftBtn" v-on:click="updaterCart(countRecipy - 1)" v-bind:class="{ notActive: isBtnsActive }">&#8211;</div>
                    <input
                        type="number"
                        class="quantityInput"
                        v-model="countRecipy"
                    />
                    <div class="rightBtn" v-on:click="updaterCart(countRecipy + 1)" v-bind:class="{ notActive: isBtnsActive }">&#43;</div>
                </div>
                <div class="separatorCard" data-v-478eddff=""></div>
                <div class="totalPriceCard">{{ totalPrice }}$</div>
            </div>
            <div class="cross" @click="submitRemove">
                <svg viewBox="0 0 48 48" height="24" width="24">
                    <path
                        d="m12.45 37.65-2.1-2.1L21.9 24 10.35 12.45l2.1-2.1L24 21.9l11.55-11.55 2.1 2.1L26.1 24l11.55 11.55-2.1 2.1L24 26.1Z"
                    />
                </svg>
            </div>
        </div>
    </div>
</template>

<script>
import { createResource} from "../api/api";
import { RECIPES_ADD } from "../api/endpoints";

export default {
    name: "CartCardComponent",
    props: ['cartItem', 'price'],
    emits: ['removecard'],
    data() {
        return {
            countRecipy: this.cartItem.quantity,
            isCardShowed: true,
            isBtnsActive: true
        };
    },
    computed: {
        totalPrice() {
            return (this.price * this.countRecipy).toFixed(2);
        },
    },
    methods: {
        submitRemove() {
            this.$emit('removecard', this.cartItem);
        },
        async updaterCart(newQuantity) {
            const data = await createResource({
                endpoint: RECIPES_ADD,
                resource: {id: this.cartItem.recipe.id, week_id: 5, quantity: newQuantity},
            }).then(() => {
                this.countRecipy = newQuantity;
            });
        },
    },
};
</script>

<style scoped>
.cardCart {
    display: flex;
    width: 100%;
}

.cardBorder {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 12px;
    margin-bottom: 12px;
    border-color: rgb(204, 204, 204);
    border-style: solid;
    border-width: 1px;
    border-radius: 10px;
    background-color: rgb(255, 255, 255);
    height: 100%;
    max-width: 700px;
}

.cardImage {
    /* display: none; */
}

.recipyInfo {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    margin-top: 5px;
}

.recipyTitle {
    display: flex;
    margin-left: 16px;
    text-align: left;
    width: 170px;
}

.recipyTitleText {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.recipyDescription {
    margin: 0px 16px;
    /* text-align: left; */
    height: 95px;
    overflow: hidden;
    position: relative;
}

.recipyDescriptionText {
    overflow: hidden;
    text-overflow: ellipsis;
}

.recipyDescriptionOverlay {
    width: 100%;
    position: absolute;
    background: linear-gradient(
        rgba(255, 255, 255, 0),
        rgba(255, 255, 255, 0),
        rgb(255, 255, 255)
    );
    height: 100%;
    top: 0px;
}

.priceQuantity {
    display: flex;
    justify-content: space-between;
    min-width: 200px;
    max-width: 200px;
    margin-top: 8px;
}

.pricePerOne {
    padding-top: 2px;
}

.quantityThings {
    border-right: 1px solid #fff;
    display:flex;
}

.quantityInput {
    max-width: 40px;
    text-align: center;
    border: 1px solid rgb(204, 204, 204);
    max-height: 30px;
}

.separatorCard {
    height: 28px;
    /* border-top: 1px solid rgb(204, 204, 204); */
    border-left: 1px solid rgb(204, 204, 204);
}

.totalPriceCard {
    padding-top: 2px;
    color: rgb(193, 26, 26);
}

.cross {
    margin: 8px 10px;
    cursor: pointer;
}

@media only screen and (min-width: 0px) {
}

@media only screen and (min-width: 768px) {
    .cardBorder {
        flex-direction: row;
        align-items: stretch;
        height: 150px;
    }

    .cardImage {
        display: block;
        height: 100%;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        width: 140px;
        margin-top: 0px;

        flex-shrink: 0;
        object-fit: cover;
    }

    .recipyInfo {
        align-items: stretch;
    }

    .recipyTitle {
        width: 325px;
    }

    .recipyDescription {
        text-align: left;
    }

    .priceQuantity {
        min-width: 150px;
        max-width: 150px;
    }
}

@media only screen and (min-width: 1200px) {
}

@media only screen and (max-width: 767px) {
    .cardImage {
        width: 200px;
        margin-top: 14px;
    }
}
</style>
