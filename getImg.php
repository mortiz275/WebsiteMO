<!DOCTYPE html>
<html>
<body>
<div class="imgGet">
    <?php
    $files = scandir('path/to/img/directory/');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<img src='$file' />";
        }
    }
?>
</div>
</body>
</html>
