<?php
    // Create connection to Oracle
    $conn = oci_connect("kanreg10", "kanreg10", "178.200.200.47");
    if (!$conn) {
        $m = oci_error();
        echo $m['message'], "\n";
        exit;
    }
    else {
        print "Connected to Oracle!";
    }
    
    // Close the Oracle connection
    oci_close($conn);
?>