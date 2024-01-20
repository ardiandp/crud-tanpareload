<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "connect.php";
            $no=1;
            $query=mysqli_query($connect, "SELECT * FROM Mahasiswa");
            while ($result=mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $result['nama']; ?>
                        </td>
                        <td>
                            <?php echo $result['jurusan']; ?>
                        </td>
                        <td>
                            <?php echo $result['jk']; ?>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>
