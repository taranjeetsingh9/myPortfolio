<?php 

$servername = "dev.fast.sheridanc.on.ca";
$username = "sin12506_Taran";
$password = "Taranjeet@09";
$dbname = " sin12506_Portfolio_Feedback";

$conn = mysqli_connect("dev.fast.sheridanc.on.ca", "sin12506_TaranFeedback", "Userreview$09", "sin12506_Portfolio_Feedback");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// if form submitted
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];


    // sql database 
    $sql = "INSERT INTO USERREVIEW(name, email, feedback) VALUES ('$name', '$email', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();

?>