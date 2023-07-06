<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Master - N-Square</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">N-Square</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="dashboard.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item active">
              <a href="master.php" class="menu-link">
                <i class='menu-icon tf-icons bx bx-hard-hat'></i>
                <div data-i18n="Analytics">Master</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="purandsale.php" class="menu-link">
                <i class='menu-icon tf-icons bx bx-hard-hat'></i>
                <div data-i18n="Analytics">Purchase & Sale</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="inventory.php" class="menu-link">
                <i class='menu-icon tf-icons bx bx-hard-hat'></i>
                <div data-i18n="Analytics">Inventory</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  Hello 🎉 Nafisa Alam
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Nafisa Alam</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">
                          <div class="nav-align-top mb-4">
                            <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-top-category"
                                  aria-controls="navs-top-category"
                                  aria-selected="true"
                                >
                                  Category
                                </button>
                              </li>
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link active"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-top-customer"
                                  aria-controls="navs-top-customer"
                                  aria-selected="false"
                                >
                                  Customer
                                </button>
                              </li>
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-top-product"
                                  aria-controls="navs-top-product"
                                  aria-selected="false"
                                >
                                  Product
                                </button>
                              </li>
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-top-user"
                                  aria-controls="navs-top-user"
                                  aria-selected="false"
                                >
                                  User
                                </button>
                              </li>
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-top-vendor"
                                  aria-controls="navs-top-vendor"
                                  aria-selected="false"
                                >
                                  Vendor
                                </button>
                              </li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane fade" id="navs-top-category" role="tabpanel">
                                <div class="content-wrapper">
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                    <div class="card">
                                      <h5 class="card-header">All Category</h5>
                                      <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalcategoryadd"
                                      >
                                        Add Category
                                      </button>
                                      <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>Category Id</th>
                                                <th>Category Name</th>
                                                <th>Category Status</th>
                                                <th>Create Date</th>
                                                <th>Created By</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0 category-table-result">
                                              <tr>
                                                <td>1</td>
                                                <td>Albert Cook</td>
                                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                <td>Active</td>
                                                <td>Active</td>
                                                <td>
                                                  <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                      <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="navs-top-product" role="tabpanel">
                                <div class="content-wrapper">
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                    <div class="card">
                                      <h5 class="card-header">All Product</h5>
                                      <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalproductadd"
                                      >
                                        Add Product
                                      </button>
                                      <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>Product Id</th>
                                                <th>Product Image</th>
                                                <th>Product Title</th>
                                                <th>Product Category</th>
                                                <th>Product Color</th>
                                                <th>Product Size</th>
                                                <th>Product Type</th>
                                                <th>Product Initial Price</th>
                                                <th>Product Status</th>
                                                <th>Create Date</th>
                                                <th>Created By</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0 product-table-result">
                                              <tr>
                                                <td>Loading..</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="navs-top-vendor" role="tabpanel">
                                <div class="content-wrapper">
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                    <div class="card">
                                      <h5 class="card-header">All Vendor</h5>
                                      <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalvendoradd"
                                      >
                                        Add Vendor
                                      </button>
                                      <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>Vendor Id</th>
                                                <th>Vendor Name</th>
                                                <th>Vendor Contact</th>
                                                <th>Vendor Email</th>
                                                <th>Vendor Address</th>
                                                <th>Vendor City</th>
                                                <th>Vendor State</th>
                                                <th>Vendor Pincode</th>
                                                <th>Status</th>
                                                <th>Created By</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0 vendor-table-result">
                                              <tr>
                                                <td>1</td>
                                                <td>Albert Cook</td>
                                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                <td>Active</td>
                                                <td>Active</td>
                                                <td>
                                                  <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                      <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="navs-top-user" role="tabpanel">
                                <div class="content-wrapper">
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                    <div class="card">
                                      <h5 class="card-header">All User</h5>
                                      <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modaluseradd"
                                      >
                                        Add User
                                      </button>
                                      <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>Category Id</th>
                                                <th>Category Name</th>
                                                <th>Category Status</th>
                                                <th>Create Date</th>
                                                <th>Created By</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0 user-table-result">
                                              <tr>
                                                <td>1</td>
                                                <td>Albert Cook</td>
                                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                <td>Active</td>
                                                <td>Active</td>
                                                <td>
                                                  <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                      <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade show active" id="navs-top-customer" role="tabpanel">
                                <div class="content-wrapper">
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                    <div class="card">
                                      <h5 class="card-header">All Customer</h5>
                                      <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalcustomeradd"
                                      >
                                        Add Customer
                                      </button>
                                      <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>Customer Id</th>
                                                <th>Customer Name</th>
                                                <th>Customer Contact</th>
                                                <th>Customer Email</th>
                                                <th>Customer Address</th>
                                                <th>Customer City</th>
                                                <th>Customer State</th>
                                                <th>Customer Pincode</th>
                                                <th>Customer Password</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0 customer-table-result">
                                              <tr>
                                                <td>1</td>
                                                <td>Albert Cook</td>
                                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                <td>Active</td>
                                                <td>Active</td>
                                                <td>
                                                  <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                      <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
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
                    </div>
                  </div>
                </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="#" target="_blank" class="footer-link fw-bolder">N2</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
      // for category
      $(document).ready(function(){
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        setCookie("Token", '1', 30);
        // console.log(getCookie('Token'));

        // call category
        call_city_status();
        function call_city_status(){
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), call_city_status:1},
            dataType : "JSON",
            success : function(response){
              // console.log(response);
              var city_data='';
              var state_data='';
              if(response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                if(response.city.length==0){
                  city_data+='<option value="NA">No data found!!!</option>';
                }else{
                  for(var i=0;i<response.city.length;i++){
                    city_data+='<option value="'+ response.city[i].nsquare_city_id+'">'+ response.city[i].nsquare_city_title+'</option>';
                  }
                }

                if(response.state.length==0){
                  state_data+='<option value="NA">No data found!!!</option>';
                }else{
                  for(var i=0;i<response.state.length;i++){
                    state_data+='<option value="'+ response.state[i].nsquare_state_id+'">'+ response.state[i].nsquare_state_title+'</option>';
                  }
                }
              }
              $('.city-data').html(city_data); 
              $('.state-data').html(state_data);              
            } 
          });
        }

        // call category
        call_category();
        function call_category(){
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), get_category:1},
            dataType : "JSON",
            success : function(category_response){
              var response=category_response;
              var category_data='';
              if(category_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                if(category_response.length==0){
                  category_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<category_response.length;i++){
                    // category_data+='';
                    var status='';

                    if(response[i]['nsquare_category_status']==1){
                      status='<span class="badge bg-label-primary me-1">Active</span>';
                    }else{
                      status='<span class="badge bg-label-danger me-1">Inactive</span>';
                    }
                    var created_by=response[i]["nsquare_user_fname"]+ ' ' + response[i]["nsquare_user_lname"];
                    category_data+='<tr><td>'+response[i]["nsquare_category_id"]+'</td><td>'+response[i]["nsquare_category_title"]+'<input type="hidden" class="change-category-name'+response[i]["nsquare_category_id"]+'" value="'+response[i]["nsquare_category_title"]+'"></td><td>'+status+'</td><td>'+response[i]["nsquare_category_createdate"]+'</td><td>'+created_by+'</td><td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item edit-category" id="'+response[i]["nsquare_category_id"]+'" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item delete-category" id="'+response[i]["nsquare_category_id"]+'" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td></tr>';
                  }
                }
              }
              $('.category-table-result').html(category_data);              
            } 
          });
        }

        // save category
        $(document).delegate('.add-category-save', 'click', function(e){
          e.preventDefault();
          var cat_name = $('#add-category-name').val();
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), cat_name:cat_name, set_category:1},
            dataType : "JSON",
            success : function(category_response){
              // console.log(category_response);
              category_response=category_response.trim();
              if(category_response=="success"){
                alert("Category saved.");
                $('#modalcategoryadd').modal('hide');
                call_category();
              } else if (category_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Category not saved.");
              }
            } 
          });
        });

        // delete category
        $(document).delegate('.delete-category', 'click', function(e){
          e.preventDefault();
          var cat_id=$(this).attr('id');
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), cat_id:cat_id, delete_category:1},
            dataType : "JSON",
            success : function(category_response){
              // console.log(category_response);
              category_response=category_response.trim();
              if(category_response=="success"){
                alert("Category deleted.");
                call_category();
              } else if (category_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Category not deleted.");
              }
            } 
          });
        });

        // call for edit category
        $(document).delegate('.edit-category', 'click', function(e){
          e.preventDefault();
          var cat_id=$(this).attr('id');
          var cat_name=$('.change-category-name'+cat_id).val();
          $('.edit-category-id').val(cat_id);
          $('.edit-category-name').val(cat_name);
          $('#modalcategoryedit').modal('show');
        });

        // edit category
        $(document).delegate('.edit-category-save', 'click', function(e){
          e.preventDefault();
          var cat_id = $('.edit-category-id').val();
          var cat_name = $('#edit-category-name').val();
          var cat_status = $('#edit-category-status').val();
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), cat_id:cat_id, cat_name:cat_name, cat_status:cat_status, edit_category:1},
            dataType : "JSON",
            success : function(category_response){
              // console.log(category_response);
              category_response=category_response.trim();
              if(category_response=="success"){
                alert("Edit category saved.");
                $('#modalcategoryedit').modal('hide');
                call_category();
              } else if (category_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Category not deleted.");
              }
            } 
          });
        });


        // product section
        // call category
        load_category();
        function load_category(){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), call_category_list:1},
            dataType : "JSON",
            success : function(category_response){
              var response=category_response;
              var category_list='';
              if(category_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                if(category_response.length>0){
                  for(var i=0;i<category_response.length;i++){
                    category_list+='<option value="'+ response[i]['nsquare_category_id'] +'">'+ response[i]['nsquare_category_title'] +'</option>';
                  }
                  $('.get-category-list').html(category_list);
                }
              }
            }
          });
        }

        // call product
        load_product();
        function load_product(){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), call_product:1},
            dataType : "JSON",
            success : function(product_response){
              // console.log(product_response);
              var response=product_response;
              var product_data='';
              if(product_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                if(product_response.length==0){
                  product_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<product_response.length;i++){
                    // category_data+='';
                    var status='';

                    if(response[i]['nsquare_category_status']==1){
                      status='<span class="badge bg-label-primary me-1">Active</span>';
                    }else{
                      status='<span class="badge bg-label-danger me-1">Inactive</span>';
                    }
                    var created_by=response[i]["nsquare_user_fname"]+ ' ' + response[i]["nsquare_user_lname"];
                    product_data+='<tr><td>'+response[i]["nsquare_product_id"]+'</td><td><img style="width: 150px;"  src="product_img/'+response[i]["nsquare_product_img_title"]+'"></td><td>'+response[i]["nsquare_product_title"]+'</td><td>'+response[i]["nsquare_category_title"]+'</td><td>'+response[i]["nsquare_product_color"]+'</td><td>'+response[i]["nsquare_product_size"]+'</td><td>'+response[i]["nsquare_product_type"]+'</td><td>'+response[i]["nsquare_product_init_price"]+'</td><td>'+status+'</td><td>'+response[i]["nsquare_product_createdate"]+'</td><td>'+created_by+'</td><td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item edit-product" id="'+response[i]["nsquare_product_id"]+'" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item delete-product" id="'+response[i]["nsquare_product_id"]+'" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td></tr>';
                  }
                }
              }
              $('.product-table-result').html(product_data); 
            }
          });
        }

        // add product
        // $(document).delegate('.add-product-save', 'click', function(e){
        //   e.preventDefault();
        //   var product_name = $('#product-name').val();
        //   var product_image = $('#product-image').val();
        //   var product_category = $('#product-category').val();
        //   var product_color = $('#product-color').val();
        //   var product_size = $('#product-size').val();
        //   var product_type = $('#product-type').val();
        //   var product_init_price = $('#product-init-price').val();
        //   $.ajax({
        //     // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
        //     url : "api/server.php",
        //     method : "POST",
        //     data : { Token:getCookie('Token'), product_name:product_name, product_image:product_image, product_category:product_category, product_color:product_color, product_size:product_size, product_type:product_type, product_init_price:product_init_price, set_product:1},
        //     // dataType : "JSON",
        //     success : function(product_response){
        //       // console.log(product_response);
        //       product_response=product_response.trim();
        //       if(product_response=="success"){
        //         alert("Product saved.");
        //         $('#modalproductadd').modal('hide');
        //         load_product();
        //       } else if (product_response == "InvalidToken"){
        //        alert("Please login!!!");
        //        window.location.reload();
        //       }else{
        //        alert("Hmmm!!! Something went wrong. Category not saved.");
        //       }
        //     } 
        //   });
        // });

        // delete product
        $(document).delegate('.delete-product', 'click', function(e){
          e.preventDefault();
          var product_id=$(this).attr('id');
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), product_id:product_id, delete_product:1},
            dataType : "JSON",
            success : function(category_response){
              // console.log(category_response);
              category_response=category_response.trim();
              if(category_response=="success"){
                alert("Product deleted.");
                load_product();
              } else if (category_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Product not deleted.");
              }
            } 
          });
        });

        $('.set_product').val(getCookie('Token'));
        // save product
        $('.add-product-form').on('submit',function(e){
          e.preventDefault();
          $.ajax({
            url : "api/server.php",
            method : "post",
            data : new FormData(this),
            contentType : false,
            cache: false,
            processData : false,
            success : function(product_response){
              console.log(product_response);
              product_response=product_response.trim();
              if(product_response=="success"){
                alert("Product saved.");
                $('#modalproductadd').modal('hide');
                load_product();
              } else if (product_response == "Product Uploaded Successfully but Except Images!!!"){
               alert("Product Uploaded Successfully but Except Images!!!");
               window.location.reload();
              } else if (product_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Product not saved.");
              }
            }
          });
        });

        // calll vendor
        load_vendor();
        function load_vendor(){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), call_vendor:1},
            dataType : "JSON",
            success : function(vendor_response){
              // console.log(vendor_response);
              var response=vendor_response;
              var vendor_data='';
              if(vendor_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                if(vendor_response.length==0){
                  vendor_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<vendor_response.length;i++){
                    // category_data+='';
                    var status='';

                    if(response[i]['nsquare_vendor_status']==1){
                      status='<span class="badge bg-label-primary me-1">Active</span>';
                    }else{
                      status='<span class="badge bg-label-danger me-1">Inactive</span>';
                    }
                    var created_by=response[i]["nsquare_user_fname"]+ ' ' + response[i]["nsquare_user_lname"];
                    vendor_data+='<tr><td>'+response[i]["nsquare_vendor_id"]+'</td><td>'+response[i]["nsquare_vendor_title"]+'</td><td>'+response[i]["nsquare_vendor_cont"]+'</td><td>'+response[i]["nsquare_vendor_email"]+'</td><td>'+response[i]["nsquare_vendor_address"]+'</td><td>'+response[i]["nsquare_city_title"]+'</td><td>'+response[i]["nsquare_state_title"]+'</td><td>'+response[i]["nsquare_vendor_pincode"]+'</td><td>'+status+'</td><td>'+response[i]["nsquare_vendor_createdate"]+'</td><td>'+created_by+'</td><td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item edit-vendor" id="'+response[i]["nsquare_vendor_id"]+'" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item delete-vendor" id="'+response[i]["nsquare_vendor_id"]+'" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td></tr>';
                  }
                }
              }
              $('.vendor-table-result').html(vendor_data); 
            }
          });
        }

        // vendor save
        $(document).delegate('.add-vendor-save', 'click', function(e){
          e.preventDefault();
          var name = $('#vendor-name').val();
          var contact = $('#vendor-contact').val();
          var email = $('#vendor-email').val();
          var address = $('#vendor-address').val();
          var city = $('#vendor-city').val();
          var state = $('#vendor-state').val();
          var pincode = $('#vendor-pincode').val();
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), name:name, contact:contact, email:email, address:address, city:city, state:state, pincode:pincode, set_vendor:1},
            // dataType : "JSON",
            success : function(vendor_response){
              // console.log(product_response);
              vendor_response=vendor_response.trim();
              if(vendor_response=="success"){
                alert("Vendor saved.");
                $('#modalvendoradd').modal('hide');
                load_vendor();
              } else if (vendor_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Vendor not saved.");
              }
            } 
          });
        });

        // delete vendor        
        $(document).delegate('.delete-vendor', 'click', function(e){
          e.preventDefault();
          var vendor_id=$(this).attr('id');
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), vendor_id:vendor_id, delete_vendor:1},
            dataType : "JSON",
            success : function(vendor_response){
              // console.log(category_response);
              vendor_response=vendor_response.trim();
              if(vendor_response=="success"){
                alert("Vendor deleted.");
                load_vendor();
              } else if (vendor_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Vendor not deleted.");
              }
            } 
          });
        });

        // calll customer
        load_customer();
        function load_customer(){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), call_customer:1},
            dataType : "JSON",
            success : function(customer_response){
              // console.log(customer_response);
              var response=customer_response;
              var customer_data='';
              if(customer_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                if(customer_response.length==0){
                  customer_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<customer_response.length;i++){
                    // category_data+='';
                    var status='';

                    if(response[i]['nsquare_customer_status']==1){
                      status='<span class="badge bg-label-primary me-1">Active</span>';
                    }else{
                      status='<span class="badge bg-label-danger me-1">Inactive</span>';
                    }
                    customer_data+='<tr><td>'+response[i]["nsquare_customer_id"]+'</td><td>'+response[i]["nsquare_customer_title"]+'</td><td>'+response[i]["nsquare_customer_cont"]+'</td><td>'+response[i]["nsquare_customer_email"]+'</td><td>'+response[i]["nsquare_customer_address"]+'</td><td>'+response[i]["nsquare_city_title"]+'</td><td>'+response[i]["nsquare_state_title"]+'</td><td>'+response[i]["nsquare_customer_pincode"]+'</td><td>'+status+'</td><td>'+response[i]["nsquare_customer_createdate"]+'</td><td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item edit-customer" id="'+response[i]["nsquare_customer_id"]+'" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item delete-customer" id="'+response[i]["nsquare_customer_id"]+'" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td></tr>';
                  }
                }
              }
              $('.customer-table-result').html(customer_data); 
            }
          });
        }

        // save customer 
        $(document).delegate('.add-customer-save', 'click', function(e){
          e.preventDefault();
          var name = $('#customer-name').val();
          var contact = $('#customer-contact').val();
          var email = $('#customer-email').val();
          var address = $('#customer-address').val();
          var city = $('#customer-city').val();
          var state = $('#customer-state').val();
          var pincode = $('#customer-pincode').val();
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), name:name, contact:contact, email:email, address:address, city:city, state:state, pincode:pincode, set_customer:1},
            // dataType : "JSON",
            success : function(customer_response){
              // console.log(customer_response);
              customer_response=customer_response.trim();
              if(customer_response=="success"){
                alert("Customer saved.");
                $('#modalcustomeradd').modal('hide');
                load_customer();
              } else if (customer_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Customer not saved.");
              }
            } 
          });
        });

        // delete customer        
        $(document).delegate('.delete-customer', 'click', function(e){
          e.preventDefault();
          var customer_id=$(this).attr('id');
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), customer_id:customer_id, delete_customer:1},
            dataType : "JSON",
            success : function(customer_response){
              // console.log(category_response);
              customer_response=customer_response.trim();
              if(customer_response=="success"){
                alert("Customer deleted.");
                load_customer();
              } else if (customer_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Customer not deleted.");
              }
            } 
          });
        });
      });

    </script>

  </body>
