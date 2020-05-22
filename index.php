<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JQuery </title>

    <script src="js/jquery-3.1.0.min.js"></script>
</head>
<body>
    <button type="button" id="botao1">Click Here 1 </button>
    <button type="button" id="botao2">Click Here 2 </button>
    <button type="button" id="botao3">Click Here 3 </button>

    <select name="estado" id="estado">
        <option value=""></option>
        <option value="PR">Stop In The</option>
        <option value="SC">Saint Catherin</option>
        <option value="RS">Big Laugh of South</option>
    </select>

    <input type="text" id="texto">

    <div id="message"></div>

    <script>
        $(document).ready(function() {
            $("#estado").val("PR");
        })

        $("#botao1").click(function() {
            estado = $("#estado").val();
            $("#message").html("<h1>" + estado + "</h1>");
        })

        $("#botao2").click(function() {
            $("#estado").val("SC");
        })

        $("#botao3").click(function() {
            numero = $("#texto").val();
            // console.log("q");
            //console.log(texto);
            
            // nome que ta pegando e o conteudo da var
            $.get("teste.php",{numero:numero},function(dados) {
                $("#message").html(dados);
            }) 
        })
    </script>
</body>
</html>