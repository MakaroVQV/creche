<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha medica</title>
</head>

<body>
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
                    <label for="Medicamentos"> Medicamentos :</label>
                    <input class="field" name="Medicamentos">
                </div>

                <div>
                    <label for="tipo sanguineo"> Grupo Sanguíneo :</label>

                    <select name="tipo sanguineo" id="tipo sanguineo" required>
                        <optgroup label="Positivos">
                            <option value="a"> A+ </option>
                            <option value="b"> B+ </option>
                            <option value="ab"> AB+ </option>
                            <option value="o"> O+ </option>
                        </optgroup>
                        <optgroup label="Negativos">
                            <option value="a"> A- </option>
                            <option value="b"> B- </option>
                            <option value="ab"> AB- </option>
                            <option value="o"> O- </option>
                        </optgroup>
                    </select>
                </div>

                <div>
                    <label for="Vacinas"> Vacinas :</label>
                    <input class="field" name="Vacinas" required>
                </div>
                <div>
                    <label for="observações"> Observações :</label>
                    <textarea id="observações" name="observações" rows="4" cols="50"></textarea>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
</body>

</html>