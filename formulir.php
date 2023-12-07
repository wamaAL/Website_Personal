
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulir Data Mahasiswa</title>
</head>
<body style="background-color: gray;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-white" style="background-color: maroon;">
                    <h5 class="mb-0">Formulir Data Mahasiswa</h5>
                </div>
                <div class="card-body" style="background-color: silver;">
                <div class="container">
                    <form action="" method="post">
                    <div class="form-group">
                            <label for=""><b>NIM:</b></label>
                            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Nama:</strong></label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Program Studi:</strong></label>
                            <select class="form-control" name="prodi">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Hukum">Hukum</option>
                                <option value="Teknologi Pangan & Hasil Pertanian">Teknologi Pangan & Hasil Pertanian</option>
                                <!-- Tambahkan opsi lainnya sesuai dengan program studi yang ada -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Jenis Kelamin:</strong></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                                <label class="form-check-label" for="">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                <label class="form-check-label" for="">Perempuan</label>
                            </div>
                            <div class="form-group">
                                <label for=""><strong>No HP:</strong></label>
                                <input type="text" class="form-control" name="kontak" placeholder="Masukkan No HP">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Alamat:</strong></label>
                               <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                        <a href="indexdata.php" class="btn. btn-secondary btn-sm">Batal</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
   include "connect.php";
   $conn = new konek(); 
   
   if(isset($_POST["nim"])){
       $nim = $_POST["nim"];
       $nama = $_POST["nama"];
       $prodi = $_POST["prodi"];
       $jenis_kelamin = $_POST["jenis_kelamin"];
       $kontak = $_POST["kontak"];
       $alamat = $_POST["alamat"];
       $query = "INSERT INTO kelas_keerom (nim, nama, prodi, jenis_kelamin, kontak, alamat) VALUE('$nim', '$nama', '$prodi', '$jenis_kelamin', '$kontak', '$alamat')";
       $simpan = mysqli_query($conn->conn, $query);
       if ($simpan){
        header ("location:http://localhost/wamapovay/indexdata.php");
        } 
   }
?>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
