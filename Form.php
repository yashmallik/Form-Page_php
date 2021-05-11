<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $olddata = isset($_POST["name"])? $_POST["name"] :'';
?>
<pre>
    <form method="post">
    <label for="uname">Name</label>
    <input type="text" name="name" id="uname" value="<?= htmlentities($olddata)?>"<br>
    <label for = "dob">Date of Birth</label>
    <input type="date" for ="dob" name="date" value="date_" id="dob"><br>
    <label for="user">Username</label>
    <input type="email" name="userid" id="user"><br>
    <label for="pw">Password</label>
    <input type="password" name="pass" id="pw"><br>
    <label for="radio5">Radio choice</label><br>
    <input type="radio" name="rd" value="rd_1"id="radio5">radio1
    <input type="radio" name="rd" value="rd_2" id="radio5" checked>radio2B<br>
    <label for="checkbox">Checkbox</label><br>
    <input type="checkbox" id="checkbox" name="che1" value="che_1">checkbox1
    <input type="checkbox" id="checkbox" name="che2" value="che_2" checked>checkbox2
    <select name="select_option">
    <option value="value1">option1</option>
    <option value = "value2" >option2</option>
    <option value = "value3" selected>option2</option></select>
    <input type="submit" name="save" value="submit">
    <button onclick="location.href='http://localhost/first/form.php';return false;">escape</button>
    </pre>    
    </form>
    <pre>
    <?php 
    print_r($_POST);    
    ?>
    </pre>
</body>
</html>