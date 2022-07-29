<template>
    <h1>Home</h1>
    <p class="text-center">{{ message }}</p>
    <p class="text-center">
        <button @click="decrement">-</button>
        {{ number }}
        <button @click="increment">+</button>
    </p>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'
const message = 'Hello world, inertia is under attack'


const number = ref(0)

function increment() {
    number.value++;
}
function decrement() {
    number.value--;
}
</script>


<script>
export default {
    layout: Layout

}


</script>
