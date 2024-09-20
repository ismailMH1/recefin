import React from 'react';
import { useNavigate, useLocation } from 'react-router-dom';
import '../App.css';

const Nav = ({ onBackClick }) => {
  const location = useLocation();
  const navigate = useNavigate();

  const handleBack = () => {
    if (onBackClick) {
      onBackClick();
    } else {
      navigate(-1); 
    }
  };

  return (
    <div className="nav">
      <button className="back-button" onClick={handleBack}>
        <i className="fas fa-arrow-left arrow"></i>
      </button>
    </div>
  );
};

export default Nav;
