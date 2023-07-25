<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://103.226.55.159/json/data_rekrutmen.json');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
curl_close($curl); 

$hasil = json_decode($result, true) ;
$hasil = $hasil["Form Responses 1"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mon-KIP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css " rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css'">
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  
  <body>

  <div class="row">
      <div class="card">
        <div class="card-body">
          <div class="card-title">Data Rektrutmen IT Development MA</div>
            <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Satuan Kerja</th>
                <th scope="col">Posisi</th>
                <th scope="col">Bahasa Pemrograman </th>
                <th scope="col">Database</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($hasil as $row): ?>
                <tr>
                  <td><?php echo $row["nama"];?></td>
                  <td><?php echo $row["nip"];?></td>
                  <td><?php echo $row["satuan_kerja"];?></td>
                  <td><?php echo $row["posisi_yang_dipilih"];?></td>   
                  <td><?php echo $row["bahasa_pemrograman_yang_dikuasai" ];?></td>  
                  <td><?php echo $row["database_yang_dikuasai"];?></td>  
                  <td><?php echo $row["tools_yang_dikuasai"];?></td>   
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
  </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>