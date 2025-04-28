<?php
require_once 'libs/Parsedown.php';

$parsedown = new Parsedown();

$posts = array_diff(scandir('posts'), array('..', '.'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="script.js" defer></script>
</head>
<body>
    <nav id="navbar" class="navbar">
        <div>
            <h1>BROG DEVWAVE3</h1>
        </div>
        <div class="nav-links">
            <a href="#">Teste1</a>
            <a href="#">Teste2</a>
            <a href="#">Teste3</a>
            <a href="#">Teste4</a>
            <button id="dark-mode-toggle" class="dark-mode-toggle">
                <i class="fas fa-moon"></i>
            </button>
        </div>
    </nav>

    <main class="content">
        <?php
        foreach ($posts as $post) {
            $content = file_get_contents("posts/$post");
            
            $htmlContent = $parsedown->text($content);

            echo "<article class='post'>";
            echo "<h2>" . ucfirst(str_replace('.md', '', $post)) . "</h2>";
            echo "<div>$htmlContent</div>"; 
            echo "</article>";
        }
        ?>
    </main>

</body>
</html>
