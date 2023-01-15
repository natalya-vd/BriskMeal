<template>
    <svg
        width="18"
        height="11"
        viewBox="0 0 12 7"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        :class="{
        'open': this.isOpen
        }"
        @click="$emit('click')"
    >
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M10.8977 1.10226C11.1174 1.32193 11.1174 1.67809 10.8977 1.89776L6.39775 6.39776C6.17808 6.61743 5.82192 6.61743 5.60225 6.39776L1.10225 1.89776C0.882582 1.67809 0.882583 1.32193 1.10225 1.10226C1.32192 0.88259 1.67808 0.88259 1.89775 1.10226L6 5.20451L10.1023 1.10226C10.3219 0.882591 10.6781 0.882591 10.8977 1.10226Z"
        />
    </svg>
</template>

<script>
export default {
name: "IconDropDown",
props: {
    isOpen: {
    type: Boolean,
    default: false,
    },
},
emits: ['click'],
};
</script>

<style scoped>
    .open {
        transform: rotate(180deg);
    }
</style>
