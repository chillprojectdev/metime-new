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
                <li class="breadcrumb-item active" aria-current="page">Treatmens</li>
            </ol>
        </nav>
            <!-- /Breadcrumb -->
        <!-- Container -->
        <div class="container">
            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Treatments Table</h4>
            </div>
            <!-- /Title -->
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Treatments</h5> 
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <table id="dt_treatments" class="table table-hover w-100 pb-30">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Estimate Time</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_treatments">
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Estimate Time</th>
                                                <th>Price</th>
                                                <th>Action</th>
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

            <!-- dialog modal -->
            <div class="modal fade" id="dialog_treatment" tabindex="-1" role="dialog" aria-labelledby="dialog_treatment" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dialog_treatment_title">Add Treatment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form_treatment" action="#" method="post" enctype="multipart/form-data" novalidate onsubmit="return false">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Treatment">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price (Rp)</label>
                                    <input type="number" name="price" class="form-control" id="price">
                                </div>
                                <div class="form-group">
                                    <label for="time">Time (Min)</label>
                                    <input type="number" name="time" class="form-control" id="time">
                                </div>
                                <div class="form-group">
                                    <label for="time">Image</label>
                                    <input type="file" accept="image/*" name="treatment_img" class="form-control-file" id="treatment_img">
                                </div>
                                <input type="hidden" name="uid" id="treatment_uid">
                                <a id="save_treatment" class="btn btn-danger" onClick = "saveTreatment()">Save</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Container -->

        <div class="modal fade" id="progressModal" tabindex="-1" role="dialog" aria-labelledby="progressModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Progress</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Please Wait
                    <div class="progress">
                        <div class="progress-bar bar" style="width:0%" id=progress_bar role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal message -->
    <div id="modal_message" class="modal fade bd-example-modal-sm" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p id="modal_message_text"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    

    <!-- modal confirm -->
    <div id="modal_confirm" class="modal fade bd-example-modal-sm" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p id="modal_confirm_text"></p>
            <input type="text" id="modal_confirm_action" name="action">
            <input type="text" id="modal_confirm_uid" name="uid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="treatmentConfirm()">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
    </div>

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
        var state_treatment = {
            url: '',
            action: ''
        }

         var config = {
            apiKey: "{{ config('services.firebase.api_key') }}",
            authDomain: "{{ config('services.firebase.auth_domain') }}",
            databaseURL: "{{ config('services.firebase.database_url') }}",
            storageBucket: "{{ config('services.firebase.storage_bucket') }}"
        };
        firebase.initializeApp(config);
        var database = firebase.database();
        var lastIndex = 0;

        $(document).ready(function(){
            console.log('cek');
            firebase.database().ref('treatments/').on('value', function (snapshot) {
                var value = snapshot.val();
                var htmls = [];
                var data = [];
                var i = 0;
                $.each(value, function (index, value) {
                    var uid = index;
                    if (value) {
                        data.push(
                            [
                                index,
                                value.name,
                                value.description,
                                value.time,
                                value.price,
                                '<a onClick="editTreatment(`'+i+'`)" class="pr-10 text-blue" title="" href="javascript:void(0)" data-original-title="Edit"><i class="zmdi zmdi-edit"></i></a><a onClick="showTreatmentConfirmDialog(`delete`,`'+i+'`)" data-id="delete" href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></a>'
                            ]

                        );  
                    }
                    lastIndex = index;
                    i++;
                });
                $('#dt_treatments').DataTable({
                    responsive: true,
                    data: data,
                    dom: 'Bfrtip',
                    buttons: [
                    {
                        text: 'Add',
                        action: function( e, dt, node, config) {
                            addTreatment();
                        }
                        
                    }
                    ],
                    'bDestroy': true
                });
            });

            $('#form_treatment').on('submit', function(e){
                e.preventDefault();
                console.log('submit');
            });

            // $("#save_treatment").click(function(e) {
            //     e.preventDefault();
            //     $("#progressModal").modal('show');
            //     runProgressBar();
            //     //document.getElementById("form_treatment").submit();
            //     // $.ajaxSetup({
            //     //     headers: {
            //     //         'X-CSRF-TOKEN': "{{ csrf_token() }}"
            //     //     }
            //     // });
            //     // $.ajax({
            //     //     url: state_treatment.url,
            //     //     method: 'get',
            //     //     data: {
            //     //         name: $('#name').val(),
            //     //         description: $('#description').val(),
            //     //         price: $('#price').val(),
            //     //         time: $('#time').val(),
            //     //         treatment_img: treatment_img[0],
            //     //         uid: $('#treatment_uid').val()
            //     //     },
            //     //     success: function(result){
            //     //         //var result = eval('('+result+')');
            //     //         console.log('mes: ',result.message);
            //     //         completeProgressBar();
            //     //         if (result.success) {
            //     //             $('#modal_message').modal('show');
            //     //             document.getElementById("modal_message_text").innerHTML=result.message;
            //     //             $("#dialog_treatment").modal('hide');
            //     //             document.getElementById('form_treatment').reset();
            //     //         } else {
            //     //             $('#modal_message').modal('show');
            //     //             document.getElementById("modal_message_text").innerHTML=result.message;
            //     //         }
            //     //     }
            //     // });

                
            // });

            // //reset form
            // $('#dialog_treatment').on('hide.bs.modal', function (event) {
            //     document.getElementById('form_treatment').reset();
            // });

        });


        function saveTreatment() {
            $("#progressModal").modal('show');
            runProgressBar();
            document.getElementById('form_treatment').submit();
            // $('#form_treatment').bind('submit',{
            //         url: state_treatment.url,
            //         onSubmit: function(param){
            //             param._token = '{{ csrf_token() }}';
            //             console.log('subm');
            //             var isValid = $(this).form('validate');
            //             if(!isValid) $.messager.progress('close');
            //             return isValid;
            //         },
            //         success: function(result){
            //             //var result = eval('('+result+')');
            //             completeProgressBar();
            //             if (result.success) {
            //                 $('#modal_message').modal('show');
            //                 document.getElementById("modal_message_text").innerHTML=result.message;
            //                 $("#dialog_treatment").modal('hide');
            //                 document.getElementById('form_treatment').reset();
            //             } else {
            //                 $('#modal_message').modal('show');
            //                 document.getElementById("modal_message_text").innerHTML=result.message;
            //             }
            //         }
            //     });
        }

        function completeProgressBar() {
            var bar = document.getElementById('progress_bar');
            bar.style.width = '100%';
            bar.innerHTML = '100%';
            $("#progressModal").modal('hide');

            //make default
            bar.style.width = 0;
            bar.innerHTML = 0;

        }

        function runProgressBar(){
           var bar = document.getElementById('progress_bar');
           var value = parseInt(bar.style.width);
           if (value < 80) {
               value += 10;
                bar.style.width = value+'%';
                bar.innerHTML = value+'%';
                setTimeout(arguments.callee, 200);
           }
        }

        function addTreatment() {
            $("#dialog_treatment").modal();
            state_treatment.url = "{{ route('admin.createTreatment') }}";
        }

        function editTreatment(i) {
            
            var table = $('#dt_treatments').DataTable();
            rows = table.rows(i).data();
            $('#name').val(rows[0][1]);
            $('#description').val(rows[0][2]);
            $('#price').val(rows[0][3]);
            $('#time').val(rows[0][4]);
            $('#treatment_uid').val(rows[0][0]);
            document.getElementById('dialog_treatment_title').innerHTML = 'Edit - '+rows[0][0];
            $('#dialog_treatment').modal('show');

            state_treatment.url = "{{ route('admin.updateTreatment') }}";
        }

        function deleteTreatment(uid) {
            $("#progressModal").modal('show');
            runProgressBar();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

            $.ajax({
                url: "{{ route('admin.deleteTreatment') }}",
                method: 'post',
                data: {
                    uid: uid
                },
                success: function(result){
                    //var result = eval('('+result+')');
                    console.log('mes: ',result.message);
                    completeProgressBar();
                    if (result.success) {
                        $('#modal_message').modal('show');
                        document.getElementById("modal_message_text").innerHTML=result.message;
                        $("#dialog_treatment").modal('hide');
                        document.getElementById('form_treatment').reset();
                    } else {
                        $('#modal_message').modal('show');
                        document.getElementById("modal_message_text").innerHTML=result.message;
                    }
                }
            });
        }

        function treatmentConfirm(act, i) {
            var action = act != null ? act : $('#modal_confirmation_action').val();
            var index = i != null ? i : $('#modal_confirmation_uid').val();

            var table = $('#dt_treatments').DataTable();
            rows = table.rows(index).data();
            var uid = rows[0][0];
            switch(action) {
                case 'delete':
                    deleteTreatment(uid);
                break;
                default: null;
            }
        }

        // function saveTreatment() {
        //     $.ajaxSetup({
        //           headers: {
        //               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //           }
        //     });
        //     $.ajax({
        //         type="POST",
        //         url: state_treatment.url,
        //         data: {

        //         }
        //     })
        // }

        function showTreatmentConfirmDialog(action, uid) {
            state_treatment.action = action;
            $('#modal_confirm_action').val('delete');
            $('#modal_confirm_uid').val(uid);
            var msg = action == 'delete' ? 'delete' : 'do';
            document.getElementById('modal_confirm_text').innerHTML = "Are you sure want to "+msg+" this item?";
            $('#modal_confirm').modal('show');
        }
    </script>

@endsection