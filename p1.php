<html>
<head><title>Random</title></head>
<body style="background-color: black;color: purple;"><center>
<h1>SQUARE ROOT</h1>
<h2><p>Number generated randomly is  <?php
    $choice = rand(1, 100);
    echo $choice;
?>.</p><p> And its square root is <?php
    echo round(sqrt($choice),3);
?>.</p></h2></center>
</body>
</html>