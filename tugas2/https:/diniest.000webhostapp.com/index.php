<?php
	include'koneksi.php';
	$query = mysqli_query($koneksi,"SELECT * FROM customer");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>tugas2</title>
    </head>
    <body>
        <h1> menampilkan data dari mysql dari situs 000webhost.com</h1></br>
        <h5>Customer</h5>
          <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id customer</th>
            <th>username </th>
             <th>nama</th>
             <th>umur</th>
             <th>alamat</th>
             <th>telp</th>
             <th>email</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["id_customer"];?></td>
            <td><?php echo $data["username"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["umur"];?></td>
            <td><?php echo $data["alamat"];?></td>
            <td><?php echo $data["telp"];?></td>
            <td><?php echo $data["email"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
    </body>
</html>
