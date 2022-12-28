<template>
    <div class="Nutr-val">
    <h3 class="Nutr-val1">Nutrition Values</h3>
    
        <div class="Nutr-val2">
            <div class="Nutr-val3">

            </div>
            <strong>Per serving</strong>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Calories</strong>
            </small>
            <span>740kcal</span>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Fat</strong>
            </small>
            <span>55g</span>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Saturated Fat</strong>
            </small>
            <span>22g</span>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Carbohydrate</strong>
            </small>
            <span>21g</span>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Sugar</strong>
            </small>
            <span>8g</span>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Dietary Fiber</strong>
            </small>
            <span>5g</span>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Protein</strong>
            </small>
            <span>44g</span>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Cholesterol</strong>
            </small>
            <span>205mg</span>
        </div>
        <div class="Nutr-val2">
            <small class="Nutr-val3">
                <strong>Sodium</strong>
            </small>
            <span>1210mg</span>
        </div>
            <div class="Nutr-val4">
        <div class="Nutr-val5">
            <button aria-label="Additional nutritional information" tabindex="0"  class="Nutr-val6">
                <svg class="Nutr-val7" width="16" height="16" viewBox="0 0 16 16" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"          >
                    <g fill="none" fill-rule="evenodd">
                        <circle cx="8" cy="8" r="8" fill="#AFB3B2">

                        </circle>
                        <path fill="white" d="M7 4.51c0-.28.096-.518.289-.715a.944.944 0 0 1 .7-.295c.276 0 .513.098.712.295.2.197.299.435.299.715 0 .266-.1.498-.299.695a.978.978 0 0 1-.711.295.944.944 0 0 1-.701-.295A.962.962 0 0 1 7 4.51zM8.873 11.909a.525.525 0 0 1-.279.443 1.12 1.12 0 0 1-.567.148c-.192 0-.37-.045-.536-.135a.6.6 0 0 1-.31-.417c-.013-.806-.023-1.628-.03-2.467-.007-.84-.017-1.662-.031-2.467a.747.747 0 0 1 .33-.386 1.137 1.137 0 0 1 1.02-.013.683.683 0 0 1 .34.36c.014.806.025 1.628.032 2.467.007.84.017 1.662.03 2.467z">

                        </path>
                    </g>
                </svg>
                <div  class="Nutr-val7 ">

                </div>
            </button>
            <small  class="Nutr-val8">Nutrition info may vary slightly by time of delivery. Please refer to FAQ page for more related information.</small>
        </div>
    </div>

        </div>

    
    
</template>

<script>
export default {
    mounted() {
        console.log("RecipyPageNutrition Component mounted.");
    },
};
</script>

<style scoped>
.Nutr-val {
    display: flex;
    background-color: white;
    flex-direction: column ;
    padding: 0px;
    border-radius: 3px;
    box-shadow: rgb(0 0 0 / 10%) 0px 2px 3px 0px;
    position: relative;
    height: 650px;
    width: 320px;
    margin-left: 12px;
    padding-right: 12px;

}

.Nutr-val1 {
    margin: 0px 0px 16px;
    text-transform: capitalize;
    text-align: center;
}

.Nutr-val2 {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    padding: 4px 0px;
    border-bottom: 1px solid rgb(240, 242, 242);
}

.Nutr-val3 {
    padding: 12px;
}

.Nutr-val4 {
    margin-top: 24px;
    color: rgb(125, 128, 127);
}

.Nutr-val5 {
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
}

.Nutr-val6 {
    background: none;
    border: none;
    padding: 0px;
    position: relative;
    height: 24px;
}

.Nutr-val7 {
    vertical-align: middle;
    box-sizing: content-box;
    cursor: inherit;
}
.Nutr-val8 {
    width: 85%;
}



</style>
