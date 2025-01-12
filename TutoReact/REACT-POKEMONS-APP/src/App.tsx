import React, { FunctionComponent, useState } from "react";
import Pokemon from "./models/pokemon";
import POKEMONS from "./models/mock-pokemon";

const App: FunctionComponent = () => {
  const [projet] = useState<String>("Pokédex");
  const [pokemons] = useState<Pokemon[]>(POKEMONS);

  return (
  <div>
    <h1>Voici mon projet de {projet} !</h1>
    <h2>Pokédex</h2>
    <p>Il y a {pokemons.length} pokémons dans le Pokédex.</p>
  </div>
  );
};

export default App;
