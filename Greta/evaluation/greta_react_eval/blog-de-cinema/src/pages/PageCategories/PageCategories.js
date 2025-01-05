import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import PageTemplate from "../../components/PageTemplate/PageTemplate.js";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faEdit, faTrash, faPlus } from "@fortawesome/free-solid-svg-icons";
import SearchBar from "../../components/SearchBar/SearchBar"; // Importation du composant SearchBar
import SectionTitle from "../../components/SectionTitle/SectionTitle.js";
import "./PageCategories.css";

const CategoriesPage = () => {
  const [categories, setCategories] = useState(() => {
    const savedCategories = localStorage.getItem("categories");
    return savedCategories
      ? JSON.parse(savedCategories)
      : [
          "Action",
          "Fantaisie",
          "Aventure",
          "Drame",
          "SF",
          "Horreur",
          "Comédie",
          "Romantique",
        ];
  });
  const [newCategory, setNewCategory] = useState("");
  const [editIndex, setEditIndex] = useState(-1);
  const [editCategoryName, setEditCategoryName] = useState("");
  const [searchTerm, setSearchTerm] = useState(""); // Nouvel état pour le terme de recherche

  useEffect(() => {
    localStorage.setItem("categories", JSON.stringify(categories));
  }, [categories]);

  const handleInputChange = (event) => {
    setSearchTerm(event.target.value);
  };

  const addCategory = () => {
    if (newCategory) {
      setCategories([...categories, newCategory]);
      setNewCategory("");
    }
  };

  const deleteCategory = (index) => {
    setCategories(categories.filter((_, i) => i !== index));
  };

  const editCategory = (index) => {
    setEditIndex(index);
    setEditCategoryName(categories[index]);
  };

  const saveEditCategory = (index) => {
    const updatedCategories = categories.map((cat, i) =>
      i === index ? editCategoryName : cat
    );
    setCategories(updatedCategories);
    setEditIndex(-1);
    setEditCategoryName("");
  };

  return (
    <PageTemplate>
      <div className="categories-page">
        <SectionTitle
          title="Catégories de Films"
          description="Explorez nos critiques par catégorie."
        />
        <SearchBar
          placeholder="Rechercher une catégorie..."
          onChange={handleInputChange}
        />

        <div className="categories-container">
          {categories.map((category, index) => (
            <div className="category-card" key={index}>
              {editIndex === index ? (
                <div className="category-title">
                  <input
                    type="text"
                    value={editCategoryName}
                    onChange={(e) => setEditCategoryName(e.target.value)}
                    onBlur={() => saveEditCategory(index)}
                    onKeyPress={(e) =>
                      e.key === "Enter" && saveEditCategory(index)
                    }
                    autoFocus
                  />
                </div>
              ) : (
                <div className="category-title">
                  <Link to={`/categorie/${index}`} className="category-link">
                    <h2>{category}</h2>
                  </Link>
                </div>
              )}
              <div className="category-actions">
                <button
                  className="edit-btn"
                  onClick={() => editCategory(index)}
                >
                  <FontAwesomeIcon icon={faEdit} />
                </button>
                <button
                  className="delete-btn"
                  onClick={() => deleteCategory(index)}
                >
                  <FontAwesomeIcon icon={faTrash} />
                </button>
              </div>
            </div>
          ))}

          <div className="add-category-card">
            <input
              type="text"
              value={newCategory}
              onChange={(e) => setNewCategory(e.target.value)}
              placeholder="Nouvelle catégorie"
            />
            <button className="add-btn" onClick={addCategory}>
              <FontAwesomeIcon icon={faPlus} />
            </button>
          </div>
        </div>
      </div>
    </PageTemplate>
  );
};

export default CategoriesPage;
