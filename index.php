<!DOCTYPE html>
<html>
<head>
    <title>Directory Listing</title>
    <style>
        body { font-family: sans-serif; padding: 20px; line-height: 1.6; }
        ul { list-style-type: none; padding-left: 0; }
        li { margin: 5px 0; padding: 8px; border-bottom: 1px solid #f0f0f0; }
        li:hover { background-color: #f9f9f9; }
        a { text-decoration: none; color: #0066cc; font-weight: 500; }
        a:hover { text-decoration: underline; }
        .header { border-bottom: 2px solid #eee; margin-bottom: 20px; }
        .type-icon { margin-right: 10px; color: #666; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Contents of: <?php echo basename(__DIR__); ?></h2>
    </div>
    <ul>
        <?php
        // scandir() automatically sorts in ascending alphabetical order
        $files = scandir(".");

        foreach ($files as $file) {
            // Filter out hidden files and the index script itself
            if ($file !== "." && $file !== ".." && $file !== "index.php" && $file[0] !== '.') {
                $isDir = is_dir($file) ? "[DIR] " : "[FILE]";
                echo "<li><span class='type-icon'>$isDir</span><a href='$file'>$file</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
