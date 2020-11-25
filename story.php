<?php 
    include_once(__DIR__ . "/Classes/Stories.php");

    $story = Stories::getStoryById($_GET['story']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <title>Racism</title>
</head>
<body>
    <main class="storyMain">
        <h1 class="title"><?php echo(htmlspecialchars($story['name'])) ?></h1>
        <p class="storySingle"><?php echo(htmlspecialchars($story['message'])) ?></p>
        <a id="homeBtn" href="index.php#stories">All Stories</a>
    </main>
</body>
</html>