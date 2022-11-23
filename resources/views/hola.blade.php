<?php

echo $nombre
?>
<br/>
{{$nombre}}
<br/>
{!!$nombre!!}
<br/>
<a href="{{url('/profesores')}}" >aqui</a>
<br/>
<a href="{{url('/profesores')}}" ><button>Button</button></a>
<br>
<form action="{{url('/profesores')}}" method="get">
    <button type="submit">Enviar</button>
</form>
