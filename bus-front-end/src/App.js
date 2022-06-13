import React from 'react';
import logo from './logo.svg';
import './App.css';
import HomePage from './components/homepage/HomePage';
import Header from './components/Header'
import {
  BrowserRouter as Router,
  Routes,
  Route,
  Link,
} from "react-router-dom";
import Login from './components/Login';
import MovieSeatPicker from './components/Seats/SeatPicker'
import Home from './components/Home';
import Contact from './components/Contact'


export default function App() {
  const [selected, setSelected] = React.useState(null);
  return (
    
    <Router>
      
      <Routes>
        <Route path="/" element={<Login />} />
        <Route path="/selectsit/:way" element={<MovieSeatPicker setSelected={setSelected} />} />
        <Route path="/searchbuss" element={<HomePage />} />
        <Route path="/contactus" element={<Contact />} />
        <Route path="/searchbus" element={<HomePage />} />
        <Route path="/homepage" element={<Home />} />
        <Route path="/logout" element={<Login />} />
       
      </Routes>
    </Router>
  );

}
