<template>
    <div class="caruselleBlock" >
        <ul class="caruselleDesk" name="caruselle" id="caruselleDesk" >
            <li v-for="(item, index) in this.myList" class="caruselleCard" :key="item.photo.id" :data-key="item.photo.id"   :style="'background-image:url('+ item.photo.full_path +');'" >
              <a :href="`/recipe/${item.photo.id}`" class="caruselleCardLink">
                <div class="caruselleCardTitle">{{ item.photo.name }}</div>
              </a>  
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['caruseldata'],
        data() {
            return {
                myList: []
            }
        },
         computed: {
            
        },
        methods: {

        },
        mounted() {
           this.myList = this.caruseldata.slice(0, 13);
        }
    }
</script>

<style scoped>
    .caruselleBlock{
        width: 98vw;
        height: 60vw;
        margin-bottom:24px;
        display: flex;
    }
    .caruselleDesk{
        height: 100%;
        width: 91.6%;
        display: flex;
        flex-wrap: wrap;
        overflow: hidden;
        justify-content: space-between;
    }
    .caruselleCard{
        height: 49%;
        width: 16%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content:center;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
        background-size:   auto 100%;
        background-position-x: center;
        
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
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
        padding: 5px 10px 5px 10px;
        text-align:center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgb(34, 34, 34));
    }
    ul {
        padding: 0;
    }
    @media only screen  and (max-width:650px) {
       .caruselleBlock{
            height: 120vw;
            margin-bottom:15px;
        }
        .caruselleCard{
            height: 33.3%;
            width: 24.5%;
        }
        .caruselleCardTitle{
            height: 50%;
            font-size: 12px;
            line-height: 16px;
            font-weight: 400;
            padding: 35px 10px 5px 10px;
        }
    }
    @media only screen  and (max-width:500px) {
        .caruselleCardTitle{
            font-size: 11px;
            line-height: 14px;
            font-weight: 400;
            padding: 30px 9px 5px 9px;
        }
    }
    @media only screen  and (max-width:460px) {
       .caruselleBlock{
            height: 200vw;
            margin-bottom:10px;
        }
        .caruselleCard{
            height: 24.5%;
            width: 33.1%;
        }
        .caruselleCardTitle{
            height: 50%;
            font-size: 12px;
            line-height: 16px;
            font-weight: 400;
            padding: 25px 10px 5px 10px;
        }
    }
    @media only screen  and (max-width:380px) {
       .caruselleBlock{
            height: 300vw;
            margin-bottom:10px;
        }
        .caruselleCard{
            height: 16.5%;
            width: 49.5%;
        }
        .caruselleCardTitle{
            height: 50%;
            font-size: 12px;
            line-height: 16px;
            font-weight: 400;
            padding: 25px 10px 5px 10px;
        }
    }
</style>
