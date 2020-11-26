<?php
include_once(__DIR__ . "/classes/Stories.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$stories = Stories::getAllStories();

if (!empty($_POST)) {
    $message = $_POST["message"];

    if (!empty($_POST["name"])) {
        $name = $_POST["name"];
    } else {
        $name = "Anonymous";
    }
    if (!empty($message)) {

        /*if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT into stories (name, message) values ('$name', '$message')";

        if ($conn->query($sql) === true) {
            
        }*/

        $stories = new Stories();
        $result = $stories->addStory($name, $message);
    }
}
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
    <header class="background">
    </header>

    <div class="quote" id="quoteHead">
        <h1>&ldquo; When dealing with racism, we are talking much more about omissions, silences and denials, than about direct actions. &bdquo;</h1>
    </div>

    <main>
        <h1 class="title">Videos</h1>
        <div id="videosList">
            <div id="real" class="video" data-video="real"><p>True Story</p></div>
            <div id="experimental" class="video" data-video="experimental"><p>Experimental</p></div>
            <div id="other" class="video" data-video="other"><p>Other</p></div>
        </div>

        <video class="experimental hidden" src="videos/Experimental video.mp4" type="video/mp4" controls></video>
        <video class="real hidden" src="videos/Bo's video.mp4" type="video/mp4" controls></video>
        <video class="other hidden" src="videos/Bo's video.mp4" type="video/mp4" controls></video>

        <h1 class="title">Stories</h1>
        <div id="stories">
            <?php foreach($stories as $story) : ?>
            <a class="storyLink" href="story.php?story=<?php echo($story['id']); ?>"><div class="story">
                <?php $name = substr($story['name'], 0, 50); ?>
                <h3><?php echo(htmlspecialchars($name)); ?></h3>
                <?php $message = substr($story['message'], 0, 140) . "..."; ?>
                <p><?php echo(htmlspecialchars($message)); ?></p>
            </div></a> 
            <?php endforeach; ?>
        </div>
    </main>

    <div class="quote">
        <h1>Share your story</h1>
        <div class="container">
            <form action="" method="post">
                <label for="name">Your name</label><br>
                <input type="text" id="name" name="name" placeholder="Do not fill in if you wish to remain anonymous"><br>

                <label for="message">What do you want to share?</label><br>
                <textarea name="message" id="message" cols="100" rows="20" placeholder="Share your story"></textarea><br>

                <input id="button" type="submit" value="Submit">

            </form>
        </div>
    </div>

    <div class="quote" id="quoteTag">
        <h1>#ListenToRacism</h1>
    </div>

    <footer>
        <div class="wrapper">
        <div class="divFooter linksInfo">
            <h3>Links for more information:</h3>
            <a href="https://inequality.org/facts/racial-inequality/?fbclid=IwAR3sQm1mkTOeCSIRAmVn4KolVuzpILksJyDbpX1O0z60gopE0AR--QkgRKI" class="infoLink">Inequality.org</a>
            <a href="https://www.ohchr.org/EN/Issues/racism/Pages/Index.aspx" class="infoLink">United Nations Human Rights</a>
            <a href="https://www.childline.org.uk/info-advice/bullying-abuse-safety/crime-law/racism-racial-bullying/" class="infoLink">Childline</a>
        </div>
        <div class="divFooter linksHelp">
            <!--<h3>Links to get help:</h3>-->
            <div id="countries">
                <div id="be">
                    <h4>Belgium: UNIA</h4>
                    <p>(+32) 0800 12 800</p>
                    <a href="https://www.report.unia.be/en/report-it/where">Centre for Equal Opportunities</a>
                </div>
                <div id="mex">
                    <h4>Mexico: Conapred</h4>
                    <p>+52(55) 5262 1490 / 01 800 543 0033</p>
                    <a href="http://www.conapred.org.mx/index.php?contenido=queja&id=71&id_opcion=116&op=116">Conapred.org</a>
                </div>
            </div>
        </div>
        <div class="divFooter logos">
            <a target="_blank" href="https://www.thomasmore.be/"><img class="logo" src="images/tm_vignet_rgb.png" alt="logo tm"></a> 
            <a target="_blank" href="https://tec.mx/en"><img id="logoTec" class="logo" src="images/Tecnológico_de_Monterrey_old.png" alt="logo tec"></a>
        </div>
        </div>
    </footer>
    <script src="js/index.js"></script>
</body>

</html>