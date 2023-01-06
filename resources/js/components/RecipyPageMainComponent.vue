<template>
    <div class="recipyPageMainComponent">
        <div class="recipyWrapper">
            <div class="recipyPictureWrapper">
                <img
                    class="recipyPicture"
                    :src="getPhoto.path"
                    :alt="getPhoto.name"
                />
            </div>
            <div class="recipyInfoWrapper">
                <div class="recipyInfo">
                    <div class="timeInfo info">
                        <svg
                            class="svgTime"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="m12 2c5.5228475 0 10 4.4771525 10 10s-4.4771525 10-10 10-10-4.4771525-10-10 4.4771525-10 10-10zm0 2c-4.418278 0-8 3.581722-8 8s3.581722 8 8 8 8-3.581722 8-8-3.581722-8-8-8zm0 2c.5522847 0 1 .44771525 1 1v4.3406038l2.8939193 1.2402512c.5076298.2175556.7427814.8054345.5252257 1.3130643-.2175556.5076298-.8054345.7427814-1.3130643.5252257l-3.5-1.5c-.3676838-.1575788-.6060807-.5191169-.6060807-.919145v-5c0-.55228475.4477153-1 1-1z"
                                fill="#222222"
                                fill-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="time">{{ time }} Min.</span>
                    </div>
                    <div class="energyInfo info">
                        <svg
                            class="svgEnergy"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="m18.1538462 2c1.0196026 0 1.8461538.80735537 1.8461538 1.80327869v16.39344261c0 .9959233-.8265512 1.8032787-1.8461538 1.8032787h-12.30769235c-1.01960262 0-1.84615385-.8073554-1.84615385-1.8032787v-16.39344261c0-.99592332.82655123-1.80327869 1.84615385-1.80327869zm0 1.42076503h-12.30769235c-.21627935 0-.3916084.1712572-.3916084.38251366v16.39344261c0 .2112565.17532905.3825137.3916084.3825137h12.30769235c.2162793 0 .3916083-.1712572.3916083-.3825137v-16.39344261c0-.21125646-.175329-.38251366-.3916083-.38251366zm-2.9548127 11.27975647c.326441 0 .5905308.2591231.5905308.5781909 0 .3192588-.2643826.5781432-.5905308.5781432h-6.39806701c-.32600186 0-.59057954-.2588366-.59057954-.5781432 0-.31902.26457768-.5781909.59057954-.5781909zm0-3.2786886c.326441 0 .5905308.2588844.5905308.578191s-.2643826.5781909-.5905308.5781909h-6.39806701c-.32600186 0-.59057954-.2588843-.59057954-.5781909s.26457768-.578191.59057954-.578191zm0-3.27868849c.3261482 0 .5905796.25902763.5905796.57819095 0 .31916331-.2644314.57819094-.5905796.57819094h-6.39806701c-.32600186 0-.59057954-.25897986-.59057954-.57819094 0-.31916332.26457768-.57819095.59057954-.57819095z"
                                fill="#222222"
                                fill-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="energy">{{calories}}kcal</span>
                    </div>
                    <div class="planInfo info">
                        <meal-plan :plans="plans" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MealPlan from './MealPlan.vue'

export default {
    components: {
        MealPlan
    },

    props: ['id', 'time', 'calories', 'plans', 'photo'],

    computed: {
        getPhoto() {
            const photo = JSON.parse(this.photo)

            return {
                id: photo[0].id,
                name: photo[0].name,
                path: photo[0].full_path
            }
        },
    }
};
</script>

<style scoped>
.recipyPageMainComponent {
    display: flex;
    flex-direction: column;
    box-shadow: none;
    background-color: transparent;
    border-radius: 0px;
    margin-bottom: 0px;
    padding: 0px;
}

.recipyWrapper {
    margin: 0px 0px 24px;
}

.recipyPictureWrapper {
    height: 400px;
    margin: 0px 0px 16px;
}

.recipyPicture {
    display: block;
    height: 100%;
    width: 100%;
    object-fit: cover;
    background: rgba(0, 0, 0, 0.1);
}

.recipyInfoWrapper {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
}

.recipyInfo {
    display: flex;
    flex-wrap: wrap;
    font-weight: 700;
    -webkit-box-align: center;
    align-items: center;
    margin-top: -16px;
    font-size: 16px;
    line-height: 24px;
}

.info {
    margin: 24px 24px 0px 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}

.svgTime {
    vertical-align: top;
    box-sizing: content-box;
    cursor: inherit;
    margin-right: 4px;
}

.svgEnergy {
    vertical-align: top;
    box-sizing: content-box;
    cursor: inherit;
    margin-right: 4px;
}
</style>
