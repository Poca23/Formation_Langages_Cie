import React, { useEffect, useState } from "react";
import { Link, useParams } from "react-router-dom";
import PageTemplate from "../../components/PageTemplate/PageTemplate.js";
import SectionTitle from "../../components/SectionTitle/SectionTitle.js";
import "./PageCategory.css"; // Chemin correct vers le fichier CSS

const CategoryPage = () => {
  const { id } = useParams();
  const [categoryName, setCategoryName] = useState("");
  const [movies, setMovies] = useState([]);

  useEffect(() => {
    // Remplacer par la logique réelle de récupération du nom de la catégorie et des films
    const categories = [
      "Action",
      "Fantaisie",
      "Aventure",
      "Drame",
      "SF",
      "Horreur",
      "Comédie",
      "Romantique",
    ];
    const category = categories[id];
    setCategoryName(category ? category : "");

    // Exemple de récupération des films de la catégorie
    const fetchMovies = async () => {
      const response = await fetch(
        `https://api.themoviedb.org/3/discover/movie?with_genres=${id}&api_key=48a751c85b6b3d4c0750582c52468efb&language=fr-FR`
      );
      const data = await response.json();
      setMovies(data.results || []);
    };

    fetchMovies();
  }, [id]);

  return (
    <PageTemplate>
      <SectionTitle
        title={`Catégorie : ${categoryName}`}
        description={`Découvrez les films de la catégorie ${categoryName}.`}
      />
      <div className="category-page">
        <Link to="/categories" className="back-link">
          Retour à la liste des catégories
        </Link>
        <div className="movies-list">
          {movies.map((movie) => (
            <Link to={`/detail-film/${movie.id}`} key={movie.id}>
              <div className="movie-card">
                <img
                  src={`https://image.tmdb.org/t/p/w500/${movie.poster_path}`}
                  alt={movie.title}
                />
                <h3>{movie.title}</h3>
                <p>{movie.overview}</p>
              </div>
            </Link>
          ))}
        </div>
      </div>
    </PageTemplate>
  );
};

export default CategoryPage;
