<?php
session_start();
require_once("./php/config.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tora Corporation Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h1><i class="ri-shopping-bag-fill"></i> Tora</h1>
        <a href="./index.php" class="active">Tableau de bord</a>
        <a href="./publier.php">Publier un Produit</a>
    </div>

    <!-- Main -->
    <div class="main">
        <!-- Navbar -->
        <div class="navbar">
            <h2>Tableau de bord</h2>
            <button><i class="ri-shut-down-line"></i> Se déconnecter</button>
        </div>

        <!-- Toggle Navigation -->
        <div class="toggle-menu">
            <button class="tab-btn active" data-target="dashboard">Analyse générale</button>
            <button class="tab-btn" data-target="products">Produits</button>
            <button class="tab-btn" data-target="orders">Produit boosté</button>
            <button class="tab-btn" data-target="customers">Vendeurs</button>
            <button class="tab-btn" data-target="analytics">Acheteurs</button>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Dashboard Section -->
            <div class="tab-content active" id="dashboard">
                <div class="ad-section">
                    <div class="ad-text">
                        <h2>Bienvenue chez Tora Corporation</h2>
                        <p>Suivez vos ventes, commandes et clients en temps réel.</p>
                    </div>
                    <div class="ad-image">
                        <img src="./assets/images/icons/congratilation-image.webp" alt="Tora Dashboard">
                    </div>
                    <div class="confetti"></div>
                </div>

                <?php
                // Function to format numbers
                function formatNumber($number)
                {
                    if ($number >= 1000000000) {
                        return round($number / 1000000000, 1) . 'B';
                    } elseif ($number >= 1000000) {
                        return round($number / 1000000, 1) . 'M';
                    } elseif ($number >= 1000) {
                        return round($number / 1000, 1) . 'K';
                    } else {
                        return $number;
                    }
                }

                // Query to fetch all needed counts
                $sql = "SELECT 
    (SELECT COUNT(*) FROM produit) AS total_produits,
    (SELECT COUNT(*) FROM produit WHERE promotion = 'Enabled') AS produits_boostes,
    (SELECT COUNT(*) FROM user_accounts WHERE user_category = 'vendeur') AS compte_vendeurs,
    (SELECT COUNT(*) FROM user_accounts WHERE user_category = 'acheteur') AS compte_acheteurs";
                $query = $pdo->prepare($sql);
                $query->execute();
                $stats = $query->fetch(PDO::FETCH_ASSOC);
                ?>

                <div class="cards">
                    <div class="card">
                        <h3>Produits totale</h3>
                        <p><?= formatNumber($stats['total_produits']) ?></p>
                    </div>
                    <div class="card">
                        <h3>Produits Boosté</h3>
                        <p><?= formatNumber($stats['produits_boostes']) ?></p>
                    </div>
                    <div class="card">
                        <h3>Compte vendeur</h3>
                        <p><?= formatNumber($stats['compte_vendeurs']) ?></p>
                    </div>
                    <div class="card">
                        <h3>Compte acheteur</h3>
                        <p><?= formatNumber($stats['compte_acheteurs']) ?></p>
                    </div>
                </div>


                <div class="charts">
                    <div class="chart-box">
                        <h3>Commandes vs Retours</h3>
                        <canvas id="ordersChart"></canvas>
                    </div>
                    <div class="chart-box">
                        <h3>Ventes par jour</h3>
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Products Section -->
            <div class="tab-content" id="products">
                <h3>Gérer vos produits</h3>
                <div class="publications">
                    <form action="#" class="formFilter" id="formFilter">
                        <input type="text" name="sellerName" id="sellerName" placeholder="Entrer le nom du vendeur">
                        <input type="text" name="productName" id="productName" placeholder="Entrer la marque (nom)">
                    </form><br>
                    <div class="video-cards" id="productCards">
                        <!-- Example product card -->
                        <div class="video-card" data-id="101">
                            <div class="video-contents">
                                <div class="image">
                                    <img src="./assets/uploads/Amtech-technology-seo.jpg" alt="Product Image">
                                </div>
                                <div class="texts">
                                    <h4>Nom du produit</h4>
                                    <p>Description courte du produit.</p>
                                    <span>Stock: 120 -- Prix: $25 -- Ventes: 500</span>
                                </div>
                            </div>
                            <div class="menu">
                                <button><i class="ri-more-2-fill"></i></button>
                                <div class="action-menu">
                                    <a href="#"><i class="ri-rocket-2-line"></i> Booster</a>
                                    <a href="#"><i class="ri-bar-chart-fill"></i> Performance</a>
                                    <a href="#"><i class="ri-pencil-fill"></i> Modifier</a>
                                    <span><i class="ri-delete-bin-6-line"></i> Supprimer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat product cards as needed -->
                    </div>
                    <div class="pagination" id="pagination"></div>
                </div>
            </div>

            <!-- Orders Section -->
            <div class="tab-content" id="orders">
                <h3>Produits boostés</h3>
                <div class="publications">
                    <form action="#" class="formFilter" id="formFilter">
                        <input type="text" name="sellerName2" id="sellerName2" placeholder="Entrer le nom du vendeur">
                        <input type="text" name="productName2" id="productName2" placeholder="Entrer la marque (nom)">
                    </form><br>
                    <div class="video-cards" id="productCards2">
                        <!-- Example product card -->
                        <div class="video-card2" data-id="101">
                            <div class="video-contents">
                                <div class="image">
                                    <img src="./assets/uploads/Amtech-technology-seo.jpg" alt="Product Image">
                                </div>
                                <div class="texts">
                                    <h4>Nom du produit</h4>
                                    <p>Description courte du produit.</p>
                                    <span>Stock: 120 -- Prix: $25 -- Ventes: 500</span>
                                </div>
                            </div>
                            <div class="menu2">
                                <button><i class="ri-more-2-fill"></i></button>
                                <div class="action-menu2">
                                    <a href="#"><i class="ri-rocket-2-line"></i> Booster</a>
                                    <a href="#"><i class="ri-bar-chart-fill"></i> Performance</a>
                                    <a href="#"><i class="ri-pencil-fill"></i> Modifier</a>
                                    <span><i class="ri-delete-bin-6-line"></i> Supprimer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat product cards as needed -->
                    </div>
                    <div class="pagination" id="pagination2"></div>
                </div>
            </div>

            <!-- Analytics Section -->
            <div class="tab-content" id="analytics">
                <h3>Comptes Achteur</h3>
                <div class="publications">
                    <form action="#" class="formFilter" id="formFilter">
                        <input type="text" name="sellerName" id="sellerName" placeholder="Entrer le nom du vendeur">
                    </form><br>
                    <div class="video-cards" id="productCards3">
                        <!-- Example product card -->
                        <div class="video-card3" data-id="101">
                            <div class="video-contents">
                                <div class="image">
                                    <img src="./assets/uploads/Amtech-technology-seo.jpg" alt="Product Image">
                                </div>
                                <div class="texts">
                                    <h4>Nom du produit</h4>
                                    <p>Description courte du produit.</p>
                                    <span>Stock: 120 -- Prix: $25 -- Ventes: 500</span>
                                </div>
                            </div>
                            <div class="menu3">
                                <button><i class="ri-more-2-fill"></i></button>
                                <div class="action-menu3">
                                    <a href="#"><i class="ri-rocket-2-line"></i> Booster</a>
                                    <a href="#"><i class="ri-bar-chart-fill"></i> Performance</a>
                                    <a href="#"><i class="ri-pencil-fill"></i> Modifier</a>
                                    <span><i class="ri-delete-bin-6-line"></i> Supprimer</span>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat product cards as needed -->
                    </div>
                    <div class="pagination" id="pagination3"></div>
                </div>
            </div>

            <!-- Revenue Section -->
            <div class="tab-content" id="customers">
                <h3>Comptes Achteur</h3>
                <div class="publications">
                    <form action="#" class="formFilter" id="formFilter">
                        <input type="text" name="sellerName" id="sellerName" placeholder="Entrer le nom du vendeur">
                    </form><br>
                    <div class="video-cards" id="productCards4">
                        <!-- Example product card -->
                        <div class="video-card4" data-id="101">
                            <div class="video-contents">
                                <div class="image">
                                    <img src="./assets/uploads/Amtech-technology-seo.jpg" alt="Product Image">
                                </div>
                                <div class="texts">
                                    <h4>Nom du produit</h4>
                                    <p>Description courte du produit.</p>
                                    <span>Stock: 120 -- Prix: $25 -- Ventes: 500</span>
                                </div>
                            </div>
                            <div class="menu4">
                                <button><i class="ri-more-2-fill"></i></button>
                                <div class="action-menu4">
                                    <a href="#"><i class="ri-rocket-2-line"></i> Booster</a>
                                    <a href="#"><i class="ri-bar-chart-fill"></i> Performance</a>
                                    <a href="#"><i class="ri-pencil-fill"></i> Modifier</a>
                                    <span><i class="ri-delete-bin-6-line"></i> Supprimer</span>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat product cards as needed -->
                    </div>
                    <div class="pagination" id="pagination4"></div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // === VENTES (bar chart) ===
        const ctx1 = document.getElementById('salesChart').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
                datasets: [{
                    label: 'Ventes',
                    data: [32, 45, 28, 50, 62, 70, 55], // exemple de données
                    backgroundColor: '#00b09e'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            drawTicks: false,
                            color: "#e0e0e0"
                        }
                    }
                }
            }
        });


        // === REVENUS (line chart avec gradient) ===
        const ctx2 = document.getElementById('ordersChart').getContext('2d');

        // Dégradé
        const gradient = ctx2.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, "rgba(0, 176, 158, 0.4)");
        gradient.addColorStop(1, "rgba(0,137,205,0)");

        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
                datasets: [{
                    label: 'Revenus ($)',
                    data: [120, 350, 180, 420, 520, 610, 450], // exemple de données
                    borderColor: '#00b09e',
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0, // lignes droites
                    pointRadius: 0,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            drawTicks: false,
                            color: "#e0e0e0"
                        }
                    }
                }
            }
        });
    </script>

    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/product.js"></script>
    <script src="./assets/js/product-booste.js"></script>
    <script src="./ajax/filter.js"></script>
    <script src="./ajax/filter2.js"></script>
    <script src="./assets/js/compte-vendeur.js"></script>
    <script src="./assets/js/compte-acheteur.js"></script>
</body>

</html>