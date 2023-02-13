<template>
    <div class="caruselleBlock">
        <swiper
            :slidesPerView="5"
            :cssMode="true"
            :navigation="true"
            :pagination="{
                dynamicBullets: true,
            }"
            :mousewheel="true"
            :keyboard="true"
            :modules="modules"
            :rewind="true"
            class="caruselleDesk"
        >
            <swiper-slide
                v-for="item in caruseldata"
                class="caruselleCard"
                :key="item.photo.id"
                :data-key="item.photo.id"
                :style="'background-image:url(' + item.photo.full_path + ');'"
                ><a
                    :href="`/recipe/${item.photo.id}/week/${+week}`"
                    class="caruselleCardLink"
                >
                    <div class="caruselleCardTitle">{{ item.photo.name }}</div>
                </a></swiper-slide
            >
        </swiper>
    </div>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";

import "swiper/css";

import "swiper/css/navigation";
import "swiper/css/pagination";

import "../../css/app.css";

// import required modules
import { Navigation, Pagination, Mousewheel, Keyboard } from "swiper";
export default {
    props: ["caruseldata", "week"],
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Navigation, Pagination, Mousewheel, Keyboard],
        };
    },

    mounted() {
        console.log(this.week);
    },
};
</script>

<style scoped>
.caruselleBlock {
    width: 100%;
    height: 340px;
    margin-bottom: 24px;
    display: flex;
}
.manageBtns {
    height: 100%;
    width: 4.17%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.manageBtnItem {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    color: white;
    font-size: 16px;
    font-weight: lighter;
    text-align: center;
    padding: 5px 8px 4px 8px;
    cursor: pointer;
}
.caruselleDesk {
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
.caruselleCard {
    height: 100%;
    min-width: 19.8%;
    margin-right: 0.2%;
    position: relative;
    background-color: silver;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 100px;
    display: flex;
    align-items: end;
    background-size: auto 100%;
    background-position-x: center;
    transition: all 0.5s;
    display: inline-block;
}
.caruselleCardLink {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: end;
}
.caruselleCardTitle {
    width: 100%;
    height: 35.29%;
    color: white;
    font-size: 16px;
    line-height: 20px;
    font-weight: 600;
    padding: 35px 12px 5px 12px;
    text-align: center;
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgb(34, 34, 34));
}

.swiper-pagination > .swiper-pagination-bullet {
    background: var(--swiper-pagination-bullet-inactive-color, #fff);
}

@media only screen and (max-width: 1200px) {
    .caruselleBlock {
        /* width: 100vw; */
        height: 28.33vw;
    }
    .manageBtnItem {
        width: 3.17vw;
        height: 3.17vw;
        font-size: 1.34vw;
        padding: 0.42vw 0.67vw 0.33vw 0.67vw;
        font-size: 1.33vw;
    }
    .caruselleCardTitle {
        padding: 10px 12px 5px 12px;
        font-size: 14px;
    }
}
</style>
