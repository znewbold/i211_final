<?php

class IndexView
{
    public static function displayHeader($page_title)
    {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
</head>

<body>

    <?php
    }
    public static function displayFooter()
    {
        ?>

</body>

</html>
<?php
    }
}