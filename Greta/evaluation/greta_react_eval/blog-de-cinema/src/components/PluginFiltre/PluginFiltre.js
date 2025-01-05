import React, { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
  faFolder,
  faClock,
  faUserShield,
  faFilter,
} from "@fortawesome/free-solid-svg-icons";
import "./PluginFiltre.css";

const PluginFiltre = () => {
  const [isSidebarOpen, setIsSidebarOpen] = useState(false);
  const toggleSidebar = () => {
    setIsSidebarOpen(!isSidebarOpen);
  };

  return (
    <div className="filter-container">
      <button className="filter-button" onClick={toggleSidebar}>
        <FontAwesomeIcon icon={faFilter} />
      </button>
      {isSidebarOpen && (
        <div className="sidebar">
          <div className="filters">
            <h4>
              <FontAwesomeIcon icon={faFolder} /> Catégorie
            </h4>
            <div className="filter-category">
              <button>Action</button>
              <button>Fantaisie</button>
              <button>Aventure</button>
              <button>Drame</button>
              <button>SF</button>
              <button>Horreur</button>
              <button>Comédie</button>
              <button>Romantique</button>
            </div>
            <h4>
              <FontAwesomeIcon icon={faClock} /> Durée du film
            </h4>
            <div className="filter-duration">
              <button>- de 2H</button>
              <button>[2H et 3H]</button>
              <button>+ de 3H</button>
            </div>
            <h4>
              <FontAwesomeIcon icon={faUserShield} /> Âge
            </h4>
            <div className="filter-age">
              <button>Tous publics</button>
              <button>- de 12 ans</button>
              <button>- de 16 ans</button>
              <button>- de 18 ans</button>
              <button>+ de 18 ans</button>
            </div>
          </div>
        </div>
      )}
    </div>
  );
};

export default PluginFiltre;
