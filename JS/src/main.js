// The main.js file bootstraps the Vue application by mounting the App component
// in the #app div element defined in the main index html file.

import { createApp } from "vue"; //to create an instance of the Vue application.
import { createPinia } from "pinia";
import App from "./App.vue";

const app = createApp(App); //create an instance of the Vue application

app.use(createPinia()); // Pinia support is added
app.mount("#app"); //Mounting the application
