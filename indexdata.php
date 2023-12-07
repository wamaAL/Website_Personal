
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Daftar Mahasiswa</title>
</head>

<body style="background-color: gray;">
   <header class="mb-5"> 
    <div class="navbar navbar-dark" style="background-color: maroon;">
    <div class="container mt-5">
    <h3 class="text-white mb-0">Daftar Mahasiswa Kelas Keerom</h3>
    </div>
      </div>
    </div>
   </header>

<div class="container mt-5">
            <div class="card">
                <div class="card-header text-white">
                <a href="formulir.php" class="btn btn-info btn-sm">(+) Input Data Baru</a>
                </div>
                <div class="card-body" style="background-color: silver;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        include "connect.php";
                        $conn = new konek();
                        $sql = "SELECT * FROM kelas_keerom"; 
                        $data = mysqli_query($conn->conn, $sql);
                        $no = 0;
                        while($item = $data->fetch_object()){
                          $no+=1;
                          echo "<tr>";
                          echo "<td>$no</td>";
                          echo "<td>$item->nim</td>";
                          echo "<td>$item->nama</td>";
                          echo "<td>$item->prodi</td>";
                          echo "<td>$item->jenis_kelamin</td>";
                          echo "<td>$item->kontak</td>";
                          echo "<td>$item->alamat</td>";
                          echo "</tr>";
                        }
                        ?>
                            <a href="">Ubah</a> | <a href="">Hapus</a>
                            <!-- Tambahkan baris lain sesuai dengan data yang ada -->                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>