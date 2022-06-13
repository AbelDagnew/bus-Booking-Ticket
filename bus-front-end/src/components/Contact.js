import { useState } from 'react';
import ReactDOM from 'react-dom/client';
import Header from './Header'

export default function Contact() {
  

  const handleSubmit = (event) => {
    event.preventDefault();
    alert("Thank You For Contacting us We will reply Soon");
  }

  return (
      
    <div>
                    <Header/>

        
        <form  onSubmit={handleSubmit}>
        <div class="contact-form">
           <div class="form-element">
           <h2>Contact Us</h2>
      <label>Enter Full Name:   
      <input 
        type="text" 
        name="username" 
        
        
      />
      </label><br/>
      <label>Email Address:   
      <input 
        type="text" 
        name="username" 
        
        
      />
      </label><br/>
      <label>Write your Feedback:
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

      </label><br/>
        <input type="submit" />
           </div>
        </div>
    </form>
    
    </div>
  )
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<Contact />)