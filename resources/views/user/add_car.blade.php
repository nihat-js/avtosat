<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Findal Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"
      rel="stylesheet"
    /> -->

    <link rel="stylesheet" href="css/app.css" />
    <!-- <link rel="stylesheet" href="css/output.css" /> -->
  </head>
  <body>
    @include("partials.header")
    <main>
      <div class="container-small">
        <h1 class="car-details-page-title">Yeni maşın əlavə et</h1>
        <form
          action=""
          method="POST"
          enctype="multipart/form-data"
          class="card add-new-car-form"
        >
          <div class="form-content">
            <div class="form-details">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Maker</label>
                    <select>
                      <option value="">Maker</option>
                      <option value="bmw">BMW</option>
                      <option value="lexus">Lexus</option>
                      <option value="mercedes">Mercedes</option>
                    </select>
                    <p class="error-message">This field is required</p>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Model</label>
                    <select>
                      <option value="">Model</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Year</label>
                    <select>
                      <option value="">Year</option>
                      <option value="2024">2024</option>
                      <option value="2023">2023</option>
                      <option value="2022">2022</option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>
                      <option value="2019">2019</option>
                      <option value="2018">2018</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                      <option value="1996">1996</option>
                      <option value="1995">1995</option>
                      <option value="1994">1994</option>
                      <option value="1993">1993</option>
                      <option value="1992">1992</option>
                      <option value="1991">1991</option>
                      <option value="1990">1990</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Car Type</label>
                <div class="row">
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="car_type" value="sedan" />
                      Sedan
                    </label>
                  </div>

                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="car_type" value="hatchback" />
                      Hatchback
                    </label>
                  </div>

                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="car_type" value="suv" />
                      SUV (Sport Utility Vehicle)
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" placeholder="Price" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Vin Code</label>
                    <input placeholder="Vin Code" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Mileage (ml)</label>
                    <input placeholder="Mileage" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Fuel Type</label>
                <div class="row">
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="fuel_type" value="gasoline" />
                      Gasoline
                    </label>
                  </div>
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="fuel_type" value="diesel" />
                      Diesel
                    </label>
                  </div>
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="fuel_type" value="electric" />
                      Electric
                    </label>
                  </div>
                  <div class="col">
                    <label class="inline-radio">
                      <input type="radio" name="fuel_type" value="hybrid" />
                      Hybrid
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>State/Region</label>
                    <select>
                      <option value="">State/Region</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>City</label>
                    <select>
                      <option value="">City</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Address</label>
                    <input placeholder="Address" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Phone</label>
                    <input placeholder="Phone" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label class="checkbox">
                      <input
                        type="checkbox"
                        name="air_conditioning"
                        value="1"
                      />
                      Air Conditioning
                    </label>

                    <label class="checkbox">
                      <input type="checkbox" name="power_windows" value="1" />
                      Power Windows
                    </label>

                    <label class="checkbox">
                      <input
                        type="checkbox"
                        name="power_door_locks"
                        value="1"
                      />
                      Power Door Locks
                    </label>

                    <label class="checkbox">
                      <input type="checkbox" name="abs" value="1" />
                      ABS
                    </label>

                    <label class="checkbox">
                      <input type="checkbox" name="cruise_control" value="1" />
                      Cruise Control
                    </label>

                    <label class="checkbox">
                      <input
                        type="checkbox"
                        name="bluetooth_connectivity"
                        value="1"
                      />
                      Bluetooth Connectivity
                    </label>
                  </div>
                  <div class="col">
                    <label class="checkbox">
                      <input type="checkbox" name="remote_start" value="1" />
                      Remote Start
                    </label>

                    <label class="checkbox">
                      <input type="checkbox" name="gps_navigation" value="1" />
                      GPS Navigation System
                    </label>

                    <label class="checkbox">
                      <input type="checkbox" name="heated_seats" value="1" />
                      Heated Seats
                    </label>

                    <label class="checkbox">
                      <input type="checkbox" name="climate_control" value="1" />
                      Climate Control
                    </label>

                    <label class="checkbox">
                      <input
                        type="checkbox"
                        name="rear_parking_sensors"
                        value="1"
                      />
                      Rear Parking Sensors
                    </label>

                    <label class="checkbox">
                      <input type="checkbox" name="leather_seats" value="1" />
                      Leather Seats
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Detailed Description</label>
                <textarea rows="10"></textarea>
              </div>
              <div class="form-group">
                <label class="checkbox">
                  <input type="checkbox" name="published" />
                  Published
                </label>
              </div>
            </div>
            <div class="form-images">
              <div class="form-image-upload">
                <div class="upload-placeholder">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 48px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                </div>
                <input id="carFormImageUpload" type="file" multiple />
              </div>
              <div id="imagePreviews" class="car-form-images"></div>
            </div>
          </div>
          <div class="p-medium" style="width: 100%">
            <div class="flex justify-end gap-1">
              <button type="button" class="btn btn-default">Reset</button>
              <button class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </main>

    <footer></footer>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.js"
      integrity="sha512-XJgPMFq31Ren4pKVQgeD+0JTDzn0IwS1802sc+QTZckE6rny7AN2HLReq6Yamwpd2hFe5nJJGZLvPStWFv5Kww=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="js/app.js"></script>
  </body>
</html>
