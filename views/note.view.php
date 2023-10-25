<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
</head>
<body>
    <h1>Note</h1>
<h2><?=$note['titre']?></h2>
<p><?=$note['content']?></p>
<p>Publiée le <?=$note['created_at']?> par <strong><?= $note['name']?></strong></p>
<a href="/notes">Retour à la liste des notes</a>


</body>
</html>