<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learn PHP</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="person">
        <input type="submit">
    </form>
    <?PHP
        $name = $_GET['person']; //Taking input from HTML Form an storing that input data in variable using GET method
        echo "Hello Mr $name.";
    ?>
</body>
</html>