<?php
include "dbConfig.php";


if($_POST['id']) {
    $id = $_POST['id'];

    //mengambil data dari database berdasarkan id
$query = "SELECT * FROM customers WHERE id = '".$id."'";
$sql = $db->query($query);
foreach ($sql as $rows) { ?>
    <!-- form -->
        <!-- MEMBUAT FORM -->
        <form action="update-profil.php" method="post">
            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
            <div class="form-group">
                <label> <span class="label label-primary"> Nama</span></label>
                <input type="text" class="form-control" name="nama" value="<?php echo $rows['nama']; ?>">
            </div>
            <div class="form-group">
                <label> <span class="label label-primary">Username</span></label>
                <input type="text" class="form-control" name="username" value="<?php echo $rows['username']; ?>">
            </div>
            <div class="form-group">
                <label><span class="label label-primary">Alamat</span></label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $rows['alamat']; ?>">
            </div>
            <div class="form-group">
                <label><span class="label label-primary">Telepon</span></label>
                <input type="text" class="form-control" name="telepon" value="<?php echo $rows['telepon']; ?>">
            </div>
            <div class="form-group">
                <label><span class="label label-primary">E-mail</span></label>
                <input type="text" class="form-control" name="email" value="<?php echo $rows['email']; ?>">
            </div>
            <div class="form-group">
                <label><span class="label label-primary">Tanggal Lahir</span></label>
                <input type="text" class="form-control" name="tanggal" value="<?php echo $rows['tanggal']; ?>">
            </div>
            <div class="form-group">
                  <label class="radio-inline" for="radios-0"><span class="label label-primary">
                    <input type="radio" name="radios" id="radios-0" value="Pria" checked="checked">
                        Pria</span>
                  </label> 
                    <label class="radio-inline" for="radios-1"><span class="label label-primary">
                        <input type="radio" name="radios" id="radios-1" value="Wanita">
                        Wanita</span>
                    </label>
            </div>
              <div class="modal-footer">
                                
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" value="simpan" name="edit" class="btn btn-primary">
            </div>
        </form>
<?php


}

}
?>