</html>
<!-- Add Category Modal -->
<div class="modal fade" id="modalcategoryadd" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Add Category</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameWithTitle" class="form-label">Category Name</label>
            <input
              type="text"
              id="add-category-name"
              class="form-control add-category-name"
              placeholder="Enter Category Name"
            />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary add-category-save">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- edit category modal -->
<div class="modal fade" id="modalcategoryedit" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Edit Category title</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameWithTitle" class="form-label">Category Name</label>
            <input type="hidden" class="edit-category-id">
            <input
              type="text"
              id="edit-category-name"
              class="form-control edit-category-name"
              placeholder="Enter Category Name"
            />
          </div>
          <div class="col mb-3">
            <label for="nameWithTitle" class="form-label">Status</label>
            <select
              type="text"
              id="edit-category-status"
              class="form-control edit-category-status"
            ><option value="1">Active</option><option value="2">Inactive</option></select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary edit-category-save">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- product model section -->
<!-- add product model -->
<div class="modal fade" id="modalproductadd" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">Add Product</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
            <form action="" class="add-product-form">
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Product Name</label>
            <input type="text" name="product-name" id="product-name" class="form-control" placeholder="Enter Product Name" />
          </div>
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Product Image</label>
            <input type="file" name="product-image" id="product-image" class="form-control" />
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-3">
            <label for="dobExLarge" class="form-label">Product Category</label>
            <select class="form-select get-category-list" name="product-category" id="product-category">
              <option>Select category</option>
            </select>
          </div>
          <div class="col mb-3">
            <label for="dobExLarge" class="form-label">Product Color</label>
            <input type="text" name="product-color" id="product-color" class="form-control" placeholder="Enter Your Product Color" />
          </div>
          <div class="col mb-3">
            <label for="emailExLarge" class="form-label">Product Size</label>
            <input type="text" name="product-size" id="product-size" class="form-control" placeholder="Enter Product Size" />
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-3">
            <label for="dobExLarge" class="form-label">Product Type</label>
            <input type="text" name="product-type" id="product-type" class="form-control" placeholder="Enter Product Type" />
          </div>
          <div class="col mb-3">
            <label for="dobExLarge" class="form-label">Product Initial Price</label>
            <input type="text" name="product-init-price" id="product-init-price" class="form-control" placeholder="Enter Your Product Initial Price" />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" name="set_product" class="set_product">
        <button type="submit" class="btn btn-primary add-product-save">Save changes</button>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- add vendor model -->
