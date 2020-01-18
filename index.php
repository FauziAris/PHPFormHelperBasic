<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form helper</title>
    <style media="screen">
      .test{
        color: red;
      }
    </style>
  </head>
  <body>
    <?php
    require_once 'form_helper.php';
    $jabatan = array(
      '' => 'Pilih jabatan',
      '01' => 'Manager',
      '02' => 'HRD',
      '03' => 'Karyawan'
    );
    $data['idanggota']='12345';
    $data['email']='abc@gmail.com';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_REQUEST;
        echo "<pre>";
        echo var_dump(INPUT_SERVER);
        echo "</pre>";

        // echo "<pre>";
        // echo var_dump($_FILES);
        // echo "</pre>";
    }
     ?>
    <?=form_file(null, ['class'=>'form form-group']) ?>
    <?=input_hidden('idanggota', set_value('idanggota', $data['idanggota'])) ?>
    <label for="namaLengkap">Nama Lengkap:</label>
    <?=input_text('namaLengkap', set_value('namaLengkap'), ['placeholder'=>'isi nama lengkap','class'=>'test']) ?>
    <br>
    <label for="jk">Jenis kelamin: </label>
    <?=input_radio('jk', 'L', set_checked('L', set_value('jk')))?>Laki-Laki
    <?=input_radio('jk', 'P', set_checked('P', set_value('jk')))?>Perempuan
    <br>
    <label for="hobi">Hobi: </label>
    <?=input_checkbox('hobi[]', 'makan_mie', set_checked('makan_mie', set_value('hobi')))?>Makan Mie
    <?=input_checkbox('hobi[]', 'membaca_komik', set_checked('membaca_komik', set_value('hobi')))?>Membaca Komik
    <?=input_checkbox('hobi[]', 'main_bola', set_checked('main_bola', set_value('hobi')))?>Main Bola
    <br>
    <label for="jabatan">Jabatan:</label>
    <?=select_option('jabatan', $jabatan, set_value('jabatan'))?>
    <br>
    <label for="alamat">Alamat:</label>
    <?=textarea('alamat', set_value('alamat'))?>
    <br>
    <label for="password">Password:</label>
    <?=input_password('password', set_value('password'), ['placeholder'=>'isi password']) ?>
    <br>
    <label for="photo">Photo</label>
    <?=input_file('photo') ?>
    <br>
    <?=input_submit('Proses', ['name'=>'btnProses']) ?>
    <?=form_close()?>

    <?=form_get(null, ['class'=>'form form-group']) ?>
    <?=form_close()?>
    <?=form_file(null, ['class'=>'form form-group']) ?>
    <?=form_close()?>
  </body>
</html>
