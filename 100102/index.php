<!DOCTYPE html>
<html>
<head>
    <title>Directory Listing</title>
    <style>
        body { font-family: sans-serif; padding: 20px; line-height: 1.6; }
        ul { list-style-type: none; }
        li { margin: 5px 0; }
        a { text-decoration: none; color: #0066cc; }
        a:hover { text-decoration: underline; }
        .header { border-bottom: 2px solid #eee; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Files in: <?php echo basename(__DIR__); ?></h2>
    </div>
    <ul>
        <?php
        // Open the current directory
        $dir = opendir(".");

        while (($file = readdir($dir)) !== false) {
            // Hide hidden files, parent directory links, and this script itself
            if ($file != "." && $file != ".." && $file != "index.php" && $file[0] !== '.') {
                echo "<li><a href='$file'>$file</a></li>";
            }
        }
        closedir($dir);
        ?>
    </ul>
</body>
</html>
