<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/menuStyle.css')}}">
    <title>Atualizar dados</title>
</head>
<body>
    <section class="content">
        <div class="atualizar">
            <h3>Atualizar meus dados</h3>
                <form>
                    <input class="field" name="email" placeholder="E-mail">
                    <input class="field" name="pais" placeholder="Selecionar país">
                    <div class="form-group col-xs-2">
                        <label for="ddd">* DDD</label>
                        <input type="text" class="form-control" id="ddd" placeholder="00">
                      </div>
                      <div class="form-group col-xs-10">
                        <label for="tel">* TELEFONE</label>
                        <input type="text" class="form-control" id="tel" placeholder="00000-0000">
                      </div>
                    <input type="submit" value="Atualizar">
                </form>
        </div>
    </section>
</body>