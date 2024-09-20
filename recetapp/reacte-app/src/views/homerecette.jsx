import React, { useEffect, useState } from 'react';
import axios from '../api/axios';
import '../App.css';
import Nav from '../components/Nav';
import walletIcon from '../assets/wallet.svg';
import clockIcon from '../assets/horloge.svg';
import chefIcon from '../assets/chef.svg';
import { useParams, useNavigate } from 'react-router-dom';
import stepIcon from '../assets/steps.svg'; // Add this line at the top

const HomeRecette = () => {
  const [recipes, setRecipes] = useState([]);
  const [loading, setLoading] = useState(true);
  const [selectedRecipe, setSelectedRecipe] = useState(null);
  const { recipeId } = useParams();
  const navigate = useNavigate();

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

    // Fetch the selected recipe details if recipeId exists
    if (recipeId) {
      axios.get(`/api/recipes/${recipeId}`)
        .then(response => {
          setSelectedRecipe(response.data);
        })
        .catch(error => {
          console.error('There was an error fetching the recipe details!', error);
        });
    } else {
      setSelectedRecipe(null);
    }
  }, [recipeId]);

  const handleBackClick = () => {
    setSelectedRecipe(null);
    navigate('/');
  };

  const renderSkeletonCard = () => (
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

  return (
    <div className="container">
      <Nav onBackClick={handleBackClick} />
      {selectedRecipe ? (
        <div className="recipe-details">
          <h2 className='details-title'>{selectedRecipe.title}</h2>
          <img src={`http://127.0.0.1:8000/images/${selectedRecipe.image}`} alt={selectedRecipe.title} className="details-image" />
          <div className="recipe-meta-details">
            <span><img src={clockIcon} alt="Duration" className="icon" /> {selectedRecipe.duration}</span>
            <span><img src={chefIcon} alt="Difficulty" className="icon" /> {selectedRecipe.difficulty}</span>
            <span><img src={walletIcon} alt="Budget" className="icon" /> {selectedRecipe.budget}</span>
          </div>
          <h4 className="ingredients-title">Ingrédients</h4>
          <p className="ingredients">{selectedRecipe.ingredients}</p>
          <h4 className="etape-title">{selectedRecipe.etape}</h4>
          {selectedRecipe.etapes.map((etape, index) => (
         <div key={index} className="etape-item">
         <div className="etape-left">
             <img src={stepIcon} alt="Step Icon" className="etape-icon" />
         </div>
         <div className="etape-right">
             <h4 className="etape-name">{etape.name}</h4>
             <p className="etape-description">{etape.description}</p>
         </div>
     </div>
          ))}
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
                  <button className="discover-button" onClick={() => navigate(`/${recipe.id}`)}>
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
