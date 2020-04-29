<link href='<?= base_url('/assets/plugins/jvectormap/jquery-jvectormap-2.0.5.css') ?>'>
<style>
  #chart-bar {
    position: relative;
    margin-top: -38px;
  }
</style>
<div id="wrapper">
  <div class="content-area">
    <div class="container-fluid">
      <div class="main row">
        <div class="d-flex flex-wrap w-100 bg-white rounded mt-2 shadow-xs p-3">
          <!-- Orders -->
          <div class="col-md-3 border-right">
            <div class="d-flex w-100 flex-column box2">
              <div class="d-flex justify-content-between">
                <span class="d-flex">
                  <img height="35" class="mr-3" src="http://127.0.0.1:5500/app/Views/admin/pages/dashboard/clip.svg">
                  <span class="d-flex mt-2">
                    <h3 id="online" class="mb-1 mr-2"><?= $total_users ?></h3>
                    <h6>Orders</h6>
                  </span>
                </span>
                <div class="mt-2">
                  <small class="">Last 7 days</small>
                  <small class="d-flex ml-3">
                    <span class="text-success">
                      <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    44
                  </small>
                </div>
              </div>
              <div class="btn-group mt-2">
                <span>
                  <small class="mb-0 ml-1 text-secondary">
                    <ion-icon name="alarm"></ion-icon>
                  </small>
                  <small class="mb-0">53 Today</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-success">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </small>
                  <small class="mb-0">534 Done</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-warning">
                    <ion-icon name="hourglass"></ion-icon>
                  </small>
                  <small class="mb-0">20 Pending</small>
                </span>
              </div>
            </div>
          </div>
          <!-- users -->
          <div class="col-md-3 border-right">
            <div class="d-flex w-100 flex-column box2">
              <div class="d-flex justify-content-between">
                <span class="d-flex">
                  <img height="35" class="mr-3" src="http://127.0.0.1:5500/app/Views/admin/pages/dashboard/users.svg">
                  <span class="d-flex mt-2">
                    <h3 id="online" class="mb-1 mr-2"><?= $total_users ?></h3>
                    <h6>Users</h6>
                  </span>
                </span>
                <div class="mt-2">
                  <small class="">Last 7 days</small>
                  <small class="d-flex ml-3">
                    <span class="text-success">
                      <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    44
                  </small>
                </div>
              </div>
              <div class="btn-group mt-2">
                <span>
                  <small class="mb-0 ml-1 text-secondary">
                    <ion-icon name="alarm"></ion-icon>
                  </small>
                  <small class="mb-0">53 today</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-success">
                    <ion-icon name="ellipse"></ion-icon>
                  </small>
                  <small class="mb-0">534 Online</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-secondary">
                    <ion-icon name="ellipse"></ion-icon>
                  </small>
                  <small class="mb-0">20 Offline</small>
                </span>
              </div>
            </div>
          </div>
          <!-- Products -->
          <div class="col-md-3 border-right">
            <div class="d-flex w-100 flex-column box2">
              <div class="d-flex justify-content-between">
                <span class="d-flex">
                  <img height="35" class="mr-3" src="http://127.0.0.1:5500/app/Views/admin/pages/dashboard/orders.svg">
                  <span class="d-flex mt-2">
                    <h3 id="online" class="mb-1 mr-2"><?= $total_products ?></h3>
                    <h6>Producsts</h6>
                  </span>
                </span>
                <div class="mt-2">
                  <small class="">Last 7 days</small>
                  <small class="d-flex ml-3">
                    <span class="text-danger">
                      <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    44
                  </small>
                </div>
              </div>
              <div class="btn-group mt-2">
                <span>
                  <small class="mb-0 ml-1 text-secondary">
                    <ion-icon name="alarm"></ion-icon>
                  </small>
                  <small class="mb-0">53 Today</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-success">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </small>
                  <small class="mb-0">534 Active</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-warning">
                    <ion-icon name="hourglass"></ion-icon>
                  </small>
                  <small class="mb-0">20 Pending</small>
                </span>
              </div>
            </div>
          </div>
          <!-- Messages -->
          <div class="col-md-3 border-right">
            <div class="d-flex w-100 flex-column box2">
              <div class="d-flex justify-content-between">
                <span class="d-flex">
                  <img height="35" class="mr-3" src="http://127.0.0.1:5500/app/Views/admin/pages/dashboard/messages.svg">
                  <span class="d-flex mt-2">
                    <h3 id="online" class="mb-1 mr-2"><?= $total_products ?></h3>
                    <h6>Messages</h6>
                  </span>
                </span>
                <div class="mt-2">
                  <small class="">Last 7 days</small>
                  <small class="d-flex ml-3">
                    <span class="text-danger">
                      <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    44
                  </small>
                </div>
              </div>
              <div class="btn-group mt-2">
                <span>
                  <small class="mb-0 ml-1 text-secondary">
                    <ion-icon name="alarm"></ion-icon>
                  </small>
                  <small class="mb-0">53 Today</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-success">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </small>
                  <small class="mb-0">534 Read</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-warning">
                    <ion-icon name="hourglass"></ion-icon>
                  </small>
                  <small class="mb-0">20 Un Read</small>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-4 bg-white rounded">
          <ul class="nav nav-pills mb-3 ml-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Orders</a>
            </li>
          </ul>
          <div class="tab-content w-100" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div id="wrapper">
                <div id="chart-area">
                </div>
                <div id="chart-bar">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
          </div>
        </div>
        <div class="col-md-4 mt-4 pr-0">
          <div class="bg-white rounded p-2">
            <h6>Realtime</h6>
            <p class="d-flex"><span class="dot"></span>Updating live</p>
            <hr>
            <div class="col-12">
              <h6>4039</h6>
              <p>views . Last 48 hours</p>
              <div id="chart-5"> </div>
            </div>
            <hr>
            <div class="col-12">
              <h6>2324</h6>
              <p>Online users . Last 48 hours</p>
              <div id="chart-6" style="min-height: 35px;">
                <table>
                  <caption>Statement Summary</caption>
                  <thead>
                    <tr>
                      <th scope="col">Account</th>
                      <th scope="col">Due Date</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Period</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-label="Account">Visa - 3412</td>
                      <td data-label="Due Date">04/01/2016</td>
                      <td data-label="Amount">$1,190</td>
                      <td data-label="Period">03/01/2016 - 03/31/2016</td>
                    </tr>
                    <tr>
                      <td scope="row" data-label="Account">Visa - 6076</td>
                      <td data-label="Due Date">03/01/2016</td>
                      <td data-label="Amount">$2,443</td>
                      <td data-label="Period">02/01/2016 - 02/29/2016</td>
                    </tr>
                    <tr>
                      <td scope="row" data-label="Account">Corporate AMEX</td>
                      <td data-label="Due Date">03/01/2016</td>
                      <td data-label="Amount">$1,181</td>
                      <td data-label="Period">02/01/2016 - 02/29/2016</td>
                    </tr>
                    <tr>
                      <td scope="row" data-label="Acount">Visa - 3412</td>
                      <td data-label="Due Date">02/01/2016</td>
                      <td data-label="Amount">$842</td>
                      <td data-label="Period">01/01/2016 - 01/31/2016</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        <div class="d-flex w-100 flex-wrap mt-4">
          <div class="col-md-8 bg-white rounded">

            <div id="map" style="width: 100%; height: 350px"></div>

          </div>
          <div class="col-md-4 bg-white">

            <div id="radialBarBottom"></div>

          </div>
        </div>
        <div class="col-md-12 mt-4 bg-white">
          <table id="example" class="display" style="width: 100%;">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
              </tr>
              <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
              </tr>
              <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
              </tr>
              <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
              </tr>
              <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
              </tr>
              <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
              </tr>
              <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
              </tr>
              <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
              </tr>
              <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
              </tr>
              <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
              </tr>
              <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
              </tr>
              <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
              </tr>
              <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
              </tr>
              <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
              </tr>
              <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
              </tr>
              <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
              </tr>
              <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
              </tr>
              <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
              </tr>
              <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sydney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
              </tr>
              <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
              </tr>
              <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
              </tr>
              <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
              </tr>
              <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
              </tr>
              <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
              </tr>
              <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
              </tr>
              <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sydney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
              </tr>
              <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
              </tr>
              <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
              </tr>
              <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
              </tr>
              <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
              </tr>
              <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
              </tr>
              <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
              </tr>
              <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
              </tr>
              <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
              </tr>
              <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
              </tr>
              <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
              </tr>
              <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
              </tr>
              <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
              </tr>
              <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
              </tr>
              <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
              </tr>
              <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
              </tr>
              <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
              </tr>
              <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
              </tr>
              <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
              </tr>
              <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
              </tr>
              <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
              </tr>
              <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
              </tr>
              <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
              </tr>
              <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
              </tr>
              <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script src='<?= base_url('/assets/plugins/jvectormap/jquery-jvectormap-2.0.5.min.js') ?>'></script>
