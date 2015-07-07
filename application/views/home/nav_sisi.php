<?php

if (count($cats)){

//echo "<div class=col-sm-25>";
//echo "<div class=footer-link>";	
foreach ($cats as $id => $name){
	echo "<ul>";
	echo "<li>";
	//echo "<a>";
	echo anchor("template/category/$id", $name)."<br/>";
	//echo "</a>";
	echo "</li>";
	echo "</ul>";
	}



//echo "</div>";
//echo "</div>";
}

?>

