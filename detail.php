<?php 
$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles="";
$ids="";
$kat="";
$web="";
$hp="";
$alamat="";
$kota="";
$prov="";
$lat="";
$long="";
foreach($obj->results as $item){
  $titles.=$item->nama_masjid;
  $ids.=$item->id_perusahaan;
  $kat.=$item->nama_usaha;
  $web.=$item->jenis_usaha;
  $hp.=$item->produk;
  $alamat.=$item->alamat;
  $kota.=$item->info1;
  $prov.=$item->info2;
  $lat.=$item->latitude;
  $long.=$item->longitude;
  $image = $item->gambar;
}

$title = "Detail dan Lokasi : ".$titles;
include_once "header.php"; ?>


      <div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <meta charset="utf-8">
        

        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">
        <!-- Place favicon.ico in the root directory -->    
    <!-- all css here -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <!-- google maps -->
    <div>
      <img src="img/<?php echo $image ?>" class="img-thumbnail" alt="Cinque Terre" width="455" height="500"> 
    </div>
    </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Masjid</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>Nama Usaha</td>
                 <td><h4><?php echo $kat ?></h4></td>
               </tr>
                <tr>
                 <td>Jenis Usaha</td>
                 <td><h4><?php echo $web ?></h4></td>
               </tr>
               <tr>
                 <td>Produk</td>
                 <td><h4><?php echo $hp ?></h4></td>
               </tr>
               <tr>
                 <td>Keterangan tambahan 1</td>
                 <td><h4><?php echo $kota ?></h4></td>
               </tr>
               <tr>
                 <td>Keterangan tambahan 2</td>
                 <td><h4><?php echo $prov ?></h4></td>
               </tr>
               

             </table>
            </div>
            </div>
          </div>

        
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>