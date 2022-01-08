
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
<label for="">LLENAR DATOS</label>
    <select name="lista1" id="lista1">
<option value="0">Selecionar una opcion</option>
<option value="1">America</option>
<option value="2">Asia</option>
<option value="3">Europa</option>
<option value="4">Africa</option>
    </select>
    <br>
    <div id="select2lista"></div>

</body>
</html>

<script>
    $(document).ready(function(){
        recargarPagina();
        $("#lista1").change(function(){
            recargarPagina();
        });
    });
    function recargarPagina(){
        $.ajax({
            url: "datos.php",
            type: "POST",
            data: "continente="+$("#lista1").val(),
            success: function(respuesta){
                $("#select2lista").html(respuesta);
            }
        });
    }
</script>
