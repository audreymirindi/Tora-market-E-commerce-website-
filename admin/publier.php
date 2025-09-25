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
        <a href="./index.php">Tableau de bord</a>
        <a href="./publier.php" class="active">Publier un Produit</a>
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
            <button class="tab-btn active" data-target="dashboard">Publier un Produit</button>
            <button class="tab-btn" data-target="products">Produits</button>
            <button class="tab-btn" data-target="orders">Produit boosté</button>
            <button class="tab-btn" data-target="customers">Vendeurs</button>
            <button class="tab-btn" data-target="analytics">Acheteurs</button>
        </div>

        <!-- Content -->

        <div class="content">
            <div class="tab-content active" id="dashboard">
                <h3>Publier un produit</h3>
                <form action="#" id="publier_produit">
                    <div class="group-input1">
                        <div class="input1">
                            <label for="categorie">Categorie</label>
                            <select name="categorie" id="categorie">
                                <option value="">-- Choisir --</option>
                                <option value="telephone_tablettes">Téléphone & Tablettes</option>
                                <option value="electronique">Electronique</option>
                                <option value="meubles_electromenagere">Meubles & Electroménagere</option>
                                <option value="mode_habillement">Mode & Habillement</option>
                                <option value="vehicules_trans">Véhicules & Transport</option>
                                <option value="agriculture_alimentation">Agriculture & Alimentation</option>
                                <option value="proprietes">Propriétés</option>
                                <option value="sante_beaute">Santé & Beauté</option>
                                <option value="art_sport_plein_air">Art, Sport & Plein Air</option>
                                <option value="bebe_enfants">Bébé & Enfants</option>
                                <option value="animaux">Animaux</option>
                                <option value="equipements">Equipements</option>
                                <option value="quincaillerie_construction">Quincaillerie & Construction</option>
                                <option value="reparation">Réparation</option>
                                <option value="autres">Autres</option>
                            </select>
                        </div>
                        <div class="input1">
                            <label for="sous-categorie">Sous-categorie</label>
                            <select name="sous-categorie" id="sous-categorie">
                                <option value="">-- Choisir une catégorie d'abord --</option>
                            </select>
                        </div>
                    </div>

                    <div class="group-input1">
                        <div class="input1">
                            <label for="marque-selector">Marque</label>
                            <select name="marque" id="marque-selector">
                                <option value="">-- marque ici --</option>
                            </select>
                        </div>
                        <div class="input1">
                            <label for="marque2">Nom</label>
                            <input type="text" name="marque2" placeholder="Nom du produit" maxlength="28">
                        </div>
                    </div>

                    <div class="group-input1">
                        <div class="input1">
                            <label for="etat_produit">Etat du produit</label>
                            <select name="etat_produit">
                                <option value="">-- Choisir --</option>
                                <option value="Nouveau">Nouveau</option>
                                <option value="Occasion – Comme neuf">Occasion – Comme neuf</option>
                                <option value="Occasion – Bon état">Occasion – Bon état</option>
                                <option value="Occasion – Usé">Occasion – Usé</option>
                            </select>
                        </div>
                        <div class="input1">
                            <label for="prix">Prix</label>
                            <div class="price" style="display: flex;">
                                <input type="number" name="prix" placeholder="Prix du produit" style="border-right: none; border-radius:8px 0px 0px 8px;">
                                <select name="currency" style="border-left: none; border-radius:0px 8px 8px 0px;">
                                    <option value="USD">USD</option>
                                    <option value="CDF">CDF</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="group-input1">
                        <div class="input1">
                            <label for="Localisation">Localisation</label>
                            <input type="text" name="Localisation" placeholder="Localisation du produit">
                        </div>
                        <div class="input1">
                            <label for="Livraison">Livraison</label>
                            <select name="Livraison">
                                <option value="">-- Choisir --</option>
                                <option value="Goma">Goma</option>
                                <option value="Goma-Bukavu">Goma-Bukavu</option>
                                <option value="Est RDC">Est RDC</option>
                                <option value="Toute la RDC">Toute la RDC</option>
                                <option value="Est Afrique">Est Afrique</option>
                                <option value="Toute l'Afrique">Toute l'Afrique</option>
                            </select>
                        </div>
                    </div>

                    <div class="group-input1">
                        <div class="input1">
                            <label for="nombre_produit">Nombre en stock</label>
                            <input type="number" name="nombre_produit" placeholder="Nombre de produit en stock">
                        </div>
                    </div>

                    <div class="input1">
                        <label for="description">Déscription</label>
                        <textarea name="description" maxlength="370" placeholder="Déscription du produit" rows="4"></textarea>
                    </div>

                    <div class="input1">
                        <label for="imagesSelector">Séléctionner votre photo</label>
                        <input type="file" id="imagesSelector" name="images[]" accept="image/*" multiple onchange="checkFileLimit(this)">
                    </div>
                    <p id="visulizer" style="text-align: center;"></p>
                    <button id="publish-btn">Publier</button>
                </form>
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


        <script>
            const subCategories = {
                telephone_tablettes: ["-- Sélectionner la sous-catégorie --", "Téléphone Portable", "Accesoires pour téléphone et Tablettes", "Montre Intelligente et Traqueurs", "Tablettes"],
                electronique: ["-- Sélectionner la sous-catégorie --", "Accesoire et Fourniture pour Electronique", "Ordinateurs et PC", "Equipement TV et DVD", "Equipement Audio et Musique", "Accesoire Informatique", "Matériels Informatique", "Moniteurs dOrdinateur", "Equipement Réseau", "Caméra photo et vidéo", "Imprimente et Scanner", "Sécurité et Surveillance", "Jeux vidéo et Console", "Logiciels"],
                meubles_electromenagere: ["-- Sélectionner la sous-catégorie --", "Appareil ménagers", "Appareil de cuisine"],
                mode_habillement: ["-- Sélectionner la sous-catégorie --", "Sacs", "Vêtements", "Vêtements et Accesoires", "Bijoux", "Chaussures", "Vêtement de Mariage", "Montres"],
                vehicules_trans: ["-- Sélectionner la sous-catégorie --", "Voitures", "Bus et Microbus", "Matériels lourd", "Moto et scooter", "Camions et Remorquers", "Pièces et Accesoire du véhicule", "Motomarine et Bateau", "Service Automobile"],
                sante_beaute: ["-- Sélectionner la sous-catégorie --", "Parfums", "Beauté de cheveux", "Maquillages", "Soin dela peau", "Vitamines et supplements"],
                art_sport_plein_air: ["-- Sélectionner la sous-catégorie --", "Instruments musicaux et Equipements", "Equipement sportif"],
                bebe_enfants: ["-- Sélectionner la sous-catégorie --", "Vêtement pour Enfant", "Chaussure pour Enfant", "Landaus et Poussettes", "Jouets"],
                animaux: ["-- Sélectionner la sous-catégorie --", "Oiseaux", "Chats et Chatons", "Chiens et Chiots", "Poissons", "Accesoires pour les animaux de compagnie"],
                equipements: ["-- Sélectionner la sous-catégorie --", "Equipement Médicale", "Equipements dimpression", "Equipements de restauration", "Equipements de Sécurité", "Equipements de salon", "Equipements d'électricité", "Eclairage de scène et effets", "Equipements de Magasin"],
                quincaillerie_construction: ["-- Sélectionner la sous-catégorie --", "Matériaux de construction", "Outils électrique", "Outils Manuels", "Plomberie et Approvisionnement deau", "Energie solaire"],
                reparation: ["-- Sélectionner la sous-catégorie --", "Pièces de réchanges pour téléphone et tablettes"],
                autres: ["-- Sélectionner la sous-catégorie --", "Autres"]
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

            categorieSelect.addEventListener("change", function() {
                const selected = this.value;
                sousCategorieSelect.innerHTML = "";
                if (subCategories[selected]) {
                    subCategories[selected].forEach(sub => {
                        const option = document.createElement("option");
                        option.value = sub.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase().replace(/\s+/g, "-");
                        option.textContent = sub;
                        sousCategorieSelect.appendChild(option);
                    });
                } else {
                    sousCategorieSelect.innerHTML = "<option>-- Choisir une catégorie d'abord --</option>";
                }
                marqueSelect.innerHTML = "<option>-- marque ici --</option>";
            });

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
                    marqueSelect.innerHTML = "<option>-- Pas de marque disponible --</option>";
                }
            });
        </script>


        <script src="./assets/js/main.js"></script>
        <script src="./assets/js/product.js"></script>
        <script src="./ajax/filter.js"></script>
        <script src="./assets/js/product-booste.js"></script>
        <script src="./ajax/publier-produit.js"></script>
        <script src="./ajax/filter2.js"></script>
        <script src="./assets/js/compte-vendeur.js"></script>
        <script src="./assets/js/compte-acheteur.js"></script>
</body>

</html>