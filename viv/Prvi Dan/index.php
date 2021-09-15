<?php
    // error_reporting(E_ALL);
    $gender = $email = $name = $website = $comment = '';
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['website'])) {
        $website = $_POST['website'];
    }
    if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];
    }
    $emailErr = $nameErr = $genderErr = $websiteErr = "";
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!$email) {
            $emailErr = "This field is required";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "This is not valid email";
        }
        if (!$name) {
            $nameErr = "This field is required";
        } else if (!ctype_alpha(str_replace(' ', '', $name))) {
            $nameErr = "Invalid name format";
        }
        if (!$gender) {
            $genderErr = "This field is required";
        }
        if ($website && !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
          }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>PHP Form Validation</h2>
<form method="post" action="">
  Name: <input type="text" name="name"> <span>*<?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email"> <span>*<?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website"> <?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
    <h2>YOUR Inputs</h2>
    <p><?php echo $email;?></p>
    <p><?php echo $name;?></p>
    <p><?php echo $website;?></p>
    <p><?php echo $gender;?></p>
    <p><?php echo $comment;?></p>
</body>
</html>