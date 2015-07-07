<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);  ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url();?>template/about</loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url();?>template/produk</loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url();?>template/order</loc>
     <priority>1.0</priority>
  </url>
   <url>
     <loc><?php echo base_url();?>template/blog</loc>
     <priority>1.0</priority>
  </url>
  <url>
     <loc><?php echo base_url();?>template/contact</loc>
     <priority>1.0</priority>
  </url>

  <?php foreach($posts as $data) { ?>
  <url>
     <loc><?php echo base_url('template/post/'.$data->id)?></loc>
     <priority>0.5</priority>
     <lastmod><?php echo $data->pubdate;?></lastmod>
  </url>
  <?php } ?>
 
</urlset>