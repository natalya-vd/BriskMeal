<template>
    <div class="buyBtnPlace">
        <div v-if="showedAddBtn" class="buyBtn" v-on:click="changeSpinnerMode">
            <div v-if="showedSpinner" class="spinner-border" role="status">

                <span class="sr-only"></span>
            </div>
            <div v-else class="addTocart" v-on:click="addToCart(id)">Add to Cart</div>
        </div>
        <div v-else class="changeQ">
            <div class="manageQBlock">
                <div class="leftBtn" v-on:click="reduceQ">&#8211;</div>
                <div class="displayQ">{{ quantity }}</div>
                <div class="rightBtn" v-on:click="addQ">&#43;</div>
            </div>
            <a href="/cart" class="goTocart">Go to Cart</a>
        </div>
    </div>
</template>

<script>

    import {createResource, deleteResource} from "../api/api";
    import {ADD_RECIPES, REMOVE_RECIPES} from "../api/endpoints";

    export default {
    props: ['id'],
    data() {
        return {
            showedSpinner: false,
            quantity: 0,
        };
    },
    computed: {
        showedAddBtn() {
            return this.quantity > 0 ? false : true;
        },
    },
    methods: {
        async addToCart(recipe_id) {

            const data = await createResource({
                endpoint: ADD_RECIPES,
                resource: { id: +recipe_id },
            });
            console.log(data);

        },
        changeSpinnerMode() {
            this.showedSpinner = !this.showedSpinner;
        },
        addQ() {
            this.quantity += 1;
        },

        reduceQ() {
            this.quantity -= 1;
        },

    },
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
.goTocart:hover {
    background-color: #336600;
}
.addTocart,
.goTocart {
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
    background-color: #339900;
    color: #ffffff;
    border: none;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
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
    align-items: center;
    justify-content: center;
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
