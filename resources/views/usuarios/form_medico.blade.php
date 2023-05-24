<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cardápio</title>
</head>
<body>

<style>

form {
position: absolute;
width: 413px;
height: 799px;
left: 352px;
top: 126px;

background: #F5F5F5;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
    }

ul{
    height: 90px;
    width: 342px;
    left: 391px;
    top: 288px;
    border-radius: 10px;

/* Rectangle */
    width: 342px;
    height: 90px;
    left: 391px;
    top: 288px;

    background: #F6E5CA;
    border-radius: 10px;


    }

</style>
    <section class="content">
        <div class="atualizar">

            <h3> Resumo </h3>
                <form>

                    <div>
                        <label for="altura-peso"> Altura e Peso </label>
                        <input class="field" name="altura-peso" placeholder="Entre com a altura" required>
                        <input class="field" name="altura-peso" placeholder="Entre com a peso" required>
                    <input type="date" id="birthday" name="birthday">
                    
                    </div>

                    <div>
                        <label for="alergia"> Alergias :</label>
                        <input class="field" name="alergia" placeholder="tem alguma alergia? quais ?">
                    </div>

                    <div>
                        <label for="almoco"> Medicamentos :</label>
                        <input class="field" name="almoco" >
                    </div>

                    <div>
                        <label for="tipo sanguineo"> tipo sanguineo :</label>
                        <input list="tipo sanguineo" name="tipo sanguineo" id="tipo sanguineo" required>
                    </div>

                    <div>
                        <label for="Vacinas"> Vacinas :</label>
                        <input class="field" name="Vacinas" required>
                    </div>
                    <div>
                        <label for="Observações"> Observações </label>
                        <input class="field" name="Observações" >
                    </div>
                            <input type="submit" value="Enviar">
                </form>
        </div>
    </section>
</body>
</html>