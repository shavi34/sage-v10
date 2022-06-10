import { domReady } from "@roots/sage/client";
import HelloWorld from "./hello-world.vue";
import { createApp } from "vue";

const app = createApp(HelloWorld);
app.mount("#hello-world");
/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
