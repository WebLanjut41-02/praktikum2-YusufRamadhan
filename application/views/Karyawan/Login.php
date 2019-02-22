<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in</title>
  </head>
  <body>
      <center>
        <br><br><br>
        <h1>Log in page</h1>
        <center>
          <table>
            <form method="POST" action="<?php echo base_url('index.php/Karyawan/Authentication_Karyawan/proses_login')?>">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>:</td>
                  <td><input type="Password" name="nip"></td>
                </tr>
                <tr>
                  <td colspan="3"><center><input type = "submit" name = "submit"><center></td>
                </tr>
            </form>
          </table>
        </center>
      </center>
  </body>
</html>
