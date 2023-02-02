<template>
    <div class="buyBtnPlace">
        <div v-if="showedAddBtn" class="buyBtn">
            <div v-if="showedSpinner" class="spinner-border" role="status">

                <span class="sr-only"></span>
            </div>
            <div v-else class="addTocart" v-on:click="updaterCart(1)">Add to Cart</div>
        </div>
        <div v-else class="changeQ">
            <div class="manageQBlock">
                <div class="leftBtn" v-on:click="updaterCart(quantity - 1)" v-bind:class="{ notActive: isBtnsActive }">&#8211;</div>
                <buy-button-input v-model.lazy="quantity" @retrive="inputDataSubmit"></buy-button-input>
                <div class="rightBtn" v-on:click="updaterCart(quantity + 1)" v-bind:class="{ notActive: isBtnsActive }">&#43;</div>
            </div>
            <a href="/cart" class="goTocart">Go to Cart</a>
        </div>
    </div>
</template>

<script>
import { createResource} from "../api/api";
import { RECIPES_ADD } from "../api/endpoints";

export default {
    props: [ 'id','weekId' ],
    data() {
        return {
            showedSpinner: false,
            quantity: 0,
            currentQuantity: 0,
            isBtnsActive: true
        };
    },
    computed: {
        showedAddBtn() {
            return this.quantity > 0 ? false : true;
        },
    },
    methods: {
        async updaterCart(newQuantity) {
            this.changeSpinnerMode();
            this.changeBtnsActiveMode();
            const data = await createResource({
                endpoint: RECIPES_ADD,
                resource: {id: this.id, week_id: this.weekId, quantity: newQuantity},
            }).then(() => {
                this.changeSpinnerMode();
                this.quantity = newQuantity;
                this.changeBtnsActiveMode();
            });
        },
        inputDataSubmit(quantity){
            this.quantity = Number(quantity);
            this.updaterCart(quantity);
        },
        changeSpinnerMode() {
            this.showedSpinner = !this.showedSpinner;
        },
        changeBtnsActiveMode() {
            this.isBtnsActive = !this.isBtnsActive;
        }
    }
};
</script>

<style scoped>
.buyBtnPlace {
    width: 100%;
    height: 60px;
    padding: 10px 0px 10px 0px;
}

.buyBtn {
    margin-left: 10%;
    width: 80%;
    height: 100%;
    background-color: #339900;
    color: #ffffff;
    border: none;
    border-radius: 10px;
    padding: 5px 0 5px 0;
    cursor: pointer;
}

.changeQ {
    margin-left: 10%;
    width: 80%;
    height: 100%;
    display: flex;
    justify-content: space-between;
}

.buyBtn:hover,
.goTocart:hover,
.leftBtn:hover,
.rightBtn:hover {
    background-color: #336600;
}

.addTocart,
.goTocart
 {
    font-size: 20px;
}

.manageQBlock {
    height: 100%;
    width: 53%;
    color: #ffffff;
    border: none;
    border-radius: 10px;
    padding: 0;
    display: flex;
}

.goTocart {
    height: 100%;
    width: 43%;
    background-color: #339900;
    color: #ffffff;
    border: none;
    border-radius: 10px;
    padding: 5px 0 5px 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.leftBtn,
.rightBtn {
    height: 100%;
    width: 29%;
    background-color: #abd496;
    color: #ffffff;
    border: none;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: default;
}

.leftBtn {
    border-radius: 10px 0 0 10px;
}

.rightBtn {
    border-radius: 0 10px 10px 0;
}

.displayQ {
    height: 100%;
    width: 40%;
    border: 1px solid #339900;
    color: black;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
}
.notActive{
    background-color: #339900;
    cursor: pointer;
}
.notActive:hover {
    background-color: #336600;
}

@media only screen and (max-width: 767px) {
    .goTocart {
        width: 53%;
        font-size: 18px;
    }

    .manageQBlock {
        width: 43%;
    }
}
</style>
