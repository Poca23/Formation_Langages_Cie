import React, { useState } from "react";
import PageTemplate from "../../components/PageTemplate/PageTemplate.js";
import CarouselComponent from "../../components/Carousel/Carousel.js";
import SectionTitle from "../../components/SectionTitle/SectionTitle.js";
import SearchBar from "../../components/SearchBar/SearchBar.js"; // Importation du composant SearchBar
import "./PageHome.css"; // Assurez-vous que ce chemin est correct

const HomePage = () => {
  const [query, setQuery] = useState("");

  return (
    <PageTemplate>
      <SectionTitle
        title="Catégories de Films"
        description="Explorez nos critiques par catégorie."
      />
      <SearchBar
        placeholder="Rechercher un film..."
        value={query}
        onChange={(e) => setQuery(e.target.value)}
      />
      <CarouselComponent className="carousel-component" />
    </PageTemplate>
  );
};

export default HomePage;
