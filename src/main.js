import { createApp } from "vue";
import "./assets/style.css";
import App from "./App.vue";
import { createRouter, createWebHistory } from 'vue-router'
import VueSmoothScroll from "vue3-smooth-scroll";

import Button from "./components/Button.vue";
import LinkButton from "./components/LinkButton.vue";






// Font Awesome
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faGithub, faLinkedin} from '@fortawesome/free-brands-svg-icons'
import { faEnvelope, faHome, faBlog,faUser, faTools, faGraduationCap,  faServer } from '@fortawesome/free-solid-svg-icons'




// Import des composants pour les routes
import HeroSection from './sections/HeroSection.vue';
import AboutSection from "./sections/AboutSection.vue";
import ServiceSection from "./sections/ServiceSection.vue";
import FaqSection from "./sections/FaqSection.vue";
import SubscribeSection from "./sections/SubscribeSection.vue";



// Configuration des icônes
library.add(
  faGithub, faLinkedin, 
  faEnvelope, faHome, faBlog, faTools, faUser, faGraduationCap,  faServer
)

// Configuration des routes
const routes = [
    { path: '/', component: HeroSection },
    { path: '/about', component: AboutSection },
    { path: '/services', component: ServiceSection },
    { path: '/fag', component: FaqSection },
    { path: '/subcribe', component: SubscribeSection },
    
  ]
  






const router = createRouter({
    history: createWebHistory(),
    routes
})
let app = createApp(App);

app.use(VueSmoothScroll);

app.component("Button", Button);
app.component("LinkButton", LinkButton);
app.use(router)
app.mount("#app");
