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
                    <div>
                        <label for="user">Nome de Usuário</label>
                        <input class="field" name="user" placeholder="user" required>
                    </div>
                    <div>
                        <label for="name">Nome completo do Responsável</label>
                        <input class="field" name="name" placeholder="name" required>
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input class="field" name="email" placeholder="E-mail" required>
                    </div>
                        <div>
                        <div class="ddd">
                            <label for="ddd">DDD</label>
                            <input type="text" class="ddd" id="ddd" placeholder="00" required>
                        </div>
                        <div class="tel">
                            <label for="tel">Telefone</label>
                            <input type="text" class="tel" id="tel" placeholder="00000-0000" required>
                        </div>
                            <input type="submit" value="Atualizar">
                </form>
        </div>
    </section>
</body>
</html>