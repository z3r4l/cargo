<x-client-layouts title="Contact">
    <div>
        <!--
        =====================================================
            Google Map
        =====================================================
        -->
        <!-- Google Map -->

        <div class="mapouter mt-5">
            <div class="gmap_canvas"><iframe width="1280" height="510" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Jl. Bandara Hang Nadim, Batu Besar, Kecamatan Nongsa, Kota Batam, Kepulauan Riau 29466&t=&z=10&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                    href="https://2yu.co">2yu</a><br>
                <style>
                    .mapouter {
                        margin: auto;
                        text-align: center;
                        height: 510px;
                        width: 1280px;
                    }
                </style>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 510px;
                        width: 1280px;
                    }
                </style>
            </div>
        </div>

        <!-- 
        =============================================
            Conatct us Section
        ============================================== 
        -->
        <div class="contact-us-section section-spacing mt-5">
            <div class="container">
                <div class="theme-title-one">
                    <h2>HUBUNGI KAMI</h2>
                    @if (session()->has('success'))
                    <div class="alert alert-success mt-4" role="alert">
                        {{ session('success') }}
                        {{-- <button type="button" class="btn btn-sm btn-transparent float-end" data-bs-dismiss="alert" aria-label="Close">X</button> --}}
                    </div>
                  @endif
                    {{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> --}}
                </div> <!-- /.theme-title-one -->
                <div class="clearfix main-content no-gutters row">
                    <div class="col-lg-5 col-12">
                        <div class="img-box"></div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="form-wrapper">
                            <form action="/contact" method="post" enctype="multipart/form-data"  class="theme-form-one" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-lg-12 col-12"><input type="text" placeholder="Name *" name="name">
                                    </div>
                                    <div class="col-sm-6 col-lg-12 col-12"><input type="number" placeholder="Phone *" name="phone">
                                    </div>
                                    <div class="col-sm-6 col-lg-12 col-12"><input type="email" placeholder="Email *" name="email">
                                    </div>
                                    {{-- <div class="col-sm-6 col-12 ">
                                        <label for="" class="form-label me-5">Kategori :</label>
                                        <select class="form-select" name="kategori" id="kategori">
                                            <option value="">Kritik & Saran</option>
                                            <option value="">Informasi</option>
                                            <option value="">Partnership</option>
                                        </select>
                                    </div> --}}
                                    <div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
                                </div> <!-- /.row -->
                                <button type="submit" class="theme-button-one">Kirim Pesan</button>
                            </form>
                        </div> <!-- /.form-wrapper -->
                    </div> <!-- /.col- -->
                </div> <!-- /.main-content -->
            </div> <!-- /.container -->

            <!--Contact Form Validation Markup -->
            <!-- Contact alert -->
            <div class="alert-wrapper" id="alert-success">
                <div id="success">
                    <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <div class="wrapper">
                        <p>Your message was sent successfully.</p>
                    </div>
                </div>
            </div> <!-- End of .alert_wrapper -->
            <div class="alert-wrapper" id="alert-error">
                <div id="error">
                    <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <div class="wrapper">
                        <p>Sorry!Something Went Wrong.</p>
                    </div>
                </div>
            </div> <!-- End of .alert_wrapper -->
        </div> <!-- /.contact-us-section -->

    </div>
</x-client-layouts>