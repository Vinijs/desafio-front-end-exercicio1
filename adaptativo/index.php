<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>teste</title>
    </head>
    <body>
        <?php
            // Função para detectar dispositivos móveis
            function isMobile() {
                return preg_match('/(android|iphone|ipad|ipod|blackberry|opera mini|opera mobi|iemobile|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
            }

            // Verificação e inclusão de arquivos
            // Layout Adaptativo
            if (isMobile()) {
                include 'mobile_content.php';
            } else {
                include 'desktop_content.php';
            }
        ?>
    </body>
</html>