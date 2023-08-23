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
    <div class = "main-full-container">
       <!-- <div class="title-container">
            <div class = "heart-image-square-container-">
            <img  class = "heart-svg" src="{{ asset('images/heart.svg') }}" alt="corazón blanco en lista de canciones favoritas">
            </div>
            <div class = "text-title-container">
                <h4>Lista</h4>
            <h1>Canciones que te gustan</h1>
            <h4 class = "user-text">agalarza.ec.677 canciones</h4>
            </div>
        </div>-->

        <section class = "playlist-container">

       
<div class = "table-container">
        <table class = "playlist-table">
        <thead>
            <tr class = "table-header">
                 <th>#</th>
                 <th>image</th>
                <th colspan="2" >Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody class = grid-container>
            @foreach ($cards as $card)
                <tr class = "card-container">
                    <td>{{ $card->id}}</td>
                    <td >
                        <td><img class = "image-card" src="{{ $card->image }}" alt="{{ $card->title }}"></td>
                        <td class = "card-title">{{ $card->title }}</td>
                        <td class = "card-description">{{ $card->description }}</td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    </div>

        </section> <!-- playlist container-->








    </div> <!--mainfull-container-->
    

   
    
</body>
</html>