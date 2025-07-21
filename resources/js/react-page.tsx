import reactDom from "react-dom/client";
import { App } from "./app";

const $el = document.getElementById("ssr");

if ($el) {
    reactDom.createRoot($el).render(<App />);
}