import React from 'react'
import Rating from '@mui/material/Rating';
import Stack from '@mui/material/Stack';
export default function BusCompany() {
    return (
      <div class="bus-container">
       
        <div class="abay">
  
  <div className="col-md-3 mb-4">
      <div className="card h-100 text-center p-4" >
      <img src="/Assets/selam.jpg" class="card-img" alt="Background" width="100%" height="500px" />
          <div className="card-body">
              <h5 className="card-title-top ">Selam Bus</h5>
              <Stack spacing={1}>
                  <Rating name="half-rating" defaultValue={(8 / 2) + 0.8} precision={0.5} readOnly />
              </Stack>
              <p className="card-text-top lead fw-bold">Selam Bus transport Plc is an Intercity bus company which operates in Ethiopia as well as neighboring countries.

The company is operated by highly qualified professionals in various disciplines and many years of experience in the transport sector.

This company is all about making long distance journey safe, dependable, comfortable and fitting with a very hospitable service for a reasonable price.</p>
          </div>
      </div>
  </div>
</div>
<div class="selam">
  
                            <div className="col-md-3 mb-4">
                                <div className="card h-100 text-center p-4" >
                                <img src="/Assets/abay.jpg" class="card-img" alt="Background" width="100%" height="500px" />
                                    <div className="card-body">
                                        <h5 className="card-title-top ">Abay Bus</h5>
                                        <Stack spacing={1}>
                                            <Rating name="half-rating" defaultValue={(5 / 2) + 0.8} precision={0.5} readOnly />
                                        </Stack>
                                        <p className="card-text-top lead fw-bold">Abay Bus transport Plc is an Intercity bus company which operates in Ethiopia as well as neighboring countries.

The company is operated by highly qualified professionals in various disciplines and many years of experience in the transport sector.

This company is all about making long distance journey safe, dependable, comfortable and fitting with a very hospitable service for a reasonable price.</p>
                                    </div>
                                </div>
                            </div>
      </div>
      <div class="abay">
  
  <div className="col-md-3 mb-4">
      <div className="card h-100 text-center p-4" >
      <img src="/Assets/folden.jpg" class="card-img" alt="Background" width="100%" height="500px" />
          <div className="card-body">
              <h5 className="card-title-top ">Golden Bus</h5>
              <Stack spacing={1}>
                  <Rating name="half-rating" defaultValue={(3 / 2) + 0.8} precision={0.5} readOnly />
              </Stack>
              <p className="card-text-top lead fw-bold">Golden Bus transport Plc is an Intercity bus company which operates in Ethiopia as well as neighboring countries.

The company is operated by highly qualified professionals in various disciplines and many years of experience in the transport sector.

This company is all about making long distance journey safe, dependable, comfortable and fitting with a very hospitable service for a reasonable price.</p>
          </div>
      </div>
  </div>
</div>

      </div>
    )
}