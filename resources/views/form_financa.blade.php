<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/...')}}">
    <title>Atualizar mensalidade</title>
</head>
<body>
    <h1>Atualização de Mensalidade</h1>
        <section class="content">
                <div class="atualizar">
                    
                        <form>
                            <div>
                                <label for="user">Vencimento</label>
                                <input class="field" name="user" placeholder="R$" required>
                            </div>

                            <div>
                                <label for="name">Valor</label>
                                <input class="field" name="name" placeholder="R$" required>
                            </div>

                            <div>
                                <label for="email">Valor Pago</label>
                                <input class="field" name="email" placeholder="R$" required>
                            </div>
                                    
                            <div>
                                <label for="Status">Status</label>
                                <select name=""  id="">
                                <option value="Pendente">Pendente</option>
                                <option value="Paga">Paga</option>
                            </div>
                            <input type="submit" value="Atualizar">
                        </form>
                </div>
</body>
</html>