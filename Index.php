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
        </div>
    </nav>

    <main class="content">
        <?php
        // Para cada post, leia o conteúdo do arquivo e converta Markdown para HTML
        foreach ($posts as $post) {
            // Lê o conteúdo do arquivo Markdown
            $content = file_get_contents("posts/$post");
            
            // Converte o conteúdo Markdown para HTML
            $htmlContent = $parsedown->text($content);

            echo "<article class='post'>";
            echo "<h2>" . ucfirst(str_replace('.md', '', $post)) . "</h2>"; // Nome do arquivo sem extensão
            echo "<div>$htmlContent</div>"; // Exibe o conteúdo HTML gerado
            echo "</article>";
        }
        ?>
    </main>

</body>
</html>
