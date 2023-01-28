<template>
    <div class="buyBtnPlace" >
        <div  v-if="showedAddBtn" class="buyBtn">
            <div v-if="showedSpinner" class="spinner-border" role="status" >
                <span class="sr-only"></span>
            </div>
            <div v-else class="addTocart" v-on:click="addToCart(id)">Add to Cart</div>
        </div>
        <div  v-else class="changeQ">
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
        }
    },
    computed: {
        showedAddBtn(){
            return this.quantity > 0 ? false : true
        }
    },
    methods: {
        async addToCart(recipe_id) {
            const headers = { 'Accept': 'application/json'};
            this.changeSpinnerMode();
            fetch(`${ADD_RECIPES}`, {
			        method: 'POST', 
			        headers: {...headers, 'Content-Type': 'application/json', 'Accept': 'application/json'},
			        body: JSON.stringify( {id: +recipe_id})
		        }).then(response=>{console.log(response)}).then(()=>{ 
                    this.quantity += 1;
                    this.changeSpinnerMode();
                })
        },
        async removeItem(removedItem) {
            const headers = { 'Accept': 'application/json'};
            this.changeSpinnerMode();
            this.quantity -= 1;
            fetch(`${REMOVE_RECIPES}/${this.id}`, {
			        method: 'DELETE', 
			        headers: {...headers, 'Content-Type': 'application/json', 'Accept': 'application/json'},
			        body: JSON.stringify( {id: this.id})
		        }).then(response=>{console.log(response)}).then(()=>{ 
                    this.changeSpinnerMode();
                })


         //   const data = await deleteResource({endpoint: REMOVE_RECIPES, id: removedItem})
            
            
        },
        changeSpinnerMode(){
            this.showedSpinner = !this.showedSpinner;
        },
        addQ(){
            this.quantity += 1;
        },
        reduceQ(){
            if(this.quantity === 1){
                this.removeItem(this.id);
            }else{
                this.quantity -= 1;
            }
        }
    },
    }
</script>

<style scoped>
    .buyBtnPlace{
       width: 100%;
       height: 60px;
       padding: 10px 0px 10px 0px;

    }
    .buyBtn{
       margin-left: 10%; 
       width: 80%;
       height:100%;
       background-color: #339900;
       color: #FFFFFF;
       border: none;
       border-radius: 10px;
       padding: 5px 0 5px 0;
    }
    .changeQ{
        margin-left: 10%; 
        width: 80%;
        height:100%;
        display: flex;
        justify-content: space-between;
    }
    .buyBtn:hover, .goTocart:hover{
       background-color: #336600;
    }
    .addTocart, .goTocart{
        font-size: 20px;
    }
    .manageQBlock{
        height: 100%;
        width: 53%;
        color: #FFFFFF;
        border: none;
        border-radius: 10px;
        padding: 0;
        display: flex;
    }
    .goTocart{
        height: 100%;
        width: 43%;
        background-color: #339900;
        color: #FFFFFF;
        border: none;
        border-radius: 10px;
        padding: 5px 0 5px 0;
    }
    .leftBtn, .rightBtn{
        height: 100%;
        width: 29%;
        background-color: #339900;
        color: #FFFFFF;
        border: none;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .leftBtn{
        border-radius: 10px  0 0 10px;
    }
    .rightBtn{
        border-radius: 0 10px 10px 0;
    }
    .displayQ{
        height: 100%;
        width: 40%;
        border: 1px solid #339900;
        color: black;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
