<?php
session_start();

require_once("./php/config.php");
require_once("./php/view_format.php");

if (!isset($_SESSION['user_unique_id_session']) && !isset($_COOKIE['user_unique_id_session'])) {
    header("Location: ./");
    exit();
}

$_SESSION['user_unique_id_session'] = $_COOKIE['user_unique_id_session'];

$id = htmlspecialchars($_GET["unique_id"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tora Express</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mobile-format.css">
    <link rel="stylesheet" href="./assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">

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
                <a href="./">
                    <h3>Tora Market</h3>
                </a>
                <a href="./profile.php" style="color: #000;"><button><i class="ri-settings-4-line"></i></button></a>
            </div>
        </div>
        <!-- end of navigation bar -->
        <!--  ========================= BEGINNING OF TORA EXPRESS ======================= -->
        <!--  ========================= BEGINNING OF TORA EXPRESS ======================= -->
        <div class="tora-express-card">
            <h2>🚀 TORA BOOST – Vendez Plus Vite, Gagnez Plus !</h2>
            <p>Vous avez publié un bon produit, mais il ne se vend pas assez vite ? Faites-le décoller avec <strong>TORA BOOST</strong>, le service de mise en avant d’annonce qui vous garantit plus de visibilité, plus de clics, et plus de ventes !</p>
            <a href="#?id=<?php echo $id ?>"><button>Booster ce produit</button></a>
            <hr>

            <h3>🎯 Qu’est-ce que TORA BOOST ?</h3>
            <p><strong>TORA BOOST</strong> est une fonctionnalité premium qui vous permet de :</p>
            <ul>
                <li>📌 Positionner votre annonce en tête des résultats de recherche</li>
                <li>🌟 Afficher votre produit dans les sections sponsorisées</li>
                <li>🏠 Mettre votre annonce sur la page d’accueil de l’application ou du site</li>
                <li>👀 Multiplier les vues jusqu’à 5 fois plus qu’une annonce classique</li>
            </ul>
            <hr>

            <h3>📈 Pourquoi utiliser TORA BOOST ?</h3>
            <table>
                <thead>
                    <tr>
                        <th>Sans Boost</th>
                        <th>Avec Boost 🔥</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Visibilité limitée aux recherches</td>
                        <td>Visibilité active sur plusieurs zones stratégiques</td>
                    </tr>
                    <tr>
                        <td>Vente lente</td>
                        <td>Vente rapide (24h à 72h en moyenne)</td>
                    </tr>
                    <tr>
                        <td>Moins de contacts</td>
                        <td>Plus de messages et d’appels</td>
                    </tr>
                    <tr>
                        <td>Annonce noyée dans la masse</td>
                        <td>Mise en avant visuelle et prioritaire</td>
                    </tr>
                </tbody>
            </table>
            <p>🎯 Idéal pour les vendeurs pro, les produits saisonniers, les articles à forte concurrence, ou les besoins urgents de vente.</p>
            <hr>

            <h3>💰 Combien ça coûte ?</h3>
            <ul>
                <li>✅ 1 jour – 1 $</li>
                <li>✅ 3 jours – 2,5 $</li>
                <li>✅ 7 jours – 5 $</li>
                <li>✅ 14 jours – 9 $</li>
            </ul>
            <p>Des réductions sont disponibles pour les vendeurs réguliers, boutiques et abonnés Pro.</p>
            <hr>

            <h3>⚙️ Comment activer TORA BOOST ?</h3>
            <ol>
                <li>Connectez-vous à votre compte vendeur</li>
                <li>Allez dans « Mes annonces »</li>
                <li>Choisissez l’annonce que vous souhaitez booster</li>
                <li>Cliquez sur « Booster cette annonce »</li>
                <li>Sélectionnez la durée et validez le paiement via Mobile Money</li>
                <li>✨ Une fois activée, votre annonce sera mise en avant automatiquement dans les 10 minutes.</li>
            </ol>
            <hr>

            <h3>📌 Conseils pour booster efficacement :</h3>
            <ul>
                <li>Ajoutez de belles photos avant d’activer le boost</li>
                <li>Combinez le boostage avec la livraison via Tora Express pour rassurer les acheteurs</li>
                <li>Utilisez les bons mots-clés dans le titre et la description</li>
            </ul>
            <hr>

            <h3>👑 TORA BOOST PRO (bientôt disponible)</h3>
            <ul>
                <li>Boost massif de plusieurs annonces en même temps</li>
                <li>Rapport détaillé sur les performances</li>
                <li>Accompagnement par notre équipe marketing</li>
            </ul>
            <p>📩 Intéressé ? Contacte-nous via <a href="mailto:boost@toracorporation.com">boost@toracorporation.com</a></p>
            <hr>

            <h3>🙋‍♂️ Des questions ? Besoin d’aide ?</h3>
            <ul>
                <li>💬 Chat intégré dans l’application</li>
                <li>📱 WhatsApp : +243 993 963 174</li>
                <li>📧 Email : <a href="mailto:support@toracorporation.com">support@toracorporation.com</a></li>
            </ul>
            <hr>

            <p>🚀 Avec TORA BOOST, vendez plus vite, plus efficacement et atteignez plus d’acheteurs que jamais.</p>
        </div>
        <!--  ==================== END OF TORA EXPRESS ================= -->

        <!--  ==================== END OF TORA EXPRESS ================= -->
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