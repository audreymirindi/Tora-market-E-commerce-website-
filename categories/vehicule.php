<?php
session_start();

require_once("../php/config.php");
require_once("../php/view_format.php");

if (!isset($_SESSION['user_unique_id_session']) && !isset($_COOKIE['user_unique_id_session'])) {
    header("Location: ./");
    exit();
}

$_SESSION['user_unique_id_session'] = $_COOKIE['user_unique_id_session'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véhicules</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mobile-format.css">
    <link rel="stylesheet" href="../assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">

    <!-- Essential SEO Meta Tags -->
    <meta name="description" content="Vendez vos produits avec toute sécurité et prix abordable">
    <meta name="keywords" content="Vente, Achat, Tora Corporation">
    <meta name="author" content="Tora Corporation">
    <meta name="robots" content="index, follow">

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
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container2">
        <!-- beginning of navigation bar -->
        <div class="before-navigation-add">
            <div class="navigation-bar-add">
                <a href="../">
                    <h3>Tora Market</h3>
                </a>
                <a href="./profile.php" style="color: #000;"><button><i class="ri-settings-4-line"></i></button></a>
            </div>
        </div>
        <!-- end of navigation bar -->
        <div class="chat-card-user-list">
            <div class="users-card">
                <div class="conversation-profile">
                    <a href="../" type="name" style="color: #000;"><i class="ri-arrow-left-fill"></i></a>
                    <h2 style="text-align: center;">Véhicules</h2>
                </div>
                <!-- beginning of user-card -->
                <a href="../categorie-results.php?sous-categorie=voitures" class="a-user">
                    <div class="user-card">
                        <img src="../tora icons/vehicles-x3.png" alt="">
                        <div class="det-user">
                            <h3>Voiture</h3>
                            <p>tout les modèles</p>
                        </div>
                    </div>
                </a>
                <!-- end of user-card -->
                <!-- beginning of user-card -->
                <a href="../categorie-results.php?sous-categorie=bus-et-microbus" class="a-user">
                    <div class="user-card">
                        <img src="../tora icons/buses-x3.png" alt="">
                        <div class="det-user">
                            <h3>Bus & Microbus</h3>
                            <p>Tout les modèles</p>
                        </div>
                    </div>
                </a>
                <!-- end of user-card -->
                <!-- beginning of user-card -->
                <a href="../categorie-results.php?sous-categorie=materiels-lourd" class="a-user">
                    <div class="user-card">
                        <img src="../tora icons/heavy-equipment-x3.png" alt="">
                        <div class="det-user">
                            <h3>Matériels lourd</h3>
                            <p>Toutes les catégories</p>
                        </div>
                    </div>
                </a>
                <!-- end of user-card -->
                <!-- beginning of user-card -->
                <a href="../categorie-results.php?sous-categorie=moto-et-scooter" class="a-user">
                    <div class="user-card">
                        <img src="../tora icons/moto.png" alt="">
                        <div class="det-user">
                            <h3>Motos & Scooter</h3>
                            <p>Tout les modèles</p>
                        </div>
                    </div>
                </a>
                <!-- end of user-card -->
                <!-- beginning of user-card -->
                <a href="../categorie-results.php?sous-categorie=camions-et-remorquers" class="a-user">
                    <div class="user-card">
                        <img src="../tora icons/trucks-and-trailers-x3.png" alt="">
                        <div class="det-user">
                            <h3>Camions & Remorquers</h3>
                            <p>Tout les modèles</p>
                        </div>
                    </div>
                </a>
                <!-- end of user-card -->
                <!-- beginning of user-card -->
                <a href="../categorie-results.php?sous-categorie=pieces-et-accesoire-du-vehicule" class="a-user">
                    <div class="user-card">
                        <img src="../tora icons/vehicle-parts-and-accessories-x3.png" alt="">
                        <div class="det-user">
                            <h3>Pièces & Accesoires du véhicule</h3>
                            <p>Tout les pièces</p>
                        </div>
                    </div>
                </a>
                <!-- end of user-card -->
                <!-- beginning of user-card -->
                <a href="../categorie-results.php?sous-categorie=motomarine-et-bateau" class="a-user">
                    <div class="user-card">
                        <img src="../tora icons/watercrafts-x3.png" alt="">
                        <div class="det-user">
                            <h3>Motomarine & Bateau</h3>
                            <p>Toutes les catégories</p>
                        </div>
                    </div>
                </a>
                <!-- end of user-card -->
                <!-- beginning of user-card -->
                <a href="../categorie-results.php?sous-categorie=service-automobile" class="a-user">
                    <div class="user-card">
                        <img src="../tora icons/automotive-services-x3.png" alt="">
                        <div class="det-user">
                            <h3>Service automobile</h3>
                            <p>Toutes les catégories</p>
                        </div>
                    </div>
                </a>
                <!-- end of user-card -->

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
        <p id="copy-right-conns">
            &copy;2025 Tora Corporation. Tout droit réservé.
            <br> Propulsé par
            <span itemprop="creator" itemscope itemtype="https://schema.org/Organization">
                <a href="https://www.amtech-co.com" itemprop="url" rel="nofollow">
                    <span itemprop="name">Amtech Technology (Amtech-co LLC | Software)</span>
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
</body>

</html>