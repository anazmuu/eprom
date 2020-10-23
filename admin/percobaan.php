<html>
<head>
<title></title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script type="text/javascript">
$(document).ready(function () {
    var id = 1;
    $("#refres").click(function () {
        $.ajax({
   url:"text.php",
   method:"POST",
   data:{id:id},
   success:function(data){
$('#Container').html(data);
alert('Berhasil Refresh');
   }
  });
    });
     
});
</script>
<body>
<button value="Refresh" id="refres">REFRESH</button>
<div id="Container" style="width:300px; text-align:center; height:100px; border: 1px solid black">
<?php include "text.php" ?>
</div>
 
</body>
</html>