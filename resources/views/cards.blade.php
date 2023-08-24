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
            @php $cardCount = 0 @endphp
            @foreach ($cards as $card)
            @if ($cardCount < 8)
                <div class = "card-container">
                        <div class= "image-container"><img class = "image-card" src="{{ $card->image }}" alt="{{ $card->title }}"></div>
                        <h3 class = "card-title">{{ $card->title }}</h3>
                        <h4 class = "card-location">{{ $card->location }}</h4>
                </div>
                @php $cardCount++ @endphp
        @else
                @break
            @endif
        @endforeach
    </div>
</body>
</html>