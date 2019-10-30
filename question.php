<?php
    if(isset($_POST['submit']))
    {
        $qname = $_POST['qname'];
        $body = $_POST['body'];
        $skills = $_POST['skills'];

        if($qname == '')
        {
            $error = "Question name is required";
        }
        else if(strlen($qname)<3)
        {
            $error = "Question name character length minimum is 3.";
        }
        else if($body == '')
        {
            $error = "Question Body is required to be filled.";
        }
        else if(strlen($body)>500)
        {
            $error = "Question body must contain less than 500 characters";
        }
        else
        {
            $array = explode(",", $skills);
        }
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
        <?php
        if(isset($error))
        {
            echo $error."<br><br>";
        }
        if(isset($array))
        {
            echo "Skills: ";
            print_r($array);
            echo "<br><br>";
        }
        ?>
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
