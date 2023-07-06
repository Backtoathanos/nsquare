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

    <title>Purchase & Sale - N-Square</title>

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
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap");

      /** {
        margin: 0;
        padding: 0;
        font-family: "Istok Web", sans-serif;
      }*/

      /*body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #212121;
      }*/

      .product-card {
        position: relative;
        width: 320px;
        height: 480px;
        background: #191919;
        border-radius: 20px;
        overflow: hidden;
      }

      .product-card::before {
        content: "";
        position: absolute;
        top: -50%;
        width: 100%;
        height: 100%;
        background: #ffce00;
        transform: skewY(345deg);
        transition: 0.5s;
      }

      .product-card:hover::before {
        top: -70%;
        transform: skewY(390deg);
      }

      .product-card::after {
        content: "CORSAIR";
        position: absolute;
        bottom: 0;
        left: 0;
        font-weight: 600;
        font-size: 6em;
        color: rgba(0, 0, 0, 0.1);
      }

      .product-card .imgBox {
        position: absolute;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 20px;
        z-index: 1;
      }
      /*
      .card .imgBox img {
          max-width: 100%;
          
          transition: .5s;
      }

      .card:hover .imgBox img {
          max-width: 50%;
            
      }
      */
      .product-card .contentBox {
        position: relative;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        z-index: 2;
      }

      .product-card .contentBox h3 {
        font-size: 18px;
        color: white;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .product-card .contentBox .price {
        font-size: 24px;
        color: white;
        font-weight: 700;
        letter-spacing: 1px;
      }

      .product-card .contentBox .buy {
        position: relative;
        top: 100px;
        opacity: 0;
        padding: 10px 30px;
        margin-top: 15px;
        color: #000000;
        text-decoration: none;
        background: #ffce00;
        border-radius: 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: 0.5s;
      }

      .product-card:hover .contentBox .buy {
        top: 0;
        opacity: 1;
      }

      .product {
        height: 300px;
        width: auto;
      }
    </style>
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
            <li class="menu-item">
              <a href="master.php" class="menu-link">
                <i class='menu-icon tf-icons bx bx-hard-hat'></i>
                <div data-i18n="Analytics">Master</div>
              </a>
            </li>
            <li class="menu-item active">
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
                                  class="nav-link active"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-top-purchase"
                                  aria-controls="navs-top-purchase"
                                  aria-selected="true"
                                >
                                  Purchase
                                </button>
                              </li>
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-top-sale"
                                  aria-controls="navs-top-sale"
                                  aria-selected="false"
                                >
                                  Sale
                                </button>
                              </li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane fade show active" id="navs-top-purchase" role="tabpanel">
                                <div class="content-wrapper">
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                    <div class="card">
                                      <h5 class="card-header">All Purchase</h5>
                                      <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalpurchaseadd"
                                      >
                                        Add Purchase
                                      </button>
                                      <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>Purchase Id</th>
                                                <th>Purchase Date</th>
                                                <th>Vendor Name</th>
                                                <th>Receipt No</th>
                                                <th>Receipt Date</th>
                                                <th>Amount</th>
                                                <th>Dues</th>
                                                <th>Status</th>
                                                <th>Created Date</th>
                                                <th>Created By</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0 purchase-table-result">
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
                              <div class="tab-pane fade" id="navs-top-sale" role="tabpanel">
                                <div class="content-wrapper">
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                    <div class="card">
                                      <h5 class="card-header">All Sale</h5>
                                      <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalsaleadd"
                                      >
                                        Add Sale
                                      </button>
                                      <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>Sale Id</th>
                                                <th>Sale Date</th>
                                                <th>Customer Name</th>
                                                <th>Order Type</th>
                                                <th>Order Reference</th>
                                                <th>Amount</th>
                                                <th>Dues</th>
                                                <th>Status</th>
                                                <th>Created Date</th>
                                                <th>Created By</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0 sale-table-result">
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

        // call city status
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

        // call purchase        
        load_purchase();
        function load_purchase(){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), load_purchase:1},
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              var purchase_data='';
              var response=purchase_response;
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else if(purchase_response=="empty"){
                  purchase_data+='<tr><td colspan="6">Empty purchase cart!!!</td></tr>';
              }else{
                if(purchase_response.length==0){
                  purchase_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<purchase_response.length;i++){
                    var status='';

                    if(response[i]['nsquare_purchase_status']==1){
                      status='<span class="badge bg-label-primary me-1">Active</span>';
                    }else{
                      status='<span class="badge bg-label-danger me-1">Inactive</span>';
                    }
                    var created_by=response[i]["nsquare_user_fname"]+ ' ' + response[i]["nsquare_user_lname"];
                    purchase_data+='<tr><td>'+response[i]["nsquare_purchase_id"]+'</td><td>'+response[i]["nsquare_purchase_date"]+'</td><td>'+response[i]["nsquare_vendor_title"]+'</td><td>'+response[i]["nsquare_purchase_recepno"]+'</td><td>'+response[i]["nsquare_purchase_recepdate"]+'</td><td>'+response[i]["purchase_amt"]+'</td><td>'+response[i]["dues"]+'</td><td>'+status+'</td><td>'+response[i]["nsquare_purchase_createdate"]+'</td><td>'+created_by+'</td><td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item view-purchase" id="'+response[i]["nsquare_purchase_id"]+'" href="javascript:void(0);"><i class="bx bx-show-alt"></i> View</a><a class="dropdown-item pay-purchase" id="'+response[i]["nsquare_purchase_id"]+'" href="javascript:void(0);"><i class="bx bx-credit-card"></i> Pay</a><a class="dropdown-item edit-purchase" id="'+response[i]["nsquare_purchase_id"]+'" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item delete-purchase" id="'+response[i]["nsquare_purchase_id"]+'" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td></tr>';
                    
                  }
                }
              }
              $('.purchase-table-result').html(purchase_data); 
            }
          });
        }

        // call vendor
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
                    vendor_data+='<option value="'+response[i]["nsquare_vendor_id"]+'">'+response[i]["nsquare_vendor_title"]+'</option>';
                    
                  }
                }
              }
              $('.vendor-name').html(vendor_data); 
            }
          });
        }

        $('.show-searched-product').hide();
        // search product
        $(document).delegate('.searchproductname', 'focusout', function(e){
          e.preventDefault();
          var pd_name = $(this).val();
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), search_product:1, pd_name:pd_name},
            dataType : "JSON",
            success : function(product_response){
              // console.log(product_response);
              $('.show-searched-product').show();
              var response=product_response;
              var product_data='';
              if(product_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                if(product_response.length==0){
                  product_data+='<div class="col-sm-3 col-xl-3 col-md-3 mb-3">No data found!!!</div>';
                }else{
                  for(var i=0;i<product_response.length;i++){
                    product_data+='<div class="col-sm-3 col-xl-3 col-md-3 mb-3"><div class="product-card"><div class="imgBox"><img src="product_img/'+response[i]["nsquare_product_img_title"]+'" alt="mouse corsair" class="product"></div><div class="contentBox"><h3 style="color:black;background: yellow;border-radius: 12px;padding: 5px;">'+response[i]["nsquare_product_title"]+'</h3><h2 class="price"><input type="number" class="form-control purchase_product_qty'+response[i]["nsquare_product_id"]+'" id="html5-number-input" placeholder="Product Quantity"></h2><h2 class="price"><input type="number" class="form-control purchase_product_price'+response[i]["nsquare_product_id"]+'" id="html5-number-input" placeholder="Product Price"></h2><a href="#" class="buy add-topurchase-cart" id="'+response[i]["nsquare_product_id"]+'">Add</a></div></div></div>';
                  }
                }
              }
              $('.show-searched-product').html(product_data); 
            }
          });
        });

        // call load_purchase_product
        load_purchase_product_cart();
        function load_purchase_product_cart(){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), load_purchase_product:1},
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              var purchase_cart_data='';
              var response=purchase_response;
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else if(purchase_response=="empty"){
                  purchase_cart_data+='<tr><td colspan="6">Empty purchase cart!!!</td></tr>';
              }else{
                if(purchase_response.length==0){
                  purchase_cart_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  var gtotal=0;
                  for(var i=0;i<purchase_response.length;i++){
                    var price = response[i]["price"];
                    var qty = response[i]["quantity"];;
                    var total = response[i]["quantity"] * response[i]["price"];
                    gtotal+=total;
                    total = total.toFixed(2);
                    purchase_cart_data+='<tr><td>'+response[i]["nsquare_product_title"]+'</td><td>'+response[i]["nsquare_product_color"]+'</td><td class="text-right">'+price+'</td><td class="text-right">'+qty+'</td><td class="text-right">'+total+'</td><td><a href="#" class="del_product_purchase_cart" id="'+response[i]["id"]+'" class="text-center">Del</a></td></tr>';
                    
                  }
                  purchase_cart_data+='<tr><td colspan="4"></td><td class="text-right">'+gtotal+'</td><td></td></tr>';
                }
              }
              $('.purchase-product-cart-show').html(purchase_cart_data); 
            }
          });
        }

        // add product to cart
        $(document).delegate('.add-topurchase-cart', 'click', function(e){
          e.preventDefault();
          var product_id = $(this).attr("id");
          var product_qty = $('.purchase_product_qty'+product_id).val();
          var product_price = $('.purchase_product_price'+product_id).val();
           $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), add_pro_purchase_cart:1, product_id:product_id, product_qty:product_qty, product_price:product_price },
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                load_purchase_product_cart();
                alert(purchase_response);
              }
            }
          });
        });

        // delete product from purchase cart
        $(document).delegate('.del_product_purchase_cart', 'click', function(e){
          e.preventDefault();
          var product_id = $(this).attr("id");
           $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), delete_pro_purchase_cart:1, product_id:product_id },
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                alert(purchase_response);
                load_purchase_product_cart();
              }
            }
          });
        });
        
        // save purchase
        $(document).delegate('.add-purchase-save', 'click', function(e){
          e.preventDefault();
          var vendor_id=$('.vendor-name').val();
          var recipet_no=$('.recept-no').val();
          var recipet_date=$('.recept-date').val();
          var termsandc=$('.termsandcond').val();
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), add_purchase_save:1, vendor_id:vendor_id, recipet_no:recipet_no, recipet_date:recipet_date, termsandc:termsandc },
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else if(purchase_response=="empty"){
                alert("Please add item in a cart first!!!");
              }else if(purchase_response=="error"){
                alert("Something went wrong, please check try again!!!");
              }else{
                alert(purchase_response);
                load_purchase_product_cart();
                load_purchase();
                $('#modalpurchaseadd').modal('hide');
              }
            }
          });
        });

        // call for edit purchase
        $(document).delegate('.pay-purchase', 'click', function(e){
          e.preventDefault();
          var purchase_id=$(this).attr('id');
          $('.set_purchase_id').val(purchase_id);
          $('#modalpaypurchase').modal('show');
        });

        // save purchase amount
        $(document).delegate('.add-purchase-pay-save', 'click', function(e){
          e.preventDefault();
          var purchase_id = $('.set_purchase_id').val();
          var purchase_type = $('.payment-type').val();
          var purchase_amount = $('.payment-amt').val();
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), purchase_id:purchase_id, purchase_type:purchase_type, purchase_amount:purchase_amount, set_purchase_payment:1},
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              purchase_response=purchase_response.trim();
              if(purchase_response=="success"){
                alert("Purchase payment saved.");
                $('#modalpaypurchase').modal('hide');
                load_purchase();
              } else if (purchase_response == "error"){
               alert("Hmmm!!! Something went wrong. Payment not saved.");
              } else if (purchase_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert(purchase_response);
              }
            } 
          });
        });

        // delete customer        
        $(document).delegate('.delete-purchase', 'click', function(e){
          e.preventDefault();
          var purchase_id=$(this).attr('id');
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), purchase_id:purchase_id, delete_purchase:1},
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(category_response);
              purchase_response=purchase_response.trim();
              if(purchase_response=="success"){
                alert("Purchase deleted.");
                load_purchase();
              } else if (purchase_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Purchase not deleted.");
              }
            } 
          });
        });

        // call for show purchase
        $(document).delegate('.view-purchase', 'click', function(e){
          e.preventDefault();
          var purchase_id=$(this).attr('id');
          $('.set_purchase_id').val(purchase_id);
          call_purchase(purchase_id);
          $('#modalviewpurchase').modal('show');
        });

        // call purchase        
        function call_purchase(purchase_id){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), call_purchase:1, purchase_id:purchase_id},
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              var purchase_data='';
              var response=purchase_response;
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else if(purchase_response=="empty"){
                  purchase_data+='<tr><td colspan="6">Empty purchase cart!!!</td></tr>';
              }else{
                if(purchase_response.length==0){
                  purchase_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<purchase_response.length;i++){
                    var price=response[i]["nsquare_purchase_items_product_price"];
                    var qty=response[i]["nsquare_purchase_items_product_qty"];
                    var total=price * qty;
                    purchase_data+='<tr><td>'+response[i]["nsquare_product_title"]+'</td><td>'+response[i]["nsquare_product_color"]+'</td><td class="text-right">'+qty+'</td><td class="text-right">'+price+'</td><td class="text-right">'+total+'</td></tr>';
                    
                  }
                  purchase_data+='<tr><td colspan="4" class="text-center">Total</td><td class="text-right">'+total+'</td></tr>';

                }
              }
              $('.call-purchase-table-result').html(purchase_data); 
            }
          });
        }

        // load customer
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
                    customer_data+='<option value="'+response[i]["nsquare_customer_id"]+'">'+response[i]["nsquare_customer_title"]+'</option>';
                  }
                }
              }
              $('.customer-name').html(customer_data); 
            }
          });
        }

        // call purchase        
        load_sale();
        function load_sale(){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), load_sale:1},
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              var purchase_data='';
              var response=purchase_response;
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else if(purchase_response=="empty"){
                  purchase_data+='<tr><td colspan="6">Empty sale cart!!!</td></tr>';
              }else{
                if(purchase_response.length==0){
                  purchase_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<purchase_response.length;i++){
                    var status='';

                    if(response[i]['nsquare_sale_status']==1){
                      status='<span class="badge bg-label-primary me-1">Active</span>';
                    }else{
                      status='<span class="badge bg-label-danger me-1">Inactive</span>';
                    }
                    var created_by=response[i]["nsquare_user_fname"]+ ' ' + response[i]["nsquare_user_lname"];
                    purchase_data+='<tr><td>'+response[i]["nsquare_sale_id"]+'</td><td>'+response[i]["nsquare_sale_date"]+'</td><td>'+response[i]["nsquare_customer_title"]+'</td><td>'+response[i]["nsquare_sale_ordertype"]+'</td><td>'+response[i]["nsquare_sale_status_orderid"]+'</td><td>'+response[i]["purchase_amt"]+'</td><td>'+response[i]["dues"]+'</td><td>'+status+'</td><td>'+response[i]["nsquare_sale_createdate"]+'</td><td>'+created_by+'</td><td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item view-sale" id="'+response[i]["nsquare_sale_id"]+'" href="javascript:void(0);"><i class="bx bx-show-alt"></i> View</a><a class="dropdown-item pay-sale" id="'+response[i]["nsquare_sale_id"]+'" href="javascript:void(0);"><i class="bx bx-credit-card"></i> Pay</a><a class="dropdown-item edit-sale" id="'+response[i]["nsquare_sale_id"]+'" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item delete-sale" id="'+response[i]["nsquare_sale_id"]+'" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td></tr>';
                    
                  }
                }
              }
              $('.sale-table-result').html(purchase_data); 
            }
          });
        }

        $('.show-searched-product-sale').hide();
        // search product
        $(document).delegate('.searchproductnamesale', 'focusout', function(e){
          e.preventDefault();
          var pd_name = $(this).val();
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), search_product:1, pd_name:pd_name},
            dataType : "JSON",
            success : function(product_response){
              // console.log(product_response);
              $('.show-searched-product-sale').show();
              var response=product_response;
              var product_data='';
              if(product_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                if(product_response.length==0){
                  product_data+='<div class="col-sm-3 col-xl-3 col-md-3 mb-3">No data found!!!</div>';
                }else{
                  for(var i=0;i<product_response.length;i++){
                    product_data+='<div class="col-sm-3 col-xl-3 col-md-3 mb-3"><div class="product-card"><div class="imgBox"><img src="product_img/'+response[i]["nsquare_product_img_title"]+'" alt="mouse corsair" class="product"></div><div class="contentBox"><h3 style="color:black;background: yellow;border-radius: 12px;padding: 5px;">'+response[i]["nsquare_product_title"]+'</h3><h2 class="price"><input type="number" class="form-control sale_product_price'+response[i]["nsquare_product_id"]+'" id="html5-number-input" placeholder="Product Price" value="'+response[i]["nsquare_product_init_price"]+'"></h2><h2 class="price"><input type="number" class="form-control sale_product_qty'+response[i]["nsquare_product_id"]+'" id="html5-number-input" placeholder="Product Quantity" value="1"></h2><a href="#" class="buy add-tosale-cart" id="'+response[i]["nsquare_product_id"]+'">Add</a></div></div></div>';
                  }
                }
              }
              $('.show-searched-product-sale').html(product_data); 
            }
          });
        });

        // call load_purchase_product
        load_sale_product_cart();
        function load_sale_product_cart(){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), load_sale_product:1},
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              var purchase_cart_data='';
              var response=purchase_response;
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else if(purchase_response=="empty"){
                  purchase_cart_data+='<tr><td colspan="6">Empty sale cart!!!</td></tr>';
              }else{
                if(purchase_response.length==0){
                  purchase_cart_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<purchase_response.length;i++){
                    var price = response[i]["price"];
                    var qty = response[i]["quantity"];;
                    var total = response[i]["quantity"] * response[i]["price"];
                    total = total.toFixed(2);
                    purchase_cart_data+='<tr><td>'+response[i]["nsquare_product_title"]+'</td><td>'+response[i]["nsquare_product_color"]+'</td><td class="text-right">'+price+'</td><td class="text-right">'+qty+'</td><td class="text-right">'+total+'</td><td><a href="#" class="del_product_sale_cart" id="'+response[i]["id"]+'" class="text-center">Del</a></td></tr>';
                    
                  }
                }
              }
              $('.sale-product-cart-show').html(purchase_cart_data); 
            }
          });
        }

        // add product to cart
        $(document).delegate('.add-tosale-cart', 'click', function(e){
          e.preventDefault();
          var product_id = $(this).attr("id");
          var product_qty = $('.sale_product_qty'+product_id).val();
          var product_price = $('.sale_product_price'+product_id).val();
           $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), add_pro_sale_cart:1, product_id:product_id, product_qty:product_qty, product_price:product_price },
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                load_sale_product_cart();
                alert(purchase_response);
              }
            }
          });
        });

        // delete product from cart
        $(document).delegate('.del_product_sale_cart', 'click', function(e){
          e.preventDefault();
          var product_id = $(this).attr("id");
           $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), delete_pro_sale_cart:1, product_id:product_id },
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else{
                alert(purchase_response);
                load_sale_product_cart();
              }
            }
          });
        });
        
        // save sale
        $(document).delegate('.add-sale-save', 'click', function(e){
          e.preventDefault();
          var customer_id=$('.customer-name').val();
          var termsandc=$('.saleermsandcond').val();
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), add_sale_save:1, customer_id:customer_id, termsandc:termsandc },
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(purchase_response);
              if(purchase_response=="success"){
                alert("Sale saved.");
                load_sale_product_cart();
                load_sale();
                $('#modalsaleadd').modal('hide');
              }else if(purchase_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else if(purchase_response=="empty"){
                alert("Please add item in a cart first!!!");
              }else if(purchase_response=="error"){
                alert("Something went wrong, please check try again!!!");
              }else{
                alert("Something went wrong. Please check & try again.");
              }
            }
          });
        });

        // call for edit sale
        $(document).delegate('.pay-sale', 'click', function(e){
          e.preventDefault();
          var sale_id=$(this).attr('id');
          $('.set_sale_id').val(sale_id);
          $('#modalpaysale').modal('show');
        });

        // save sale amount
        $(document).delegate('.add-sale-pay-save', 'click', function(e){
          e.preventDefault();
          var sale_id = $('.set_sale_id').val();
          var sale_type = $('.sale-payment-type').val();
          var sale_amount = $('.sale-payment-amt').val();
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), sale_id:sale_id, sale_type:sale_type, sale_amount:sale_amount, set_sale_payment:1},
            dataType : "JSON",
            success : function(sale_response){
              // console.log(sale_response);
              sale_response=sale_response.trim();
              if(sale_response=="success"){
                alert("Sale payment saved.");
                $('#modalpaysale').modal('hide');
                load_sale();
              } else if (sale_response == "error"){
               alert("Hmmm!!! Something went wrong. Payment not saved.");
              } else if (sale_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert(sale_response);
              }
            } 
          });
        });

        // delete customer        
        $(document).delegate('.delete-sale', 'click', function(e){
          e.preventDefault();
          var sale_id=$(this).attr('id');
          $.ajax({
            // headers : { "Accept": "application/json", "Authorization": "OAuth oauth_token=ACCESSTOKEN"},
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), sale_id:sale_id, delete_sale:1},
            dataType : "JSON",
            success : function(purchase_response){
              // console.log(category_response);
              purchase_response=purchase_response.trim();
              if(purchase_response=="success"){
                alert("Sale deleted.");
                load_sale();
              } else if (purchase_response == "InvalidToken"){
               alert("Please login!!!");
               window.location.reload();
              }else{
               alert("Hmmm!!! Something went wrong. Sale not deleted.");
              }
            } 
          });
        });

        // call for show purchase
        $(document).delegate('.view-sale', 'click', function(e){
          e.preventDefault();
          var sale_id=$(this).attr('id');
          $('.set_sale_id').val(sale_id);
          call_sale(sale_id);
          $('#modalviewsale').modal('show');
        });

        // call sale        
        function call_sale(sale_id){
          $.ajax({
            url : "api/server.php",
            method : "POST",
            data : { Token:getCookie('Token'), call_sale:1, sale_id:sale_id},
            dataType : "JSON",
            success : function(sale_response){
              // console.log(sale_response);
              var purchase_data='';
              var response=sale_response;
              if(sale_response=="InvalidToken"){
                alert("Please login!!!");
                window.location.reload();
              }else if(sale_response=="empty"){
                  purchase_data+='<tr><td colspan="6">Empty sale!!!</td></tr>';
              }else{
                if(sale_response.length==0){
                  purchase_data+='<tr><td colspan="6">No data found!!!</td></tr>';
                }else{
                  for(var i=0;i<sale_response.length;i++){
                    var price=response[i]["nsquare_sale_items_product_price"];
                    var qty=response[i]["nsquare_sale_items_product_qty"];
                    var total=price * qty;
                    purchase_data+='<tr><td>'+response[i]["nsquare_product_title"]+'</td><td>'+response[i]["nsquare_product_color"]+'</td><td class="text-right">'+qty+'</td><td class="text-right">'+price+'</td><td class="text-right">'+total+'</td></tr>';
                    
                  }
                  purchase_data+='<tr><td colspan="4" class="text-center">Total</td><td class="text-right">'+total+'</td></tr>';

                }
              }
              $('.call-sale-table-result').html(purchase_data); 
            }
          });
        }
      });

    </script>

  </body>
