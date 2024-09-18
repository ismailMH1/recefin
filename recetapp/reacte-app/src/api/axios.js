import axios from 'axios';

const instance = axios.create({
  baseURL: 'http://localhost:8000', // Adjust the base URL as needed
  headers: {
    'Content-Type': 'application/json',
  },
});

export default instance;