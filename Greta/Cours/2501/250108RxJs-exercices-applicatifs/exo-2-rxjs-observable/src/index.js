import React from "react";
import ReactDOM from "react-dom/client"; 
import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import { getCLS, getFID, getLCP, getFCP, getTTFB } from "web-vitals";

document.getElementById("ex2").addEventListener("click", () => {

});

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);

reportWebVitals();

// Utiliser les fonctions importées si nécessaire
getCLS(console.log);
getFID(console.log);
getLCP(console.log);
getFCP(console.log);
getTTFB(console.log);
