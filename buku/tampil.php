<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Kategori</th>
            <th width="20">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "../connect.php";
            $no=1;
            $query=mysqli_query($connect, "SELECT * FROM buku");
            while ($result=mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $result['judul']; ?>
                        </td>
                        <td>
                            <?php echo $result['penulis']; ?>
                        </td>
                        <td>
                            <?php echo $result['kategori']; ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>   
                            <button id="<?php echo $result['id']; ?>" class="btn btn-danger btn-sm hapus_data"> <i class="fa fa-trash"></i> Hapus </button>
                            </td>
                        
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<script>
    $(document).on('click', '.hapus_data', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "hapus.php",
        data: {id:id},
        success: function() {
            $('.data').load("tampil.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
</script>