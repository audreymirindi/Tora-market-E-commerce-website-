<?php
session_start();
require_once("./php/config.php");

// Validate user session or cookie
if (!isset($_SESSION['user_unique_id_session']) && !isset($_COOKIE['user_unique_id_session'])) {
    header("Location: ./");
    exit();
}

// Get user info
$user_select = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
$query_select = $pdo->prepare($user_select);
$query_select->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
$result_select = $query_select->fetch(PDO::FETCH_ASSOC);

// Redirect if required user info is missing
if ($result_select['user_category'] == "none" || $result_select['contact_phone'] == "0") {
    header("Location: account-details.php");
    exit();
}

// Get product info to modify
if (!isset($_GET['unique_id'])) {
    header("Location: publication.php");
    exit();
}
$product_id = $_GET['unique_id'];
$product_query = $pdo->prepare("SELECT * FROM produit WHERE unique_id = ?");
$product_query->execute([$product_id]);
$product = $product_query->fetch(PDO::FETCH_ASSOC);

// Get product images
$image_query = $pdo->prepare("SELECT * FROM imagess WHERE product_unique_id = ?");
$image_query->execute([$product_id]);
$product_images = $image_query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le produit</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mobile-format.css">
    <link rel="stylesheet" href="./assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">
</head>

<body>
    <div class="container2">
        <div class="before-navigation-add">
            <div class="navigation-bar-add">
                <a href="./">
                    <h3>Tora Market</h3>
                </a>
                <a href="./profile.php"><button><i class="ri-settings-4-line"></i></button></a>
            </div>
        </div>

        <div class="body-contents-publish">
            <div class="card-publish">
                <div class="left-add">
                    <div class="card">
                        <h2>Modifier le produit</h2>
                        <p id="visulizer" style="text-align:center;padding:0.4em;"></p>
                        <form action="#" id="publier_produit">
                            <div class="group-input1">
                                <div class="input1">
                                    <label for="categorie">Categorie</label>
                                    <select name="categorie" id="categorie">
                                        <option value="">-- Choisir --</option>
                                        <option value="telephone_tablettes" <?php if ($product['categorie'] == 'telephone_tablettes') echo 'selected'; ?>>Téléphone & Tablettes</option>
                                        <option value="electronique" <?php if ($product['categorie'] == 'electronique') echo 'selected'; ?>>Electronique</option>
                                        <option value="meubles_electromenagere" <?php if ($product['categorie'] == 'meubles_electromenagere') echo 'selected'; ?>>Meubles & Electroménagere</option>
                                        <option value="mode_habillement" <?php if ($product['categorie'] == 'mode_habillement') echo 'selected'; ?>>Mode & Habillement</option>
                                        <option value="vehicules_trans" <?php if ($product['categorie'] == 'vehicules_trans') echo 'selected'; ?>>Véhicules & Transport</option>
                                        <option value="agriculture_alimentation" <?php if ($product['categorie'] == 'agriculture_alimentation') echo 'selected'; ?>>Agriculture & Alimentation</option>
                                        <option value="proprietes" <?php if ($product['categorie'] == 'proprietes') echo 'selected'; ?>>Propriétés</option>
                                        <option value="sante_beaute" <?php if ($product['categorie'] == 'sante_beaute') echo 'selected'; ?>>Santé & Beauté</option>
                                        <option value="art_sport_plein_air" <?php if ($product['categorie'] == 'art_sport_plein_air') echo 'selected'; ?>>Art, Sport & Plein Air</option>
                                        <option value="bebe_enfants" <?php if ($product['categorie'] == 'bebe_enfants') echo 'selected'; ?>>Bébé & Enfants</option>
                                        <option value="animaux" <?php if ($product['categorie'] == 'animaux') echo 'selected'; ?>>Animaux</option>
                                        <option value="equipements" <?php if ($product['categorie'] == 'equipements') echo 'selected'; ?>>Equipements</option>
                                        <option value="quincaillerie_construction" <?php if ($product['categorie'] == 'quincaillerie_construction') echo 'selected'; ?>>Quincaillerie & Construction</option>
                                        <option value="reparation" <?php if ($product['categorie'] == 'reparation') echo 'selected'; ?>>Réparation</option>
                                        <option value="autres" <?php if ($product['categorie'] == 'autres') echo 'selected'; ?>>Autres</option>
                                    </select>
                                </div>
                                <div class="input1">
                                    <label for="sous-categorie">Sous-categorie</label>
                                    <select name="sous-categorie" id="sous-categorie">
                                        <?php
                                        if (!empty($product['sous_categorie'])) {
                                            $subCatValue = strtolower(str_replace(' ', '-', $product['sous_categorie']));
                                            echo "<option value='{$subCatValue}' selected>{$product['sous_categorie']}</option>";
                                        } else {
                                            echo "<option value=''>-- Choisir une catégorie d'abord --</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="group-input1">
                                <div class="input1">
                                    <label for="marque-selector">Marque</label>
                                    <select name="marque" id="marque-selector">
                                        <?php
                                        if (!empty($product['titre'])) {
                                            $brandValue = strtolower(str_replace(' ', '-', $product['titre']));
                                            echo "<option value='{$brandValue}' selected>{$product['titre']}</option>";
                                        } else {
                                            echo "<option value=''>-- marque ici --</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="input1">
                                    <label for="marque2">Nom</label>
                                    <input type="text" name="marque2" placeholder="Nom du produit" maxlength="28" value="<?php echo htmlspecialchars($product['titre']); ?>">
                                </div>
                            </div>

                            <div class="group-input1">
                                <div class="input1">
                                    <label for="etat_produit">Etat du produit</label>
                                    <select name="etat_produit">
                                        <option value="">-- Choisir --</option>
                                        <option value="Nouveau" <?php if ($product['etat'] == 'Nouveau') echo 'selected'; ?>>Nouveau</option>
                                        <option value="Occasion – Comme neuf" <?php if ($product['etat'] == 'Occasion – Comme neuf') echo 'selected'; ?>>Occasion – Comme neuf</option>
                                        <option value="Occasion – Bon état" <?php if ($product['etat'] == 'Occasion – Bon état') echo 'selected'; ?>>Occasion – Bon état</option>
                                        <option value="Occasion – Usé" <?php if ($product['etat'] == 'Occasion – Usé') echo 'selected'; ?>>Occasion – Usé</option>
                                    </select>
                                </div>
                                <div class="input1">
                                    <label for="prix">Prix</label>
                                    <div class="price" style="display: flex;">
                                        <input type="number" name="prix" placeholder="Prix du produit" style="border-right: none;border-radius:8px 0px 0px 8px;" value="<?php echo htmlspecialchars($product['prix']); ?>">
                                        <select name="currency" style="border-left: none;border-radius:0px 8px 8px 0px;">
                                            <option value="USD" <?php if ($product['currency'] == 'USD') echo 'selected'; ?>>USD</option>
                                            <option value="CDF" <?php if ($product['currency'] == 'CDF') echo 'selected'; ?>>CDF</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="group-input1">
                                <div class="input1">
                                    <label for="Localisation">Localisation</label>
                                    <input type="text" name="Localisation" placeholder="Localisation du produit" value="<?php echo htmlspecialchars($product['location']); ?>">
                                </div>
                                <div class="input1">
                                    <label for="Livraison">Livraison</label>
                                    <select name="Livraison">
                                        <option value="">-- Choisir --</option>
                                        <option value="Goma" <?php if ($product['delivary'] == 'Goma') echo 'selected'; ?>>Goma</option>
                                        <option value="Goma-Bukavu" <?php if ($product['delivary'] == 'Goma-Bukavu') echo 'selected'; ?>>Goma-Bukavu</option>
                                        <option value="Est RDC" <?php if ($product['delivary'] == 'Est RDC') echo 'selected'; ?>>Est RDC</option>
                                        <option value="Toute la RDC" <?php if ($product['delivary'] == 'Toute la RDC') echo 'selected'; ?>>Toute la RDC</option>
                                        <option value="Est Afrique" <?php if ($product['delivary'] == 'Est Afrique') echo 'selected'; ?>>Est Afrique</option>
                                        <option value="Toute l'Afrique" <?php if ($product['delivary'] == "Toute l'Afrique") echo 'selected'; ?>>Toute l'Afrique</option>
                                    </select>
                                </div>
                            </div>

                            <div class="group-input1">
                                <div class="input1">
                                    <label for="nombre_produit">Nombre en stock</label>
                                    <input type="number" name="nombre_produit" placeholder="Nombre de produit en stock" value="<?php echo htmlspecialchars($product['stock_number']); ?>">
                                </div>
                            </div>

                            <div class="input1">
                                <label for="description">Déscription</label>
                                <textarea name="description" maxlength="370" placeholder="Déscription du produit" rows="4"><?php echo htmlspecialchars($product['description']); ?></textarea>
                            </div>

                            <div class="input1">
                                <label for="imagesSelector">Séléctionner votre photo</label>
                                <input type="file" id="imagesSelector" name="images[]" accept="image/*" multiple onchange="checkFileLimit(this)">
                            </div>

                            <button id="publish-btn">Publier</button>
                        </form>
                    </div>
                </div>
                <div class="middile"></div>
                <div class="right-add">
                    <h2>Mes Publications</h2><br><br>
                    <!-- beginning of contents -->
                    <div class="contents-list-add" id="contents-list-add">
                        <?php
                        require_once("./php/config.php");
                        require_once("./php/time-format.php");

                        $passedTime = new passedTime();

                        $sql = "SELECT * FROM produit WHERE user_unique_id = ? OR user_unique_id = ? ORDER BY id DESC";
                        $query = $pdo->prepare($sql);
                        $query->execute([$_COOKIE['user_unique_id_session'], $_SESSION['user_unique_id_session']]);
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        if (count($res) > 0) {
                            foreach ($res as $row) {

                                $sql2 = "SELECT * FROM imagess WHERE product_unique_id = ? LIMIT 1";
                                $query2 = $pdo->prepare($sql2);
                                $query2->execute([$row['unique_id']]);
                                $res_image = $query2->fetchAll(PDO::FETCH_ASSOC);

                                if (count($res_image) > 0) {
                                    foreach ($res_image as $rowImage) {

                        ?>
                                        <div class="card-add">
                                            <img src="<?php echo "./" . $rowImage['image_link']; ?>" alt="">
                                            <div class="description-add">
                                                <div class="desc-desc">
                                                    <h3><?php echo $row['titre'] ?></h3>
                                                    <p>
                                                        <?php
                                                        $desc = $row['description'];
                                                        $shortDesc = (strlen($desc) > 35) ? substr($desc, 0, 35) . "..." : $desc;
                                                        echo $shortDesc;
                                                        ?>
                                                    </p>
                                                    <p class="h">
                                                        <?php
                                                        if ($row['promotion'] == "Enabled") {
                                                            $time = $passedTime->timeAgo($row['duree']);
                                                            echo $time . " <i class='ri-separator'></i> " . "<span>Boosté <i class='ri-verified-badge-fill'></i></span>";
                                                        } else {
                                                            $time = $passedTime->timeAgo($row['duree']);
                                                            echo $time;
                                                        }

                                                        ?>
                                                    </p>
                                                </div>
                                                <button><i class="ri-more-2-fill"></i></button>
                                            </div>
                                            <div class="list-drop-down">
                                                <div class="drop-down-card">
                                                    <?php
                                                    if ($row['promotion'] == "Enabled") {
                                                    ?>
                                                        <a href="./modifier.php?unique_id=<?php echo $row['unique_id'] ?>"><i class="ri-pencil-fill"></i> Modifier</a>
                                                        <a href="./php/delete-product.php?unique_id=<?php echo $row['unique_id'] ?>"><i class="ri-delete-bin-5-fill"></i> Supprimer</a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <a href="./tora-boost.php?unique_id=<?php echo $row['unique_id'] ?>"><i class="ri-rocket-2-fill"></i> Booster</a>
                                                        <a href="./modifier.php?unique_id=<?php echo $row['unique_id'] ?>"><i class="ri-pencil-fill"></i> Modifier</a>
                                                        <a href="./php/delete-product.php?unique_id=<?php echo $row['unique_id'] ?>"><i class="ri-delete-bin-5-fill"></i> Supprimer</a>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                                    }
                                }
                            }
                        } else {
                            echo "<h1 style='text-align:center;color:gray;'>Pas de produit disponible</h1>";
                        }
                        ?>
                    </div>
                    <!-- end of contents -->
                    <div id="pagination-controls2" class="pagination-controls"></div>
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
    </div>
    </div>
    </div>

    <!-- AJAX for submitting the product -->
    <!-- <script src="./ajax/publier-produit.js"></script> -->

    <!-- Pagination and dynamic category/subcategory/brand -->
    <!-- beginning of pagination for rating system -->
    <script>
        /* ============================================================================================================ */
        document.addEventListener("DOMContentLoaded", function() {
            const cardsPerPage = 6;
            const cards = Array.from(document.querySelectorAll(".card-add"));
            const paginationContainer = document.getElementById("pagination-controls2");
            let currentPage = 1;

            function showPage(page) {
                const totalPages = Math.ceil(cards.length / cardsPerPage);
                currentPage = Math.max(1, Math.min(page, totalPages)); // Clamp to range

                const start = (currentPage - 1) * cardsPerPage;
                const end = start + cardsPerPage;

                cards.forEach((card, index) => {
                    card.style.display = index >= start && index < end ? "flex" : "none";
                });

                renderPagination(totalPages);

                // Scroll to top of the card container when switching pages
                /*  document.querySelector('.cotes').scrollTo({ top: 0, behavior: "smooth" }); */
            }

            function renderPagination(totalPages) {
                paginationContainer.innerHTML = "";

                // Prev Button
                const prevBtn = document.createElement("button");
                prevBtn.innerHTML = "<i class='ri-arrow-left-s-line'></i>";
                prevBtn.disabled = currentPage === 1;
                prevBtn.addEventListener("click", () => showPage(currentPage - 1));
                paginationContainer.appendChild(prevBtn);

                // Logic for pagination buttons with ellipsis
                const maxVisible = 1; // Max visible pages

                const addPageButton = (pageNum) => {
                    const btn = document.createElement("button");
                    btn.textContent = pageNum;
                    btn.classList.add("page-btn");
                    if (pageNum === currentPage) btn.classList.add("active");
                    btn.addEventListener("click", () => showPage(pageNum));
                    paginationContainer.appendChild(btn);
                };

                const addEllipsis = () => {
                    const span = document.createElement("span");
                    span.innerHTML = "<i class='ri-more-fill'></i>";
                    span.style.margin = "0 4px";
                    paginationContainer.appendChild(span);
                };

                if (totalPages <= maxVisible) {
                    // If there are 6 or fewer pages, show them all
                    for (let i = 1; i <= totalPages; i++) {
                        addPageButton(i);
                    }
                } else {
                    // Always show the first page
                    addPageButton(1);

                    // Show ellipsis if the current page is beyond the first few pages
                    if (currentPage > 2) {
                        addEllipsis();
                    }

                    // Display the range of pages around the current page
                    const start = Math.max(2, currentPage - 2);
                    const end = Math.min(totalPages - 1, currentPage + 1);

                    for (let i = start; i <= end; i++) {
                        addPageButton(i);
                    }

                    // Show ellipsis if the current page is far from the last few pages
                    if (currentPage < totalPages - 2) {
                        addEllipsis();
                    }

                    // Always show the last page
                    addPageButton(totalPages);
                }

                // Next Button
                const nextBtn = document.createElement("button");
                nextBtn.innerHTML = "<i class='ri-arrow-right-s-line'></i>";
                nextBtn.disabled = currentPage === totalPages;
                nextBtn.addEventListener("click", () => showPage(currentPage + 1));
                paginationContainer.appendChild(nextBtn);
            }

            // Initialize the first page
            showPage(1);
        });

        /* ============================================================================================================ */

        /* set a dropdown for the menu of published products as visible to either modify or delete an article */
        document.querySelectorAll('.card-add .description-add button').forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation(); // Prevent click event bubbling

                // Find the closest card-add container from the button
                const card = button.closest('.card-add');

                if (!card) return; // Safety check

                // Find the dropdown within this card
                const dropdown = card.querySelector('.drop-down-card');

                if (!dropdown) return; // Safety check

                // Toggle the dropdown visibility
                dropdown.classList.toggle('show');

                // Optionally close other open dropdowns
                document.querySelectorAll('.drop-down-card.show').forEach(otherDropdown => {
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove('show');
                    }
                });
            });
        });

        // Optional: Close dropdowns when clicking outside
        document.addEventListener('click', () => {
            document.querySelectorAll('.drop-down-card.show').forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        });
        /* ============================================================================================================ */

        // 🔹 Sous-catégories regroupées par grande catégorie
        const subCategories = {
            telephone_tablettes: [
                "-- Sélectionner la sous-catégorie --",
                "Téléphone Portable",
                "Accesoires pour téléphone et Tablettes",
                "Montre Intelligente et Traqueurs",
                "Tablettes"
            ],
            electronique: [
                "-- Sélectionner la sous-catégorie --",
                "Accesoire et Fourniture pour Electronique",
                "Ordinateurs et PC",
                "Equipement TV et DVD",
                "Equipement Audio et Musique",
                "Accesoire Informatique",
                "Matériels Informatique",
                "Moniteurs dOrdinateur",
                "Equipement Réseau",
                "Caméra photo et vidéo",
                "Imprimente et Scanner",
                "Sécurité et Surveillance",
                "Jeux vidéo et Console",
                "Logiciels"
            ],
            meubles_electromenagere: [
                "-- Sélectionner la sous-catégorie --",
                "Appareil ménagers",
                "Appareil de cuisine"
            ],
            mode_habillement: [
                "-- Sélectionner la sous-catégorie --",
                "Sacs",
                "Vêtements",
                "Vêtements et Accesoires",
                "Bijoux",
                "Chaussures",
                "Vêtement de Mariage",
                "Montres"
            ],
            vehicules_trans: [
                "-- Sélectionner la sous-catégorie --",
                "Voitures",
                "Bus et Microbus",
                "Matériels lourd",
                "Moto et scooter",
                "Camions et Remorquers",
                "Pièces et Accesoire du véhicule",
                "Motomarine et Bateau",
                "Service Automobile"
            ],
            sante_beaute: [
                "-- Sélectionner la sous-catégorie --",
                "Parfums",
                "Beauté de cheveux",
                "Maquillages",
                "Soin dela peau",
                "Vitamines et supplements"
            ],
            art_sport_plein_air: [
                "-- Sélectionner la sous-catégorie --",
                "Instruments musicaux et Equipements",
                "Equipement sportif"
            ],
            bebe_enfants: [
                "-- Sélectionner la sous-catégorie --",
                "Vêtement pour Enfant",
                "Chaussure pour Enfant",
                "Landaus et Poussettes",
                "Jouets"
            ],
            animaux: [
                "-- Sélectionner la sous-catégorie --",
                "Oiseaux",
                "Chats et Chatons",
                "Chiens et Chiots",
                "Poissons",
                "Accesoires pour les animaux de compagnie"
            ],
            equipements: [
                "-- Sélectionner la sous-catégorie --",
                "Equipement Médicale",
                "Equipements dimpression",
                "Equipements de restauration",
                "Equipements de Sécurité",
                "Equipements de salon",
                "Equipements d'électricité",
                "Eclairage de scène et effets",
                "Equipements de Magasin"
            ],
            quincaillerie_construction: [
                "-- Sélectionner la sous-catégorie --",
                "Matériaux de construction",
                "Outils électrique",
                "Outils Manuels",
                "Plomberie et Approvisionnement deau",
                "Energie solaire"
            ],
            reparation: [
                "-- Sélectionner la sous-catégorie --",
                "Pièces de réchanges pour téléphone et tablettes"
            ],
            autres: [
                "-- Sélectionner la sous-catégorie --",
                "Autres"
            ]
        };

        // 🔹 Marques populaires par sous-catégorie
        const brands = {
            "telephone-portable": ["Samsung", "Apple", "Huawei", "Infinix", "Tecno", "Nokia", "Xiaomi", "OnePlus", "Oppo", "Vivo"],
            "accesoires-pour-telephone-et-tablettes": ["Anker", "Baseus", "Aukey", "Ugreen", "Belkin"],
            "montre-intelligente-et-traqueurs": ["Apple Watch", "Samsung Galaxy Watch", "Xiaomi Mi Band", "Fitbit", "Garmin"],
            "tablettes": ["Samsung", "Apple iPad", "Lenovo", "Huawei", "Amazon Fire"],

            "accesoire-et-fourniture-pour-electronique": ["Belkin", "Anker", "Logitech", "TP-Link"],
            "ordinateurs-et-pc": ["HP", "Dell", "Lenovo", "Apple Macbook", "Asus", "Acer", "MSI"],
            "equipement-tv-et-dvd": ["LG", "Samsung", "Sony", "Panasonic", "Philips"],
            "equipement-audio-et-musique": ["Sony", "JBL", "Bose", "Beats", "Yamaha"],
            "accesoire-informatique": ["Logitech", "Razer", "Corsair", "SteelSeries", "Microsoft"],
            "materiels-informatique": ["HP", "Dell", "Asus", "Acer", "MSI"],
            "moniteurs-dordinateur": ["Samsung", "LG", "Dell", "AOC", "BenQ"],
            "equipement-reseau": ["Cisco", "TP-Link", "Netgear", "D-Link", "MikroTik"],
            "camera-photo-et-video": ["Canon", "Nikon", "Sony", "Fujifilm", "GoPro"],
            "imprimente-et-scanner": ["HP", "Canon", "Epson", "Brother"],
            "securite-et-surveillance": ["Hikvision", "Dahua", "Arlo", "Ring", "Nest"],
            "jeux-video-et-console": ["Sony PlayStation", "Microsoft Xbox", "Nintendo Switch"],
            "logiciels": ["Microsoft", "Adobe", "Autodesk", "Corel"],

            "appareil-menagers": ["LG", "Samsung", "Whirlpool", "Bosch", "Hisense"],
            "appareil-de-cuisine": ["Philips", "Moulinex", "Kenwood", "Tefal", "KitchenAid"],

            "sacs": ["Louis Vuitton", "Gucci", "Chanel", "Prada", "Hermès"],
            "vetements": ["Zara", "H&M", "Nike", "Adidas", "Uniqlo"],
            "vetements-et-accesoires": ["Gucci", "Versace", "Dolce & Gabbana", "Burberry"],
            "bijoux": ["Cartier", "Tiffany & Co.", "Swarovski", "Pandora"],
            "chaussures": ["Nike", "Adidas", "Puma", "Balenciaga", "Gucci"],
            "vetement-de-mariage": ["Pronovias", "Vera Wang", "Rosa Clará"],
            "montres": ["Rolex", "Casio", "Omega", "Tag Heuer", "Fossil"],

            "voitures": ["Toyota", "Mercedes", "BMW", "Hyundai", "Nissan", "Honda", "Ford", "Volkswagen"],
            "bus-et-microbus": ["Toyota", "Mercedes-Benz", "Hyundai", "Isuzu"],
            "materiels-lourd": ["Caterpillar", "Komatsu", "JCB", "Hitachi"],
            "moto-et-scooter": ["Honda", "Yamaha", "Suzuki", "Kawasaki", "Bajaj"],
            "camions-et-remorquers": ["Volvo", "Scania", "Mercedes-Benz", "MAN"],
            "pieces-et-accesoire-du-vehicule": ["Bosch", "Denso", "NGK", "Michelin", "Bridgestone"],
            "motomarine-et-bateau": ["Yamaha", "Sea-Doo", "Kawasaki", "Bayliner"],
            "service-automobile": ["Shell", "Total", "Castrol", "Mobil"],

            "parfums": ["Dior", "Chanel", "Gucci", "Yves Saint Laurent", "Armani"],
            "beaute-de-cheveux": ["L'Oréal", "Garnier", "Pantene", "Head & Shoulders"],
            "maquillages": ["Maybelline", "MAC", "L'Oréal", "Revlon", "Fenty Beauty"],
            "soin-dela-peau": ["Nivea", "Neutrogena", "Olay", "Clinique", "The Ordinary"],
            "vitamines-et-supplements": ["Centrum", "Nature Made", "NOW Foods", "Solgar"],

            "instruments-musicaux-et-equipements": ["Yamaha", "Fender", "Gibson", "Roland", "Casio"],
            "equipement-sportif": ["Nike", "Adidas", "Puma", "Under Armour"],

            "vetement-pour-enfant": ["Carter's", "OshKosh", "H&M Kids", "Zara Kids"],
            "chaussure-pour-enfant": ["Nike Kids", "Adidas Kids", "Puma Kids"],
            "landaus-et-poussettes": ["Chicco", "Graco", "Cybex", "Bugaboo"],
            "jouets": ["Lego", "Mattel", "Hasbro", "Fisher-Price", "Playmobil"],

            "oiseaux": ["Kaytee", "Hartz"],
            "chats-et-chatons": ["Royal Canin", "Whiskas", "Purina"],
            "chiens-et-chiots": ["Pedigree", "Royal Canin", "Purina", "Hill’s"],
            "poissons": ["Tetra", "Fluval", "Aqueon"],
            "accesoires-pour-les-animaux-de-compagnie": ["Kong", "Trixie", "PetSafe"],

            "equipement-medicale": ["Philips Healthcare", "GE Healthcare", "Siemens Healthineers", "Mindray"],
            "equipements-dimpression": ["Canon", "HP", "Epson", "Xerox"],
            "equipements-de-restauration": ["Robot Coupe", "KitchenAid", "Hobart"],
            "equipements-de-securite": ["Honeywell", "3M", "Dräger"],
            "equipements-de-salon": ["Remington", "Philips", "Wahl"],
            "equipements-delectricite": ["Schneider Electric", "ABB", "Siemens"],
            "eclairage-de-scene-et-effets": ["Chauvet", "ADJ", "Martin"],
            "equipements-de-magasin": ["Zebra", "Honeywell"],

            "materiaux-de-construction": ["Lafarge", "Dangote Cement", "Holcim"],
            "outils-electrique": ["Bosch", "Makita", "DeWalt", "Black & Decker"],
            "outils-manuels": ["Stanley", "Craftsman", "Klein Tools"],
            "plomberie-et-approvisionnement-deau": ["Grohe", "Hansgrohe", "Geberit"],
            "energie-solaire": ["SMA", "Huawei Solar", "JinkoSolar", "Trina Solar"],

            "pieces-de-rechanges-pour-telephone-et-tablettes": ["Samsung Parts", "iFixit", "Apple Parts", "Xiaomi Parts"],
            "autres": ["Autres"],
        };


        const categorieSelect = document.getElementById("categorie");
        const sousCategorieSelect = document.getElementById("sous-categorie");
        const marqueSelect = document.getElementById("marque-selector");

        // 🔹 Quand une catégorie est choisie → on charge ses sous-catégories
        categorieSelect.addEventListener("change", function() {
            const selected = this.value;
            sousCategorieSelect.innerHTML = "";

            if (subCategories[selected]) {
                subCategories[selected].forEach(sub => {
                    const option = document.createElement("option");
                    option.value = sub
                        .normalize("NFD")
                        .replace(/[\u0300-\u036f]/g, "")
                        .toLowerCase()
                        .replace(/\s+/g, "-");

                    option.textContent = sub;
                    sousCategorieSelect.appendChild(option);
                });
            } else {
                const defaultOption = document.createElement("option");
                defaultOption.textContent = "-- Choisir une catégorie d'abord --";
                sousCategorieSelect.appendChild(defaultOption);
            }

            // Reset marque aussi
            marqueSelect.innerHTML = "<option value=''>-- marque ici --</option>";
        });

        // 🔹 Quand une sous-catégorie est choisie → on charge ses marques
        sousCategorieSelect.addEventListener("change", function() {
            const selectedSub = this.value;
            marqueSelect.innerHTML = "";

            if (brands[selectedSub]) {
                brands[selectedSub].forEach(marque => {
                    const option = document.createElement("option");
                    option.value = marque.toLowerCase().replace(/\s+/g, "-");
                    option.textContent = marque;
                    marqueSelect.appendChild(option);
                });
            } else {
                const defaultOption = document.createElement("option");
                defaultOption.textContent = "-- Pas de marque disponible --";
                marqueSelect.appendChild(defaultOption);
            }
        });
    </script>

</body>

</html>