</html>

<!-- add purchase model -->
<div class="modal fade" id="modalpurchaseadd" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">Add Purchase</h5>
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
            <select class="form-select vendor-name" id="vendor-name">
              <option>Select Vendor</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Reciept No</label>
            <input type="text" class="form-control recept-no" placeholder="Enter Reciept Number">
          </div>
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Reciept Date</label>
            <input type="date" class="form-control recept-date">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Add Product</label>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">By Product Name</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input
                      id="searchproductname"
                      name="searchproductname"
                      type="text"
                      placeholder="Product Name"
                      class="form-control validate searchproductname"
                      required
                    />
                  </td>
                  <td>
                    <a style="font-size: 20px;background: yellow;border-radius: 50%;padding: 5px;margin: 0;" href="#" class="upward">
                      <i class="fas fa-arrow-up"></i>
                    </a>
                    <a style="font-size: 20px;background: yellow;border-radius: 50%;padding: 5px;margin: 0; display: none;" href="#" class="downward">
                      <i class="fas fa-arrow-down"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row show-searched-product">
          <div class="col-sm-4 col-xl-4 col-md-4 mb-3">
            <div class="head-card">
              <div class="card">
                <div class="imgBox">
                  <img src="#" alt="mouse corsair" class="mouse">
                </div>
                <div class="contentBox">
                  <h3>Mouse Corsair M65</h3>
                  <h2 class="price">61.<small>98</small> €</h2>
                  <a href="#" class="buy">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product Colour</th>
                  <th scope="col">Product Quantity</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="purchase-product-cart-show">
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Terms & Conditions</label>
            <textarea class="form-control termsandcond" placeholder="Enter Terms & Conditions" /></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" name="set_product" class="set_product">
        <button type="submit" class="btn btn-primary add-purchase-save">Save changes</button>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- pay purchase modal -->
