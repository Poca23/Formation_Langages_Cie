import React from "react";
import ReactDOM from "react-dom/client"; 
import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import { getCLS, getFID, getLCP, getFCP, getTTFB } from "web-vitals";
import { interval } from "rxjs";
import { map } from "rxjs/operators";

document.getElementById("ex1").addEventListener("click", () => {
  const result1 = document.getElementById("result1");

  const observable = interval(1000).pipe(map((value) => `Valeur : ${value}`));

  const subscription = observable.subscribe((value) => {
    result1.textContent = value;
  });

  setTimeout(() => {
    subscription.unsubscribe();
  }, 10000);
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
