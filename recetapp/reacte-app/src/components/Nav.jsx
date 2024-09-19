import React from 'react';
import { useNavigate, useLocation } from 'react-router-dom';
import '../App.css';

const Nav = ({ onBackClick }) => { // {{ edit_1 }}
  const location = useLocation();

  return (
    <div className="nav">
      {location.pathname !== '/' && ( // Only show the back button if not on the home page
        <button className="back-button" onClick={onBackClick}>
          <i className="fas fa-arrow-left arrow"></i>
        </button>
      )}
    </div>
  );
};

export default Nav;
