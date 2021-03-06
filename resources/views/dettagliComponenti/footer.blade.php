<footer>

    @php
        $unoLink = [
            'Il Pastificio',
            'Grano decorticato a pietra',
            'Il Molise c\'è',
            'Filiera Integrata',
            '100 anni di pasta',
            'Sartoria della pasta',
            'Spaghetto Quadrato',
            'Le persone'
        ];
        $dueLink = [
            'Le Classiche',
            'Le Integrali',
            'Le Speciali',
            'Le Biologiche',
            'Le Gluten-Free',
            'Le Semole',
            'Le Extra Lusso'
        ];
        $treLink = [
            'Collezione da Chef',
            'Grandi Cucine',
            'Biologiche',
            'Quadrate'
        ];
    @endphp

    <div class="item">
        <div><img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt=""></div>
        Ragione sociale: La Molisana S.P.A. <br>
        Sede Legale: Contrada Colle delle Api, 100/A <br>
        86100 - Campobasso (CB) <br>
        Pec: lamolisana@pec.it <br>
        Tel: +39 0874 4981 <br>
        Fax: +39 0874 629584 <br>
        info@lamolisana.it (per segnalazioni degli utenti) <br>
        commerciale@lamolisana.it <br>
        export@lamolisana.it <br>
        numero verde 8000818081 <br>
        telefono 3801292455
    </div>

    <div class="item">
        <h2>PASTIFICIO</h2><br>
        @foreach ($unoLink as $link)
          <a href="#">{{$link}}</a><br>
        @endforeach
<br>
        <h2>PRODOTTI</h2><br>
        @foreach ($dueLink as $link)
            <a href="#">{{$link}}</a><br>
        @endforeach
    </div><br>

    <div class="item">
        <h2>COLLEZIONE DA CHEF</h2><br>
        @foreach ($treLink as $link)
            <a href="#">{{$link}}</a><br>
        @endforeach
    </div>



</footer>


<img src="img/logo-footer.jpg" alt="">
