import React, { useEffect, useState } from 'react';
import axios from '../api/axios';
import '../App.css';
import Nav from '../components/Nav';
import walletIcon from '../assets/wallet.svg';
import clockIcon from '../assets/horloge.svg';
import chefIcon from '../assets/chef.svg';

const HomeRecette = () => {
  const [recipes, setRecipes] = useState([]);
  const [loading, setLoading] = useState(true);
  const [selectedRecipe, setSelectedRecipe] = useState(null); // State to store the selected recipe

  useEffect(() => {
    axios.get('/api/recipes')
      .then(response => {
        if (Array.isArray(response.data)) {
          setRecipes(response.data);
        } else {
          console.error('API response is not an array:', response.data);
          setRecipes([]);
        }
      })
      .catch(error => {
        console.error('There was an error fetching the recipes!', error);
        setRecipes([]);
      })
      .finally(() => {
        setLoading(false);
      });
  }, []);

  const handleDiscoverClick = (recipeId) => {
    axios.get(`/api/recipes/${recipeId}`)
      .then(response => {
        setSelectedRecipe(response.data); // Set the selected recipe with etapes included
      })
      .catch(error => {
        console.error('There was an error fetching the recipe details!', error);
      });
  };

  const renderSkeletonCard = () => {
    return (
      <div className="recipe-card skeleton-card">
        <div className="skeleton skeleton-image"></div>
        <div className="recipe-info">
          <div className="recipe-meta skeleton-meta">
            <span className="skeleton skeleton-icon"></span>
            <span className="skeleton skeleton-icon"></span>
            <span className="skeleton skeleton-icon"></span>
          </div>
          <div className="skeleton skeleton-description"></div>
          <div className="skeleton skeleton-button"></div>
        </div>
      </div>
    );
  };

  return (
    <div className="container">
    <Nav onBackClick={() => setSelectedRecipe(null)} />
    {selectedRecipe ? (
      <div className="recipe-details">
        <h2>{selectedRecipe.title}</h2>
        <img src={`http://127.0.0.1:8000/images/${selectedRecipe.image}`} alt={selectedRecipe.title} className="details-image" />
        <div className="recipe-meta">
          <span><img src={clockIcon} alt="Duration" className="icon" /> {selectedRecipe.duration}</span>
          <span><img src={chefIcon} alt="Difficulty" className="icon" /> {selectedRecipe.difficulty}</span>
          <span><img src={walletIcon} alt="Budget" className="icon" /> {selectedRecipe.budget}</span>
        </div>
        <h4 className="ingredients-title">Ingredients</h4>
        <p className="ingredients">{selectedRecipe.ingredients}</p>
        <h4 className="etape-title">{selectedRecipe.etape}</h4>
        {selectedRecipe.etapes.map((etape, index) => (
          <div key={index} className="etape-item">
            <span className="etape-order">{etape.order}</span>
            <h4 className="etape-name">{etape.name}</h4>
            <p className="etape-description">{etape.description}</p>
          </div>
        ))}
        <button onClick={() => setSelectedRecipe(null)} className="back-button">
          Retour aux recettes
        </button>
      </div>
      ) : (
        <div className="recipe-list">
             <h2>Recettes</h2>
             <p className="first-paragraph">Parcourez notre sélection pour découvrir de nouvelles recettes passionnantes que vous pouvez essayer chez vous.</p>
          {loading ? (
            <>
              {renderSkeletonCard()}
              {renderSkeletonCard()}
              {renderSkeletonCard()}
            </>
          ) : (
            recipes.map((recipe) => (
              <div className="recipe-card" key={recipe.id}>
                <img src={`http://127.0.0.1:8000/images/${recipe.image}`} alt={recipe.title} className="recipe-image" />
                <div className="recipe-info">
                  <div className="recipe-meta">
                    <span><img src={clockIcon} alt="Duration" className="icon" /> {recipe.duration}</span>
                    <span><img src={chefIcon} alt="Difficulty" className="icon" /> {recipe.difficulty}</span>
                    <span><img src={walletIcon} alt="Budget" className="icon" /> {recipe.budget}</span>
                  </div>
                  <p className="recipe-description">{recipe.description}</p>
                  <button className="discover-button" onClick={() => handleDiscoverClick(recipe.id)}>
                   Découvrir <i className="fas fa-arrow-right"></i>
                     </button>
                </div>
              </div>
            ))
          )}
        </div>
      )}
    </div>
  );
};

export default HomeRecette;
