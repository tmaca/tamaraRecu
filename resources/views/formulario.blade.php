<html>

<body>

<form method="post" action="respuesta">
    {{ csrf_field() }}
        Dividiendo: <input name="dividiendo"/>
        Divisor: <input name="divisor"/>


    <button type="submit">Enviar</button>

</form>

</body>


</html>