<script src='https://jvectormap.com/js/jquery-jvectormap-world-mill.js'></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script>
  var data = generateDayWiseTimeSeries(new Date("22 Apr 2017").getTime(), 115, {
    min: 30,
    max: 90
  });
  var options1 = {
    chart: {
      id: "chart2",
      type: "area",
      height: 230,
      foreColor: "#ccc",
      toolbar: {
        autoSelected: "pan",
        show: false
      }
    },
    colors: ["#0F0F0F"],
    stroke: {
      width: 3
    },
    grid: {
      borderColor: "#555",
      clipMarkers: false,
      yaxis: {
        lines: {
          show: false
        }
      }
    },
    dataLabels: {
      enabled: false
    },
    fill: {
      gradient: {
        enabled: true,
        opacityFrom: 0.55,
        opacityTo: 0
      }
    },
    markers: {
      size: 5,
      colors: ["#a5a8a9"],
      strokeColor: "#0F0F0F",
      strokeWidth: 3
    },
    series: [{
      data: data
    }],
    tooltip: {
      theme: "dark"
    },
    xaxis: {
      type: "datetime"
    },
    yaxis: {
      min: 0,
      tickAmount: 4
    }
  };

  var chart1 = new ApexCharts(document.querySelector("#chart-area"), options1);

  chart1.render();

  var options2 = {
    chart: {
      id: "chart1",
      height: 130,
      type: "bar",
      foreColor: "#ccc",
      brush: {
        target: "chart2",
        enabled: true
      },
      selection: {
        enabled: true,
        fill: {
          color: "#fff",
          opacity: 0.4
        },
        xaxis: {
          min: new Date("27 Jul 2017 10:00:00").getTime(),
          max: new Date("14 Aug 2017 10:00:00").getTime()
        }
      }
    },
    colors: ["#0F0F0F"],
    series: [{
      data: data
    }],
    stroke: {
      width: 2
    },
    grid: {
      borderColor: "#444"
    },
    markers: {
      size: 0
    },
    xaxis: {
      type: "datetime",
      tooltip: {
        enabled: false
      }
    },
    yaxis: {
      tickAmount: 2
    }
  };

  var chart2 = new ApexCharts(document.querySelector("#chart-bar"), options2);

  chart2.render();

  function generateDayWiseTimeSeries(baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
      var x = baseval;
      var y =
        Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

      series.push([x, y]);
      baseval += 86400000;
      i++;
    }
    return series;
  }
</script>
<script src="<?= base_url('assets/admin/js/dashboard.js') ?>"></script>

<script>
  socket.on('online', function(users) {
    $("#onlinef").text(users.length);
  })

  socket.on('test', function(data) {
    chart7.updateSeries([{
      data: data.map((e) => e.users)
    }])
    chart7.updateOptions({
      labels: data.map((e) => e.timeLabel),
    })
  })

  $(function() {
    $('#map').vectorMap({
      map: 'world_mill'
    });
  });
</script>
