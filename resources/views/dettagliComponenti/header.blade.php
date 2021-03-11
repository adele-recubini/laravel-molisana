<hearder>

    @php
        $lista = ['Home', 'Prodotti', 'News'];
    @endphp

    <img src="img/logo.png" alt="">

    <nav class="header">
        @foreach ($lista as $link)
            <div><a href="#">{{$link}}</a></div>
        @endforeach
    </nav>
</header>
