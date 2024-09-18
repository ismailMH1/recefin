// src/pages/HomeRecette.js
import React, { useEffect, useState } from 'react';
import axios from '../api/axios'; 
import '../App.css';
import Nav from '../components/Nav';
import walletIcon from '../assets/wallet.svg';
import clockIcon from '../assets/horloge.svg';
import chefIcon from '../assets/chef.svg';


const HomeRecette = () => {
  const [recipes, setRecipes] = useState([]);

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
      });
  }, []);

  return (
    <div className="container">
      <Nav />
      <h1>Recettes</h1>
      <p>Parcourez notre sélection pour découvrir de nouvelles recettes passionnantes que vous pouvez essayer chez vous.</p>
          <div className="recipe-list">
        {recipes.map((recipe) => (
          <div className="recipe-card" key={recipe.id}>
            <img src={`http://127.0.0.1:8000/images/${recipe.image}`}  alt={recipe.title} className="recipe-image" />
            <div className="recipe-info">
            <div className="recipe-meta">
  <span><img src={clockIcon} alt="Duration" className="icon" /> {recipe.duration}</span>
  <span><img src={chefIcon} alt="Difficulty" className="icon" /> {recipe.difficulty}</span>
  <span><img src={walletIcon} alt="Budget" className="icon" /> {recipe.budget}</span>
</div>
              <p className="recipe-description">{recipe.description}</p>
              <a href={`/recipe/${recipe.id}`} className="discover-button">
                Découvrir <i className="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};

export default HomeRecette;
