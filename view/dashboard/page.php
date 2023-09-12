
<div class="row page-title-header">
              <div class="col-md-12 pt-2">
                <div class="page-header">
                  <h4 class="page-title ">Dashboard</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  
                  </div>
                </div>
              </div>
          
            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-danger mr-2"></div>
                              <p class="mb-0">Total User</p>
                            </div>
                            <h4 class="font-weight-semibold"><?php $selecta=mysqli_query($con,"SELECT *FROM user_list ");
                            echo mysqli_num_rows($selecta); ?></h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                          </div>
                          <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-success mr-2"></div>
                              <p class="mb-0">Total Student</p>
                            </div>
                            <h4 class="font-weight-semibold"><?php $selecta=mysqli_query($con,"SELECT *FROM student_list ");
                            echo mysqli_num_rows($selecta); ?></h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                            </div>
                          </div>


                        </div>
                      </div>
                    </div>
                  </div>

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-danger mr-2"></div>
                              <p class="mb-0">Total Faculty</p>
                            </div>
                            <h4 class="font-weight-semibold"><?php $selecta=mysqli_query($con,"SELECT *FROM faculty_list ");
                            echo mysqli_num_rows($selecta); ?></h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                          </div>
                          <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-success mr-2"></div>
                              <p class="mb-0">Total Voting</p>
                            </div>
                            <h4 class="font-weight-semibold"><?php $selecta=mysqli_query($con,"SELECT *FROM votingstu_list ");
                            echo mysqli_num_rows($selecta); ?></h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                            </div>
                          </div>
                          

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 grid-margin stretch-card average-price-card">
                    <div class="card text-white">
                      <div class="card-body">
                        <div class="d-flex justify-content-between pb-2 align-items-center">
                          <h2 class="font-weight-semibold mb-0">4,624</h2>
                          <div class="icon-holder">
                            <i class="mdi mdi-briefcase-outline"></i>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <h5 class="font-weight-semibold mb-0">Event</h5>
                          <!-- <p class="text-white mb-0">Since last month</p> -->
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 grid-margin stretch-card average-price-card">
                    <div class="card text-white">
                      <div class="card-body">
                        <div class="d-flex justify-content-between pb-2 align-items-center">
                          <h2 class="font-weight-semibold mb-0">4,624</h2>
                          <div class="icon-holder">
                            <i class="mdi mdi-briefcase-outline"></i>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <h5 class="font-weight-semibold mb-0">Notice</h5>
                          <!-- <p class="text-white mb-0">Since last month</p> -->
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                          <h2 class="card-title mb-0">Top 5 User List</h2>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Status</th>
                            
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                    $uesrlist=mysqli_query($con,"SELECT * FROM user_list LIMIT 5");
                                    foreach ($uesrlist as $user){
                                  echo '
                              <tr>
                                <td>'.$user['id'].'</td>
                                <td>'.$user['user_name'].'</td>
                                <td>'.$user['user_roll'].'</td>
                                <td>'.$user['user_status'].'</td>
                              </tr>';
                                    }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
