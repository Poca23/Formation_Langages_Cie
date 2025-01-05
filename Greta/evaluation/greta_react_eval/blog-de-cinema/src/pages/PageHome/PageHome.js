import React, { useState } from "react";
import PageTemplate from "../../components/PageTemplate/PageTemplate.js";
import CarouselComponent from "../../components/Carousel/Carousel.js";
import SectionTitle from "../../components/SectionTitle/SectionTitle.js";
import SearchBar from "../../components/SearchBar/SearchBar.js"; 
import "./PageHome.css"; 

const initialCategories = [
  "Action",
  "Fantaisie",
  "Aventure",
  "Drame",
  "SF",
  "Horreur",
  "Comédie",
  "Romantique",
];

const HomePage = () => {
  const [query, setQuery] = useState("");
  const [categories] = useState(initialCategories);

  return (
    <PageTemplate>
      <SectionTitle
        title="Catégories de Films"
        description="Explorez nos critiques par catégorie."
      />
      <div className="search-bar-container">
        <SearchBar
          placeholder="Rechercher un film..."
          value={query}
          onChange={(e) => setQuery(e.target.value)}
          categories={categories} 
        />
      </div>
      <CarouselComponent className="carousel-component" />
    </PageTemplate>
  );
};

export default HomePage;