<!DOCTYPE html>
<html lang="tr" >
<head>
<meta charset="utf-8" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>

<script>
var otomatik_yenile = setInterval(
  function() {
    $('#yenile').load('livetimetr.php').fadeIn('slow');
  }, 1000
); 
</script>

</head>
<body>

<?php
echo '<div id="yenile" ></div>'
?>

</body>
</html>
