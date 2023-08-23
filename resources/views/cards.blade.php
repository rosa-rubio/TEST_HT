<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/home-navbar.css') }}" rel="stylesheet">
   <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Changa+One&display=swap">-->
</head>
<body>
    <header class = "home-register-container">    
            <a href="{{ url('/') }}"> <img class = "logo" src="{{ asset('assets/Logo.svg') }}"></a> 

        <div class = "nav-bar-right-div">
             <!-- Search Input -->
             <div class = "nav-bar-search-input-container">
               <form class="search-input" action="search.php" method="GET">
                    <input class="search" placeholder = "Search..." type="text" name="query">
                    <button value='Search' class="search-button" type="submit"><img src= "{{ asset('assets/Glass-icon.svg') }}"></button>
                </form>
            </div>
            <!--nav links-->
            <div class="nav-links-container">
            @if (Route::has('login'))
                    @auth
                        <a class= "dashboard-button" href="{{ url('/dashboard') }}"><img src="{{ asset('assets/Avatar-icon.svg') }}"></a>
                    @else
                        <a class = "login-button" href="{{ route('login') }}" ></a><!--boton de login si quieres poner-->
                        @if (Route::has('register'))
                            <a class = "home-button "href="{{ url('/') }}"> <img src="{{ asset('assets/Home-icon.svg') }}"></a>
                            <a class = "register-button" href="{{ route('register') }}"><img src="{{ asset('assets/Avatar-icon.svg') }}"></a>
        
                        @endif
                    @endauth
                </div>
            @endif
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
        <tbody class="celdas-container">
            @foreach ($cards as $card)
                <tr>
                    <td>{{ $card->id}}</td>
                    <td><img class = "album-image" src="{{ $card->image }}" alt="{{ $card->title }}" width="100"></td>
                    <td class = "song-title">{{ $card->title }}</td>
                    <td class = "song-album">{{ $card->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    </div>

        </section> <!-- playlist container-->








    </div> <!--mainfull-container-->
    

   
    
</body>
</html>