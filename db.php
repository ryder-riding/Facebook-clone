<?php
ob_start();
?>
<?php
global $connection;

$connection = mysqli_connect('localhost','root','','facebook');

if($connection)
{
    // echo  "lets go";
}
else
{
    echo "Error in Connection";
}

?>
