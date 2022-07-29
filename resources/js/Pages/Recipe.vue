<template>
    <h1>My Recipes</h1>
    <hr>

    <div class="d-flex justify-content-between">
        <div class="card mb-3" v-for="recipe in recipes" :key="recipe.id">
            <div class="card-header bg-info">
                <h4>{{ recipe.name }}</h4>
            </div>
            <div class="card-body">
                <h6>Ingredients</h6>
                <ul>
                    <li v-for="ingredient in recipe.ingredients" :key="ingredient.id">
                        {{ ingredient.name }} {{ ingredient.measure }} {{ ingredient.unit }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        recipes: Array
    }
}
</script>


<style scoped>
.card {
    width: 375px;
}
</style>
