<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cardápio</title>
</head>
<body>
    <section class="content">
        <div class="atualizar">
            <h3>Atualizar Cardápio</h3>
                <form>
                    <img src="{{asset('/imagens/icon cardapio form.png')}}" class="img-responsive">
                    <div>
                        <label for="colacao">Colação</label>
                        <input class="field" name="colacao" placeholder="Inserir cardápio">
                    </div>
                    <div>
                        <label for="lanche_manha">Lanche da Manhã</label>
                        <input class="field" name="lanche_manha" placeholder="Inserir cardápio">
                    </div>
                    <div>
                        <label for="almoco">Almoço</label>
                        <input class="field" name="almoco" placeholder="Inserir cardápio">
                    </div>
                    <div>
                        <label for="lanche_tarde">Lanche da Tarde</label>
                        <input class="field" name="lanche_tarde" placeholder="Inserir cardápio">
                    </div>
                            <input type="submit" value="Atualizar">
                </form>
        </div>
    </section>
</body>
</html>