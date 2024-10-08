<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

                <h1>Anulación de cupos</h1>

            <div id="wizard">
                <div class="step active">
                    <h2 class="mb-5">Paso 1 Asiganar serial por ANS</h2>
                    
                    <button onclick="nextStep()">Siguiente</button>
                </div>
                <div class="step">
                    <h2>Paso 2 Rercpcionar serial por GNS</h2>
            <h5>
                    Errores comunes.
                    No permite recepcionar cupo errorxxxxxx

                </h5>

            <p>

            Solución 1 :  
            Se debe insertar el cupo de forma manual en la base de datos local dejandolo en estado A
            Se debe realizar la RECEPCIÓN  del cupo.por GNS
            Se debe ANULAR el cupo por GNS

            </p>

            <p>
            Solución 2 :  
            Se  cambia el estado del cupo por TELNET op 2-2 y se deja el cupo en estado T
            Se debe ANULAR el cupo por GNS

            </p>
                    
                    <button onclick="nextStep()" class="btn">Siguiente</button>
                    <button onclick="prevStep()">Anterior</button>
                </div>


             
                
            </div>
</div>

<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>