<div class="modal fade" id="modalvendoradd" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">Add Vendor</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
            <form action="" class="add-product-form">
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Vendor Name</label>
            <input type="text" id="vendor-name" class="form-control" placeholder="Enter Vendor Name" />
          </div>
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Vendor Contact</label>
            <input type="number" id="vendor-contact" class="form-control" placeholder="Enter Vendor Contact" />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Vendor Email</label>
            <input type="text" id="vendor-email" class="form-control" placeholder="Enter Vendor Email" />
          </div>
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Vendor Address</label>
            <textarea class="form-control" id="vendor-address" placeholder="Enter Vendor Address" /></textarea>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-3">
            <label for="dobExLarge" class="form-label">City</label>
            <select class="form-select city-data" id="vendor-city">
              <option>Select City</option>
            </select>
          </div>
          <div class="col mb-3">
            <label for="dobExLarge" class="form-label">State</label>
            <select class="form-select state-data" id="vendor-state">
              <option>Select State</option>
            </select>
          </div>
          <div class="col mb-3">
            <label for="emailExLarge" class="form-label">Pincode</label>
            <input type="text" name="vendor-pincode" id="vendor-pincode" class="form-control" placeholder="Enter Pincode" />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" name="set_product" class="set_product">
        <button type="submit" class="btn btn-primary add-vendor-save">Save changes</button>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- add customer model -->
