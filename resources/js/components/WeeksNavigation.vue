<template>
    <ul class="weekNavigationPanel">
        <li v-for="item in getActiveWeeks" :key="item.id" class="weekNavigationPanelItem {{week}}">
            <a v-if="( item.week_name  ==  week )" :href="`/catalog/${item.week_name}`" class="weekNavigationPanelItemPlace">
                <div class="weekNavigationPanelItemTextActive">
                    <span>{{ item.week_name.slice(0,4) }}</span>
                    <span>{{ item.week_name.slice(5,8) }}</span>
                </div>
                <div class="weekNavigationPanelDetail"></div>
            </a>
            <a v-else :href="`/catalog/${item.week_name}`" class="weekNavigationPanelItemText">
                <span>{{ item.week_name.slice(0,4) }}</span>
                <span>{{ item.week_name.slice(5,8) }}</span>
            </a>

        </li>
    </ul> 
</template>

<script>
export default {
    name: 'WeeksNavigation',
    props: ['activeWeeks', 'week'],
    computed: {
        getActiveWeeks() {
            return JSON.parse(this.activeWeeks);
        }
    }
}
</script>

<style scoped>
.weekNavigationPanel{
    display: flex;
    justify-content: center;
}
.weekNavigationPanelItem{
    flex-direction: column;
    border-radius: 6px;
    display: flex;
    width: 60px;
    height: 60px;
}
.weekNavigationPanelItem{
    flex-direction: column;
    border-radius: 6px;
    display: flex;
     width: 60px;
    height: 60px;
}
.weekNavigationPanelItemTextActive{
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: rgb(70, 167, 72);
    color: white;
    border-radius: 6px;
}
.weekNavigationPanelItemText{
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
     background-color: white;
    color: black;
    border-radius: 6px;
}
.weekNavigationPanelDetail{
    content: "";
    position: relative;
    bottom: 11px;
    left: 50%;
    width: 15px;
    height: 15px;
    pointer-events: none;
    background-color: rgb(70, 167, 72);
    box-shadow: rgb(77 65 51 / 10%) -2px 2px 0px;
    transform-origin: 0px 100%;
    transform: translateY(8px) rotate(-45deg);
    z-index: 1;
    visibility: visible;
}
</style>
