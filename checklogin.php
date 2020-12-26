<?php
$username = $_GET['username'];
$password = $_GET['password'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Check login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<?php
    function Check($u, $p)
    {
        if($u == "test" && $p == "123"){
            echo "<h2>Correct</h2>";
        } else{
            echo "<h2>Incorrect</h2>";
        }
    }
    Check($username, $password);
?>
</body>
</html>