<template >
    <section class="container recipyPageIngredients" >
        <h2 class="recipyPageTitle">Ingredients we send</h2>
        <div class="recipyPageAllergy">
            Allergens: {{ getAllergens }}
        </div>
        <div class="recipyPageNotice">
            Produced in a facility that processes eggs, fish, milk, peanuts, sesame, shellfish,
            soy, and tree nuts. All Produce & Eggs are organic. You will be notified in the occasion
            that we need to substitute a non-organic ingredient.
        </div>
        <div class="ingridientsDesk">
            <ul class="indridientsList">
                <li v-for="(item, index) in getIngredients" :key="index" class="indridientsItem">
                    <div class="indridientsImg">
                        <div class="boxPicture"></div>
                    </div>
                    <div class="indridientsInfo">
                        <div class="indridientsTitle">{{ item.ingredient }}</div>
                        <div class="indridientsWeght">{{ `${item.count} ${item.unit}` }}</div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'RecipyIngredients',
        props: ['allergens', 'ingredients'],
        computed: {
            getAllergens() {
                const allergens = JSON.parse(this.allergens)
                return allergens.map(item => item.name).join(', ');
            },
            getIngredients() {
                return JSON.parse(this.ingredients);
            },
        }
    }
</script>

<style scoped>
.recipyPageIngredients{
    width: 100%;
}
.recipyPageTitle{
    width: calc(100% - 30px);
    min-height: 35px;
    margin-bottom: 8px;
    font-family: "Source Sans Pro",sans-serif,Helvetica,Arial;
    font-weight: 700;
    font-size: 24px;
    line-height: 30px;
    color: black;
    text-align: left;
}
.recipyPageAllergy{
    width: calc(100% - 30px);
    margin-bottom: 8px;
    text-align: left;
    font-family: "Source Sans Pro",sans-serif,Helvetica,Arial;
    font-size: 16px;
    line-height: 24px;
}
.recipyPageNotice{
    width: calc(100% - 30px);
    margin-bottom: 24px;
    text-align: left;
    font-family: "Source Sans Pro",sans-serif,Helvetica,Arial;
    line-height: 24px;
    font-size: 12px;
    font-weight: 600;
}
.ingridientsDesk{
    width: calc(100% - 30px);
}
.indridientsList{
    width:100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 32px;
    padding: 0;
    margin: 0;
}
.indridientsItem{
    width:100%;
    display: flex;
}
.indridientsImg{
    width: 80px;
    height: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.indridientsInfo{
    width: 255px;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.boxPicture{
    width:60%;
    height:60%;
    background-image: url(http://svoyapi.ru/brisk-meal/photo/box);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
.indridientsTitle{
    text-align: left;
    padding-left: 20px;
    font-family: "Source Sans Pro",sans-serif,Helvetica,Arial;
    font-size: 16px;
    line-height: 24px;
}
.indridientsWeght{
    text-align: left;
    padding-left: 20px;
    font-family: "Source Sans Pro",sans-serif,Helvetica,Arial;
    color: rgb(125, 128, 127);
    font-size: 16px;
    line-height: 24px;
}
@media only screen and (min-width: 1200px){
    .recipyPageIngredients{
        padding: 24px 15px;
        margin-left: 0px;
        display: flex;
        background-color: white;
        flex-direction: column;
        border-radius: 3px;
        box-shadow: rgb(0 0 0 / 10%) 0px 2px 3px 0px;
    }
    .indridientsItem{
        width:47%;
        display: flex;
    }
}
</style>
