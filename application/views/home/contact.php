<?php $this->load->view('home/stylena');?>

<?php $this->load->view('home/menu');?>

 <!-- Start Breadcrumb Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="page-title">
                <div class="page-title-overlay">
                    <h2>Contact</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->
        
    
    <br>
        
    <!-- Start Contact Section -->
    <div class="row">
        <div class="col-md-8">
            <div class="contact-section">
                <h3 class="section-title">Contact with Us</h3>
                <!-- Start Contact Form -->
				<!-- <div id="contact-form" class="contatct-form">
					<div class="loader"></div>
					<form action="mail.php" class="contactForm" name="cform" method="post">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Name<span class="required">*</span></label>
								<input id="name" name="name" type="text" value="" size="30">
							</div>
							<div class="col-md-4">
								<label for="e-mail">Email<span class="required">*</span></label>
								<input id="e-mail" name="email" type="text" value="" size="30">
							</div>
							<div class="col-md-4">
								<label for="url">Website</label>
								<input id="url" name="url" type="text" value="" size="30">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="message">Add Your Comment</label>
								<textarea id="message" name="message" cols="45" rows="10"></textarea>
								<input type="submit" name="submit" class="btn btn-primary" id="submit_btn" value="Send Message">
							</div>
						</div>
					</form>
				</div> -->
				<!-- End Contact Form -->


            <!-- Start Contact Form -->
            <div id="contact-form" class="contatct-form">
            <div class="loader"></div>   
            <form method="POST" action="#" name="contactform" id="contactform">
            <div class="row">
                <div class="col-md-4">
                <?php echo validation_errors(); ?>
                <label>Full Name:<span class="required">*</span></label><br /> 
                <?php echo form_error('fullname'); ?>               
                <input type="text" name="fullname" id="fullname" maxlength="100" size="50" />
                </div>
                
                <div class="col-md-4">
                <label>Email:<span class="required">*</span></label><br />
                <?php echo form_error('email'); ?>
                <input type="text" name="email" id="email" maxlength="100" size="50" />
                </div>
                
                <div class="col-md-4">
                <label>Telephone:<span class="required">*</span></label>   <br />
                <?php echo form_error('telephone'); ?>
                <input type="text" name="telephone" id="telephone" maxlength="100" size="50" />
                </div>
                
            </div> 
            <label>What is your enquiry regarding</label>   <br />
            <?php echo form_error('regarding'); ?>
            <select name="regarding" id="regarding">
                <option value="General Enquiry">General Enquiry</option>
                <option value="HR Consultancy Service">HR Consultancy Service</option>
                <option value="Business Startup Service">Business Startup Service</option>
                <option value="Solutions for Individuals">Solutions for Individuals</option>
                <option value="Other">Other</option>
            </select>
            <br />
            <div class="row">
            <div class="col-md-12">
                <label>Add Your Comment</label> <br />
                <?php echo form_error('enquiry'); ?>
                <textarea name="enquiry" id="enquiry" cols="45" rows="10"></textarea>
                </div>       
            </div>
            <br />
            <label>What is 4 + 1?<span class="required">*</span></label>   <br />
            <?php echo form_error('robot'); ?>
            <input type="text" name="robot" id="robot" />               
            <br />
            <a class="button-a" href="mailto:helmi.tech@gmail.com"></a>
            <span class="btn btn-primary">Send Message</span>
            

            </form>

            </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-section">
				
				<h3 class="section-title">Information</h3>
				
				<!-- Some Info -->
				<p>Silahkan anda menghubungi kontak kami di bawah ini baik untuk melakukan order atau mau melakukan kunjungan ke kantor kami.</p>
				
				<!-- Info - Icons List -->
				<ul class="icons-list">
					<li><i class="fa fa-globe">  </i> <strong>Head Office:</strong> <br>Jl. Gemalapik–Pasirsari, Cikarang Selatan Bekasi-Indonesia 17550</li>
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong>info.tramindo@gmail.com</li>
                    <b>Mr. Helmi</b>
					<li><i class="fa fa-mobile"></i> <strong>Phone:</strong> 0857-7097-2671 </li>
                    
				</ul>
				
				
				<h3 class="section-title">Jam Kerja</h3>
				
				<!-- Info - List -->
				<ul class="list-unstyled">
					<li><strong>Monday - Friday</strong> - 9am to 5pm</li>
					<li><strong>Saturday</strong> - 9am to 2pm</li>
					<li><strong>Sunday</strong> - Closed</li>
				</ul>
				
			</div>
        </div>
    </div>
    <!-- End Contact Section -->
    
    <?php $this->load->view('home/footer');?>