<div class="modal fade" id="modalcustomeradd" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">Add Customer</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
            <form action="" class="add-product-form">
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Customer Name</label>
            <input type="text" id="customer-name" class="form-control" placeholder="Enter Customer Name" />
          </div>
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Customer Contact</label>
            <input type="number" id="customer-contact" class="form-control" placeholder="Enter Customer Contact" />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Customer Email</label>
            <input type="text" id="customer-email" class="form-control" placeholder="Enter Customer Email" />
          </div>
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Customer Address</label>
            <textarea class="form-control" id="customer-address" placeholder="Enter Customer Address" /></textarea>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-3">
            <label for="dobExLarge" class="form-label">City</label>
            <select class="form-select city-data" id="customer-city">
              <option>Select City</option>
            </select>
          </div>
          <div class="col mb-3">
            <label for="dobExLarge" class="form-label">State</label>
            <select class="form-select state-data" id="customer-state">
              <option>Select State</option>
            </select>
          </div>
          <div class="col mb-3">
            <label for="emailExLarge" class="form-label">Pincode</label>
            <input type="text" name="customer-pincode" id="customer-pincode" class="form-control" placeholder="Enter Pincode" />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" name="set_product" class="set_product">
        <button type="submit" class="btn btn-primary add-customer-save">Save changes</button>
            </form>
      </div>
    </div>
  </div>
</div>
