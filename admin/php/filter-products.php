<?php
require_once("./config.php");

// Get POST values safely
$sellerName = isset($_POST['sellerName']) ? trim($_POST['sellerName']) : '';
$productName = isset($_POST['productName']) ? trim($_POST['productName']) : '';

// Initialize user_uniqueID list
$user_uniqueID_list = [];

// Only fetch user_unique_id if sellerName is not empty
if ($sellerName !== '') {
    // Case-insensitive + trim to ignore spaces
    $sql_user = "SELECT user_unique_id FROM user_accounts WHERE LOWER(TRIM(user_name)) LIKE LOWER(?)";
    $query_user = $pdo->prepare($sql_user);
    $query_user->execute(["%$sellerName%"]);
    $res_users = $query_user->fetchAll(PDO::FETCH_COLUMN, 0); // all IDs as array

    if (!empty($res_users)) {
        $user_uniqueID_list = $res_users;
    } else {
        echo '<p>Aucun produit trouvé.</p>';
        exit;
    }
}

// Base SQL
$sql = "SELECT * FROM produit WHERE 1=1";
$params = [];

// Filter by product name if provided
if ($productName !== '') {
    $sql .= " AND LOWER(TRIM(titre)) LIKE LOWER(?)";
    $params[] = "%$productName%";
}

// Filter by seller if IDs exist
if (!empty($user_uniqueID_list)) {
    $placeholders = implode(',', array_fill(0, count($user_uniqueID_list), '?'));
    $sql .= " AND user_unique_id IN ($placeholders)";
    $params = array_merge($params, $user_uniqueID_list);
}

$sql .= " ORDER BY id DESC";

$query = $pdo->prepare($sql);
$query->execute($params);

$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    foreach ($res as $row) {
        // Get a single product image
        $image_sql = "SELECT * FROM imagess WHERE product_unique_id = ? LIMIT 1";
        $image_query = $pdo->prepare($image_sql);
        $image_query->execute([$row['unique_id']]);
        $row_image = $image_query->fetch(PDO::FETCH_ASSOC);

        if ($row_image) {
            if (!function_exists('truncateText')) {
                function truncateText($text, $length = 30)
                {
                    return (strlen($text) > $length) ? substr($text, 0, $length) . "..." : $text;
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
                        <span>Stock:' . $row['stock_number'] . ' -- Prix:' . $row['prix'] . ' -- Ventes:500</span>
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
} else {
    echo '<p>Aucun produit trouvé.</p>';
}
