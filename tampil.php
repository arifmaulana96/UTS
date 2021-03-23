  <?php
  $db_host = 'localhost'; // Nama Server
  $db_user = 'root'; // User Server
  $db_pass = ''; // Password Server
  $db_name = 'uts'; // Nama Database

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
    die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());  
  }
  $sql = 'SELECT * FROM ujian';
    
  $query = mysqli_query($conn, $sql);

  if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
  }
  ?>

<html>
<head>
  <title>Menampilkan Data </title>
  <style type="text/css">
    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    table {
      margin: auto;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #000000;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #FFFFFF;
      color: #000000;
      border-color: #000000 !important;
      
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: left;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
</head>
<body>
  <body style="text-align:center">
 <h1>Data Pemantauan Covid-19 Wilayah Banten</h1>
 <?php
  echo "per ";
  echo date('d-F-Y');
  echo date(' h:i:s A');
  echo "<br>Arif Maulana /171011450525";
?>
  <table class="data-table">
    <caption class="title"> </caption>
    <thead>
      <tr>
        <th>Positif</th>
        <th>Dirawat</th>
        <th>Sembuh</th>
        <th>Meninggal</th>
      </tr>
    </thead>
    <tbody>
    <?php
  
      while ($row = mysqli_fetch_array($query))
    {
      echo '<tr> <td>'.$row['jmlh_positif'].'</td>
          <td>'.$row['jmlh_dirawat'].'</td>
          <td>'.$row['jmlh_sembuh'].'</td>
          <td>'.$row['jmlh_meninggal'] . '</td>
        </tr>';
    }
    ?>

</tbody>
    <tfoot>
      
   </tfoot>
  </table>
</body>
</html>

