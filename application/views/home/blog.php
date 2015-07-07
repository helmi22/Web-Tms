  <?php $this->load->view('home/stylena');?>

<?php $this->load->view('home/menu');?>

  <!-- Start Breadcrumb Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="page-title">
                <div class="page-title-overlay">
                    <h2>Blog</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->
        
    
    
    <!-- Start Blog Page -->
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="blog-section">
                
                <!-- Start Post -->
				<div class="blog-post image-post">
					
					<!-- Post Content -->
                    <?php if (count($posts)){ ?>
                    <?php foreach ($posts as $key => $list){ ?>
                    <div class="post-content">
                      <div class="post-type"><i class="fa fa-pencil"></i></div>
                            <h4><a class=""<?php echo anchor('template/post/'.$list['id'], $list['title']."\n"); "<i class=fa fa-angle-right></i></a>"?></h4>
                            <ul class="post-meta">
                                <li>By <a href="#">Tramindo</a></li>
                                <li><?php echo $list['pubdate'];?></li>
                                <li><?php echo $list['tags'];?></li>
                            </ul>
                            <p><?php 
                            echo auto_typography(word_limiter($list['isi'], 40));
                            
                            //echo anchor('template/post/'.$list['id'],'Baca selengkapnya >>');
                            
                            ?></p>
                            <a class="btn btn-primary"<?php echo anchor('template/post/'.$list['id'],'Baca selengkapnya'); ?>
                        </div>
                        </div>
                        
                       
                       <?php } ?>
                       
                <?php } ?>
					    
				</div>
			
				<!-- End Post -->
						
				
						
				
                
            </div>
        </div>
        
        <!--Sidebar-->
		<div class="col-md-4 col-sm-4">
                        
            <div class="sidebar right-sidebar">
						
				<!-- Search Widget -->
				<div class="widget widget-search">
					<form action="#">
						<input type="search" placeholder="Enter Keywords..." />
						<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>

				<!-- Categories Widget -->
				<div class="widget widget-categories">
					<h3 class="section-title">Categories</h3>
					<ul>
						<li>
							<?php $this->load->view('home/nav_sisi');?>
						</li>
					</ul>
				</div>

				<!-- Start Testimonial Section -->
       
            <div class="testimonial-section">
               <h3 class="section-title">Untuk Pemesanan Hubungi :</h3>
               <br/>
               <div class="testimonial">
               <img src="<?php echo base_url(); ?>assets/images/team/cs.jpg" class="img-responsive" alt="">
                </div>
                <br/>
                <p>                
                <h4><strong>Marketing :</strong> <br/><br/>
                <b>Helmi</b><br/>
                <div class="fa fa-mobile"> 0857-7097-2671 <br></div>
                
                

               
                    
                
                
            <!-- </div> -->
        </div>
        <!-- End Testimonial Section -->
        <br>
  

    <!-- End Latest News & Testimonial Section -->
				<!-- Recent Posts widget 
				<div class="widget widget-popular-posts">
					<h3 class="section-title">Recent Post</h3>
					<ul>
						<li>
							<div class="widget-thumb">
								<a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
							</div>
							<div class="widget-content">
								<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
								<span>Jul 29 2013</span>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="widget-thumb">
								<a href="#"><img src="images/blog-mini-02.jpg" alt="" /></a>
							</div>
							<div class="widget-content">
								<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
								<span>Jul 29 2013</span>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="widget-thumb">
								<a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
							</div>
							<div class="widget-content">
								<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
								<span>Jul 29 2013</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>
                
                <!- Popular Posts widget 
				<div class="widget widget-popular-posts">
					<h3 class="section-title">Popular Post</h3>
					<ul>
						<li>
							<div class="widget-thumb">
								<a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
							</div>
							<div class="widget-content">
								<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
								<span>Jul 29 2013</span>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="widget-thumb">
								<a href="#"><img src="images/blog-mini-02.jpg" alt="" /></a>
							</div>
							<div class="widget-content">
								<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
								<span>Jul 29 2013</span>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="widget-thumb">
								<a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
							</div>
							<div class="widget-content">
								<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
								<span>Jul 29 2013</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>
						
				<!- Custom Post Widget 
				<div class="widget">
					<h3 class="section-title">Custom Post</h3>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
				</div>
                
                <!- Video Widget 
				<div class="widget">
					<h3 class="section-title">Video</h3>
					<div>
						<iframe src="http://player.vimeo.com/video/63322694?byline=0&amp;portrait=0&amp;badge=0" width="800" height="450" style="border:none;"></iframe>
					</div>
				</div>
				
				<!- Tags Widget 
				<div class="widget widget-tags">
					<h3 class="section-title">Tags</h3>
					<div class="tagcloud">
						<a href="#">Portfolio</a>
						<a href="#">Theme</a>
						<a href="#">Mobile</a>
						<a href="#">Design</a>
						<a href="#">Wordpress</a>
						<a href="#">Jquery</a>
						<a href="#">CSS</a>
						<a href="#">Modern</a>
						<a href="#">Theme</a>
						<a href="#">Icons</a>
						<a href="#">Google</a>
					</div>
				</div>
				<!-End sidebar -->

			</div>
        </div>
		
        
    </div>
    <!-- End Blog Page -->

    <?php $this->load->view('home/footer');?>