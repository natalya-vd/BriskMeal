/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap";
import { createApp } from "vue";
import "../css/app.css";
import "../css/catalog.css";
import "../css/recipe.css";
// import VueRouter from "vue-router";

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import FooterComponent from "./components/FooterComponent.vue";
app.component("footer-component", FooterComponent);

import HeaderComponent from "./components/HeaderComponent.vue";
app.component("nav-header-component", HeaderComponent);

import MainLogoComponent from "./components/MainLogoComponent.vue";
app.component("main-logo-component", MainLogoComponent);

import Mealcardomponent from "./components/MealCardComponent.vue";
app.component("meal-card", Mealcardomponent);

import RecipyPageTitle from "./components/RecipyPageTitle.vue";
app.component("recipy-title", RecipyPageTitle);

import RecipyPageNutrition from "./components/RecipyPageNutrition.vue";
app.component("recipy-nutrition", RecipyPageNutrition);

import RecipyPageDescription from "./components/RecipyPageDescription.vue";
app.component("recipy-description", RecipyPageDescription);

import RecipyPageIngredients from "./components/RecipyPageIngredients.vue";
app.component("recipy-ingredients", RecipyPageIngredients);

import RecipyPageMainComponent from "./components/RecipyPageMainComponent.vue";
app.component("recipy-main", RecipyPageMainComponent);

import TimeAndMealPlan from "./components/TimeAndMealPlan.vue";
app.component("time-meal-plan", TimeAndMealPlan);

import PlansPage from "./components/PlansPage.vue";
app.component("plans-page", PlansPage);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */
// app.use(VueRouter);
app.mount("#app");
