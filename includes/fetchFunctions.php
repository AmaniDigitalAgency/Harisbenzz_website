
<?php
include "includes/dbh.inc.php";
        // Get the 4 most recently added products
        $stmt = $conn->prepare('SELECT * FROM listings ORDER BY listing_id DESC LIMIT 6');
        $stmt->execute();
        $listings = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
