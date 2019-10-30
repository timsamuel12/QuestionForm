<?php
    if(isset($_POST['submit']))
    {
        $qname = $_POST['qname'];
        $body = $_POST['body'];
        $skills = $_POST['skills'];
    }
?>

<!DOCTYPE html>
<html lang "en">
<head>
    <meta charset ="UTF-8">
    <title>Question Form</title>
</head>
<body>
    <h1>Questions?</h1>
    <form method = "post">
        Question Name:
        <input type ="text" name = "qname" placeholder = "Question Name"><br><br>
        Question Body:
        <textarea name = "body"  ></textarea><br><br>
        Question Skills:
        <input type = "text" name = "skills" placeholder = "Question Skills"><br><br>
        <input type = "submit" name = "submit" value ="Question">
    </form>
</body>

</html>