<div class="modal fade" id="modalpaypurchase" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">Add Purchase Payment</h5>
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
            <label for="nameExLarge" class="form-label">Payment Type</label>
            <input type="text" class="form-control payment-type" placeholder="Enter Payment Type" value="Advance">
          </div>
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Payment Amount</label>
            <input type="number" class="form-control payment-amt">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" class="set_purchase_id">
        <button type="submit" class="btn btn-primary add-purchase-pay-save">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- view purchase modal -->
<div class="modal fade" id="modalviewpurchase" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">View Purchase</h5>
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
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Product Color</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0 call-purchase-table-result">
                </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" class="set_purchase_id">
        <button type="submit" class="btn btn-primary add-purchase-pay-save">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- add sale model -->
<div class="modal fade" id="modalsaleadd" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">Add Sale</h5>
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
            <label for="nameExLarge" class="form-label">Customer Name</label>
            <select class="form-select customer-name" id="customer-name">
              <option>Select Customer</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Add Product</label>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">By Product Name</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input
                      id="searchproductnamesale"
                      name="searchproductnamesale"
                      type="text"
                      placeholder="Product Name"
                      class="form-control validate searchproductnamesale"
                      required
                    />
                  </td>
                  <td>
                    <a style="font-size: 20px;background: yellow;border-radius: 50%;padding: 5px;margin: 0;" href="#" class="upward">
                      <i class="fas fa-arrow-up"></i>
                    </a>
                    <a style="font-size: 20px;background: yellow;border-radius: 50%;padding: 5px;margin: 0; display: none;" href="#" class="downward">
                      <i class="fas fa-arrow-down"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row show-searched-product-sale">
          <div class="col-sm-4 col-xl-4 col-md-4 mb-3">Search product
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product Colour</th>
                  <th scope="col">Product Quantity</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="sale-product-cart-show">
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Terms & Conditions</label>
            <textarea class="form-control saleermsandcond" placeholder="Enter Terms & Conditions" /></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" name="set_product" class="set_product">
        <button type="submit" class="btn btn-primary add-sale-save">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- pay sale modal -->
<div class="modal fade" id="modalpaysale" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">Add Sale Payment</h5>
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
            <label for="nameExLarge" class="form-label">Payment Type</label>
            <input type="text" class="form-control sale-payment-type" placeholder="Enter Payment Type" value="Advance">
          </div>
          <div class="col mb-3">
            <label for="nameExLarge" class="form-label">Payment Amount</label>
            <input type="number" class="form-control sale-payment-amt">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" class="set_sale_id">
        <button type="submit" class="btn btn-primary add-sale-pay-save">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- view purchase modal -->
<div class="modal fade" id="modalviewsale" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel4">View Sale</h5>
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
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Product Color</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0 call-sale-table-result">
                </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <input type="hidden" class="set_sale_id">
        <button type="submit" class="btn btn-primary add-sale-pay-save">Save changes</button>
      </div>
    </div>
  </div>
</div>
