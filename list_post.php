<?php
$endPoint = "https://jsonplaceholder.typicode.com/posts"; // API Extérieur
try {
    // Appel au endPoint et récupérer une réponse (au format JSON)
    $reponseJSON = file_get_contents($endPoint);
    // Convertir le JSON en un tableau associatif
    $posts = json_decode($reponseJSON, true);
    // Afficher les posts
    foreach ($posts as $post) {
        // $post est un tableau associatif
        echo "______________" .
            PHP_EOL .
            "ID : " .
            $post['id'] .
            PHP_EOL .
            $post['title'] .
            PHP_EOL;
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
