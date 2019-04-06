<?php
include "dbConfig.php";

if($_POST['id']) {
	$id = $_POST['id'];

	//mengambil data dari database berdasarkan id
$query = "SELECT * FROM products WHERE id = '".$id."'";
$sql = $db->query($query);
foreach ($sql as $rows) { ?>
	<!-- form -->
        <!-- MEMBUAT FORM -->
        <form action="update-stok.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $rows['name']; ?>">
            </div>
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" class="form-control" name="kode" value="<?php echo $rows['code']; ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo $rows['price']; ?>">
            </div>
            <div class="form-group">
            </div>
            <div class="form-group">
                <p><img src="images/<?php echo $rows['image']; ?>" height="150" width="150"></p>
                <label> <input type="checkbox" name="edit"> Update foto ?</label>
                <input type="file" class="form-control" name="foto" />
            </div>
              <div class="modal-footer">
                                
              <button type="button" class="btn btn-secon  dary" data-dismiss="modal">Close</button>
                <input type="submit" value="simpan" class="btn btn-primary">
            </div>
        </form>
<?php


}

}
?>