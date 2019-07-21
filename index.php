<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="font.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  width:500px;
  position: relative;
  text-align: left;
  color: white;
  display: inline-block;
}

.deskripsi {
  position: absolute;
  bottom: 0px;
  left: 16px;
}

.retur {
  position: absolute;
  bottom: 0px;
  right: 16px;
}

.harga {
  position: absolute;
  top: 0px;
  right: 0px;
  background: Black;

}

.shoplogo {
  position: absolute;
  bottom: 0px;
  left: 50%;
    transform: translate(-50%, -50%);
}

.kode {
  position: absolute;
  bottom: 40px;
  left: 50%;
    transform: translate(-50%, -50%);
}

.centeredkaos {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.centeredlogo {
  position: absolute;
  top: 27%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.shoplogoimg {
  opacity: 0.5;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}


</style>
</head>
<body>


<?php

for ($i=1;$i<=7;$i++){
  for ($j=1;$j<=4;$j++){

           if ($i == 1){ $kaos = "Light Gray";}
             elseif ($i == 2){ $kaos = "Dark Gray";}
             elseif ($i == 3){ $kaos = "White";}
             elseif ($i == 4){ $kaos = "Black";}
             elseif ($i == 5){ $kaos = "Red";}
             elseif ($i == 6){ $kaos = "Blue";}
             else { $kaos == "Green";}

             if ($j == 1){ $tipe = "Buster";}
             elseif ($j == 2){ $tipe = "Quick";}
             elseif ($j == 3){ $tipe = "Arts";}
             else { $tipe = "Extra";}

             $produk="FGO"


?>
      <div class="container">
        <img src="asset_template/template.png" alt="Katalog" style="width:500px;">


          <div class="centeredkaos">
            <img src="asset_kaos/<?php echo $i ?>.png"; alt="asset_kaos/<?php echo $i ?>.png" style="width:352px;left:54px;">
          </div>


          <div class="centeredlogo">
            <img src="asset_logo/<?php echo $j ?>.png"; alt="asset_logo/<?php echo $j ?>.png" style="width:116px;left:192px;">
          </div>


          <div class="shoplogo">
            <img class="shoplogoimg" src="asset_template/Logo.png" alt="Katalog" style="width:80px;">
          </div>

          <div class="kode">
            <a style="color: white" href="<?php echo "https://wa.me/628989019089?text=Hallo%20Cyber%20Holic,%20Saya%20tertarik%20dengan%20Produk%20$produk%20$tipe%20$kaos"; ?>">
            <p style="font-size: 20px;">
                  <?php   
                  echo $produk;
                  echo " ";
                  echo $tipe;
                  echo " ";
                  echo $kaos;
                   ?>"
           </p>
         </a>
          </div>

          <div class="deskripsi">
            <p>
            Deskripsi : <br>
            Bahan : Premium Cotton Combed 30s <br>
            Kelebihan : Adem, Ringan, & Lembut <br>
            Size : S | M | L | XL | XXL | 
            </p>
          </div>

          <div class="retur">
            <p>
            *Kualitas Terjamin <br>
            *Bisa diretur jika produk cacat
            </p>
          </div>


          <div class="harga">
            <h3>Price : 110.000</h3>
          </div>
      </div>

<?php

  };
};
?>


</body>
</html> 
