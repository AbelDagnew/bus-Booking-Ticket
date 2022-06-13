import React, { Component } from "react";
import SeatPicker from "react-seat-picker";
import "./seats.css";
import Header from '../Header'
import StripeCheckout from 'react-stripe-checkout';
export default class App extends Component {
  
  addSeatCallback = ({ row, number, id }, addCb) => {
    this.props.setSelected(`Added seat ${number}, row ${row}, id ${id}`);
    const newTooltip = `tooltip for id-${id} added by callback`;
    addCb(row, number, id, newTooltip);
  };

  addSeatCallbackContinousCase = (
    { row, number, id },
    addCb,
    params,
    removeCb
  ) => {
    if (removeCb) {
      removeCb(params.row, params.number);
    }
    this.props.setSelected(`Added seat ${number}, row ${row}, id ${id}`);
    const newTooltip = `tooltip for id-${id} added by callback`;
    addCb(row, number, id, newTooltip);
  };

  removeSeatCallback = ({ row, number, id }, removeCb) => {
    const newTooltip = ["A", "B", "C"].includes(row) ? null : "";
    removeCb(row, number, newTooltip);
  };
  
  render() {
    const addSeatCallback = ({ row, number, id }, addCb) => {
      this.props.setSelected(`Added seat ${number}, row ${row}, id ${id}`);
      const newTooltip = `tooltip for id-${id} added by callback`;
      addCb(row, number, id, newTooltip);
    };
   const onToken = (token) => {
      fetch('/save-stripe-token', {
        method: 'POST',
        body: JSON.stringify(token),
      }).then(response => {
        response.json().then(data => {
          alert(`We are in business, ${data.email}`);
        });
      });
    }

    const rows = [
      [
        { id: 1, number: 1, isSelected: true, tooltip: "Reserved by you" },
        { id: 2, number: 2, tooltip: "Cost: 800Birr" },
        null,
        null,
        { id: 17, number: 17 },
        { id: 18, number: 18 }
      
       
      ],
      [
        {
          id: 3,
          number: "3",
          isReserved: true,
          orientation: "east",
          tooltip: "Reserved by Rogger"
        },
        { id: 4, number: "4", orientation: "west" },
        null,
        null,
        { id: 19, number: 19, tooltip: "Cost: 900 birr" },
        { id: 20, number: 20 },
       
      ],
      [
        { id: 5, number: 5 },
        { id: 6, number: 6 },
        null,
        null,
        { id: 21, number: 21, orientation: "east" },
        { id: 22, number: "22", orientation: "west" },
        
      ],
      [
        {
          id: 7,
          number: 7,
          isReserved: true,
          tooltip: "Reserved by Matthias Nadler"
        },
        { id: 8, number: 8, isReserved: true },
       
        
        null,
        null,
        { id: 23, number: 23 },
        { id: 24, number: 24 }
      ],
      [
        
       
        { id: 9, number: "9", isReserved: true, orientation: "east" },
        { id: 10, number: "10", orientation: "west" },
        null,
        null,
        { id: 25, number: 25, isReserved: true },
        { id: 26, number: 26, orientation: "east" },
        
       
      ],
      [
        
        { id: 11, number: 11 },
        { id: 12, number: 12 },
        null,
        null,
        { id: 27, number: "27", isReserved: true },
        { id: 28, number: "28", orientation: "west" },
      ],
      [
        
        { id: 13, number: 13 },
        { id: 14, number: 14 },
        null,
        null,
        { id: 29, number: 29, tooltip: "Cost: 700 birr" },
        { id: 30, number: 30, isReserved: true }
      ],
      [ 
        
        { id: 15, number: 15, isReserved: true, orientation: "east" },
        { id: 16, number: "16", orientation: "west" },
        null,
        null,
        { id: 31, number: 31, tooltip: "Cost: 700 birr" },
        { id: 31, number: 31, tooltip: "Cost: 700 birr" },
      ]
    ];
    const handleSubmit = (event) => {
      event.preventDefault();
      alert("Thank You For Contacting us We will reply Soon");
    }
    return (
      <div>
        <Header/>
        <h1 style={{ color:"blue" }}>Seat Picker</h1>
        <div style={{ marginTop: "3rem" , border:"1px solid gray",width:"25rem",borderRadius:"25px",position:"relative",left:"25rem", backgroundColor:"rgb(18, 87, 177)"}}>
          <SeatPicker
            addSeatCallback={this.addSeatCallback.bind(this)}
            removeSeatCallback={this.removeSeatCallback.bind(this)}
            rows={rows}
            maxReservableSeats={3}
            alpha
            visible
            selectedByDefault
            loading={false}
            tooltipProps={{ multiline: true }}
          />
        </div>
        <div style={{ marginTop: "30px" }}></div>
        <div className="home_content mb-2">
                        <div className="row justify-content-around ">
                            <div className="col-auto px-0">
                                <div className="text-status my-0">Ticket Price</div>
                                <div className="price my-0">187 Birr</div>
                            </div>
                            <div className="col-auto px-0">
                                <div className="text-status my-0">Total Price</div>
                                <div className="price my-0">374 Birr</div>
                            </div>
                            <div className="col-auto px-0">
                            <div className="text-status my-0">Selected Seat</div>
                               <h2>{this.props.setSelected.number}</h2>
                            </div>
                        </div>
                        <div className="horizontal_scrollable my-1">
                            <div className="peyment_api_container">
                                <div className="peyment_api">
                                    <div className="cheack-out">
                                        <i className="fas fa-check-circle text-success"></i>
                                    </div>
                                    <img src="https://www.thunes.com/wp-content/uploads/2021/11/telebirr-logo.png" alt="telebirr" />
                                </div>
                                <div className="peyment_api">
                                    <div className="cheack-out d-none">
                                        <i className="fas fa-check-circle text-success"></i>
                                    </div>
                                    <img src="https://play-lh.googleusercontent.com/rcSKabjkP2GfX1_I_VXBfhQIPdn_HPXj5kbkDoL4cu5lpvcqPsGmCqfqxaRrSI9h5_A" alt="cbe Birr" />
                                </div>
                                <div className="peyment_api">
                                    <div className="cheack-out d-none">
                                        <i className="fas fa-check-circle text-success"></i>
                                    </div>
                                    <img src="https://dashenbanksc.com/wp-content/uploads/Amole-Payment-Services-Dashen-Bank-1.jpg" alt="Amole" />
                                </div>
                            </div>
                        </div>
                        <div className="row justify-content-between my-1">
                            <div className="col-auto px-2">
                                <div className="text-status my-0">Passenger Name</div>
                                <div className="price my-0">Abel Tesfaye</div>
                            </div>
                            <div className="col-auto px-2 d-flex">
                            <button style={{ border:"none"}} onClick={onToken}><StripeCheckout
                    token={onToken}
                    text="order now"
                    
                    stripeKey="pk_test_51K6yIdAy7KDVZHoTFOdUB6sRjyJBNhvqKha7UAcn5cKmyy1zxyQlF7nCdkVvvpqCm52VRoHZsPbZhEJlVXNTnu7N00paEBKEL2"
                    className="btn btn-outline-primary my-auto font-weight-bold" /></button>
                            </div>
                        </div>
                    </div>
      </div>
    );
  }
}
