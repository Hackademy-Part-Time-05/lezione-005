<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Laravel</title> 

        @vite(['resources/css/app.css', 'resources/js/app.js'])

     
    </head>
    <body>
 

      @php 
            $stringa = "Francesc o  - " . date('Y');
      @endphp

<p class="aulab">ciao sono {{$stringa}}</p>
    </body>
</html>
