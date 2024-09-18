import React from 'react';
import { useNavigate } from 'react-router-dom';
import '../App.css';

const Nav = () => {
  const navigate = useNavigate();

  return (
    <div className="nav">
      {  <a href="#" className="back-button"onClick={() => navigate(-1)} >
      <i className="fas fa-arrow-left arrow"></i>
              </a>}
              
    </div>
  );
};

export default Nav;
