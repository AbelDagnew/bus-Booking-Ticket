import React, { useState } from "react";
import { Link } from "react-router-dom";
import Footer from './Footer'

// import user from "../images/user.svg";
// import bus from "../images/bus-side-view-white.svg";
// import arrow from "../images/arrow-down.svg";

export default function Header() {
  const [openDropdown, setOpenDropdown] = useState(false);
  return (
    <div>
      <div className="header-box">
     <Link className="head-link" to='/homepage'><p>Ethio Bus Booking</p></Link>
     <Link className="head-linkk" to='/homepage'><p>Home</p></Link>
     <Link className="head-linkk" to='/searchbus'><p>Find Bus</p></Link>
     <Link className="head-linkk" to='/contactus'><p>Contact us</p></Link>
      <div className="header-user">
        <button type="button"
        class="btn btn-primary"
          className="header-user-box"
          onClick={() => setOpenDropdown(!openDropdown)}
        >
         My Account
        </button>
        {openDropdown ? (
          <ul className="header-dropdown">
             <li>
            <Link className="header-dropdown-button" to="">Profile</Link>
            </li>
            <li>
            <Link className="header-dropdown-button" to="/logout">Sign Out</Link>
            </li>
            
          </ul>
        ) : (
          <div></div>
        )}
      </div>
      
    </div>
    
    </div>
  );
}
