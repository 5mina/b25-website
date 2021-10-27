<!DOCTYPE html>

<html>

<head>
    <title>Forum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Titillium+Web&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <style>
        <?php
        $css = file_get_contents('style.css');
        echo $css; ?>
    </style>
</head>

<body>
    <div>
        <?php
        $forum = file_get_contents('data.txt'); ?>
        <div class="forum"><pre><?php echo $forum; ?></pre></div>
    </div>
    <br>
    <br>
    <br>
    <form action="welcome_get.php" method="get">
        Name:<br><input type="text" name="user"><br>
        Post:<br><textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>