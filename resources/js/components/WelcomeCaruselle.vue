<template>
    <div class="caruselleBlock" >
        <div class="manageBtns leftManageBtn">
            <div v-on:click="onLeft" class="manageBtnItem">	&#5176;</div>
        </div>
        
        <TransitionGroup class="caruselleDesk" name="caruselleDesk" tag="ul">
            <div v-for="item in items" class="caruselleCard" :key="item">
              {{ item }}
            </div>
        </TransitionGroup>
        <div class="manageBtns rightManageBtn">
            <div v-on:click="onRight" class="manageBtnItem"> &#5171; </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                    items: [
                        1, 2, 3, 4, 5, 6     
                   ]
            }
        },
        methods: {
            onLeft: function (event) {
                this.items.splice (0,1);
                this.items.splice(5, 0, 7);
            },
            onRight: function (event) {
                this.items.splice(4, 0, 5);
            }
        }
    }
</script>

<style scoped>
    .caruselleBlock{
        width: 100%;
        height:340px;
        margin-bottom:24px;
        display: flex;
    }
    .manageBtns{
        height: 100%;
        width: 4.17%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .manageBtnItem{
        width: 38px;
        height: 38px;
        background-color: rgb(66, 105, 61);
        border-radius: 50%;
        color: white;
        font-size: 16px;
        font-weight: lighter;
        text-align: center;
        padding: 5px 8px 4px 8px;
    }
    .caruselleDesk{
        height: 100%;
        width: 91.6%;
        display: flex;
        flex-flow: row nowrap;
        overflow: hidden;
    }
    .caruselleDesk-move,
    .caruselleDesk-enter-active,
    .caruselleDesk-leave-active {
        transition: all 1s;
    }
    .caruselleDesk-enter-from,
    .caruselleDesk-leave-to {
        transform: translateX(-204px);
    }
    .caruselleDesk-leave-active {
        position: absolute;
    }
    .caruselleCard{
        height: 100%;
        min-width: 19.8%;
        margin-right: 1%;
       position: relative;
       background-color: silver;
       left: -20.4%;
    }
    @media only screen  and (max-width:1200px) {
        .caruselleBlock{
            width: 100vw;
            height: 28.33vw;
        }
        .manageBtnItem{
            width: 3.17vw;
            height: 3.17vw;
            font-size: 1.34vw;
            padding: 0.42vw 0.67vw 0.33vw 0.67vw;
            font-size: 1.33vw;
        }
    }
</style>
