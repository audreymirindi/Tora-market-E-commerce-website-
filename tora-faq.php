<?php
session_start();
require_once("./php/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const accordions = document.querySelectorAll('.accordion button');
            accordions.forEach(btn => {
                btn.addEventListener('click', () => {
                    const parent = btn.parentElement;
                    parent.classList.toggle('active');
                });
            });
        });
    </script>

</head>

<body>
    <div class="container">
        <h1>❓ FAQ – Foire Aux Questions</h1>
        <p class="intro">
            Bienvenue dans la section FAQ de <strong>TORA</strong>, votre plateforme de vente, d’achat et de livraison.<br>
            Vous trouverez ici les réponses aux questions les plus fréquentes des utilisateurs.
        </p>

        <!-- Vente -->
        <h2>🛒 VENTE</h2>
        <div class="accordion"><button>1. Qui peut vendre sur TORA ?</button>
            <div class="accordion-content">Tout le monde peut vendre : particuliers, commerçants, artisans, jeunes entrepreneurs. Il suffit de créer un compte vendeur.</div>
        </div>
        <div class="accordion"><button>2. Comment publier une annonce ?</button>
            <div class="accordion-content">Connectez-vous, cliquez sur « Vendre », remplissez le formulaire avec photos, prix, catégorie, description… puis publiez.</div>
        </div>
        <div class="accordion"><button>3. Est-ce que c’est payant ?</button>
            <div class="accordion-content">Publier une annonce est gratuit. Vous pouvez choisir un boost payant pour plus de visibilité.</div>
        </div>
        <div class="accordion"><button>4. Combien d’annonces puis-je publier ?</button>
            <div class="accordion-content">Le nombre est illimité, mais chaque annonce doit respecter nos conditions de qualité (photos, description claire, etc.).</div>
        </div>
        <div class="accordion"><button>5. Comment vendre plus rapidement ?</button>
            <div class="accordion-content">Utilisez TORA BOOST, ajoutez de belles photos, fixez un prix compétitif et soyez réactif dans les messages.</div>
        </div>

        <!-- Achat -->
        <h2>🛍️ ACHAT</h2>
        <div class="accordion"><button>6. Comment acheter un produit ?</button>
            <div class="accordion-content">Naviguez dans les catégories, choisissez un produit, contactez le vendeur via la messagerie TORA ou cliquez sur « contactez via whatsapp ».</div>
        </div>
        <div class="accordion"><button>7. Puis-je négocier le prix ?</button>
            <div class="accordion-content">Oui, la messagerie permet de discuter directement avec le vendeur.</div>
        </div>
        <div class="accordion"><button>8. Comment payer en toute sécurité ?</button>
            <div class="accordion-content">Payez toujours en espèce après avoir vu le produit.<br>Mais si vous êtes dans un autre milieu que le produit, utilisez Tora Express, qui bloque le paiement jusqu’à la réception du produit.</div>
        </div>
        <div class="accordion"><button>9. Que faire si le produit ne correspond pas ?</button>
            <div class="accordion-content">Contactez d’abord le vendeur. Si aucun accord n’est trouvé, ouvrez un litige via l’assistance.</div>
        </div>

        <!-- Livraison -->
        <h2>🚚 LIVRAISON</h2>
        <div class="accordion"><button>10. Qu’est-ce que Tora Express ?</button>
            <div class="accordion-content">C’est notre service de livraison rapide. Il assure :<br>• Paiement sécurisé<br>• Livraison contrôlée<br>• Suivi jusqu’à la réception</div>
        </div>
        <div class="accordion"><button>11. Où livrez-vous ?</button>
            <div class="accordion-content">Nous livrons dans plusieurs villes, tous les pays, selon les zones couvertes. Consultez la carte Tora Express.</div>
        </div>

        <!-- Communication -->
        <h2>💬 COMMUNICATION & CONFIANCE</h2>
        <div class="accordion"><button>12. Est-ce que la messagerie est privée ?</button>
            <div class="accordion-content">Oui, tous les messages sont confidentiels et protégés. TORA n’intervient que si un abus est signalé.</div>
        </div>
        <div class="accordion"><button>13. Que faire si un utilisateur est suspect ?</button>
            <div class="accordion-content">Utilisez l’option « Signaler » dans le profil ou la conversation. Notre équipe prendra des mesures.</div>
        </div>
        <div class="accordion"><button>14. Puis-je noter un vendeur ou un acheteur ?</button>
            <div class="accordion-content">Oui, après chaque transaction, vous pouvez laisser un avis visible sur le profil.</div>
        </div>

        <!-- Sécurité -->
        <h2>🔒 SÉCURITÉ & CONFIDENTIALITÉ</h2>
        <div class="accordion"><button>15. Mes données sont-elles en sécurité ?</button>
            <div class="accordion-content">Oui, TORA utilise des serveurs sécurisés et un chiffrement de bout en bout. Vos données ne sont jamais revendues.</div>
        </div>
        <div class="accordion"><button>16. Puis-je supprimer mon compte ?</button>
            <div class="accordion-content">Oui, depuis les paramètres de votre compte ou en envoyant une demande à : support@toracorporation.com</div>
        </div>

        <!-- Technique -->
        <h2>⚙️ TECHNIQUE & COMPTE</h2>
        <div class="accordion"><button>18. Je n’arrive pas à publier une annonce, que faire ?</button>
            <div class="accordion-content">Vérifiez votre connexion, vos images, ou mettez à jour l’application. Si le problème persiste, contactez le support.</div>
        </div>
        <div class="accordion"><button>19. Comment booster, modifier ou supprimer une annonce ?</button>
            <div class="accordion-content">Allez dans « Mes annonces », cliquez sur l’annonce concernée, puis choisissez Booster ou Modifier ou Supprimer.</div>
        </div>
        <div class="accordion"><button>20. Comment changer mon mot de passe ?</button>
            <div class="accordion-content">Dans « Mon profil » → Sécurité → Changer de mot de passe</div>
        </div>

        <!-- Aide -->
        <h2>📞 BESOIN D’AIDE ?</h2>
        <div class="support">
            <p>Support client disponible :</p>
            <ul>
                <li>📧 Email : support@toracorporation.com</li>
                <li>📱 WhatsApp : +243 xxx xxx xxx</li>
                <li>💬 Chat intégré dans l'application</li>
                <li>🕐 7j/7</li>
            </ul>
        </div><br><br>
        <p>Avez-vous été satisfait par ce guide? <a href="./">Retour</a></p>

    </div>


    </div>

    <div class="footer-contents">
        <!-- beginning of footer cards -->
        <div class="cards-footer">
            <!-- beginning of card1 footer -->
            <div class="card-f-1">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Tora vente</a></li>
                    <li><a href="#">Tora Aide pour client</a></li>
                    <li><a href="#">Tora Aide pour vendeur</a></li>
                    <li><a href="#">Soutient</a></li>
                </ul>
            </div>
            <!-- end of card1 footer -->
            <!-- beginning of card1 footer -->
            <div class="card-f-1">
                <h3>Sécurité</h3>
                <ul>
                    <li><a href="#">Sécurité de vos données</a></li>
                    <li><a href="#">Sécurité de vos conversations</a></li>
                    <li><a href="#">Sureté de vente</a></li>
                    <li><a href="#">Sécurité de vos achats</a></li>
                </ul>
            </div>
            <!-- end of card1 footer -->
            <!-- beginning of card1 footer -->
            <div class="card-f-1">
                <h3>Entreprise</h3>
                <ul>
                    <li><a href="#">Qui sommes-nous?</a></li>
                    <li><a href="#">Pourquoi nous faire confiance</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Prendre un partenariat</a></li>
                </ul>
            </div>
            <!-- end of card1 footer -->
            <!-- beginning of card1 footer -->
            <div class="card-f-1">
                <h3>Contacts</h3>
                <ul>
                    <li><a href="#">contact@toracorporation.com</a></li>
                    <li><a href="#">+243 000 000 000</a></li>
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
    </div>
    </div>

    <!-- beginning of scripting -->
    <!--  <script src="./ajax/account-details.js"></script> -->
</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f9fafb;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    h1 {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        color: rgb(0, 176, 158);
    }

    p.intro {
        text-align: center;
        color: #555;
        margin-bottom: 40px;
    }

    h2 {
        font-size: 20px;
        margin: 20px 0 10px;
        color: rgb(0, 176, 158);
    }

    .accordion {
        background: #fff;
        border-radius: 8px;
        margin-bottom: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .accordion button {
        width: 100%;
        background: #fff;
        border: none;
        outline: none;
        text-align: left;
        padding: 15px;
        font-size: 15px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.3s;
    }

    .accordion button:hover {
        background: #f0f0f0;
    }

    .accordion-content {
        display: none;
        padding: 15px;
        background: #f9f9f9;
        border-top: 1px solid #e5e5e5;
        font-size: 14px;
        line-height: 1.6;
    }

    .accordion.active .accordion-content {
        display: block;
    }

    .support {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    ul {
        margin: 10px 0 0 20px;
    }
</style>