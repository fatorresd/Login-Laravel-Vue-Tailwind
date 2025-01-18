// filepath: /Users/fatorresdz/Desktop/FullStack-Ruta/PHP/Prueba_Fullstack/login-job-oportunity/resources/js/app.js
import { createApp } from 'vue';
import WelcomeComponent from './components/WelcomeComponent.vue';
// import LoginComponent from './components/LoginComponent.vue';
import DashboardGeneral from './components/DashboardGeneral.vue';
import '../css/app.css';

const app = createApp({});
app.component('welcome-component', WelcomeComponent);
// app.component('login-component', LoginComponent);
app.component('dashboard-general', DashboardGeneral);
app.mount('#app');