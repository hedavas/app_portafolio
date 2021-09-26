<!DOCTYPE html>
<html lang="en">
<head>

<?php 
use App\Project;
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <title>APP PORTAFOLIO</title>
</head>
<body>
    <header>
                
        <nav>
            <ul>
            <a href="/">Inicio</a>
            <a href="/about">About</a>
            <a href="/portfolio/index">Portfolio</a>
            <a href="/contact">Contact</a>
            </ul>
            
        </nav>
    </header>
</body>
@yield('contenido')
<footer>Copyright ° {{ date('Y') }}</footer>
</html>