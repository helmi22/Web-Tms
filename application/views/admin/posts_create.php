<!DOCTYPE html>
<html lang="en">
<head></head>
<body>


<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Create Post</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="<?php echo base_url() ?>index.php/admin/posts/create">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="ptitle"  name="title">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tags</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="ptags"  name="tags">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError">Modern Select</label>
								<div class="controls">
								<?php echo form_dropdown('category_id',$cats)?>
								  
								</div>
							  </div>     
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
							  <div class="controls">
								<textarea class="cleditor" name="isi" id="long" rows="5" cols="40"></textarea>
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Modern Select</label>
								<div class="controls">
								<?php $options = array('draft' => 'draft', 'published' => 'published'); ?>
								<?php echo form_dropdown('status',$options)?>
								  
								</div>
							  </div>     

							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
</body>
</html>