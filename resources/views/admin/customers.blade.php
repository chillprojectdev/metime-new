@extends('admin.layouts.app')

@section('style')
    <!-- Data Table CSS -->
    <link href="assets/scrooge/vendors/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/scrooge/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customers</li>
            </ol>
        </nav>
            <!-- /Breadcrumb -->
        <!-- Container -->
        <div class="container">
            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Customers Table</h4>
            </div>
            <!-- /Title -->
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Customers</h5> 
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <table id="dt_customer" class="table table-hover w-100 pb-30">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>No Hp</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_customes">
                                          
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>No Hp</th>
                                                <th>Address</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->

        <!-- Footer -->
        <div class="hk-footer-wrap container">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p><a href="https://hencework.com/" class="text-dark" target="_blank">Metime</a> © 2021</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Follow us</p>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->
@endsection

@section('script')
    <!-- jQuery -->
    <script src="assets/scrooge/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/scrooge/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/scrooge/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="assets/scrooge/dist/js/jquery.slimscroll.js"></script>

    <!-- Data Table JavaScript -->
    <script src="assets/scrooge/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/scrooge/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/scrooge/vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="assets/scrooge/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/scrooge/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/scrooge/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/scrooge/vendors/jszip/dist/jszip.min.js"></script>
    <script src="assets/scrooge/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/scrooge/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/scrooge/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/scrooge/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/scrooge/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/scrooge/dist/js/dataTables-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="assets/scrooge/dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="assets/scrooge/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Toggles JavaScript -->
    <script src="assets/scrooge/vendors/jquery-toggles/toggles.min.js"></script>
    <script src="assets/scrooge/dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="assets/scrooge/dist/js/init.js"></script>

    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <script>
         var config = {
            apiKey: "{{ config('services.firebase.api_key') }}",
            authDomain: "{{ config('services.firebase.auth_domain') }}",
            databaseURL: "{{ config('services.firebase.database_url') }}",
            storageBucket: "{{ config('services.firebase.storage_bucket') }}",
        };
        firebase.initializeApp(config);
        var database = firebase.database();
        var lastIndex = 0;
        firebase.database().ref('customers/').on('value', function (snapshot) {
            var value = snapshot.val();
            var htmls = [];
            var data = [];
            $.each(value, function (index, value) {
                if (value) {
                    // htmls.push('<tr>\
                    //     <td>' + value.first_name + '</td>\
                    //     <td>' + value.last_name + '</td>\
                    //     <td>' + value.email + '</td>\
                    //     <td>' + value.gender + '</td>\
                    //     <td>' + value.no_hp + '</td>\
                    //     <td>' + value.address + '</td>\
            	    // </tr>');
                    data.push(
                        [
                            value.first_name,
                            value.last_name,
                            value.email,
                            value.gender,
                            value.no_hp,
                            value.address
                        ]
                    );
                }
                lastIndex = index;
            });
            //$('#tbody_customes').html(htmls);
            $('#dt_customer').DataTable({
                responsive: true,
                data: data,
                dom: 'Bfrtip',
                buttons: [
                    {
                        text: 'Add',
                        action: function (e, dt, node, config) {
                            console.log({e, dt, node, config});
                        }
                    }
                ]
            });
        });
    </script>

@endsection