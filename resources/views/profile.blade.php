@extends('layouts.app_main')

@section('content')

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Data Table CSS -->
<link href="assets/scrooge/vendors/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/scrooge/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />

<!-- Toggles CSS -->
<link href="assets/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
<link href="assets/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">


<style>
    .username {
        color: #E26169;
        font-weight: bold;
        font-size: 1.5rem;
    }
    .mt-accordion-item {
        background-color: white;
        border-bottom: 0.3rem solid #E5E5E5;
    }
    .mt-accordion-header {
        font-weight: bold;
        font-size: 1.7rem;
    }
    .user-information {
        color: black;
        font-size: 1.2rem;
    }
    .sub-information {
        text-align: left;
    }
    .header-medical {
        font-weight: bold;
    }
</style>

<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">
                    <div class="sc_row row sc_row-fluid">
                        <div class="column sc_column_container sc_col-sm-12">
                            <div class="sc_column-inner ">
                                <div class="wrapper">
                                    <div class="sc_section sc_section_block aligncenter max_width cu_width-990">
                                        <div class="sc_section_inner">
                                            <h2 class="sc_section_title sc_item_title line_show">Profile</h2>
                                            <div class="sc_section_content_wrap">
                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                    <div class="column-1_3 sc_column_item">
                                                        <div class="sc_gift sc_gift_style_1 shadow rounded" style="background-color: white">
                                                                <div class="row" style=" margin:0 auto; align-content: center;">
                                                                    <div class="sc_gift_featured" style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%; height: 10rem; width: 10rem">
                                                                        <img src="assets/images/treatments/treatment-ultrasonic-370x370.jpg" alt="">
                                                                    </div>
                                                                    <div style="text-align: left; height: auto;">
                                                                    <p>
                                                                        <span class="username">Username</span><br/>
                                                                    <span>username@gmail.com</span>
                                                                    </p>
                                                                    </div>
                                                                </div>
                                                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium">
                                                                <div>
                                                                    <span class="first">Edit Profile</span>
                                                                    <span class="second">Edit Profile</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sc_section sc_section_block aligncenter max_width cu_width-990">
                                        <div class="sc_accordion" data-active="0">
                                            <div class="sc_accordion_item odd first">
                                                <h5 class="sc_accordion_title">
                                                    <span class="sc_accordion_icon sc_accordion_icon_closed icon-plus"></span>
                                                    <span class="sc_accordion_icon sc_accordion_icon_opened icon-minus"></span>
                                                    <span class="sc_icon mr-4">
                                                        <img alt="" src="assets/icons/user-icon-40x40.png" width="25" height="25">
                                                    </span>
                                                    User
                                                </h5>
                                                <div class="sc_accordion_content">
                                                    <center>
                                                    <div class="text_column content_element">
                                                        <div class="wrapper col-md-7">
                                                                <div class="row">
                                                                    <div class="column col-md-6" style=" text-align: left">
                                                                        Firstname
                                                                        <p class="user-information">Nadya</p>
                                                                        <hr/>
                                                                    </div>

                                                                    <div class="column col-md-6" style="text-align: left">
                                                                        Lastname
                                                                        <p class="user-information">Septy</p>
                                                                        <hr/>
                                                                    </div>
                                                                </div>
                                                                <div class='row'>
                                                                    <div class="column col-md-12" style=" text-align: left">
                                                                        Email
                                                                        <p class="user-information">nadyasepti@gmail.com</p>
                                                                        <hr/>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="column col-md-6" style=" text-align: left">
                                                                        Gender
                                                                        <p class="user-information">Female</p>
                                                                        <hr/>
                                                                    </div>

                                                                    <div class="column col-md-6" style="text-align: left">
                                                                        Phone
                                                                        <p class="user-information">(+62) 87387736129</p>
                                                                        <hr/>
                                                                    </div>
                                                                </div>
                                                                <div class='row'>
                                                                    <div class="column col-md-12" style=" text-align: left">
                                                                        Address
                                                                        <p class="user-information">Jl. G. Lowokwaru Blok X No.5</p>
                                                                        <hr/>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="sc_accordion_item">
                                                <h5 class="sc_accordion_title">
                                                    <span class="sc_accordion_icon sc_accordion_icon_closed icon-plus"></span>
                                                    <span class="sc_accordion_icon sc_accordion_icon_opened icon-minus"></span>
                                                    <span class="sc_icon mr-4">
                                                        <img alt="" src="assets/icons/medical-icon-40x40.png" width="25" height="25">
                                                    </span>
                                                    Medical Records
                                                </h5>
                                                <div class="sc_accordion_content">
                                                    <div class="text_column content_element ">
                                                        <div class="wrapper">
                                                            <div class="column" style="text-align: left">
                                                                <h5 class="header-medical">Analisa Kulit</h5>
                                                                <div class="row">
                                                                    <div class="column col-md-4" style=" text-align: left">
                                                                        Jenis Kulit
                                                                        <p class="user-information">Minyak</p>
                                                                        <hr/>
                                                                    </div>

                                                                    <div class="column col-md-4" style="text-align: left">
                                                                        Kelembaban
                                                                        <p class="user-information">Normal</p>
                                                                        <hr/>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="column col-md-4" style="text-align: left">
                                                                        Kerut
                                                                        <p class="user-information">Tidak</p>
                                                                        <hr/>
                                                                    </div>
                                                                </div>
                                                                <br/>
                                                                <h5 class="header-medical" style="font-weight: bold">Perawatan</h5>
                                                                <label for="tanggal_perawatan">Tanggal Perawatan: </label>
                                                                <select name="tanggal_perawatan" id="tanggal_perawatan">
                                                                    <option value="date">20/06/2021</option>
                                                                    <option value="date">08/08/2021</option>
                                                                </select>
                                                                <h6 style="font-weight: bold">Anamnesa</h6>
                                                                <div class="row">
                                                                    <div class="col-sm">
                                                                        <table id="datatable_1" class="table table-hover w-100 display pb-30">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Tanggal</th>
                                                                                    <th>Keluhan Utama</th>
                                                                                    <th>Keluhan Tambahan</th>
                                                                                    <th>Rp.D</th>
                                                                                    <th>Riwayat Alergi</th>
                                                                                    <th>Riwayat Perawatan</th>
                                                                                    <th>Kontrasepsi</th>
                                                                                    <th>Diagnosa</th>
                                                                                    <th>H & O Treatment</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody style="background-color: #F8F8F8">
                                                                                <tr>
                                                                                    <td>20/06/2021</td>
                                                                                    <td>Tiger Nixon</td>
                                                                                    <td>System Architect</td>
                                                                                    <td>Edinburgh</td>
                                                                                    <td>61</td>
                                                                                    <td>2011/04/25</td>
                                                                                    <td>$320,800</td>
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
                    <div class="sc_row-full-width"></div>
                </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>



<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

<!-- jQuery -->
<script src="assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
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
<script src="assets/vendors/jquery-toggles/toggles.min.js"></script>
<script src="assets/scrooge/dist/js/toggle-data.js"></script>

<!-- Init JavaScript -->
<script src="assets/scrooge/dist/js/init.js"></script>

<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/jquery.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/add-to-cart.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/woo/woocommerce-add-to-cart.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/modernizr.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/custom.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/superfish.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery.slidemenu.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.utils.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.init.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/theme.init.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/mediaelement/mediaelement-and-player.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/social-share.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/theme.shortcodes.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/custom/core.messages.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/grid.layout/grid.layout.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/swiper/swiper.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/core.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/widget.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/tabs.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/effect.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/effect-fade.min.js'></script>
<script type='text/javascript' src='assets/jacqueline/js/vendor/jquery/accordion.min.js'></script>

<script type='text/javascript'>
    $('#datatable_1').DataTable( {
        responsive: true
    });
</script>

</body>

@endsection