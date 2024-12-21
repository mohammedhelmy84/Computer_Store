@include('dashboard.header')
  <div class="wrapper">
    @include('dashboard.sidebar')
    <div class="main">
        @include('dashboard.navbar')
        <main class="content px-3 py-4">
            <div class="container-fluid">
                <div class="mb-3">
                    <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                           <div class="card border-0 card-dashboard">
                               <div class="card-body py-4">
                                   <h5 class="mb-2 fw-bold">
                                      Members Progress
                                   </h5>
                                   <p class="mb-2 fw-bold">
                                     $1000
                                   </p>
                                   <div class="mb-0">
                                     <span class="badge text-success me-2">
                                       +10.0%
                                     </span>
                                     <span class="fw-bold">
                                        Since Last Month
                                     </span>
                                   </div>
                               </div>
                           </div>
                        </div> <!--/col-->
                        <div class="col-12 col-md-4">
                            <div class="card border-0 card-dashboard">
                                <div class="card-body py-4">
                                    <h5 class="mb-2 fw-bold">
                                       Members Progress
                                    </h5>
                                    <p class="mb-2 fw-bold">
                                      $1000
                                    </p>
                                    <div class="mb-0">
                                      <span class="badge text-success me-2">
                                        +10.0%
                                      </span>
                                      <span class="fw-bold">
                                         Since Last Month
                                      </span>
                                    </div>
                                </div>
                            </div>
                         </div> <!--/col-->
                         <div class="col-12 col-md-4">
                            <div class="card border-0 card-dashboard">
                                <div class="card-body py-4">
                                    <h5 class="mb-2 fw-bold">
                                       Members Progress
                                    </h5>
                                    <p class="mb-2 fw-bold">
                                      $1000
                                    </p>
                                    <div class="mb-0">
                                      <span class="badge text-success me-2">
                                        +10.0%
                                      </span>
                                      <span class="fw-bold">
                                         Since Last Month
                                      </span>
                                    </div>
                                </div>
                            </div>
                         </div> <!--/col-->
                    </div> <!--/row-->
                    <h3 class="fw-bold fs-4 my-3">Agent Earnings</h3>
                    <div class="row" id="tbdiv">
                        <div class="col-12">
                          <div class="table-responsive-sm">
                            <table class="table table-striped table-dashboard">
                                <thead>
                                  <tr class="highlight">
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div> <!--/mb-3-->
            </div> <!--/container-->
        </main>
        <footer class="footer">
           <div class="container-fluid">
              <div class="row text-body-sacondary">
                  <div class="col-6 text-start">
                     <a href="#" class="text-body-sacondary">
                        <strong>Dashboard</strong>
                     </a>
                  </div>
                  <div class="col-6 text-end text-body-sacondary d-none d-md-block">
                    <ul class="list-inline mb-0">
                       <li class="list-inline-item">
                        <a href="#" class="text-body-sacondary">Contact</a>
                       </li>
                       <li class="list-inline-item">
                        <a href="#" class="text-body-sacondary">About Us</a>
                       </li>
                       <li class="list-inline-item">
                        <a href="#" class="text-body-sacondary">Term</a>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </footer>
    </div>
  </div>

  @include('dashboard.footer')
