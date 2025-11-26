<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEX/thatwhichwasforgotten</title>
    <link href="/style.css" rel="stylesheet" type="text/css" media="all">
    <!--    <link href="writings_styles.css" rel="stylesheet" type="text/css" media="all">-->
    <link href="fa-styles.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div id="content" class='content'>
    <div style="display: inline-block; position: fixed; top:0;left:0;width:180px">
        <p><a href="index.php" tabindex="0">resurface</a></p>
        <p style="color:black" aria-hidden="true" >
            There is nothing.<br>
            Your search will only bring you more pain.<br>
            You are aware of this, and yet you continue.<br>
            What do you hope to gain, adventurer?<br>
            I hoped you'd be smarter than to enter where you clearly do not belong.<br>
            It is dangerous to explore a dragon's den without permission, friend.<br>
            The void may stare back.<br>
        </p>
    </div>
    <br>
    <?php
    require __DIR__ . '/../../vendor/autoload.php';
    use Michelf\MarkdownExtra;

    $sel = $_GET['entry']; if (empty($sel)) {$sel = 0;}


    $arr = scandir("fa/");
    array_shift($arr); array_shift($arr); //remove . and ..
    rsort($arr);
    $title = pathinfo("fa/$arr[$sel]", PATHINFO_FILENAME);
    echo "<h1>$title</h1>";
    echo MarkdownExtra::defaultTransform(file_get_contents("fa/" . $arr[$sel]));

    ?>
    <table style="width: 100%;background-color: black">
        <?php
        $counter = 0;
        foreach ($arr as $file) {
            $filename = pathinfo("fa/$file", PATHINFO_FILENAME);
            echo "
                    <tr>
                        <th><a href='forever-archives.php?entry=$counter'>$filename</a></th>
                    </tr>";
            $counter++;
        }
        ?>
    </table>
</div>
</body>
</html>
