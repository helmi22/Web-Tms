<?php $this->load->view('home/stylena');?>

<?php $this->load->view('home/menu');?>
  
 <!-- Start Breadcrumb Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="page-title">
                <div class="page-title-overlay">
                    <h2>Tentang Kami</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                            <li class="active">Tentang Kami</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->
        
    
    
    <!-- Start About Us Page -->
    <div class="row">
        <div class="col-md-7">
            <div class="about-slider">
                <div><img src="<?php echo base_url();?>assets/images/about.jpg" class="img-responsive" alt=""></div>
                <div><img src="<?php echo base_url();?>assets/images/about.jpg" class="img-responsive" alt=""></div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="welcome-text">
                <h3 class="section-title">Selamat Datang di Tramindo GPS Tracker</h3>
                <p>Tramigo Ltd. Adalah sebuah perusahaan multinasional yang berpusat di finlandia, pelopor pembangunan brand, sebuah tim pengusaha yang sangat inovatif dan gigih bertujuan untuk mengubah industry pelacakan dan pencipta pertama merek konsumen global dalam produk pelacakan dan bisnis telematika. Untuk mencapai tujuannya, Tramigo membuat solusi hardware dan software yang terbaik agar mudah digunakan oleh konsumen.</p>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="welcome-text">
                <h3 class="section-title">Our Mission</h3>
                <p>PT. Tramindo Mitra Sarana telah bekerja sama dengan Tramigo sebagai Autorized Distrubutor untuk wilayah indonesia. Dengan pengalaman lebih dari sepuluh tahun dan empat generasi produk pelacakan pada setiap benua, kami memahami bahwa lebih dari sebuah tracker yang terbuat dari komponen kualitas tinggi yang dibutuhkan untuk mengamankan seluruh keluarga dan armada pelanggan Tramigo.</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="welcome-text">
                <h3 class="section-title">Our Vission</h3>
                <p>Dengan adanya TLD ( Tramigo Landmark Data ), membuat produk GPS kami bernilai lebih dibanding produk GPS lainnya. TLD menerjemahkan koordinat GPS ke lokasi yang lebih mudah dipahami. Anda juga dapat menambahkan lokasi sendiri hingga 1000 lokasi. Tramigo juga dilengkapi dengan software GRATIS untuk smartphone maupun PC. Membuat anda lebih leluasa memantau armada anda.</p>
        </div>
    </div>
    <!-- End About Us Page -->
     
    <!-- Start Progress & Accordion Section -->
    <div class="row">
        <div class="col-md-6">
            <div class="skill-shortcode">
                
                <h3 class="section-title">Our Fitur Skill</h3>
                        
                <!-- Progress Bar -->
                <div class="skill">
                    <p>Pendor GPS Tracker Terbaik</p>          
                    <div class="progress">         
                        <div class="progress-bar" role="progressbar"  data-percentage="95">
                            <span class="sr-only">95% Complete</span>
                        </div>
                    </div>  
                </div>

                <!-- Progress Bar -->
                <div class="skill">
                    <p>Kualitas Produk</p>          
                    <div class="progress">          
                        <div class="progress-bar" role="progressbar"  data-percentage="90">
                            <span class="sr-only">90% Complete</span>
                        </div>
                    </div>  
                </div>

                <!-- Progress Bar -->
                <div class="skill">
                    <p>Kemudahan Akses Infomasi</p>          
                    <div class="progress">          
                        <div class="progress-bar" role="progressbar"  data-percentage="90">
                            <span class="sr-only">90% Complete</span>
                        </div>
                    </div>  
                </div>

                <!-- Progress Bar -->
                <div class="skill">
                    <p>Customer Service</p>          
                    <div class="progress">          
                        <div class="progress-bar" role="progressbar"  data-percentage="80">
                            <span class="sr-only">80% Complete</span>
                        </div>
                    </div>  
                </div>

            </div>
        </div>
    </div>
    <br/>

<?php $this->load->view('home/footer');?>