<hearder>

    @php
        $lista = ['Home', 'Prodotti', 'News'];
    @endphp

    <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
    <nav class="header">
        @foreach ($lista as $link)
            <div><a href="#">{{$link}}</a></div>
        @endforeach
    </nav>
</header>
