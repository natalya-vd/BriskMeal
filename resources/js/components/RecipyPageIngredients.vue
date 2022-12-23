<template >
    <section class="container recipyPageIngredients" >
        <h2 class="recipyPageTitle">Ingredients we send</h2>
        <div class="recipyPageAllergy">
            Allergens :&nbsp; Shellfish, Tree Nuts, Milk
        </div>
        <div class="recipyPageNotice">
            Produced in a facility that processes eggs, fish, milk, peanuts, sesame, shellfish, 
            soy, and tree nuts. All Produce & Eggs are organic. You will be notified in the occasion 
            that we need to substitute a non-organic ingredient.
        </div>
        <div class="ingridientsDesk">
            <ul class="indridientsList">
                <li class="indridientsItem">
                    <div class="indridientsImg">
                        <div class="boxPicture"></div>
                    </div>
                    <div class="indridientsInfo">
                        <div class="indridientsTitle">Shrimp</div>
                        <div class="indridientsWeght">10 ounce</div>
                    </div>
                </li>
                <li class="indridientsItem">
                    <div class="indridientsImg">
                        <div class="boxPicture"></div>
                    </div>
                    <div class="indridientsInfo">
                        <div class="indridientsTitle">Cauliflower Rice</div>
                        <div class="indridientsWeght">6.5 ounce</div>
                    </div>
                </li>
                <li class="indridientsItem">
                    <div class="indridientsImg">
                        <div class="boxPicture"></div>
                    </div>
                    <div class="indridientsInfo">
                        <div class="indridientsTitle">Almonds</div>
                        <div class="indridientsWeght">½ ounce</div>
                    </div>
                </li>
                <li class="indridientsItem">
                    <div class="indridientsImg">
                        <div class="boxPicture"></div>
                    </div>
                    <div class="indridientsInfo">
                        <div class="indridientsTitle">Roasted Red Peppers</div>
                        <div class="indridientsWeght">2.25 ounce</div>
                    </div>
                </li>
                <li class="indridientsItem">
                    <div class="indridientsImg">
                        <div class="boxPicture"></div>
                    </div>
                    <div class="indridientsInfo">
                        <div class="indridientsTitle">Cream Cheese</div>
                        <div class="indridientsWeght">1 ounce</div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('RecipyPageIngredients Component mounted.')
        }
    }
</script>

<style scoped>
.recipyPageIngredients{
    margin-bottom: 24px;
    width: 100%;
    height: auto;
    min-height: 380px;
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
    min-height: 80px;
}
.indridientsList{
    width:100%;
    display: flex;
    flex-wrap: wrap;
    padding: 0;
}
.indridientsItem{
    width:100%;
    display: flex;
    height: 48px;
    margin-bottom: 32px;
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
        width: 730px;
        height: 460px;
        padding: 24px 15px 0 15px;
        margin-left: 0px;
        display: flex;
        background-color: white;
        flex-direction: column;
        border-radius: 3px;
        box-shadow: rgb(0 0 0 / 10%) 0px 2px 3px 0px;
    }
    .indridientsItem{
        width:50%;
        display: flex;
        height: 80px;
    }
}
</style>