<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Paket</title>
  </head>
  <body>
    <table>
      <form method="POST" action="<?php echo base_url(); ?>index.php/Karyawan/paket/prosesinput_paket">
        <tr>
          <td>Kepada</td>
          <td>:</td>
          <td>
            <select name="kepada">
              <?php
                          $dataPenghuni = $this->session->all_data;
                          foreach ($dataPenghuni as $data) { 
                            echo "<option value='". $data->NoKTP."'>".$data->NoKTP." - ". $data->Nama."</option>";
                          }
                      ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Isi Paket</td>
          <td>:</td>
          <td><input type="text" name="Isi"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit"></td>
        </tr>
      </form>
    </table>
  </body>
</html>