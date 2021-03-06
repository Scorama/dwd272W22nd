<?php
    if (isset($_POST["btnSubmit"])){
         #Script 2.2 - handle_form.php
        //Create a shorthand for the form data:
            $name = $_REQUEST["name"];
            $email = $_REQUEST["email"];
            $comments = $_REQUEST["comments"];
        
        //Create the $gender variable:
        if (isset($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
        }else{
            $gender = NULL;
        }
        
        //Print the submitted information:
        echo "<p>Thank you, <b>$name</b>, for the following comments:<br />"
                . "<tt>$comments</tt></p>"
                . "<p>We will reply to you at <i>$email</i>.</p>\n";
        
       //Print a message based on the gender value:
        if ($gender == 'M'){
            echo '<p><b>Good day, Sir!</b></p>';
        }elseif ($gender == 'F'){
            echo '<p><b>Good day, Madam!</b></p>';
        }else{//No gender selected
            echo '<p><b>You forgot to enter your gender!</b></p>';
        }
        
    }
    else {
        ?>


<!DOCTYPE html PUBLIC "-//W3C// DTD XHTML 1.0 Transitional//EN"  
  "http://www.w3.org/TR/xhtml1/DTD/ xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/ 1999/xhtml" xml:lang="en"  lang="en">
    <head>
        <meta http-equiv="Content-Type"  content="text/html;  charset=utf-8" />
        <title>Form Feedback</title>
        <style type="text/css">
            label{
                font-weight: bold;
                color: #300ACC;
            }
            </style>
    </head>
    <body>
        <!-- Script 2.1 - form.html -->
        <form action="index_2.php" method="post">
            <fieldset><legend>Enter your information in the form below:</legend>
                <p><label>Name: <input type="text" name="name" size="20" maxlength="40"/></label></p>
                
                <p><label>Email Address: <input type="text" name="email" size="40" maxlength="60"/></label></p>
                
                <p><label for="gender">Gender: </label><input type="radio" name="gender"
                          value="M" />Male <input type="radio" name="gender" value="F"/>Female</p>
                
                <p><label>Age: <select name="age"><option value="0-29">Under 30 </option>
                            <option value="30-60">Between 30 and 60</option>
                            <option value="60+">Over 60</option></select></label></p>
                <p><label>Comments: <textarea name="comments" rows="3" cols="40"></textarea></label></p>
            </fieldset>
            <p align="center"><input type="submit" name="btnSubmit" value="Submit My Information"/></p>
        </form>
       
    </body>
</html>

<?php
        }

    ?>