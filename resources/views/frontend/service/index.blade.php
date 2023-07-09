<x-client-layouts title="Service">
    <div>
        <!-- 
        =============================================
            Theme Inner Banner
        ============================================== 
        -->
        <div class="theme-inner-banner section-spacing">
            <div class="overlay">
                <div class="container">
                    <h2>SERVICES</h2>
                </div> <!-- /.container -->
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->


        <!-- 
        =============================================
            Our Solution
        ============================================== 
        -->
        <div class="our-solution section-spacing">
            <div class="container">
                <div class="theme-title-one">
                    <h2>Kenapa Harus Memilih Kami</h2>
                </div> <!-- /.theme-title-one -->
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="single-solution-block">
                                <img src="{{ asset('/frontend/images/icon/5.png') }}" alt="" class="icon">
                                <h5><a href="service-details.html">Real Time Tracking</a></h5>
                                <p>Dengan menggunakan jasa ekspedisi klik logistics anda akan mendapatkan real time tracking untuk cek lokasi barang anda di system.</p>
                            </div> <!-- /.single-solution-block -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="single-solution-block">
                                <img src="{{ asset('/frontend/images/icon/7.png') }}" alt="" class="icon">
                                <h5><a href="service-details.html">Kemudahan Informasi</a></h5>
                                <p>Kami akan memberikan informasi secara lengkap mulai dari layanan , tarif hingga After service yang akan anda dapatkan</p>
                            </div> <!-- /.single-solution-block -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="single-solution-block">
                                <img src="{{ asset('/frontend/images/icon/6.png') }}" alt="" class="icon">
                                <h5><a href="service-details.html">Tarif Termurah</a></h5>
                                <p>Jangan lagi khawatir atau ragu untuk Tarif yang akan anda dapatkan. karena kami akan selalu memberikan tarif termurah dalam setiap pengiriman ke seluruh Indonesia</p>
                            </div> <!-- /.single-solution-block -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="single-solution-block">
                                <img src="{{ asset('/frontend/images/icon/8.png') }}" alt="" class="icon">
                                <h5><a href="service-details.html">Kecepatan Layanan</a></h5>
                                <p>Kami selalu mempercayakan layanan kami kepada tim terbaik untuk mendapatkan kecepatan layanan baik dalam website maupun dalam setiap layanan</p>
                            </div> <!-- /.single-solution-block -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="single-solution-block">
                                <img src="{{ asset('/frontend/images/icon/9.png') }}" alt="" class="icon">
                                <h5><a href="service-details.html">Costumer Service Ramah</a></h5>
                                <p>Pelayanan adalah kunci dalam service jasa pengiriman bagi Klik Logsitics hal ini terbukti dari review sempurna dalam Google My bisnis Klik Logistics</p>
                            </div> <!-- /.single-solution-block -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="single-solution-block">
                                <img src="{{ asset('/frontend/images/icon/10.png') }}" alt="" class="icon">
                                <h5><a href="service-details.html">Ulasan Pelayanan Terbaik</a></h5>
                                <p>Kami di percaya oleh consumen baik ritel maupun perusahaan selama lebih dari 6 tahun sehingga kami mendapatkan bintang sempurna dalam ulasan.</p>
                            </div> <!-- /.single-solution-block -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.wrapper -->
            </div> <!-- /.container -->
        </div> <!-- /.our-solution -->



        <!-- 
        =============================================
            Feature Banner
        ============================================== 
        -->
        <div class="feature-banner section-spacing">
            <div class="opacity">
                <div class="container">
                    <h2>Kami menyediakan layanan berkualitas tinggi & solusi inovatif untuk pertumbuhan yang dapat diandalkan</h2>
                </div> <!-- /.container -->
            </div> <!-- /.opacity -->
        </div> <!-- /.feature-banner -->


        <section class="section mb-4">
            <div class="row">
              <div class="col-lg-12">
      
                <div class="container d-flex justify-content-center">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Rute Populer pengiriman paket dan cargo dari dan ke seluruh wilayah Indonesia</h5>
            
                          <!-- Table with stripped rows -->
                          <table class="table datatable text-center">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Asal</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Tarif</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($tarif as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->asal }}</td>
                                    <td>{{ $item->tujuan }}</td>
                                    <td>{{ $item->tarif }}</td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                          <!-- End Table with stripped rows -->
            
                        </div>
                      </div>
                </div>
      
              </div>
            </div>
          </section>
      
    </div>
</x-client-layouts>