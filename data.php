<?php
    $mahasiswa=array(
        array("npm" => 19081010190, "nama" => "Dimas Aditya Putra", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "3.9"),
        array("npm" => 19081010054, "nama" => "Ezra Wijaya", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "3.0"),
        array("npm" => 19081010123, "nama" => "Daniel Mananta", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "3.6"),
        array("npm" => 19081010114, "nama" => "Muhammad Ryan Mukti", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "3.1"),
        array("npm" => 19081010001, "nama" => "Alfianto Munawar", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "2.5"),
        array("npm" => 19081010161, "nama" => "Angela Michell", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "3.3"),
        array("npm" => 19081010172, "nama" => "Valentino Rossi", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "2.2"),
        array("npm" => 19081010163, "nama" => "Dea Ananda", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "3.7"),
        array("npm" => 19081010002, "nama" => "Yakob Sayuri", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "3.4"),
        array("npm" => 19082010012, "nama" => "Milenia Amanda", "jurusan" => "Sistem Informasi", "fakultas" => "Ilmu Komputer", "ipk" => "3.2"),
        array("npm" => 19083010188, "nama" => "Bagus Rahmad", "jurusan" => "Sains Data", "fakultas" => "Ilmu Komputer", "ipk" => "3.7"),
        array("npm" => 19081010011, "nama" => "Bagas Adi Putra", "jurusan" => "Informatika", "fakultas" => "Ilmu Komputer", "ipk" => "3.6"),
        array("npm" => 19082010111, "nama" => "Edi Supono", "jurusan" => "Sistem Informasi", "fakultas" => "Ilmu Komputer", "ipk" => "3.0"),
        array("npm" => 19083010117, "nama" => "Dedi Kurniawan", "jurusan" => "Sains Data", "fakultas" => "Ilmu Komputer", "ipk" => "3.3"),
        array("npm" => 19082010191, "nama" => "Yondaime Minato", "jurusan" => "Sistem Informasi", "fakultas" => "Ilmu Komputer", "ipk" => "2.2")
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data | Mahasiswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="datatable.js"></script>
</head>
<body>
    <div class="container">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Fakultas</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                <div class="row">
                    <?php
                        foreach ($mahasiswa as $val){
                            if ($val['ipk'] > 3.5 && $val['ipk'] <= 4.0){
                                $class = "text-success";
                            }elseif ($val['ipk'] >= 3.0){
                                $class = "text-warning";
                            }elseif ($val['ipk'] < 3.0){
                                $class = "text-danger";
                            }
                            ?>
                            <tr>
                                <td><div><?php echo $val['npm']?></div></td>
                                <td><div><?php echo $val['nama']?></div></td>
                                <td><div><?php echo $val['jurusan']?></div></td>
                                <td><div class="<?php echo $class; ?>"><?php echo $val['fakultas']?></div></td>
                                <td><div><?php echo $val['ipk']?></div></td>
                            </tr>
                            <?php
                        }
                    ?>                  
                </div>
            </tbody>
            <tfoot>
            </tfoot>
        </table>    
    </div>
</body>
</html>