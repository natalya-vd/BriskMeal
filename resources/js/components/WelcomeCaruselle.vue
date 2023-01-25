<template>
    <div class="caruselleBlock" >
        <div class="manageBtns leftManageBtn">
            <div v-if="isLeftBtnShowd" class="manageBtnItem" style="background-color: grey; cursor: default;">	&#5176;</div>
            <div v-else v-on:click="onLeft(this.page)" class="manageBtnItem" style="background-color: rgb(66, 105, 61);">	&#5176;</div>
        </div>
        <TransitionGroup class="caruselleDesk" name="caruselle" tag="ul" id="caruselleDesk" >
            <li v-for="(item, index) in this.myList" class="caruselleCard" :key="item.photo.id" :data-key="item.photo.id"   :style="'background-image:url('+ item.photo.full_path +');'" >
              <a :href="`/recipe/${item.photo.id}`" class="caruselleCardLink">
                <div class="caruselleCardTitle">{{ item.photo.name }}</div>
              </a>  
            </li>
        </TransitionGroup>
        <div class="manageBtns rightManageBtn">
            <div v-if="isRightBtnShowd" class="manageBtnItem" style="background-color: grey; cursor: default;"> &#5171; </div>
            <div v-else v-on:click="onRight" class="manageBtnItem" style="background-color: rgb(66, 105, 61);"> &#5171; </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['caruseldata'],
        data() {
            return {
                page: 1,
                myList: []
            }
        },
         computed: {
            maxPage(){
                return this.caruseldata.length - 5
            },
            isLeftBtnShowd(){
                return this.page === 1 ? true : false
            },
            isRightBtnShowd(){
                return this.page === this.maxPage ? true : false
            }
        },
        methods: {
            onLeft(page) {
                page === 1 ? this.page = 1 :this.page -= 1;
                if (page > 1){
                    this.myList.splice(0, 0, this.caruseldata.slice(page-2, page-1)[0]);
                    this.myList.pop();
                }    
            },
            onRight: function (event) {
                this.page === this.maxPage ? this.page = this.maxPage :this.page += 1;
                if(this.page < this.maxPage){ 
                    this.myList.push(this.caruseldata.slice(this.page+5, this.page+6)[0]);
                    this.myList.shift();
                }  
            }
        },
        mounted() {
           this.myList = this.caruseldata.slice(0, 6);
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
        border-radius: 50%;
        color: white;
        font-size: 16px;
        font-weight: lighter;
        text-align: center;
        padding: 5px 8px 4px 8px;
        cursor:  pointer;
    }
    .caruselleDesk{
        height: 100%;
        width: 91.6%;
        display: flex;
        flex-flow: row nowrap;
        overflow: hidden;
    }
    .caruselle-leave-active,
    .caruselle-enter-active,
    .caruselle-active {
        transition: all 0.5s;
    }  
       
    .caruselle-enter-from {
        transform: translate(-200px, 0);
    }
    .caruselle-enter-from:last-child {
        transform: translate(220px, 0);
    }
    .caruselle-leave-active {
        position: absolute;
    }
    .caruselleCard{
        height: 100%;
        min-width: 19.8%;
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
        transition: all 0.5s;
        display: inline-block;
    }
    .caruselleCardLink{
       width: 100%;
       height: 100%;
       display: flex;
       align-items: end;
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
