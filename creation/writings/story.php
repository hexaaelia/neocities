<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEX/HOME</title>
    <link href="/style.css" rel="stylesheet" type="text/css" media="all">
<!--    <link href="writings_styles.css" rel="stylesheet" type="text/css" media="all">-->
</head>
<body>
<?php require '../../_php_components/navbar.php' ?>
<div id="content" class='content'>
    <p><a href="/creation/writings/">back to landing</a></p>
    <br>
    <?php
        require __DIR__ . '/../../vendor/autoload.php';
        use Michelf\MarkdownExtra;

        $requested = $_GET["story"];
        $file = file_get_contents("stories/" . $requested);
        if (!$file) {
            echo "<p>No story exists under this name: $requested.</p>";
        }
        else {
            switch (pathinfo("stories/$requested", PATHINFO_EXTENSION)) {
                case 'html':
                    echo "$file";
                    break;
                case 'md':
                    echo MarkdownExtra::defaultTransform($file);
                    break;
            }

            echo "<br><p><a href='/creation/writings/'>back to landing</a></p>";
        }
    ?>
</div>
</body>
</html>
