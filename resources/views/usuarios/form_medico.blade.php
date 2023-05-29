<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Ficha medica</title>
</head>

<body>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    form {
      text-align: center;
      width: 100%;
      padding: 40px;
      border-radius: 5px;
      border: 1px solid #dde3ec;
      background: #ffffff;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }

    section {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }

    h3 {
      font-weight: 600;
      font-size: 28px;
      line-height: 34px;
      color: #07074d;
    }

    altura-peso {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }
  </style>

  <section class="content">
    <div class="atualizar">

      <h3> Resumo </h3>
      <form>

        <div class="altura-peso">
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
        <button class="formbold-btn"> Enviar </button>
      </form>
    </div>
  </section>

  <div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">

      <form action="https://formbold.com/s/FORM_ID" method="POST">
        <div class="formbold-form-title">
          <h2 class=""> RESUMO </h2>

        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="firstname" class="formbold-form-label">
              Altura
            </label>
            <input type="text" name="firstname" id="firstname" class="formbold-form-input" />
          </div>
          <div>
            <label for="lastname" class="formbold-form-label"> Peso </label>
            <input type="text" name="lastname" id="lastname" class="formbold-form-input" />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="email" class="formbold-form-label"> Medicamentos </label>
            <input type="email" name="email" id="email" class="formbold-form-input" />
          </div>
          <div>
            <label for="phone" class="formbold-form-label"> Alergias </label>
            <input type="text" name="phone" id="phone" class="formbold-form-input" />
          </div>
        </div>

        <div class="formbold-mb-3">
          <label for="address" class="formbold-form-label">
            Street Address
          </label>
          <input type="text" name="address" id="address" class="formbold-form-input" />
        </div>

        <div class="formbold-mb-3">
          <label for="address2" class="formbold-form-label">
            Street Address Line 2
          </label>
          <input type="text" name="address2" id="address2" class="formbold-form-input" />
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="state" class="formbold-form-label"> State/Prvince </label>
            <input type="text" name="state" id="state" class="formbold-form-input" />
          </div>
          <div>
            <label for="country" class="formbold-form-label"> Country </label>
            <input type="text" name="country" id="country" class="formbold-form-input" />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="post" class="formbold-form-label"> Post/Zip code </label>
            <input type="text" name="post" id="post" class="formbold-form-input" />
          </div>
          <div>
            <label for="area" class="formbold-form-label"> Area Code </label>
            <input type="text" name="area" id="area" class="formbold-form-input" />
          </div>
        </div>


        <button class="formbold-btn"> Enviar </button>
      </form>
    </div>
  </div>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
    }

    .formbold-mb-3 {
      margin-bottom: 15px;
    }

    .formbold-relative {
      position: relative;
    }

    .formbold-opacity-0 {
      opacity: 0;
    }

    .formbold-stroke-current {
      stroke: currentColor;
    }

    #supportCheckbox:checked~div span {
      opacity: 1;
    }

    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }

    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 570px;
      width: 100%;
      background: white;
      padding: 40px;
    }

    .formbold-img {
      margin-bottom: 45px;
    }

    .formbold-form-title {
      margin-bottom: 30px;
    }

    .formbold-form-title h2 {
      font-weight: 600;
      font-size: 28px;
      line-height: 34px;
      color: #07074d;
    }

    .formbold-form-title p {
      font-size: 16px;
      line-height: 24px;
      color: #536387;
      margin-top: 12px;
    }

    .formbold-input-flex {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }

    .formbold-input-flex>div {
      width: 50%;
    }

    .formbold-form-input {
      text-align: center;
      width: 100%;
      padding: 13px 22px;
      border-radius: 5px;
      border: 1px solid #dde3ec;
      background: #ffffff;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }

    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-form-label {
      color: #536387;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 10px;
    }

    .formbold-checkbox-label {
      display: flex;
      cursor: pointer;
      user-select: none;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
    }

    .formbold-checkbox-label a {
      margin-left: 5px;
      color: #6a64f1;
    }

    .formbold-input-checkbox {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }

    .formbold-checkbox-inner {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 20px;
      height: 20px;
      margin-right: 16px;
      margin-top: 2px;
      border: 0.7px solid #dde3ec;
      border-radius: 3px;
    }

    .formbold-btn {
      font-size: 16px;
      border-radius: 5px;
      padding: 14px 25px;
      border: none;
      font-weight: 500;
      background-color: #6a64f1;
      color: white;
      cursor: pointer;
      margin-top: 25px;
    }

    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
  </style>
</body>

</html>