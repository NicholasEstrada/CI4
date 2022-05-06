<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helen Meu Amor</title>

    <link rel="stylesheet" href="style.css">
    <style>
      html, body{
  height: 1200px;
}

.contai{
  width: 1200px;
  height: 1200px;
  background: linear-gradient(0, #120c56, #000000);
  overflow: hidden;
}

.stars{
  position: relative;
  width: 3px;
  height: 3px;
  border-radius: 50%;
  box-shadow: 50px 30px white, 
    100px 80px white,
    80px 120px white,
    300px 20px white,
    250px 130px white,
    200px 50px white,
    150px 100px white,
    320px 100px white;
  animation: anim-stars 10s linear infinite;
}

.stars::after{
  content: " ";
  position: absolute;
  top: 1200px;
  width: 3px;
  height: 3px;
  border-radius: 50%;
  box-shadow: 50px 30px white, 
    100px 80px white,
    80px 120px white,
    300px 20px white,
    250px 130px white,
    200px 50px white,
    150px 100px white,
    320px 100px white,
    50px 30px white, 
    100px 80px white,
    800px 120px white,
    300px 20px white,
    250px 130px white,
    200px 50px white,
    150px 130px white,
    320px 140px white,
    400px 170px white;
}

.stars2{
  position:absolute;
  width: 1px;
  height: 1px;
  border-radius: 50%;
  box-shadow: 15px 15px white, 
    125px 35px white,
    50px 80px white,
    10px 120px white,
    275px 90px white,
    230px 10px white,
    120px 130px white,
    300px 130px white,
    220px 115px white;
  animation: anim-stars 20s linear infinite;
}

.stars2::after{
  content: " ";
  position: absolute;
  top: 150px;
  width: 1px;
  height: 1px;
  border-radius: 50%;
  box-shadow: 15px 15px white, 
    125px 35px white,
    50px 80px white,
    10px 120px white,
    275px 90px white,
    230px 10px white,
    120px 130px white,
    300px 130px white,
    220px 115px white;
}


@keyframes anim-stars {
    from {
        transform: translateY(0px);
    }
    to {
        transform: translateY(-150px);
    }
}
    </style>

</head>
<body>
<div class="contai" >
	<div class="stars" ></div>
  <div class="stars2" ></div>
</div>
</body>
</html>