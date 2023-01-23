<template>
    <div class="caruselleBlock" >
        <div class="manageBtns leftManageBtn">
            <div v-on:click="onLeft" class="manageBtnItem">	&#5176;</div>
        </div>
        
        <TransitionGroup class="caruselleDesk" name="caruselleDesk" tag="ul">
            <li v-for="item in this.myList" class="caruselleCard" :key="item" :data-key="item" :style="'background-image:url('+ item.photo.full_path +');'" >
              
              <div class="caruselleCardTitle">{{ item.photo.name }}</div>
            </li>
        </TransitionGroup>
        <div class="manageBtns rightManageBtn">
            <div v-on:click="onRight" class="manageBtnItem"> &#5171; </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['caruseldata'],
        data() {
            return {
                page: 1
            }
        },
         computed: {
            myList(){
                return this.caruseldata.splice(0, 5);;
            }
        },
        methods: {
            onLeft: function (event) {
                
            },
            onRight: function (event) {
    
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
    .caruselleDesk-move2 {
        transition: all 1s;
    }
    .caruselleDesk-move {
        transform: translateX(-1100px);
    }
     .caruselleDesk-move2 {
        transform: translateX(-2200px);
    }
    .caruselleDesk-leave-active {
        position: absolute;
    }
    .caruselleCard{
        height: 100%;
        width: 19.8%;
        margin-right: 0.2%;
        position: relative;
        background-color: silver;
        display: flex;
        align-items: center;
        justify-content:center;
        font-size: 100px;
        display: flex;
        align-items: end;
        background-size:   auto 100%;
        background-position-x: center;
       
    }
    .caruselleCardTitle{
        width: 100%;
        height: 35.29%;
        color: white;
        font-size: 16px;
        line-height: 20px;
        font-weight: 600;
        padding: 56px 12px 5px 12px;
        text-align:center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgb(34, 34, 34));
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
