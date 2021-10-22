<?php
$FirstName = $_POST['firstName'];
$LastName = $_POST['lastName'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Subject = $_POST['subject'];
$Reason = $_POST['reason'];
$Message = $_POST['message'];
$formcontent="From: $LastName, $FirstName \n Phone Number: $Phone \n Reason: $Reason \n Message: $Message";
$recipient = "olaoluwa933@gmail.com";
$mailheader = "From: $Email \r\n";
mail($recipient, $Subject, $formcontent, $mailheader) or die("Error!");
echo "<div><p>Message Sent!</p></div>";
header("refresh:3; index.html");
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400;500;600;700;800&display=swap');
*{
    box-sizing: border-box;
}
body{
    padding: 0;
    margin: 0;
    overflow: hidden;
    font-family: 'Lexend', sans-serif;
    }
div{
    height: 100vh;
    width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #051a3d;
}
p{
    padding: 40px;
    background-color: #FEF568;
    color: #000000;
    text-align: center;
}

</style>