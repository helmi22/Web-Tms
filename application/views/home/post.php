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
        
    
    
    <!-- Start Single Blog Page -->
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="blog-section">
                
                <!-- Start Single Post Area -->
                <div class="blog-post gallery-post">
      
                    <!-- Start Single Post (Gallery Slider) -->
                    <div class="post-head">
       
        
                        <!--<a title="This is an image title" href="<?php //echo base_url(); ?>assets/images/blog-02.jpg" data-lightbox-gallery="gallery1">
                            <img alt="" src="<?php// echo base_url(); ?>assets/images/blog-02.jpg">
                        </a>-->
        
    
    
                        <!-- Start Single Post Content -->
                        <div class="post-content">
                            <div class="post-type"><i class="fa fa-pencil"></i></div>
                            <h1><?php echo ($post['title']); ?></h1>
                            <ul class="post-meta">
                                <li>By <a href="#">Tramindo</a></li>
                                <li><?php echo "Date : ",($post['pubdate']); ?></li>
                                <li><?php echo "Category: ",($post['tags']); ?></li>
                            </ul>

                            <?php echo auto_typography($post['isi']); ?>

                            <div class="post-bottom clearfix">
                                <!--<div class="post-tags-list">
                                    <a href="#">Theme</a>
                                    <a href="#">Mobile</a>
                                    <a href="#">Design</a>
                                    <a href="#">Wordpress</a>
                                    <a href="#">Jquery</a>
                                </div> -->
                                <div class="post-share">
                                    <span>Share This Post:</span>
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                           <!-- <div class="author-info clearfix">
                                <div class="author-image">
                                    <a href="#"><img alt="" src="images/author.png" /></a>
                                </div>
                                <div class="author-bio">
                                    <h4>About The Author</h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Post Content -->
 
                    </div>
                </div>
                <!-- End Single Post Area -->
                
                <!-- Start Comment Area -->
                <div id="comments">
                    <h2 class="comments-title">Comments</h2>
                    <!-- <ol class="comments-list">
                        <li>
                            <div class="comment-box clearfix">
                                <div class="avatar"><img alt="" src="images/avatar.png" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <span class="comment-by">John Doe</span>
                                        <span class="comment-date">February 15, 2013 at 11:39 pm</span>
                                        <span class="reply-link"><a href="#">Reply</a></span>
                                    </div>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                </div>
                            </div>

                           
                        </li>

                        <li>
                            <div class="comment-box clearfix">
                                <div class="avatar"><img alt="" src="images/avatar.png" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <span class="comment-by">John Doe</span>
                                        <span class="comment-date">February 15, 2013 at 11:39 pm</span>
                                        <span class="reply-link"><a href="#">Reply</a></span>
                                    </div>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                </div>
                            </div>
                        </li>

                    </ol>-->

<?php

//echo "<ol class=comments-list>";
//echo "<li>";

if (count($comments)){
	foreach ($comments as $key => $list){
//echo "<div class=comment-box clearfix>";
//echo "<div class=comment-content>";
echo "<div class=comment-meta>";
		echo "<span class=comment-by> ".$list['name']."</span>\n";
		echo "<span class=comment-date>".$list['pubdate']."</span>";
echo "</div>";
		echo auto_typography($list['isi']);
	}

//echo "</div>";
//echo "</div>";
//echo "</div>";
//echo "</li>";
//echo "</ol>";
	echo "";
	
}
?>
                    <!-- Start Respond Form -->
                    <div id="respond">
                        <h2 class="respond-title">Add your comment</h2>
                        <?php echo form_open("template/addcomment"); ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name">Name<span class="required">*</span></label>
                                    <?php $data = array('name'=>'name','id'=>'name','size'=>30);
										  echo form_input($data) ."</p>"; ?>
                                    
                                </div>
                                <div class="col-md-4">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <?php $data = array('name'=>'email','id'=>'email','size'=>30);
										  echo form_input($data) ."</p>";?>
                                    
                                </div>
                         
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="comment">Add Your Comment</label>
                                    <?php $data = array('name'=>'isi','id'=>'comment','rows'=>5, 'cols'=>'30');
										  echo form_textarea($data) ."</p>"; ?>
                                    <?php echo form_hidden('post_id',$post['id']);?>
                                    <input name="submit" type="submit" id="submit" class="btn btn-primary" value="add comment">
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                        
                    </div>
                    <!-- End Respond Form -->

                </div>
                <!-- End Comment Area -->
                
            
            </div>
        </div><!-- /.col-md-8 -->
        
</div>
        
        <!--Start Sidebar Section-->
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
							<?php

                                if (count($cats)){

                                //echo "<div class=col-sm-25>";
                                //echo "<div class=footer-link>";   
                                foreach ($cats as $id => $name){
                                    //echo "<ul>";
                                    //echo "<li>";
                                    //echo "<a>";
                                    echo anchor("template/category/$id", $name)."<br/>";
                                    //echo "</a>";
                                    //echo "</li>";
                                    //echo "</ul>";
                                    }



                                //echo "</div>";
                                //echo "</div>";
                                }

                                ?>


						</li>
					</ul>
				</div> 

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
                
                 Popular Posts widget 
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
						
				 Custom Post Widget 
				<div class="widget">
					<h3 class="section-title">Custom Post</h3>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
				</div>
                
                Video Widget 
				<div class="widget">
					<h3 class="section-title">Video</h3>
					<div>
						<iframe src="http://player.vimeo.com/video/63322694?byline=0&amp;portrait=0&amp;badge=0" width="800" height="450" style="border:none;"></iframe>
					</div>
				</div>
				
				 Tags Widget 
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
				</div> -->

			</div>
        </div>
		<!--End sidebar-->
        
    </div>
    <!-- End Blog Page -->



<?php $this->load->view('home/footer');?>

<!--<h2><?php
//echo ($post['title']);
?></h2>
<?php
//echo "Tgl : ",($post['pubdate']);
//echo " | Category: ",($post['tags']);
//echo auto_typography($post['isi']);
?> -->
<!--<center></center>
<h3>Comments</h3>
<?php
//if (count($comments)){
//	foreach ($comments as $key => $list){
//		echo "<b>Comment by ".$list['name'].":</b><br/>\n";
//		echo auto_typography($list['isi']);
//	}
//	echo "<br/>";
//}
?> -->

<!--<p><b>Add your comment:</b></p>

<?php
//echo form_open("template/addcomment");
//echo form_label('your name','name') ."<br/>";
//$data = array('name'=>'name','id'=>'name','size'=>25);
//echo form_input($data) ."</p>";

//echo form_label('your email','email') ."<br/>";
//$data = array('name'=>'email','id'=>'email','size'=>25);
//echo form_input($data) ."</p>";

//echo form_label('your comment','comment') ."<br/>";
//$data = array('name'=>'isi','id'=>'comment','rows'=>5, 'cols'=>'30');
//echo form_textarea($data) ."</p>";

//echo form_hidden('post_id',$post['id']);
//echo form_submit('submit','add comment');
//echo form_close();
?>
-->