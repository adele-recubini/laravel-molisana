<hearder>

    @php
        $lista = ['Home', 'Prodotti', 'News'];
    @endphp

   <div class="logo">
    <img src="img/logo.png" alt="">
   </div>

    <div class="header">
        @foreach ($lista as $link)
            <a href="#">{{$link}}</a>
        @endforeach
    </div>
</header>
