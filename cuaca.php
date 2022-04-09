<?php
$cuaca = file_get_contents('https://api.openweathermap.org/data/2.5/weather?lat=-8.121376&lon=115.078180&appid=601229e51082f276c2b29ca8f0b27226');
$result = json_decode($cuaca, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuaca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
        <div class="text-black text-center">
            <h1 class="mb-3 mt-5">Cuaca di Bali</h1>
        </div>
        <div class="d-flex justify-content-start">
            <div class="card-transparent text-black">
  <div class="card-body">
    <h5 class="card-title">Kampung Baru, Bali</h5>
    <p class="card-text">Cuaca hari ini :</p>
    <p class="card-text">Temperatur : <?php print_r($result['weather']['0']['description']);?></p>
    <p class="card-text">Temperatur min : <?php print_r($result['main']['temp_min']);?></p>
    <p class="card-text">Temperatur max : <?php print_r($result['main']['temp_max']);?></p>
    <p class="card-text">Kelembaban : <?php print_r($result['main']['humidity']);?></p>
  </div>
</div>
</body>
</html>