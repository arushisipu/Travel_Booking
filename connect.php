<?php
 //Database connection
 $isset = new mysqli('localhost','root','','travel');
 if(isset($_POST['submit'])){
    // Get form data
    $Where_To = $_POST['$Where_To'];
    $How_many = $_POST['$How_many'];
    $Arrivals = $_POST['$Arrivals'];
    $Leaving = $_POST['$Leaving'];
    $text = $_POST['$text'];

    // Validate form data (you can add more validation as per your requirements)
    if(empty($Where_To) || empty($How_many) || empty($Arrivals) || empty($Leaving) || empty($text)){
        echo '<script>alert("Please fill all the fields...")</script>';
    } 
    else{
        // Process the booking
        $query = "INSERT INTO travel (Where_To , How_many, Arrivals, Leaving, text) 
  			  VALUES('$Where_To', '$How_many', '$Arrivals', '$Leaving', '$text')";
  	mysqli_query($isset, $query);
        echo '<script>alert("Your booking is successfully done...")</script>';
            echo "<p>Where_To: $Where_To</p>";
            echo "<p>How_many: $How_many</p>";
            echo "<p>Arrivals: $Arrivals</p>";
            echo "<p>Leaving: $Leaving</p>";
            echo "<p>text:$text</p>";
        }
    $isset->close();
}
?>