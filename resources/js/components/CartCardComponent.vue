<template>
    <div class="cardCart">
        <div class="cardBorder">
            <img src="/card_image/card_1.jpg" alt="" class="cardImage" />

            <div class="recipyInfo">
                <div class="recipyTitle" :title="cartItem.name_recipy">
                    <h4 class="recipyTitleText">
                        {{ cartItem.name_recipy }}
                    </h4>
                </div>
                <div class="recipyDescription">
                    <span class="recipyDescriptionText">{{
                        cartItem.description_recipy
                    }}</span>
                    <div
                        class="recipyDescriptionOverlay"
                        :title="cartItem.description_recipy"
                    ></div>
                </div>
            </div>
            <div class="priceQuantity">
                <div class="pricePerOne">${{ cartItem.price }}</div>
                <div class="quantityThings">
                    <input
                        type="number"
                        class="quantityInput"
                        v-model="countRecipy"
                    />
                </div>
                <div class="separatorCard" data-v-478eddff=""></div>
                <div class="totalPriceCard">${{ totalPrice }}</div>
            </div>
            <div class="cross" @click="removeItem(cartItem)">
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
export default {
    name: "CartCardComponent",
    props: {
        cartItem: Object,
        removeItem: Function,
    },
    data() {
        return { countRecipy: 1 };
    },

    created() {},
    computed: {
        totalPrice() {
            return this.cartItem.price * this.countRecipy;
        },
    },
};
</script>

<style scoped>
.cardBorder {
    display: flex;
    margin-top: 12px;
    margin-bottom: 12px;
    border-color: rgb(204, 204, 204);
    border-style: solid;
    border-width: 1px;
    border-radius: 10px;
    background-color: rgb(255, 255, 255);
    height: 150px;
    max-width: 700px;
}

.cardImage {
    /* background-color: yellow; */
    height: 100%;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    width: 140px;
    flex-shrink: 0;
    object-fit: cover;
}

.recipyInfo {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    margin-top: 5px;
}

.recipyTitle {
    display: flex;
    margin-left: 16px;
    text-align: left;
    width: 325px;
}

.recipyTitleText {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.recipyDescription {
    margin-left: 16px;
    text-align: left;
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
    min-width: 150px;
    max-width: 150px;
    margin-top: 8px;
}

.pricePerOne {
    padding-top: 2px;
}

.quantityThings {
    border-right: 1px solid #fff;
}

.quantityInput {
    max-width: 40px;
    text-align: center;
    border: 1px solid rgb(204, 204, 204);
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
</style>
