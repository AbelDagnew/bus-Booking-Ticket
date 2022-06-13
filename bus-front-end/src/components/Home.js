import React from 'react'
import { Link } from "react-router-dom";
import BusCompany from './BusCompany'

// import Products from './Products'
import Header from './Header'

export default function Home() {
    return (
        <div class="homebg">
            <Header/>
            <div className="hero">
            
            <div class="cardd bg-dark text-white">
                <img src="/Assets/bg.jpg" class="card-img" alt="Background" width="100%" height="500px" />
                <div class="card-img-overlay d-flex flex-column  justify-content-top">
                    <div className="container">
                    
                        <Link to="/searchbuss"><button  type="button" class="btn btn-primary"><p class="findbus-btn">Find Bus</p></button></Link>
                        
                    </div>
                </div>
            </div>
        <h2 class="bus-comp">Bus Companies</h2>
      <BusCompany/>  
        
        </div>
        </div>
    )
}