<?php 
$jurusan = [
    [
      "nama" => "RPL",
      "siswa" => [
        ["nama" => "satria", "umur" => "18 tahun"],
        ["nama" => "fattah", "umur" => "19 tahun"],
      ],
    ],

    [
      "nama" => "TKJ",
      "siswa" => [
          ["nama" => "shakira", "umur" => "17 tahun"],
          ["nama" => "marsina", "umur" => "20 tahun"],
      ],
    ],

    [
      "nama" => "TKR",
      "siswa" => [
          ["nama" => "Raden", "umur" => "16 tahun"],
          ["nama" => "Fariz", "umur" => "20 tahun"],
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>raka</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="container my-5">
    <h1>Data Siswa</h1>
    <?php foreach($jurusan as $output) { ?>
    <h1><?php echo $output["nama"]; ?></h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Umur</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($output["siswa"] as $nama) { ?>
        <tr>
          <td><?php echo $nama["nama"];?></td>
          <td><?php echo $nama["umur"];?></td>
        </tr>
        <?php }; ?>
      </tbody>
    </table>
    <?php }; ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>