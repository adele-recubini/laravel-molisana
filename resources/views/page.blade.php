
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>titolo</title>
</head>
<body>
{{-- qui includo il mio header vedi dettagli.componenti --}}
    @include('dettagliComponenti.header')
{{-- fine  --}}

  <main>
      <h3>LE LUNGHE</h3>
        <div class="container">
      @foreach ($array as $id =>$item)
        @if ($item['tipo'] === 'lunga')
        <a href="/product/{{$id}}"><img src="{{$item['src']}}" alt=""></a>
          @endif
        @endforeach

     <h3>LE CORTE</h3>
        <div class="container">
          @foreach ($array as $id =>$item)
          @if ($item['tipo'] === 'corta')
            <a href="/product/{{$id}}"><img src="{{$item['src']}}" alt=""></a>
          @endif
        @endforeach


      <h3>LE CORTISSIME</h3>
        <div class="container">
          @foreach ($array as $id =>$item)
          @if ($item['tipo'] === 'cortissima')
            <a href="/product/{{$id}}"><img src="{{$item['src']}}" alt=""></a>
          @endif
        @endforeach

    </main>

{{-- qui includo il mio footer --}}
    @include('dettagliComponenti.footer')
{{-- fine  --}}


</body>
</html>
