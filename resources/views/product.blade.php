
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="{{asset('css/app.css')}}">
          <title>titolo</title>
      </head>
      <body>

          @include('dettagliComponenti.header')
          <main>

         <div class="container">
             <h3>{{$product["titolo"]}}</h3>
             <img src="{{$product["src-h"]}}" alt="">
             <p>{{$product["descrizione"]}}</p>
         </div>

        </main>

          @include('dettagliComponenti.footer')

      </body>
    </html>
