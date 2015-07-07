<h1><?php echo $judul;?></h1>
<p><?php echo anchor("admin/dashboard/create", "Create new user");?></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($admins)){
	echo "<table id='table'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>ID</th>\n<th>Username</th><th>Status</th><th>Actions</th>\n";
	echo "</tr>\n";
	foreach ($admins as $list){
		echo "<tr valign='top'>\n";
		echo "<td>".$list['id']."</td>\n";
		echo "<td>".$list['username']."</td>\n";
		echo "<td align='center'>".$list['status']."</td>\n";
		echo "<td align='center'>";
		echo anchor('admin/dashboard/edit/'.$list['id'],'edit');
		echo " | ";
		echo anchor('admin/dashboard/delete/'.$list['id'],'delete');
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
}
?>