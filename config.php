<?php

$hostname = "http://localhost/geecab";

$conn = mysqli_connect("localhost","root","","geecab") or die("Connection failed : " . mysqli_connect_error());

echo "Connection Success";

?>