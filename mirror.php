

<?php
    $name = "";
    $email = "";
    $website = "";
    $comment = "";
?>

Oracle version: <?php echo oci_client_version(); ?>
<br/>
<br/>
<button value="test">Test!</button>
<br/>
<br/>
<br/>
<form action="mirror_quickproc.php" method="get">
    Pensiun tahun: <input type="text" name="name" value="<?php echo $name;?>">
    <br/>
    <br/>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <br/>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <br/>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br/>
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <button type="submit" value="Submit">Submit</button>
    <button type="reset" value="Reset">Reset</button>
</form>


