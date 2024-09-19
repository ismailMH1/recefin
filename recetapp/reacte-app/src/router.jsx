import { createBrowserRouter } from 'react-router-dom';
import HomeRecette from './views/homerecette.jsx'; // Ensure this path is correct

const router = createBrowserRouter([
  {
    path: '/', // Route for home page
    element: <HomeRecette />,
  },
  {
    path: '/:recipeId', // Route for recipe details
    element: <HomeRecette />,
  },
]);

export default router;
