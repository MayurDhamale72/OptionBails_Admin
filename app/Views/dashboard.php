<?php
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dunzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Dunzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.png" type="image/x-icon">
    <title>Dunzo - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url();?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php require_once('header.php');?>
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
         <?php require_once('sidebar.php');?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 p-0">
                  <h3>Default Dashboard </h3>
                </div>
                <div class="col-sm-6 p-0">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">
                        <svg class="stroke-icon">
                          <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default      </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
              <div class="col-xxl-4 col-xl-100 box-col-12 ps-4 pe-4 left-background">
                <div class="row bg-light h-100 p-3 pt-4 pb-4">
                  <div class="col-12 col-xl-50 box-col-6">
                    <div class="card welcome-card">
                      <div class="card-body">
                        <div class="d-flex"> 
                          <div class="flex-grow-1"> 
                            <h1>Hello, Ramirez</h1>
                            <p>Welcome back! Let's start from where you left.</p><a class="btn" href="user-profile.html">View Profile</a>
                          </div>
                          <div class="flex-shrink-0"> <img src="<?php echo base_url();?>/assets/images/dashboard/welcome.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-xl-50 box-col-6">
                    <div class="row"> 
                      <div class="col-12 col-lg-12 col-md-6 box-col-12">
                        <div class="card total-earning">
                          <div class="card-body">
                            <div class="row"> 
                              <div class="col-sm-7 box-col-7">
                                <div class="d-flex">
                                  <h3 class="font-primary">Total Earning</h3>
                                </div>
                                <h5>$20.790</h5><span>+ 16.06% than last week</span>
                              </div>
                              <div class="col-sm-5 box-col-5 p-0">
                                <div id="income-chart"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-12 col-md-6 box-col-12">
                        <div class="card total-earning">
                          <div class="card-body pb-0">
                            <div class="row"> 
                              <div class="col-sm-7 box-col-7">
                                <div class="d-flex">
                                  <h3 class="font-primary">Total Expense</h3>
                                </div>
                                <h5>$4,683.90</h5><span>+ 10.34% than last week</span>
                              </div>
                              <div class="col-sm-5 box-col-5 p-0">
                                <div id="expense-chart"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-xl-50 col-md-6 box-col-6">
                    <div class="card news-update">
                      <div class="card-header pb-0">
                        <div class="header-top">
                          <h4>News & Update</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center pt-0"><img src="<?php echo base_url();?>/assets/images/dashboard/1.jpg" alt="">
                          <div class="flex-grow-1 ms-3"><a href="social-app.html">
                              <h5>Indonesian Navy Lauds Mental Perseverance of Teenager...</h5><span>Today's News Headlines, Breaking...</span></a></div>
                          <div class="flex-shrink-0"> 
                            <button class="btn">10 Min ago </button>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="<?php echo base_url();?>/assets/images/dashboard/2.jpg" alt="">
                          <div class="flex-grow-1 ms-3"><a href="social-app.html">
                              <h5>Why now may be the 'golden age' for Southeast asia start-ups...</h5><span>Check out the latest news from...</span></a></div>
                          <div class="flex-shrink-0"> 
                            <button class="btn">2 Min ago </button>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="<?php echo base_url();?>/assets/images/dashboard/3.jpg" alt="">
                          <div class="flex-grow-1 ms-3"><a href="social-app.html">
                              <h5>China's renewed crypto crackdown wipes nearly $400...</h5><span>Technology and indian business news...</span></a></div>
                          <div class="flex-shrink-0"> 
                            <button class="btn">14 Min ago </button>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="<?php echo base_url();?>/assets/images/dashboard/4.jpg" alt="">
                          <div class="flex-grow-1 ms-3"><a href="social-app.html">
                              <h5>Indonesian Navy Lauds Mental Perseverance of Teenager...</h5><span>Today's News Headlines, Breaking...</span></a></div>
                          <div class="flex-shrink-0"> 
                            <button class="btn">17 Min ago </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-xl-50 col-md-6 box-col-6">
                    <div class="card product-chart mb-0">
                      <div class="card-header pb-0">
                        <div class="header-top">
                          <h4>Product Stock</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown1"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pb-0">
                        <div class="d-flex">
                          <h2 class="me-2">($1,23,456)</h2><span>Total Product Stock</span>
                        </div>
                        <div class="product-chart">
                          <div class="shap-block">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div id="product-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-xl-100 box-col-12">
                <div class="row"> 
                  <div class="col-xxl-8 col-xl-100 box-col-12 proorder-xl-1">
                    <div class="card">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4>Recent Order</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0 recent">
                        <div class="table-responsive custom-scrollbar">
                          <table class="table display" id="resent-order" style="width:100%">
                            <thead>
                              <tr>
                                <th>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label"></label>
                                  </div>
                                </th>
                                <th>Customers name</th>
                                <th>Order Date</th>
                                <th>items Name</th>
                                <th>Price</th>
                                <th>Status  </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex">
                                    <div class="flex-shrink-0"><img src="<?php echo base_url();?>/assets/images/dashboard/user/1.png" alt=""></div>
                                    <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                                        <h6>Elle Amberson</h6><span>#Gh3649K</span></a></div>
                                  </div>
                                </td>
                                <td> 
                                  <h6>15 Nov, 2022</h6><span>02:45 PM</span>
                                </td>
                                <td>Wood Chair</td>
                                <td>$152</td>
                                <td> 
                                  <button class="badge badge-light-primary rounded-pill txt-primary">Paid</button>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex">
                                    <div class="flex-shrink-0"><img src="<?php echo base_url();?>/assets/images/dashboard/user/2.png" alt=""></div>
                                    <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                                        <h6>Anna Catmire</h6><span>#A5647KB</span></a></div>
                                  </div>
                                </td>
                                <td> 
                                  <h6>25 Nov, 2022</h6><span>01:24 PM</span>
                                </td>
                                <td>Men Sneakers</td>
                                <td>$652</td>
                                <td> 
                                  <button class="badge badge-light-secondary rounded-pill txt-secondary">Pending</button>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex">
                                    <div class="flex-shrink-0"><img src="<?php echo base_url();?>/assets/images/dashboard/user/3.png" alt=""></div>
                                    <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                                        <h6>Laura Dagson</h6><span>#KO093M</span></a></div>
                                  </div>
                                </td>
                                <td> 
                                  <h6>26 Nov, 2022</h6><span>12:34 PM</span>
                                </td>
                                <td>Tree Stylish </td>
                                <td>$256</td>
                                <td> 
                                  <button class="badge badge-light-primary rounded-pill txt-primary">Paid</button>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex">
                                    <div class="flex-shrink-0"><img src="<?php echo base_url();?>/assets/images/dashboard/user/4.png" alt=""></div>
                                    <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                                        <h6>Rachel Green</h6><span>#KMG403</span></a></div>
                                  </div>
                                </td>
                                <td> 
                                  <h6>28 Nov, 2022</h6><span>10:27 PM</span>
                                </td>
                                <td>Mi Watch</td>
                                <td>$659</td>
                                <td> 
                                  <button class="badge badge-light-danger rounded-pill txt-danger">Overdue</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-xl-50 col-md-6 box-col-6 proorder-xl-6">
                    <div class="card sales">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4>Sales Statistic</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="sales-chart"></div>
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-2"><span class="bg-primary"></span></div>
                          <div class="flex-grow-1 me-2">
                            <h5>View Count <strong>340k</strong></h5>
                          </div>
                          <div class="flex-shrink-0 me-2"><span class="bg-light-primary"></span></div>
                          <div class="flex-grow-1">
                            <h5>View Count <strong>340k</strong></h5>
                          </div>
                        </div>
                        <p>Keep up info updated to increase the number of ionteractions</p>
                        <button class="btn">See more</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-2">
                    <div class="card since">
                      <div class="card-body">
                        <div class="customer-card d-flex b-l-primary border-2">
                          <div class="ms-3">
                            <h3 class="mt-1">Customers</h3>
                            <h5 class="mt-1">1.485</h5>
                          </div>
                          <div class="dashboard-user bg-light-primary"><span></span>
                            <svg>
                              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#male"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="customer mt-2"><span class="me-1">
                            <svg>
                              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#arrow-up"></use>
                            </svg></span><span class="font-success me-2">+ 4.6%</span><span>Since last Week</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-3">
                    <div class="card since">
                      <div class="card-body money">
                        <div class="customer-card d-flex b-l-secondary border-2">
                          <div class="ms-3">
                            <h3 class="mt-1">Revenue</h3>
                            <h5 class="mt-1">$5.873</h5>
                          </div>
                          <div class="dashboard-user bg-light-secondary"><span></span>
                            <svg>
                              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#money"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="customer mt-2"><span class="me-1">
                            <svg>
                              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#arrow-up"></use>
                            </svg></span><span class="font-success me-2">+ 3.10%</span><span>Since last Week</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-4">
                    <div class="card since"> 
                      <div class="card-body profit">
                        <div class="customer-card d-flex b-l-danger border-2">
                          <div class="ms-3">
                            <h3 class="mt-1">Profit</h3>
                            <h5 class="mt-1">70%</h5>
                          </div>
                          <div class="dashboard-user bg-light-danger"><span></span>
                            <svg>
                              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#profile"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="customer mt-2"><span class="me-1">
                            <svg>
                              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#arrow-down"></use>
                            </svg></span><span class="font-danger me-2">+ 2.3%</span><span>Since last Week</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-5">
                    <div class="card since"> 
                      <div class="card-body invoice-profit">
                        <div class="customer-card d-flex b-l-success border-2">
                          <div class="ms-3">
                            <h3 class="mt-1">Invoices</h3>
                            <h5 class="mt-1">1.256</h5>
                          </div>
                          <div class="dashboard-user bg-light-success"><span></span>
                            <svg>
                              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#invoice"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="customer mt-2"><span class="me-1">
                            <svg>
                              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#arrow-up"></use>
                            </svg></span><span class="font-success me-2">+ 6.3%</span><span>Since last Week</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-md-6 box-col-6 proorder-xl-7">
                    <div class="card review-slider">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4>Review</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="owl-carousel owl-theme" id="owl-carousel-dashboard">
                          <div class="review">
                            <div> <img class="img-fluid" src="<?php echo base_url();?>/assets/images/dashboard/user/14.png" alt="">
                              <div class="review-content"> 
                                <h2>John Connor</h2>
                              </div>
                              <div class="d-flex">
                                <h5>4.3</h5>
                                <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                <div class="flex-grow-1"> 
                                  <h5>136</h5>
                                </div>
                              </div>
                              <p>“Best  Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                            </div>
                          </div>
                          <div class="review">
                            <div class="review">
                              <div> <img class="img-fluid" src="<?php echo base_url();?>/assets/images/dashboard/user/20.png" alt="">
                                <div class="review-content"> 
                                  <h2>Paul Miller</h2>
                                </div>
                                <div class="d-flex">
                                  <h5>5.6</h5>
                                  <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                  <div class="flex-grow-1"> 
                                    <h5>120</h5>
                                  </div>
                                </div>
                                <p>“Best  Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                              </div>
                            </div>
                          </div>
                          <div class="review">
                            <div class="review">
                              <div> <img class="img-fluid" src="<?php echo base_url();?>/assets/images/dashboard/user/21.png" alt="">
                                <div class="review-content"> 
                                  <h2>Alen Lee</h2>
                                </div>
                                <div class="d-flex">
                                  <h5>6.3</h5>
                                  <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                  <div class="flex-grow-1"> 
                                    <h5>140</h5>
                                  </div>
                                </div>
                                <p>“Best  Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-9 col-xl-100 box-col-12 proorder-xl-8">
                    <div class="card sales overview">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4>Sales Overview</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-0"> 
                        <div class="sales-chart">
                          <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div id="sales-overview"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row proorder-xl-9 pe-0">
                    <div class="col-xl-8 col-xl-100 col-md-12">
                      <div class="row"> 
                        <div class="col-xxl-7 col-xl-50 col-md-6">
                          <div class="card">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Active Tasks</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown6" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown6"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body active-task">
                              <ul>
                                <li class="d-flex pt-0">
                                  <div class="flex-shrink-0">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                      <label class="form-check-label"></label>
                                    </div>
                                  </div>
                                  <div class="flex-grow-1"> <a href="to-do.html">
                                      <h5>Regina Cooper</h5></a>
                                    <p>Create userflow social application design</p>
                                  </div><span class="delete-option"> <a href="#">
                                      <svg class="remove">
                                        <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#Delete"></use>
                                      </svg></a></span>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                      <label class="form-check-label"></label>
                                    </div>
                                  </div>
                                  <div class="flex-grow-1"> <a href="to-do.html">
                                      <h5>Install Appointment</h5></a>
                                    <p>Homepage design for slimmuch product</p>
                                  </div><span class="delete-option"> <a href="#">
                                      <svg class="remove">
                                        <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#Delete"></use>
                                      </svg></a></span>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                      <label class="form-check-label"></label>
                                    </div>
                                  </div>
                                  <div class="flex-grow-1"> <a href="to-do.html">
                                      <h5>Regina Cooper</h5></a>
                                    <p>Interactive prototype design - web design</p>
                                  </div><span class="delete-option"> <a href="#">
                                      <svg class="remove">
                                        <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#Delete"></use>
                                      </svg></a></span>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                      <label class="form-check-label"></label>
                                    </div>
                                  </div>
                                  <div class="flex-grow-1"> <a href="to-do.html">
                                      <h5>Regina Cooper</h5></a>
                                    <p>Create Application design for topbuzz</p>
                                  </div><span class="delete-option"> <a href="#">
                                      <svg class="remove">
                                        <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#Delete"></use>
                                      </svg></a></span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-5 col-xl-50 col-md-6">
                          <div class="card">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Total Investment</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown7" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown7"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body p-0 pb-3 pt-3">
                              <div class="investment-card">
                                <div id="Investment-chart"></div>
                                <ul> 
                                  <li>
                                    <h5>Total</h5><span>$ 5,8272</span>
                                  </li>
                                  <li> 
                                    <h5>Monthly </h5><span>$ 6,2456</span>
                                  </li>
                                  <li> 
                                    <h5>Daily </h5><span>$ 5,8704</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-12">
                          <div class="card leads">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Leads Status</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown8" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown8"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="lead-status">
                                <ul> 
                                  <li>Customers</li>
                                  <li class="border-3 b-l-primary">Lena Smith</li>
                                  <li class="border-3 b-l-secondary">Nicol Green</li>
                                  <li class="border-3 b-l-danger mb-0">Tom Taylor</li>
                                </ul>
                                <ul> 
                                  <li>Last Contacted</li>
                                  <li>June 14, 2023</li>
                                  <li>June 16, 2023</li>
                                  <li class="mb-0">June 18, 2023</li>
                                </ul>
                                <ul> 
                                  <li>Sales Rep</li>
                                  <li> <img src="<?php echo base_url();?>/assets/images/dashboard/user/2.png" alt="">Paul Miller</li>
                                  <li> <img src="<?php echo base_url();?>/assets/images/dashboard/user/1.png" alt="">Alen Lee</li>
                                  <li class="mb-0"> <img src="<?php echo base_url();?>/assets/images/dashboard/user/3.png" alt="">Lucy White</li>
                                </ul>
                                <ul> 
                                  <li>Status</li>
                                  <li class="bg-light-primary font-primary">Deal Won</li>
                                  <li class="bg-light-secondary font-secondary">Intro Call</li>
                                  <li class="bg-light-danger font-danger mb-0">Stuck</li>
                                </ul>
                                <ul> 
                                  <li>Deal Value</li>
                                  <li>$ 200.2k</li>
                                  <li>$210k</li>
                                  <li class="mb-0">$70k</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-xl-100 col-md-12 pe-0">
                      <div class="row"> 
                        <div class="col-xl-12 col-md-6 notification-card">
                          <div class="card custom-scrollbar">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Notifications</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown9" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown9"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <ul class="notification-box">
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0"><img src="<?php echo base_url();?>/assets/images/dashboard/user/15.png" alt=""></div>
                                  <div class="flex-grow-1"> <a href="private-chat.html">
                                      <h5>Paul Svensson invite you Prototyping</h5></a>
                                    <p>05 April, 2023 | 03:00 PM</p>
                                  </div>
                                  <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown10" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown10"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                  </div>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0"><img src="<?php echo base_url();?>/assets/images/dashboard/user/16.png" alt=""></div>
                                  <div class="flex-grow-1"> <a href="private-chat.html">
                                      <h5>Adam Nolan mentioned you in UX Basics</h5></a>
                                    <p>04 April, 2023 | 05:00 PM</p>
                                  </div>
                                  <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown11" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown11"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                  </div>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0"><img src="<?php echo base_url();?>/assets/images/dashboard/user/17.png" alt=""></div>
                                  <div class="flex-grow-1"> <a href="private-chat.html">
                                      <h5>Paul Morgan Commented in UI Design</h5></a>
                                    <p>05 April, 2023 | 02:00 PM</p>
                                  </div>
                                  <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown12" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown12"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                  </div>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0"><img src="<?php echo base_url();?>/assets/images/dashboard/user/18.png" alt=""></div>
                                  <div class="flex-grow-1"> <a href="private-chat.html">
                                      <h5>Robert Babinski Said nothing important</h5></a>
                                    <p>01 April, 2023 | 06:00 PM</p>
                                  </div>
                                  <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown13" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown13"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-12 col-md-6 pe-0">
                          <div class="card statistics">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Statistics</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown14" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown14"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="d-flex"> 
                                <div class="flex-shrink-0"> 
                                  <h4>Weekly Target</h4><span>25% achieved</span>
                                  <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1"> 
                                  <h4>Montly Target</h4><span>40% achieved</span>
                                  <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php require_once('footer.php');?>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo base_url();?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?php echo base_url();?>/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?php echo base_url();?>/assets/js/scrollbar/simplebar.js"></script>
    <script src="<?php echo base_url();?>/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo base_url();?>/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo base_url();?>/assets/js/sidebar-menu.js"></script>
    <script src="<?php echo base_url();?>/assets/js/sidebar-pin.js"></script>
    <script src="<?php echo base_url();?>/assets/js/slick/slick.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/slick/slick.js"></script>
    <script src="<?php echo base_url();?>/assets/js/header-slick.js"></script>
    <script src="<?php echo base_url();?>/assets/js/chart/morris-chart/raphael.js"></script>
    <script src="<?php echo base_url();?>/assets/js/chart/morris-chart/morris.js"> </script>
    <script src="<?php echo base_url();?>/assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?php echo base_url();?>/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?php echo base_url();?>/assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/dashboard/default.js"></script>
    <script src="<?php echo base_url();?>/assets/js/notify/index.js"></script>
    <script src="<?php echo base_url();?>/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?php echo base_url();?>/assets/js/datatable/datatables/datatable.custom1.js"></script>
    <script src="<?php echo base_url();?>/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>/assets/js/owlcarousel/owl-custom.js"></script>
    <script src="<?php echo base_url();?>/assets/js/typeahead/handlebars.js"></script>
    <script src="<?php echo base_url();?>/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="<?php echo base_url();?>/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="<?php echo base_url();?>/assets/js/typeahead-search/handlebars.js"></script>
    <script src="<?php echo base_url();?>/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="<?php echo base_url();?>/assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url();?>/assets/js/script.js"></script>
    <script src="<?php echo base_url();?>/assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>