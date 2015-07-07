<!-- Start Footer Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="footer-section">
                
                <div class="row">
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-address">
                            <h3>Alamat</h3>
                            <address>
                                <strong>PT. Tramindo Mitra Sarana</strong><br>
                                Jl. Gemalapik–Pasirsari, <br>
                                Cikarang Selatan<br>
                                Bekasi-Indonesia 17550<br>
                            </address>
                            <address>
                                <strong>Phone:</strong> 0857-7097-2671 <br>
                                <strong>E-mail:</strong> info.tramindo@gmail.com
                                <strong>Website:</strong> www.tramindo.co.id
                            </address>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link">
                            <h3>Kategori</h3>
                            
                                <?php $this->load->view('home/nav'); ?>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link">
                            <h3>Artikel Terbaru</h3>
                            <ul>
                         
                            <?php foreach ($posts as $r){?>
                                <li><a href="<?php echo base_url(); ?>index.php/template/post/<?php echo $r['id'];?>"><i class="fa fa-chevron-circle-right"></i><?php echo $r['title'];?></a></li>
                           
                            <?php } ?>
                            
                            </ul>
                        </div>

                        <div class="footer-link">
                            <h3>Demo Live Tracking</h3>
                            <ul>
                                <li><a href="http://50.62.150.108/index.php">M1Fleet Web</li></a><h6>Account login hubungi kami</h6>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-social">
                            <h3>Terhubung Dengan Kami</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                            </ul>
                            <h3>Online 09.00 - 17.00</h3>
                            <!-- Script Skype Button -->
                            <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                                <div id="SkypeButton_Call_helmifadlilah_1">
                                  <script type="text/javascript">
                                    Skype.ui({
                                      "name": "call",
                                      "element": "SkypeButton_Call_helmifadlilah_1",
                                      "participants": ["helmifadlilah"],
                                      "imageSize": 24
                                    });
                                  </script>
                                </div>
                            <!-- End Script Skype Button -->
                            <!--<h3>Subscribe With Us</h3>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form> -->
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>        
    </div>
    <!-- End Footer Section -->
    
    <!-- Start Copyright Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="copyright-section">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="copy">&copy; Copyright 2015 |PT. Tramindo Mitra Sarana| All Rights Reserved</div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="design">Design & Customize by <a href="http://baotme.com">Baotme.com</a></div>
                    
                    </div>

                </div>

            </div>
             <p><center>jual gps tracker | gps tracker tramigo | gps tracker jakarta | gps tracker murah </center></p>
        </div>
    </div>
    <!-- End Copyright Section -->

    
    
    </div><!-- /.container -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

</body>

</html>