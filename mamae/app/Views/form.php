<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>

    <style>
        body {
      background-color: #63c5c98e;
    }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php echo form_open('mae/grava'); ?>
        <div class="form-group">
            <label for="cores">Escrever</label>
            <input type="text" name="cores" id="cores" class="form-control">
        </div>
        <input type="submit" value="Salvar" class="btn btn-primary mt-2">
        <p><?php echo anchor(base_url('mae'), 'Voltar para mensagens', ['class' => 'btn btn-success mt-2']) ?></p>
        <?php echo form_close(); ?>
    </div>
</body>
</html>