<template>

    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">My Recipes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Recipe'}" href="/recipe">Recipes</Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Videos'}" href="/videos">Videos</Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'About'}" href="/about">About Us</Link>
        </li>
                <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Contact'}" href="/contact">Contact Us</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container mt-5 p-4 rounded-4 shadow my-5" style="min-height: 800px;">
    <slot />
</section>
    <footer class="text-center my-3 text-dark">
    Copyright &copy; 2022. All rights reserved.
    </footer>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section {
    background-color: #fff;
    opacity: 0.7;
}
.selected {
    color: white;
    border-bottom: 1px solid rgba(255, 255, 255, 0.475);
}
</style>
