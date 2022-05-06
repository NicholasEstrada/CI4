<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Mamãe</title>

  <style>
    body {
      background-color: #63c5c98e;
    }

    .content-coracao {
      position: relative;
      display: flex;
      justify-content: center;
      width: 100px;
      margin: 50px auto;
      -webkit-animation: pulsa 1s linear 0s infinite;
    }

    @keyframes pulsa {
      0% {
        transform: scale(0.9) rotate(0deg);
      }

      50% {
        transform: scale(1) rotate(0deg);
      }

      70% {
        transform: scale(1.1) rotate(0deg);
      }

      80% {
        transform: scale(1.2) rotate(0deg);
      }

      100% {
        transform: scale(1) rotate(0deg);
      }
    }

    .square {
      transform: rotate(45deg);
      width: 50px;
      height: 50px;
      background: #1ba099;
      position: absolute;
      top: 30px;
    }

    .circle:after,
    .circle:before {
      content: "";
      position: absolute;
      width: 54px;
      height: 55px;
      border-radius: 50%;
      background: #1ba099;
    }

    .circle:after {
      left: 5px;
      top: 6px;
    }

    .circle:before {
      right: 5px;
      top: 6px;
    }
  </style>
  <script>
    function confirma() {
      if (!confirm('Deseja excluir?')) {
        return false;
      }
      return true;
    }
  </script>
</head>

<body>
  <div class="body">
    <div class="container mt-5">

      <div class="container d-flex justify-content-evenly mt-5">
        <div class="content-coracao">
          <div class="square"></div>
          <div class="circle"></div>
        </div>
        <div class="content-coracao">
          <div class="square"></div>
          <div class="circle"></div>
        </div>
        <div class="content-coracao">
          <div class="square"></div>
          <div class="circle"></div>
        </div>
      </div>

      <table class="table">
        <tr>
          <th>Mensagens</th>
          <th></th>
        </tr>
        <?php foreach($cores as $core): ?>
        <tr>
          <td>
            <?php echo $core['cores'] ?>
          </td>
          <td>
              <?php echo anchor('mae/delete/' . $core['id'], 'Tirar', ['onclick' => 'return confirma()']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
          <td>
            <?php echo anchor(base_url('mae/escreve'), 'Escrever', ['class' => 'btn btn-success mb-2']) ?>
          </td>
          <td></td>
        </tr>
      </table>

      <div class="container d-flex justify-content-evenly mt-5">
        <div class="content-coracao">
          <div class="square"></div>
          <div class="circle"></div>
        </div>
        <div class="content-coracao">
          <div class="square"></div>
          <div class="circle"></div>
        </div>
        <div class="content-coracao">
          <div class="square"></div>
          <div class="circle"></div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>