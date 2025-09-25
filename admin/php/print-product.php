<?php
require_once("./config.php");

$sql = "SELECT * FROM produit ORDER BY id DESC";
$query = $pdo->prepare($sql);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    foreach ($res as $row) {
        $image_sql = "SELECT * FROM imagess WHERE product_unique_id = ? LIMIT 1";
        $image_query = $pdo->prepare($image_sql);
        $image_query->execute([$row['unique_id']]);
        $res_image = $image_query->fetchAll(PDO::FETCH_ASSOC);
        if (count($res_image) > 0) {
            foreach ($res_image as $row_image) {
                if (!function_exists('truncateText')) {
                    function truncateText($text, $length = 30)
                    {
                        if (strlen($text) > $length) {
                            return substr($text, 0, $length) . "...";
                        }
                        return $text;
                    }
                }

                echo '
                        <div class="video-card" data-id="' . $row['id'] . '">
                            <div class="video-contents">
                                <div class="image">
                                    <img src="../' . $row_image['image_link'] . '" alt="Product Image">
                                </div>
                                <div class="texts">
                                    <h4>' . $row['titre'] . '</h4>
                                    <p>' . truncateText($row['description']) . '</p>
                                    <span>' . 'Stock:' . $row['stock_number'] . ' -- Prix:' . $row['prix'] . ' -- Ventes:' . '500' . '</span>
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
                    ';
            }
        }
    }
}
