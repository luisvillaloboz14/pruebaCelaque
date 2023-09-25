<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Técnica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Calculadora de Préstamos</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="frm-calcular" name="frm-calcular" action="http://localhost/pruebaCelaque/App/Controllers/calcular.php" method="post">
                    <div class="form-group">
                        <label for="monto">Monto del préstamo:</label>
                        <input type="number" class="form-control" id="monto" name="monto" required>
                    </div>

                    <div class="form-group">
                        <label for="tasa">Tasa de interés anual (%):</label>
                        <input type="number" class="form-control" id="tasa" name="tasa" required placeholder="%" step="any">
                    </div>

                    <div class="form-group">
                        <label for="plazo">Plazo del préstamo (meses):</label>
                        <input type="number" class="form-control" id="plazo" name="plazo" required step="1">
                    </div>

                    <button type="button" class="btn btn-primary" id="btn-calcular">Calcular</button>
                </form>

                <div id="resultado" class="md-4" style="display: none;">
                    <h2>Resultado:</h2>
                    <p>La cuota mensual es: <span id="cuota"></span></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./public/js/scripts.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            Calculo.init();
        });
    </script>
</body>
</html>