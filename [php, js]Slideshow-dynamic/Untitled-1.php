<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" language="javascript" src="jq.js"></script>
<style>
	#myslides {
02	
width: 340px;
03	
float: right;
04	
        padding: 0;
05	
        margin:  0 auto;
06	
margin-top: 20px;
07	
} 
08	
 
09	
#myslides img {
10	
    padding: 10px;
11	
    border:  1px solid rgb(100,100,100);
12	
    background-color: rgb(230,230,230);
13	
    width: 320px;
14	
    top:  0;
15	
    left: 0
16	
}
</style>
<script type="text/javascript">
$(document).ready(function(){	
	$('#myslides').cycle({
	
		fit: 1
	
	});
	
});

</script>
</head>

<body>
<?php
$directory = 'images/players/' . $row['imageName']; 
	
try {    
	
	// Styling for images
	
	echo "<div id=\"myslides\">";
	
	foreach ( new DirectoryIterator("../" . $directory) as $item ) {			
	
		if ($item->isFile()) {
	
			$path = "/" . $directory . "/" . $item;

			echo "<img src=\"" . $path . "\" />";
	
		}
	
	}
	
	echo "</div>";
	
}
	
catch(Exception $e) {
	
	echo 'No images found for this player.<br />';	
}
?>
</body>
</html>