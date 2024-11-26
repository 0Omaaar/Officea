<!-- Example content for a_propos.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Propos</title>
</head>
<body>
    <h1>Bienvenue à la page À Propos</h1>
    <a href="{{ route('a_propos') }}">A propos</a>
<a href="{{ route('questions_frequentes') }}">Questions fréquentes</a>
<a href="{{ route('notre_offre') }}">Notre offre</a>
<a href="{{ route('tarifs') }}">Tarifs</a>
<a href="{{ route('contact') }}">Contact</a>
</body>
</html>
