<?php
session_start();
require_once("./php/config.php");
require_once("./php/view_format.php");

$viewF = new viewFormat();
$sous_categorie = htmlspecialchars($_GET['sous-categorie']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat de Catégories</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mobile-format.css">
    <link rel="stylesheet" href="./assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">

    <!-- Essential SEO Meta Tags -->
    <meta name="description" content="Vendez vos produits avec toute sécurité et prix abordable">
    <meta name="keywords" content="Vente, Achat, Tora Corporation">
    <meta name="author" content="Tora Corporation">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:title" content="Tora Corporation">
    <meta property="og:description" content="Vendez vos produits avec toute sécurité et prix abordable">
    <meta property="og:image" content="https://www.example.com/images/preview.jpg">
    <meta property="og:url" content="https://www.example.com/your-page">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Tora Corporation">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="Vente en ligne">
    <meta name="twitter:title" content="Tora Corporation">
    <meta name="twitter:description" content="Vendez vos produits avec toute sécurité et prix abordable">
    <meta name="twitter:image" content="https://www.example.com/images/preview.jpg">
    <meta name="twitter:site" content="@YourTwitterHandle">
    <meta name="twitter:creator" content="@YourTwitterHandle">

    <!-- Favicon -->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">


</head>

<body id="body" class="">
    <div class="container">
        <!-- beginning of navigation bar -->
        <div class="navigation-bar">
            <div class="navigation-bar-contents">
                <!-- <div class="top-bar">
          <span>+243 000 000 000</span>
          <p>Trouvez une bonne experience sur l'application <a href="#">Télécharger</a></p>
          <p><span><i class="ri-user-shared-line"></i> Se Connecter</span> <span>| Créer un compte</span></p>
        </div> -->
            </div>
            <div class="bottom-bar">
                <div class="bottom-contents">
                    <a href="./">
                        <h3>Tora Market</h3>
                    </a>

                    <div class="nav-right-bot">
                        <div class="contents-right-nav">
                            <div class="search">
                                <div class="search-first-box">
                                    <div class="srch">
                                        <input type="text" placeholder="Filtrer par nom..." id="searchInput">
                                        <button><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                                <!-- <span class="search-icon"><i class="ri-search-line"></i></span> -->
                                <!-- beginning of search-results -->
                                <div class="search-results"></div>
                                <!-- end of search-results -->
                            </div>
                            <div class="notifications">
                                <span class="notification"><i class="ri-notification-2-line"></i></span>
                                <p class="notification-number">+9</p>
                            </div>
                            <div class="see-notification">
                                <div class="notification-contents">
                                    <ul>
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                        <!-- beginning of result-article1 -->
                                        <a href="#">
                                            <li>
                                                <img src="./assets/images/image1.jpeg" alt="">
                                                <div class="res-details">
                                                    <h4>Lenovo T480s</h4>
                                                    <p>Ordinateur Portable</p>
                                                </div>
                                            </li>
                                        </a>
                                        <!-- end of result-article1 -->
                                    </ul>
                                </div>
                            </div>
                            <?php
                            if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {

                                $sql_acc = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
                                $query_acc = $pdo->prepare($sql_acc);
                                $query_acc->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
                                $res_acc = $query_acc->fetch(PDO::FETCH_ASSOC);

                                if ($res_acc['user_category'] == "vendeur" || $res_acc['user_category'] == "entreprise") {
                                    echo '<a href="./publication.php"><button id="buttons"><i class="ri-add-large-fill"></i> Vendre un produit</button></a>';
                                } else {
                                    echo "";
                                }
                            } else {
                                echo '<a href="./login.php"><button id="buttons"><i class="ri-add-large-fill"></i> Vendre un produit</button></a>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="user-contents">
                        <select name="" id="">
                            <option value="fr">Français</option>
                            <option value="en">Anglais</option>
                        </select>
                        <?php
                        if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                            echo '<a href="./profile.php"><img src="./assets/avatar/user_icon_male.png"
                                    style="width: 30px; height: 30px; border-radius: 50%;" alt=""></a>';
                            echo '<a href="./php/logout.php"><button><i class="ri-logout-circle-line"></i> Se déconneter</button></a>';
                        } else {
                            echo '<a href="./login.php"><button><i class="ri-user-shared-line"></i> Se
                                            connecter</button></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!--  ====================================================================================== -->
        <!--  beginning of mobile navigation -->
        <div class="mobile-navigation">
            <a href="./">
                <h3>Tora</h3>
            </a>
            <div class="search">
                <div class="search-first-box">
                    <div class="srch">
                        <input type="text" placeholder="Filtrer par nom..." class="searchInput2" id="searchInput2">
                        <button><i class="ri-search-line"></i></button>
                    </div>
                </div>
                <!-- <span class="search-icon"><i class="ri-search-line"></i></span> -->
                <!-- beginning of search-results -->
                <div class="search-results2"></div>
                <!-- end of search-results -->
            </div>
            <button id="menu-button"><i class="ri-menu-3-fill"></i></button>
        </div>
        <div class="before-mobile-menu">
            <div class="mobile-menu">
                <div class="top-mob">
                    <h2>Tora Market</h2>
                </div>
                <div class="menu-contents-mob">
                    <ul>
                        <a href="#">
                            <li>
                                <div class="bell-not">
                                    <i class="ri-notification-2-line"></i>
                                    <span>+9</span>
                                </div>
                                Notifications
                            </li>
                        </a>
                        <a href="#">
                            <li>Vendre un produit</li>
                        </a>
                        <a href="./sign-up.php">
                            <li>Créer un compte</li>
                        </a>
                    </ul>
                    <select name="" id="" class="mobile-language-chooser">
                        <option value="fr">Français</option>
                        <option value="en">Anglais</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mobile-navigation-bottom">
            <div class="buttons-icons">
                <!-- Home Button -->
                <div class="icon-1">
                    <a href="./index.php"><button id="home-btn"><i class="ri-home-4-line"></i></button></a>
                    <label for="">Acceuille</label>
                </div>

                <!-- Vendre Button -->
                <?php
                if (isset($_COOKIE['user_unique_id_session'])) {
                    $sql_acc = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
                    $query_acc = $pdo->prepare($sql_acc);
                    $query_acc->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
                    $res_acc = $query_acc->fetch(PDO::FETCH_ASSOC);

                    if ($res_acc['user_category'] == "vendeur" || $res_acc['user_category'] == "entreprise") {
                        echo '<div class="icon-1">
                        <a href="./publication.php"><button><i class="ri-add-circle-line"></i></button></a>
                        <label for="">Vendre</label>
                    </div>';
                    } else {
                        echo '<div class="icon-1" style="color:gray;">
                        <button><i class="ri-add-circle-line" style="color:gray;"></i></button>
                        <label for="">Vendre</label>
                    </div>';
                    }
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php"><button><i class="ri-add-circle-line"></i></button></a>
                    <label for="">Vendre</label>
                </div>';
                }
                ?>

                <!-- Chat Button -->
                <?php
                if (isset($_COOKIE['user_unique_id_session'])) {
                    // Count all unread messages for the logged-in user
                    $sql_unread = "SELECT COUNT(*) AS total_unread 
                           FROM conversation 
                           WHERE receiver_unique_id = :current_user 
                             AND read_mark = 1";
                    $query_unread = $pdo->prepare($sql_unread);
                    $query_unread->execute([":current_user" => $_COOKIE['user_unique_id_session']]);
                    $res_unread = $query_unread->fetch(PDO::FETCH_ASSOC);
                    $total_unread = $res_unread['total_unread'];

                    echo '<div class="icon-1">
                    <a href="./chat.php">
                        <button><i class="ri-chat-new-fill"></i>';
                    if ($total_unread > 0) {
                        // Cap the badge at +9
                        if ($total_unread > 9) {
                            echo '<span class="chat-num">+9</span>';
                        } else {
                            echo '<span class="chat-num">' . $total_unread . '</span>';
                        }
                    }
                    echo '      </button>
                    </a>
                    <label for="">Chater</label>
                </div>';
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php">
                        <button><i class="ri-chat-new-fill"></i></button>
                    </a>
                    <label for="">Chater</label>
                </div>';
                }
                ?>

                <!-- Profile Button -->
                <?php
                if (isset($_COOKIE['user_unique_id_session'])) {
                    echo '<div class="icon-1">
                    <a href="./profile.php"><button><i class="ri-user-add-line"></i></button></a>
                    <label for="">Compte</label>
                </div>';
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php"><button><i class="ri-user-add-line"></i></button></a>
                    <label for="">Compte</label>
                </div>';
                }
                ?>
            </div>
        </div>
        <!-- end of mobile navigation -->

        <!--  ====================================================================================== -->
        <!-- end of navigation bar -->
        <div class="body-contents-2">
            <div class="body-contents-details"><br>
                <h2>Tous les catégories</h2>
                <!-- categorie list -->
                <div class="categories-list">
                    <!-- beginning of list1 -->
                    <a href="./categories/telephone.php">
                        <div class="list1">
                            <img src="./tora icons/phones-x3.png" alt="">
                            <label for="categorie-list-00">Téléphone & <br> Tablettes</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/electro.php">
                        <div class="list1">
                            <img src="./tora icons/laptops.png" alt="">
                            <label for="categorie-list-00">Electronique</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/meuble.php">
                        <div class="list1">
                            <img src="./tora icons/home-x3.png" alt="">
                            <label for="categorie-list-00">Meuble & <br> Electroménagere</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/mode.php">
                        <div class="list1">
                            <img src="./tora icons/shirts.png" alt="">
                            <label for="categorie-list-00">Mode & <br> Habillement</label>
                        </div>
                    </a>
                    <!-- end of list1 -->

                    <!-- =================================== -->

                    <!-- beginning of list1 -->
                    <a href="./categories/vehicule.php">
                        <div class="list1">
                            <img src="./tora icons/vehicles-x3.png" alt="">
                            <label for="categorie-list-00">Véhicule & <br> Transport</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/alimentation.php">
                        <div class="list1">
                            <img src="./tora icons/agriculture-x3.png" alt="">
                            <label for="categorie-list-00">Agriculture & <br> Alimentation</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/proprietes.php">
                        <div class="list1">
                            <img src="./tora icons/property-x3.png" alt="">
                            <label for="categorie-list-00">Propriétés</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/sante_et_beaute.php">
                        <div class="list1">
                            <img src="./tora icons/health-x3.png" alt="">
                            <label for="categorie-list-00">Santé & Beauté</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/sport.php">
                        <div class="list1">
                            <img src="./tora icons/sports-equipment-x3.png" alt="">
                            <label for="categorie-list-00">Art, Sport & <br> Plein Air</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/enfant.php">
                        <div class="list1">
                            <img src="./tora icons/babies-x3.png" alt="">
                            <label for="categorie-list-00">Bébé & Enfant</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/animaux.php">
                        <div class="list1">
                            <img src="./tora icons/cat-x3.png" alt="">
                            <label for="categorie-list-00">Animaux</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/equipement.php">
                        <div class="list1">
                            <img src="./tora icons/industrial-ovens-x3.png" alt="">
                            <label for="categorie-list-00">Equipements</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/quincaillerie.php">
                        <div class="list1">
                            <img src="./tora icons/repair-x3.png" alt="">
                            <label for="categorie-list-00">Quincaillerie & <br> Construction</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/reparation.php">
                        <div class="list1">
                            <img src="./tora icons/measuring-&-layout-tools-x3.png" alt="">
                            <label for="categorie-list-00">Réparation</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                    <!-- beginning of list1 -->
                    <a href="./categories/autres.php">
                        <div class="list1">
                            <span style="
                          width: 45px; 
                          height: 45px; 
                          border-radius: 50%;
                          background-color: white;
                          display: flex;
                          justify-content: center;
                          align-items: center;
                          font-size: 24px;
                ">
                                <i class="ri-more-fill"></i></span>
                            <label for="categorie-list-00">Autres Categories</label>
                        </div>
                    </a>
                    <!-- end of list1 -->
                </div>
                <div class="other-filters">
                    <div class="fiter-by-mark">
                        <?php
                        $sql_marque = "SELECT * FROM marque WHERE `sous-categorie` = ?";
                        $query_marque = $pdo->prepare($sql_marque);
                        $query_marque->execute([$sous_categorie]);
                        $res_marque = $query_marque->fetchAll(PDO::FETCH_ASSOC);
                        if (count($res_marque) > 0) {
                            foreach ($res_marque as $row_marque) {
                        ?>
                                <a href="./resultat-par-marque.php?sous-categorie=<?php echo $sous_categorie ?>&marque=<?php echo $row_marque['nom']; ?>"><img src="./tora icons/<?php echo $row_marque['nom']; ?>.png" alt=""><?php echo $row_marque['nom']; ?></a>
                        <?php
                            }
                        }
                        ?>
                    </div>

                    <!-- beginning of filter by price, location, currency and state -->
                    <div class="input-filters">
                        <form action="#" id="filterFormAll" style="display: flex; gap:0.4em;">
                            <input type="text" id="filterLocation" placeholder="Entrer une localisation">
                            <div class="filter-by-price">
                                <div class="price-input-f" style="display: flex;">
                                    <input type="number" id="filterPriceMin" placeholder="Prix min" style="width: 85px; border-radius: 8px 0px 0px 8px;">
                                    <input type="number" id="filterPriceMax" placeholder="Prix max" style="width: 85px; border-left:none; border-radius: 0px 8px 8px 0px;">
                                </div>
                                <select name="" id="filterCurrency">
                                    <option value="usd">USD</option>
                                    <option value="cdf">CDF</option>
                                </select>
                            </div>
                            <select name="" id="filterState">
                                <option value="">Tout les produits</option>
                                <option value="Nouveau Produit">Nouveaux produits</option>
                                <option value="Utilisé">Produits Utilisés</option>
                            </select>
                            <input type="text" id="sous_categorie" value="<?php echo $sous_categorie; ?>" hidden>
                        </form>
                    </div>
                    <!-- end of filter by price, location, currency and state -->

                </div>
                <br>
                <!-- end of categorie list -->
                <!-- end of carousel -->
                <!-- ====================================================================================================== -->
                <!-- beginning of cards -->
                <div class="cards" id="card-container">
                    <?php
                    $sql_prod = "SELECT * FROM produit WHERE sous_categorie = ? ORDER BY (RAND() + IF(promotion = 'enabled', 0.4, 0)) DESC";
                    $query_prod = $pdo->prepare($sql_prod);
                    $query_prod->execute([$sous_categorie]);
                    $res_prod = $query_prod->fetchAll(PDO::FETCH_ASSOC);
                    if (count($res_prod) > 0) {
                        foreach ($res_prod as $row_prod) {
                            $sql_prod_image = "SELECT * FROM imagess WHERE product_unique_id = ? LIMIT 1";
                            $query_prod_image = $pdo->prepare($sql_prod_image);
                            $query_prod_image->execute([$row_prod['unique_id']]);
                            $res_prod_image = $query_prod_image->fetchAll(PDO::FETCH_ASSOC);
                            if (count($res_prod_image) > 0) {
                                foreach ($res_prod_image as $row_prod_image) {
                    ?>
                                    <!-- beginning of card1 -->
                                    <div class="card1">
                                        <div class="image">
                                            <a href="./<?php echo $row_prod['seo_link'] ?>"><img src="<?php echo $row_prod_image['image_link'] ?>" alt=""></a>
                                            <?php
                                            if ($row_prod['etat'] == "Occasion – Comme neuf") {
                                                echo "<span class='product-state' 
                                                        style='
                                                                background:rgba(32, 126, 248, 0.63);
                                                                border:1px solid blue;
                                                                color:white;
                                                        '><i class='ri-restart-line'></i> {$row_prod['etat']}</span>";
                                            } else if ($row_prod['etat'] == "Occasion – Bon état") {
                                                echo "<span class='product-state' 
                                                        style='
                                                                background:rgba(255, 166, 0, 0.63);
                                                                border:1px solid orange;
                                                                color:white;
                                                        '><i class='ri-restart-line'></i> {$row_prod['etat']}</span>";
                                            } else if ($row_prod['etat'] == "Occasion – Usé") {
                                                echo "<span class='product-state' 
                                                        style='
                                                                background:rgba(248, 71, 6, 0.63);
                                                                border:1px solid red;
                                                                color:white;
                                                        '><i class='ri-restart-line'></i> {$row_prod['etat']}</span>";
                                            } else {
                                                echo "<span class='product-state' 
                                                        style='
                                                                background:rgba(0, 176, 158, 0.63);
                                                                border:1px solid rgb(0, 176, 158);
                                                                color:white;
                                                        '><i class='ri-price-tag-3-line'></i> {$row_prod['etat']}</span>";
                                            }
                                            ?>
                                        </div>
                                        <div class="details">
                                            <div class="prix">
                                                <h1> <?php
                                                        if ($row_prod['currency'] == "USD") {
                                                            echo $viewF->formatNumberShort($row_prod['prix'])
                                                                . "$";
                                                        } else {
                                                            echo $viewF->formatNumberShort($row_prod['prix'])
                                                                . " " . $row_prod['currency'];
                                                        }
                                                        ?></h1>

                                                <?php
                                                $sql_ratings = "SELECT ratings FROM ratings WHERE product_seo_link = ?";
                                                $query_ratings = $pdo->prepare($sql_ratings);
                                                $query_ratings->execute([$row_prod['seo_link']]);
                                                $ratings = $query_ratings->fetchAll(PDO::FETCH_COLUMN);

                                                $total = count($ratings);

                                                if ($total > 0) {
                                                    $sum = array_sum($ratings);
                                                    $average = $sum / $total;
                                                    // Round to the nearest 0.5
                                                    $average_rounded = round($average * 2) / 2;
                                                    if ($average_rounded == "0.5") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-half-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "1") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "1.5") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-half-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "2") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "2.5") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-half-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "3") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "3.5") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-half-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "4") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "4.5") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-half-fill active"></i>
                                                            </div>
                                                        ';
                                                    } else if ($average_rounded == "5") {
                                                        echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                                <i class="ri-star-fill active"></i>
                                                            </div>
                                                        ';
                                                    }
                                                } else {
                                                    echo '
                                                            <div class="rating">
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                            </div>
                                                    ';
                                                }
                                                ?>



                                            </div>
                                            <?php
                                            if ($row_prod['promotion'] == "Enabled") {
                                                echo "<div class='title-prom' style='display: flex;justify-content:space-between;'>
                                                <h4>" . $row_prod['titre'] . "</h4><span style='display:flex;gap:0.1em;height:fit-content;'>Sponsorisé <i class='ri-verified-badge-fill'></i></span>
                                            </div>";
                                            } else {
                                                echo "<h4>" . $row_prod['titre'] . "</h4>";
                                            }
                                            ?>
                                            <p class="description">
                                                <?php
                                                $description = $row_prod['description'];
                                                $short_desc = (strlen($description) > 50) ? substr($description, 0, 50) . "..." : $description;
                                                echo $short_desc;
                                                ?>
                                            </p>
                                            <div class="bottom-det">
                                                <p><i class="ri-map-pin-2-line"></i> <?php echo $row_prod['location'] ?></p>
                                                <a href="./<?php echo $row_prod['seo_link'] ?>"><button>Voir les details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of card1 -->
                    <?php
                                }
                            }
                        }
                    } else {
                        echo "<h1 style='text-align:center;color:gray;'>Pas de produit disponible</h1>";
                    }
                    ?>
                </div>
                <!-- end of cards -->
                <!-- ====================================================================================================== -->
                <!-- Pagination buttons -->
                <div id="pagination" class="pagination-controls"></div>

            </div>
        </div>
        <div class="footer-contents">
            <!-- beginning of footer cards -->
            <div class="cards-footer">
                <!-- beginning of card1 footer -->
                <div class="card-f-1">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="./tora-vente.php">Tora Vente</a></li>
                        <li><a href="./aide-acheteur.php">Tora Aide acheteur</a></li>
                        <li><a href="./aide-vendeur.php">Tora Aide vendeur</a></li>
                        <li><a href="./nous-soutenir.php">Nous Soutenir</a></li>
                    </ul>
                </div>
                <!-- end of card1 footer -->
                <!-- beginning of card1 footer -->
                <div class="card-f-1">
                    <h3>Sécurité</h3>
                    <ul>
                        <li><a href="./securite-de-vos-donnees.php">Sécurité de vos données</a></li>
                        <li><a href="./securite-des-conversations.php">Sécurité de vos conversations</a></li>
                        <li><a href="./surete-de-vente.php">Sureté de vente</a></li>
                        <li><a href="./securite-des-achat.php">Sécurité de vos achats</a></li>
                    </ul>
                </div>
                <!-- end of card1 footer -->
                <!-- beginning of card1 footer -->
                <div class="card-f-1">
                    <h3>Entreprise</h3>
                    <ul>
                        <li><a href="./qui-nous-sommes.php">Qui sommes-nous?</a></li>
                        <li><a href="./nous-faire-confiance.php">Pourquoi nous faire confiance</a></li>
                        <li><a href="./tora-faq.php">FAQ</a></li>
                        <li><a href="./partenariat.php">Devenez Partenaire de TORA</a></li>
                    </ul>
                </div>
                <!-- end of card1 footer -->
                <!-- beginning of card1 footer -->
                <div class="card-f-1">
                    <h3>Contacts</h3>
                    <ul>
                        <li><a href="mailto:contact@toracorporation.com">contact@toracorporation.com</a></li>
                        <li><a href="#">+243 993 963 174</a></li>
                    </ul>
                    <div class="social-medias">
                        <a href="#"><button><i class="ri-facebook-circle-fill"></i></button></a>
                        <a href="#"><button><i class="ri-instagram-line"></i></button></a>
                        <a href="#"><button><i class="ri-twitter-x-line"></i></button></a>
                    </div>
                </div>
                <!-- end of card1 footer -->
            </div>
            <!-- end of footer cards -->
            <div class="copy-right-message">
                <p>&copy;2025 Tora Corporation. Tout droits réservé
                    <br> Propulsé par
                    <span itemprop="creator" itemscope itemtype="https://schema.org/Organization">
                        <a href="https://www.amtech-co.com" itemprop="url" rel="sponsored">
                            <span itemprop="name">Amtech technology (Amtech-co LLC | Software)</span>
                        </a>
                        <meta itemprop="foundingDate" content="2021">
                        <meta itemprop="address" content="Goma, Democratic Republic of the Congo">
                        <meta itemprop="email" content="contact@amtech-co.com">
                        <meta itemprop="sameAs" content="https://www.linkedin.com/company/amtechtechnology/">
                        <span itemprop="founder" itemscope itemtype="https://schema.org/Person">
                            <meta itemprop="name" content="Audrey Mirindi">
                        </span>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <!-- beginning of scripting -->
    <script src="./assets/js/pagination.js"></script>
    <script src="./ajax/filter-by.js"></script>
    <script src="./assets/js/menu.js"></script>
    <script>
        const storyBar = document.getElementById('storyBar');
        const scrollAmount = 120;


        document.getElementById('searchInput').addEventListener('input', () => {
            const input = document.getElementById('searchInput').value;
            if (input.length > 0) {
                document.querySelector('.search-results').classList.add('show');

                const xhr1 = new XMLHttpRequest();
                xhr1.open("GET", `php/recherche.php?prod=${input}`, true);
                xhr1.onload = () => {
                    if (xhr1.readyState == xhr1.DONE && xhr1.status == 200) {
                        const data1 = xhr1.response;
                        document.querySelector('.search-results').innerHTML = data1;
                    }
                }
                xhr1.send();

            } else {
                document.querySelector('.search-results').classList.remove('show');
            }
        });

        document.getElementById('searchInput2').addEventListener('input', () => {
            const input2 = document.getElementById('searchInput2').value;
            if (input2.length > 0) {
                document.querySelector('.search-results2').classList.add('show');

                const xhr1 = new XMLHttpRequest();
                xhr1.open("GET", `php/recherche.php?prod=${input2}`, true);
                xhr1.onload = () => {
                    if (xhr1.readyState == xhr1.DONE && xhr1.status == 200) {
                        const data1 = xhr1.response;
                        document.querySelector('.search-results2').innerHTML = data1;
                    }
                }
                xhr1.send();

            } else {
                document.querySelector('.search-results2').classList.remove('show');
            }
        });
    </script>
</body>

</html>