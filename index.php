<?php

require_once('languages.php');

$secrets = file_get_contents('secrets.json');
$secrets = json_decode($secrets, true);

$lang = "en";
$lang_alternative = "it";

if(isset($_GET['lang']) && $_GET['lang'] == "it") {
    $lang = "it";
    $lang_alternative = "en";
}
    
$lang_change_md = "<a class='d-none d-md-block' href='?lang=$lang_alternative' id='lang-change-md'><img src='".$languages[$lang_alternative]['flag_file']."' class='lang-flag' alt='".$languages[$lang_alternative]['change_language_alt']."'></a>";

$lang_change = "<a class='d-md-none float-right' href='?lang=$lang_alternative'><img src='".$languages[$lang_alternative]['flag_file']."' class='lang-flag' alt='".$languages[$lang_alternative]['change_language_alt']."'></a>";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, , viewport-fit=cover">
    <title>Stefano Minotti</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="jumbotron">
    <?php echo $lang_change_md ?>
    <div class="container">
        <h2>Stefano Minotti</h2> 
    </div>
</div>

<div class="container">
    <div class="row">
        <div id="bio" class="col-md-8">
            <?php echo $languages[$lang]['bio'] ?>
        </div>
        <div class="col-md-4">
            <div id="profiles" class="row">
                <div class="col">
                    <?php echo $languages[$lang]['profiles'] ?>
                </div>
            </div>
            <div id="contacts" class="row">
                <div class="col">
                    <?php echo $languages[$lang]['contacts'] ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="recaptcha-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content text-center" id="recaptcha-modal-content">
            <div class="g-recaptcha" data-sitekey="<?php echo $secrets['recaptcha-site-key'] ?>" data-callback="recaptchaCallback"></div>
        </div>    
    </div>
</div>

<footer>
    <div class="container">
        © 2020 Stefano Minotti
        <?php echo $lang_change ?>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="js/script.js"></script>

</body>

</html>



