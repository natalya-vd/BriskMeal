<template>
    <div>
        <h2>Тут будет собираться вся страница корзины</h2>
        <cart-card-component />
    </div>
</template>

<script>
import CartCardComponent from './CartCardComponent.vue'

export default {
    name: 'CartPage',
    components: {
        CartCardComponent,
    },

    props: ['data'],

    mounted() {
        console.log(this.data);
    },
}
</script>
