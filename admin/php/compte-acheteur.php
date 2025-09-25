<?php
require_once("./config.php");

$sql = "SELECT * FROM user_accounts WHERE user_category = 'acheteur' ORDER BY RAND()";
$query = $pdo->prepare($sql);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    foreach ($res as $row) {

        if ($row['user_image'] == "./") {
            $userimage = "avatar/user_icon_male.png";
        } else {
            $userimage = $row['user_image'];
        }

        echo '
                        <div class="video-card3" data-id="' . $row['id'] . '">
                            <div class="video-contents">
                                <div class="image">
                                    <img src="./' . $userimage . '" alt="Product Image">
                                </div>
                                <div class="texts">
                                    <h4>' . $row['user_name'] . '
                                    </h4>
                                    <p>' . $row['user_category'] . '</p>
                                    <span>' . 'E-mail: ' . $row['user_email'] . ' -- Phone: ' . $row['contact_phone'] . '</span>
                                </div>
                            </div>
                            <div class="menu3">
                                <button><i class="ri-more-2-fill"></i></button>
                                <div class="action-menu3">
                                    <span><i class="ri-delete-bin-6-line"></i> Supprimer</span>
                                </div>
                            </div>
                        </div>
                    ';
    }
}
