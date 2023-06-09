<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/css/formularios.css')}}">
    <title>Atualizar mensalidade</title>
</head>
<body>
        <section class="content">
                <div class="atualizar">
                <h1>Atualização de Mensalidade</h1>
                        <form>
                            <div class="user">
                                <label for="user">Vencimento</label>
                                <input type="date" name="dob" id="dob" class="data"/>required>
                            </div>

                            <div class="name">
                                <label for="name">Valor</label>
                                <input class="field" name="name" placeholder="R$" required>
                            </div>

                            <div class="email">
                                <label for="email">Valor Pago</label>
                                <input class="field" name="email" placeholder="R$" required>
                            </div>
                                    
                            <div class="status">
                                <label for="Status">Status</label>
                                <select name=""  id="">
                                <option value="Pendente">Pendente</option>
                                <option value="Paga">Paga</option>
                            </div>
                                <input type="submit" value="Atualizar">
                        </form>
                </div>
        </section>
</body>
</html>