import React from "react";
import useFetch from "../../useFetch";
import { useEffect, useState } from 'react';
import './homepage.css';
import {
    BrowserRouter as Router,
    Routes,
    Route,
    Link,
} from "react-router-dom";
import Header from '../Header'



const HomePage = () => {
    const [cityfrom, setCity] = useState("Bahir Dar");
    const [travel_param, SetTravelSearchParam] = useState({ "from": "Bahir Dar", "to": "Addis Ababa", "t_date": "" });
    const { data: today, isLoading: today_loading, error: today_error } = useFetch('today');
    const { data: routes, isLoading, error } = useFetch('routes');
    const { data: destinations, isLoading: d_isLoading, error: d_error } = useFetch('destinations');
    const { data: departures, isLoading: de_isLoading, error: de_error } = useFetch('departures?' + ((new URLSearchParams({ "cityfrom": cityfrom })).toString()));
    const [selected_date, setSelectedDate] = useState("");
    const { data: ways, isLoading: co_isLoading, error: co_error } = useFetch('travels?' + ((new URLSearchParams(travel_param)).toString()));
    const from = React.createRef();
    const to = React.createRef();
    const date = React.createRef();
    const days = [
        'Sun',
        'Mon',
        'Tue',
        'Wed',
        'Thu',
        'Fri',
        'Sat'
    ];
    const [formData, setFormData] = useState({
        from: "",
        to: "",
        
      });

    function nextSevenDays() {
        let list = [];
        for (let index = 1; index < 8; index++) {
            let now = new Date(today.now);
            now.setDate(now.getDate() + index);
            list.push(now);

        }
        return list;
    }

    const HandleOnSummitEvent = (e) => {
        SetTravelSearchParam({ "from": from.current.value, "to": to.current.value, "t_date": date.current.value });
    };
    function SwapData(event) {
        event.preventDefault();
        let temp = formData.from.current.value;
        setFormData({
          ...formData,
          from: formData.to.current.value,
          to: temp,
        });
      }
      
    return (
        <div className="HomePage">
            <Header/>
            {isLoading && <div>Loading</div>}
            {error && <div>{error}</div>}
            {routes && destinations && today && ways &&
                <div className="col">
                    <div className="d-flex mt-4">
                        <p className="search_bus">Search Bus</p>
                    </div>
                    <div className="col home_content">
                        <div className="row">
                            <div className="col ">
                                <div className="row align-items-center py-0 my-0">
                                    <div className="location"></div>
                                    <div>
                                        <p className="my-0 mx-2 text-disable">From</p>
                                    </div>
                                </div>
                                <div className="row ">
                                    <div className="gap">
                                        <div className="path_point">
                                            <div className="white_dash"></div>
                                            <div className="white_dash"></div>
                                            <div className="white_dash"></div>
                                            <div className="white_dash"></div>
                                            <div className="white_dash"></div>
                                            <div className="white_dash"></div>
                                        </div>
                                    </div>
                                    <div className="col pl-0 mx-2">
                                        <div className="row">
                                            <div className="col-auto">
                                                <select name="From" id="From" className="form-control custom-select" ref={from} onChange={(e) => { setCity(e.target.value) }}>
                                                    {
                                                        destinations.map((city, index) => {
                                                            return <option value={city} key={index}>{city}</option>
                                                        })
                                                    }
                                                </select>
                                            </div>
                                        </div>
                                        <hr className="mb-1 mt-2" />
                                    </div>
                                </div>
                                <div className="row align-items-center ">
                                    <div className="location"></div>
                                    <div >
                                        <p className="my-0 py-0 mx-2 text-disable  ">To</p>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="gap"></div>
                                    <div className="col px-0 mx-2">
                                        <div className="row">
                                            <div className="col-auto">
                                                {departures && <select name="To" id="To" className="form-control custom-select" ref={to}  >
                                                    {
                                                        departures.map((data, index) => {
                                                            return <option value={data.to} key={index}>{data.to}</option>
                                                        })
                                                    }
                                                </select>}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-auto px-0 my-auto">
                                <button className="btn btn-outline-primary">
                                    <i className="fas fa-sort-alt fa-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div className="col my-2">
                        <div className="row justify-content-between">
                            <div className="col home_content">
                                <div className="row">
                                    <div className="col-auto px-0 ">
                                        <div className="location"></div>
                                    </div>
                                    <div className="col px-0 py-0">
                                        <p className="mx-2 diparture text-disable">Departure Date</p>
                                        <p className="mx-2 text-secondary date font-size-large">{selected_date}</p>
                                    </div>
                                    <div className="col-auto px-0">
                                        <select name="D_date" id="D_date" className="form-control custom-select" ref={date} onChange={(e) => { setSelectedDate((new Date(e.target.value)).toDateString()) }}>
                                            {
                                                nextSevenDays().map((day, index) => {
                                                    return <option value={day.toISOString()} key={index} >{days[day.getDay()]}</option>
                                                })
                                            }
                                        </select>
                                    </div>
                                    <div className="col-auto px-0 ml-1">
                                        <button className="btn btn-outline-primary " onClick={() => { HandleOnSummitEvent() }}>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="company_container">
                        {/* {console.log(ways)} */}
                        {ways.map((way, index) => {
                            return (
                                <div className="col home_content company" key={index}>
                                    <div className="row">
                                        <div className="col mr-2 px-0">
                                            <div className="company_image">
                                                <img src={way.company.icon} alt="company logo" />
                                            </div>
                                            <p className="my-0 font-size-large font-weight-bold">{way.company.name + " Bus"}</p>
                                        </div>
                                        <div className="col-8 ">
                                            <div className="row">
                                                <div className="col pr-0">
                                                    <div className="row align-items-center py-0 my-0">
                                                        <div className="location"></div>
                                                        <div className="port_container px-0">
                                                            <p className="my-0 ml-2 single-line">{way.route.from}</p>
                                                        </div>
                                                    </div>
                                                    <div className="row ">
                                                        <div className="gap">
                                                            <div className="path_point">
                                                                <div className="white_dash"></div>
                                                                <div className="white_dash"></div>
                                                                <div className="white_dash"></div>
                                                                <div className="white_dash"></div>
                                                                <div className="white_dash"></div>
                                                                <div className="white_dash"></div>
                                                            </div>
                                                        </div>
                                                        <div className="col px-0">
                                                            <p className="mb-auto mx-2 text-disable">4:00 AM</p>
                                                        </div>
                                                    </div>
                                                    <div className="row ">
                                                        <div className="location"></div>
                                                        <div className="port_container px-0 ">
                                                            <p className="my-0 py-0 ml-2 diparture_text single-line">{way.route.to}</p>
                                                            <p className="my-0 py-0 mx-2 text-disable ">2:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="row">
                                                <div className="gap"></div>
                                                <div className="col px-0">
                                                    <p className="mx-2 date font-size-x-large">Price</p>
                                                    <p className="mx-2 " id="price">{way.price + " Birr"}</p>
                                                </div>
                                                <div className="col-auto px-0 my-auto">
                                                    <Link className="btn btn-outline-primary " to={`/selectsit/${way.id}`}>
                                                        Book Now
                                                    </Link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            );
                        })}
                    </div>
                </div>
            }
        </div >
    );
}


export default HomePage;