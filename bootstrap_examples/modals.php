<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="Cyber Dagger" content="Parcial 1 Progra IV.">
        <title>Modals</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico?v=2">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .bs-example{
    	margin: 20px;
    }
</style>

    </head>
    <body style="background-color: #ccffcc">
        <h1>Modals</h1>
        <p>Modals es un boton que saca un pop-up en la pestaña. la cual puede ser util para sacar informacion importante hacia el conocimiento del usuario. Esta misma incluye dos opciones (botones) para que el usuario escoja.</p>
       
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" role="button" class="btn btn-lg btn-primary" data-toggle="modal">Launch Modal</a>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mensaje</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Espero que te esté gustando nuestra pagina web. (・_・ヾ</p>
                    <p class="text-secondary"><small>Inge, ponganos 100 porfa...</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                    <button type="button" class="btn btn-primary"data-dismiss="modal">Por supuesto</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <footer>
        <p><a href="../index.php"> Home</a></p>
    </footer>
    </body>
</html>