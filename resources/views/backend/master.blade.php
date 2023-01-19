<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>E-Commerce</title>

    <!-- vendor css -->
    <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/select/1.5.0/css/select.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/starlight.css') }}">

    {{-- Toster css --}}
    {{-- <link rel="stylesheet" href="iziToast.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">


    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('9baac13b73b47315f084', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('admin-notify');
        channel.bind('notification', function(data) {
            // $("#notify").html(data);
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: JSON.stringify(data.message),
                showConfirmButton: false,
                timer: 5000
            });
        });
    </script>

    {{-- <script>
        $(document).ready(function() {

            iziToast.show({
                title: 'Hey',
                message: 'What would you like to add?'
            });
        })
        // iziToast.show({
        //     title: 'Hey',
        //     message: 'What would you like to add?'
        // });
        Toast.fire({
            icon: 'success',
            title: 'hii'
        });
    </script> --}}

</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> E-Commerce</a></div>
    <div class="sl-sideleft">

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href=" {{ url('/dashboard') }} " class="sl-menu-link @yield('dashboard')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-home tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->


            <a href="#"
                class="sl-menu-link @yield('add_category') @yield('view_category') @yield('add_subcategory') @yield('view_subcategory')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-tasks tx-20"></i>
                    <span class="menu-item-label">Category</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('CategoryAdd') }}" class="nav-link @yield('add_category')">Add
                        Category</a></li>
                <li class="nav-item"><a href="{{ url('category-list') }}" class="nav-link @yield('view_category')">View
                        Category</a></li>
                <li class="nav-item"><a href="{{ url('subcategory-from') }}" class="nav-link @yield('add_S_category')">Add
                        SubCategory</a></li>
                <li class="nav-item"><a href="{{ url('subcategory-view') }}" class="nav-link @yield('view_subcategory')">View
                        SubCategory</a></li>
                <li class="nav-item"><a href="{{ url('delete-restore') }}" class="nav-link">Delete Or Restore
                        Category</a></li>

            </ul>



            <a href="{{ route('users') }}" class="sl-menu-link @yield('users')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-person-stalker tx-20"></i>
                    <span class="menu-item-label">All Users</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->


            <a href="{{ route('customers') }}" class="sl-menu-link @yield('customers')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-person-stalker tx-20"></i>
                    <span class="menu-item-label">Customers</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="" class="sl-menu-link @yield('products') @yield('products_dlt_res')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-database tx-20"></i>
                    <span class="menu-item-label">Products</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a>
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('products') }}" class="nav-link @yield('products')">View
                        Product</a></li>
                <li class="nav-item"><a href="{{ route('ProductAdd') }}" class="nav-link @yield('productsAdd')">Add
                        Product</a></li>
                <li class="nav-item"><a href="{{ route('ProductDeleteRestore') }}"
                        class="nav-link @yield('products_dlt_res')">Delete Or Restore Product</a></li>
            </ul>
            <!-- sl-menu-link -->



            <a href="{{ route('Store') }}" class="sl-menu-link @yield('store')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-shopping-bag tx-20"></i>
                    <span class="menu-item-label">Store</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="{{ route('orders') }}" class="sl-menu-link @yield('orders')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-dollar tx-20"></i>
                    <span class="menu-item-label">Orders</span>
                </div>
            </a>
            <!-- sl-menu-link -->
            <a href="{{ route('ShippingList') }}" class="sl-menu-link @yield('shipping')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-truck tx-20"></i>
                    <span class="menu-item-label">Shipping</span>
                </div>
            </a>
            <!-- sl-menu-link -->

            <a href="{{ route('Role') }}" class="sl-menu-link @yield('role')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon icon fa fa-user-circle tx-20"></i>
                    <span class="menu-item-label">Role Manager</span>
                </div>
            </a>
            <!-- sl-menu-link -->

            <a href="{{ route('Website') }}" class="sl-menu-link @yield('web')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon icon fa fa-globe tx-20"></i>
                    <span class="menu-item-label">Website Settings</span>
                </div>
            </a>



            <a href="{{ route('Coupons') }}" class="sl-menu-link @yield('coupons')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon icon fa fa-gift tx-20"></i>
                    <span class="menu-item-label">Coupons</span>
                </div>
            </a>



            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
                class="sl-menu-link">
                <div class="sl-menu-item">

                    <i class="menu-item-icon icon ion-power tx-24"></i>
                    <span class="menu-item-label">{{ __('Log Out') }}</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>



        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->













    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">

            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">{{ Auth::user()->name }}</span>

                        <img src="{{ asset('Pro_images/' . Auth::user()->id . '/' . Auth::user()->images) }}"
                            class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="{{ route('UsersEdit', Auth::user()->id) }}"><i
                                        class="icon ion-ios-person-outline"></i> Edit Profile</a></li>

                            <li>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="icon ion-power"></i>{{ __('Sign Out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>

                            </li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-bell-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger"></span>
                    <!-- end: if statement -->
                </a>
            </div><!-- navicon-right -->
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
        <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
            </li>
        </ul><!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
                <div class="media-list">
                    <!-- loop starts here -->

                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="{{ asset('images/avater.jpg') }}" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">

                                </p>
                                <span class="d-block tx-11 tx-gray-500"></span>
                                <p class="tx-13 mg-t-10 mg-b-0"></p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <!-- loop ends here -->




                </div><!-- media-list -->
                <div class="pd-15">
                    <a href=""
                        class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View
                        More Messages</a>
                </div>
            </div><!-- #messages -->

            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
                <div class="media-list" id="notify">
                    <!-- loop starts here -->
                    @include('backend.notification')
                    <!-- loop ends here -->
                    {{-- <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                        Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                        Social Network</strong></p>
                                <span class="tx-12">October 02, 2017 12:44am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">October 01, 2017 10:20pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                        Erving</strong> wants to connect with you on your conversation with <strong
                                        class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                <span class="tx-12">October 01, 2017 6:08pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                        Bungaos</strong> tagged you and 12 others in a post.</p>
                                <span class="tx-12">September 27, 2017 6:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">September 28, 2017 11:30pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                        Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                        Great Pyramid</strong></p>
                                <span class="tx-12">September 26, 2017 11:01am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                        Erving</strong> wants to connect with you on your conversation with <strong
                                        class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                <span class="tx-12">September 23, 2017 9:19pm</span>
                            </div>
                        </div><!-- media -->
                    </a> --}}
                </div><!-- media-list -->
            </div><!-- #notifications -->

        </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>


        <!--
      <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
          <h3 class="text-center text-danger">Autocomplete Search Box!</h3><hr>
          <div class="form-group">
              <h4>Type by id, title and description!</h4>
              <input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''">
          </div>
          <div id="search_list"></div>
      </div>
      <div class="col-lg-3"></div>


  </div> -->




        @yield('content')


        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
                <div>Made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5"
                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i
                        class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5"
                    href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i
                        class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('admin/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('admin/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('admin/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/lib/flot-spline/jquery.flot.spline.js') }}"></script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>


    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>

    <script src="{{ asset('admin/js/starlight.js') }}"></script>
    <script src="{{ asset('admin/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>

    {{-- Toster js --}}
    {{-- <script src="iziToast.min.js" type="text/javascript"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- test jquery -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            // search
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "search",
                    type: "GET",
                    data: {
                        'search': query
                    },
                    success: function(data) {
                        $('#search_list').html(data);
                    }
                });
                //end of ajax call
            });

            // notification
            setInterval(() => {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : 'get_notification',
                    type : 'get',
                    success : function(data){
                        // if(data == ''){
                        //     alert("nai")
                        // }else{
                        //     alert('ace')
                        // }
                        $("#notify").html(data);
                    },error : function(){
                        // alert("Error")
                    }
                })
            }, 1000);
        });
    </script>



    {{-- <script>
        $(document).ready(function() {
            // alert();
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "okk",
                showConfirmButton: false,
                timer: 1500
            });

            // Toast.fire({
            //     icon: 'success',
            //     title: 'hii'
            // });



            // iziToast.show({
            //     title: 'Hey',
            //     message: 'What would you like to add?'
            // });
        })
        // iziToast.show({
        //     title: 'Hey',
        //     message: 'What would you like to add?'
        // // });
        // Toast.fire({
        //     icon: 'success',
        //     title: 'hii'
        // });
    </script> --}}



</body>

</html>
