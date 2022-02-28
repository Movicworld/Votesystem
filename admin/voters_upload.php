<?php
include 'includes/session.php';


    $sql = "INSERT INTO voters (voters_id, password, firstname, lastname, photo) VALUES ('$voter', '$password', '$firstname', '$lastname', '$filename')";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Voter added successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }

}
else{
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: voters.php');
 
?>