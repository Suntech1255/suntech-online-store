<?php
<<<<<<< HEAD
?>
=======


// stores all errors

if(count($errors)>0)
{
  foreach($errors as $Error)
  {
  	?>
  	<script>
  		alert ("<?php echo $Error ?>");
  		window.history.back();
  	</script>
  	<?php	
  }

}

// stores all success

if(count($success)>0)
{
   foreach($success as $correct)
   {
   	 ?>
   	 <script>
   	 	alert ("<?php echo $correct ?>");
   	 	// window.history.back();
   	 </script>
   	 <?php	
   }

}
?>
>>>>>>> 8c4a1be2d69d00991142326d4950933f542be703
