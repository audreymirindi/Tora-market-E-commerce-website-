<?php
require_once("./config.php");

// Get POST values safely
$sellerName = isset($_POST['sellerName2']) ? trim($_POST['sellerName2']) : '';
$productName = isset($_POST['productName2']) ? trim($_POST['productName2']) : '';

// Initialize user_uniqueID list
$user_uniqueID_list = [];

// Only fetch user_unique_id if sellerName is not empty
if ($sellerName !== '') {
    // Case-insensitive + trim to ignore spaces
    $sql_user = "SELECT user_unique_id FROM user_accounts WHERE LOWER(TRIM(user_name)) LIKE LOWER(?)";
    $query_user = $pdo->prepare($sql_user);
    $query_user->execute(["%$sellerName%"]);
    $res_users = $query_user->fetchAll(PDO::FETCH_COLUMN, 0); // fetch all IDs as array

    if (!empty($res_users)) {
        $user_uniqueID_list = $res_users;
    } else {
        echo '<p>Aucun produit trouvé.</p>';
        exit;
    }
}

// Base SQL
$sql = "SELECT * FROM produit WHERE promotion = 'Enabled'";
$params = [];

// Filter by product name if provided
if ($productName !== '') {
    $sql .= " AND titre LIKE ?";
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
        $row_image = $image_query->fetch(PDO::FETCH_ASSOC); // fetch one image

        if ($row_image) {
            if (!function_exists('truncateText')) {
                function truncateText($text, $length = 30)
                {
                    return (strlen($text) > $length) ? substr($text, 0, $length) . "..." : $text;
                }
            }

            $timeLabel = '';
            if ($row['promotin_time'] == 'moi') {
                $timeLabel = "<span style='font-size:12px;padding:0.3em;background:green;color:white;border-radius:8px;margin-left:1em;'>Mensuel</span>";
            } elseif ($row['promotin_time'] == 'semaine') {
                $timeLabel = "<span style='font-size:12px;padding:0.3em;background:blue;color:white;border-radius:8px;margin-left:1em;'>Hebdomadaire</span>";
            } else {
                $timeLabel = "<span style='font-size:12px;padding:0.3em;background:orange;color:white;border-radius:8px;margin-left:1em;'>Journalier</span>";
            }

            echo '
                <div class="video-card2" data-id="' . $row['id'] . '">
                    <div class="video-contents">
                        <div class="image">
                            <img src="../' . $row_image['image_link'] . '" alt="Product Image">
                        </div>
                        <div class="texts">
                            <h4>' . $row['titre'] . $timeLabel . '</h4>
                            <p>' . truncateText($row['description']) . '</p>
                            <span>Stock:' . $row['stock_number'] . ' -- Prix:' . $row['prix'] . ' -- Ventes:500</span>
                        </div>
                    </div>
                    <div class="menu2">
                        <button><i class="ri-more-2-fill"></i></button>
                        <div class="action-menu2">
                            <a href="#"><i class="ri-bar-chart-fill"></i> Performance</a>
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
