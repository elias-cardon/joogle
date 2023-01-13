<?php
if (isset($_GET["term"])){
    $term = $_GET["term"];
} else{
    exit("Veuillez entrer un mot dans la barre de recherche");
}

$type= isset($_GET["type"]) ? $_GET["type"] : "sites";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recherche</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/png" href="./assets/images/Joogle_logo_mini.png" />
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="headerContent">
            <div class="logoContainer">
                <a href="">
                    <img src="./assets/images/Joogle_logo.png" alt="Logo">
                </a>
            </div>
            <div class="searchContainer">
                <form action="search.php" method="get">
                    <div class="searchBarContainer">
                        <input type="text" class="searchBox" name="term">
                        <button class="searchButton">
                            <img src="assets/images/icons/search.png" alt="search logo">
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="tabsContainer">
            <ul class="tabList">
                <li class="<?php echo $type == 'sites' ? 'active' : ''; ?>">
                    <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                        Sites
                    </a>
                </li>
                <li class="<?php echo $type == 'images' ? 'active' : ''; ?>">
                    <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                        Images
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>