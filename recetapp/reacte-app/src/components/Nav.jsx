import React from 'react';
import { useNavigate } from 'react-router-dom';
import '../App.css';

const Nav = () => {
  const navigate = useNavigate();

  return (
    <div className="nav">
      <button className="back-button" onClick={() => navigate(-1)}>
        <i className="fas fa-arrow-right arrow"></i>
      </button>
    </div>
  );
};

export default Nav;
