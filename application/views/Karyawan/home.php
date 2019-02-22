<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
  </head>
  <body>
    <center>
      <br><br>
      <h2>Welcome <?php echo $this->session->userdata("Nama"); ?></h2>
      <h1>Menu</h1>
      <table border = "2">
        <tr>
          <form action="POST">
          <td>Data Penghuni</td>
          <td>
            <a href="<?php echo base_url('index.php/Karyawan/paket/input_paket') ?>">Input Data</a>            
          </td>
        </form>
        </tr>
      </table>
        <br>
      <table border="2">
        <tr bgcolor = "blue">
          <td colspan="9"><center><h3>List Paket</h3></center></td>
        </tr>
        <tr bgcolor="gray">
          <td><center>ID</center></td>
          <td><center>Isi Paket</center></td>
          <td><center>Kepada</center></td>
          <td><center>Penerima</center></td>
          <td><center>Tanggal didatang</center></td>
          <td><center>Tanggal diambil</center></td>
          <td colspan="2"><center>Action</center></td>
        </tr>
        <?php $datapaket = $this->session->all_data;

                foreach ($datapaket as $data) {

               ?>
              <tr>
                <td><?php echo $data->ID ?></td>
                <td><?php echo $data->isi_paket ?></td>
                <td><?php echo $data->sasaran ?></td>
                <td><?php echo $data->penerima ?></td>
                <td><?php echo $data->tanggal_datang ?></td>
                <td><?php echo $data->tanggal_ambil ?></td>
                <td>Edit</td>
              </tr>
              <?php } ?>
      </table>
      <a href="<?php echo base_url('index.php/Karyawan/Authentication_Karyawan/index') ?>">Log-Out</a>
    </center>
  </body>
</html>