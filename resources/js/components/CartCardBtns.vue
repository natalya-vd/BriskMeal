<template>
    <div class="quantityThings">
        <div class="leftBtn changebtn" v-on:click="updaterCart(quantity - 1)" v-bind:class="{ notActive: isBtnsActive }">&#8211;</div>
        <buy-button-input
            v-model="quantity"
            @retrive="inputDataSubmit"
            :disabled="!isBtnsActive">
        </buy-button-input>
        <div class="rightBtn changebtn" v-on:click="updaterCart(quantity + 1)" v-bind:class="{ notActive: isBtnsActive }">&#43;</div>
    </div>
</template>

<script>
import {createResource} from "../api/api";
import {RECIPES_ADD} from "../api/endpoints";

export default {
    props: [ 'inputquantity', 'week', 'id' ],
    emits: ['changecardinarray'],
    data() {
        return {
            quantity: 0,
            isBtnsActive: true
        };
    },
    created() {
        this.quantity = this.inputquantity;
    },
    methods: {
        async updaterCart(newQuantity) {
            if(newQuantity > 0){
                this.changeBtnsActiveMode();
                const data = await createResource({
                    endpoint: RECIPES_ADD,
                    resource: {id: this.id, week_id: this.week, quantity: newQuantity},
                }).then(() => {
                    this.$emit('changecardinarray', {'week_id': this.week , 'id': this.id, 'quantity': newQuantity});
                    this.changeBtnsActiveMode();
                    this.quantity = newQuantity;
                });
            }
        },
        inputDataSubmit(quantity) {
           console.log(Number(quantity));
           this.updaterCart(Number(quantity));
        },
        changeBtnsActiveMode() {
            this.isBtnsActive = !this.isBtnsActive;
        }
    }
};
</script>

<style scoped>

.quantityThings {
    border-right: 1px solid #fff;
    display:flex;
}

.quantityInput, .displayQ {
    max-width: 30px;
    text-align: center;
    border: 1px solid rgb(204, 204, 204);
    max-height: 30px;
}

.changebtn{
    max-height: 30px;
    max-width: 30px;
    min-width: 20px;
    border: 1px solid rgb(204, 204, 204);
    background-color: silver;
}

.leftBtn{
    border-radius: 5px 0 0 5px;
}

.rightBtn{
    border-radius: 0 5px 5px 0;
}

.notActive {
    background-color: silver;
    cursor: pointer;
}

.notActive:hover {
    background-color: grey;
}

@media only screen and (max-width: 767px) {
    
}
</style>
