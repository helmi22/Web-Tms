<!-- Start Navigation Section -->
    <div class="navigation">
        
        <div class="navbar navbar-default navbar-top">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                        
            </div>
            <div class="navbar-collapse collapse">
    
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>" <?php if($this->uri->segment(2)=='') echo $aktif; ?>>Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>template/about" <?php if($this->uri->segment(2)=='about') echo $aktif; ?>>Tentang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>template/produk" <?php if($this->uri->segment(2)=='produk') echo $aktif; ?>>Produk</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>template/order" <?php if($this->uri->segment(2)=='order') echo $aktif; ?>>Order</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>template/blog" <?php if($this->uri->segment(2)=='blog') echo $aktif; ?>>Blog</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>template/contact" <?php if($this->uri->segment(2)=='contact') echo $aktif; ?>>Kontak</a>
                    </li>
                    <li>
                        <a href="http://www.tramindo.co.id" target="_blank">Tramindo</a>
                    </li>
                    
                </ul>
                <!-- End Navigation List -->
            </div>
        </div>
        
    </div>
    <!-- End Navigation Section -->