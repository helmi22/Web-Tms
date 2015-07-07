<!-- Start Featured Project Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="project-section">
                <h3 class="section-title">Our Featured Project</h3>
                <!-- Start Portfolio items -->
                    <ul id="portfolio-list" data-animated="fadeIn">
                        <li>
                            <div class="portfolio-item">
                                <img src="<?php echo base_url()?>assets/images/building/a1.jpg" class="img-responsive" alt=""/>
                                <div class="figure-caption">
                                    <h4>Personal Car</h4>
                                    <p>GPS Tracker TRAMIGO tersedia untuk pengamanan kendaraan pridbadi anda. kemudahan pantau dan keamanan kendaraan anda yang akan anda dapatkan.</p>
                                    <a href="#">View Details</a>
                                </div>			
                            </div>

                        </li>
                        
                        <li>
                            <div class="portfolio-item">
                                <img src="<?php echo base_url()?>assets/images/building/a2.jpg" class="img-responsive" alt=""/>
                                <div class="figure-caption">
                                    <h4>Truck</h4>
                                    <p>GPS Tracker TRAMIGO tersedia untuk pengamanan kendaraan Truck Perusahaan anda. kemudahan pantau kendaraan anda yang akan anda dapatkan.</p>
                                    <a href="#">View Details</a>
                                </div>			
                            </div>

                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="<?php echo base_url()?>assets/images/building/a3.jpg" class="img-responsive" alt=""/>
                                <div class="figure-caption">
                                    <h4>Bus</h4>
                                    <p>GPS Tracker TRAMIGO tersedia untuk pengamanan kendaraan Bus Perusahaan anda. kemudahan pantau kendaraan anda yang akan anda dapatkan.</p>
                                    <a href="#">View Details</a>
                                </div>			
                            </div>

                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="<?php echo base_url()?>assets/images/building/a4.jpg" class="img-responsive" alt=""/>
                                <div class="figure-caption">
                                    <h4>Truck Container</h4>
                                    <p>GPS Tracker TRAMIGO tersedia untuk pengamanan kendaraan Truck Container Perusahaan anda. kemudahan pantau kendaraan anda yang akan anda dapatkan.</p>
                                    <a href="#">View Details</a>
                                </div>			
                            </div>

                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="<?php echo base_url()?>assets/images/building/a5.jpg" class="img-responsive" alt=""/>
                                <div class="figure-caption">
                                    <h4>Forklift</h4>
                                    <p>GPS Tracker TRAMIGO tersedia untuk pengamanan Alat Berat Forklift Perusahaan anda. kemudahan pantau kendaraan anda yang akan anda dapatkan.</p>
                                    <a href="#">View Details</a>
                                </div>			
                            </div>

                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="<?php echo base_url()?>assets/images/building/a6.jpg" class="img-responsive" alt=""/>
                                <div class="figure-caption">
                                    <h4>Kapal</h4>
                                    <p>GPS Tracker TRAMIGO tersedia untuk pengamanan Kapal anda. kemudahan pantau kendaraan anda yang akan anda dapatkan.</p>
                                    <a href="#">View Details</a>
                                </div>			
                            </div>

                        </li>
                       
                    </ul>
                    <!-- End Portfolio items -->
            </div>
        </div>
    </div>
    <!-- End Featured Project Section -->

     <!-- Start Call To Action Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="call-to-action">
                <div class="overlay">
                    <h1>Kami Dapat Membangun Keamanan Asset Anda</h1>
                    <p>Silahkan Hubungi Kami</p>
                    <a class="custom-btn" href="<?php echo base_url(); ?>template/contact" role="button">Klik Disini</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call To Action Section -->
    
    
    <!-- Start Latest News & Testimonial Section -->
     
    <div class="row">
        
        <!-- Start Latest News Section -->
        
        <div class="col-md-8">
            <div class="latest-news">
                <h3 class="section-title">Latest News</h3>
                <div id="latest-news">
                    

                    <div class="latest-post">
                        <?php if (count($posts)){ ?>
                        <?php foreach ($posts as $key => $list){ ?>
                       
                        <h4><a class=""<?php echo anchor('template/post/'.$list['id'], $list['title']."\n"); "<i class=fa fa-angle-right></i></a>"?></h4>
                        <!-- <h4><a href="#"><?php //echo $list['title']."\n"; ?></a></h4> -->
                        <div class="news-details">
                            <ul>
                                <li><i class="fa fa-calendar"></i><?php echo $list['pubdate'];?></li>
                                <li><i class="fa fa-bookmark"></i><?php echo $list['tags'];?></li>
                            </ul>
                        </div>
                        <p><?php 
                            echo auto_typography(word_limiter($list['isi'], 40));
                            
                            //echo anchor('template/post/'.$list['id'],'Baca selengkapnya >>');
                            
                            ?></p>
                           
                       <a class="btn btn-primary"<?php echo anchor('template/post/'.$list['id'],'Baca selengkapnya'); echo "<i class=fa fa-angle-right></i></a>"?>
                    </div>

                    
                </div>
                    <div class="latest-post">

                   <?php } ?>

                   </div>
               
                    
                </div>
             
            </div>
                          
        </div>
  
  <?php } ?>
        <!-- End Latest News Section -->
        
         <!-- Start Testimonial Section -->
        <div class="col-md-4">
            <div class="testimonial-section">
               <h3 class="section-title">Untuk Pemesanan Hubungi :</h3>
               <br/>
               <div class="testimonial">
               <img src="<?php base_url(); ?>assets/images/team/cs.jpg" class="img-responsive" alt="">
                </div>
                <br/>
                <p>                
                <h4><strong>Marketing :</strong> <br/><br/>
                <b>Helmi</b><br/>
                0857-7097-2671 <br>
                
                         
                

               
                    
                
                
            <!-- </div> -->
        </div>
        <!-- End Testimonial Section -->
        
    </div>

    <!-- End Latest News & Testimonial Section -->
    
    
    <!-- Start Clients Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="clients-section">
                <h3 class="section-title">Our Honourable Client</h3>
                <div id="clients">
                    <div><img src="<?php echo base_url()?>assets/images/client/1.png" class="img-responsive" alt=""></div>
                    <div><img src="<?php echo base_url()?>assets/images/client/2.png" class="img-responsive" alt=""></div>
                    <div><img src="<?php echo base_url()?>assets/images/client/3.png" class="img-responsive" alt=""></div>
                    <div><img src="<?php echo base_url()?>assets/images/client/4.png" class="img-responsive" alt=""></div>
                    <div><img src="<?php echo base_url()?>assets/images/client/5.png" class="img-responsive" alt=""></div>
                    <div><img src="<?php echo base_url()?>assets/images/client/6.png" class="img-responsive" alt=""></div>
                    <div><img src="<?php echo base_url()?>assets/images/client/7.png" class="img-responsive" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Section -->