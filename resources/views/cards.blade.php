<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/cards.css')}}" rel="stylesheet">
</head>
<body>
    <header>
        <img src="{{ asset('assets/Logo.svg') }}" >
<div class="align-right bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">Register</a>
    </div>
</header>
    <div class = "grid-container">
            @foreach ($cards as $card)
                <div class = "card-container">
                        <img class = "image-card" src="{{ $card->image }}" alt="{{ $card->title }}">
                        <h3 class = "card-title">{{ $card->title }}</h3>
                        <h4 class = "card-description">{{ $card->description }}</h4>
                </div>
            @endforeach
    </div>
</body>
</html>