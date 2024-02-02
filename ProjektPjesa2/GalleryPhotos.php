<?php
    function imagesByType($conn, $a) {
        $galleryQuery = "SELECT * FROM gallery WHERE type = $a";
        $galleryResult = $conn->query($galleryQuery);
        $galleryImages = [];

        if ($galleryResult->num_rows > 0) {
            while ($row = $galleryResult->fetch_assoc()) {
                $galleryImages[] = $row;
            }
        }
        
        return $galleryImages;
    }

    $LSImages = imagesByType($conn,"1");
    $ANImages = imagesByType($conn,"2");
    $CLImages = imagesByType($conn,"3");
?>
