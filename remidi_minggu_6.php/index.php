<?php
$perdana = [
    ["Axis", "2GB", 15000],
    ["Axis", "5GB", 34999],
    ["Smartfren", "5GB", 17000],
    ["Smartfren", "10GB", 35000],
    ["Tri", "2GB", 22000],
    ["Tri", "6GB", 39000]
];

// Membuat Pilihan
$temp_arr=[];

foreach ($perdana as $key) {

   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr); // array_unique =Menghapus nilai duplikat dari array

$tampilkan_perdana=[];
if(isset($_POST['filter']))  // isset =  Tentukan apakah variabel dideklarasikan dan berbeda dariNULL
{
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_perdana=$perdana;
    }else{
        foreach($perdana as $key)
        {
            if($key[0] == $filter){
                $tampilkan_perdana[]=[$key[0],$key[1],$key[2]];
            }
        }
    }
}else{
    $tampilkan_perdana=$perdana;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
      body{
        background-color: #4567;
      }
      
    </style>
    <body>
      
    <center><h1>KONTER KITA</h1></center>
    <form action="index.php" method="post">
        <select name="filter">
            <option value="">
                Tampilkan Semua
            </option>
            <?php foreach ($pilihan as $key): ?>
                 <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter">
    </form>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">PERDANA</th>
      <th scope="col">TYPE</th>
      <th scope="col">HARGA</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_perdana as $key => $value): ?>
  <tbody>
    <tr>
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[2]; ?>
<?php endforeach; ?>
<thead class="thead-dark"> <!-- light untuk cerah -->
    <tr>
      <th scope="col">Total Keseluruhan</th>
      <th scope="col"></th>
      <th scope="col"><?php echo $grand_total; ?></th>
    </tr>
  </thead>

</table>
<div class="container">
  <div class="row">

  <div class="col-4 mt-5">
  <div class="card" style="width: 15rem;">
  <img src="image/axis.jpg" class="card-img-top" alt="axis">
  <div class="card-body">
    <h3>AXIS</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
  </div>

  <div class="col-4 mt-5">
  <div class="card" style="width: 15rem;">
  <img src="image/smartfren.png" class="card-img-top" alt="smratfren">
  <div class="card-body">
    <h3>SMARTFREN</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
  </div>

  <div class="col-4 mt-5">
  <div class="card" style="width: 15rem;">
  <img src="image/tri.jpg" class="card-img-top" alt="tri">
  <div class="card-body">
    <h3>TRI</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
  </div>

  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>