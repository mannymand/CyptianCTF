<?php
session_start();
if($_SESSION['loggedin'] != TRUE){
echo 'ERROR: USER NOT LOGGED IN';
exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <p>TEST IMAGE UPLOAD PAGE, NOT FOR PRODUCTION USE</p>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
