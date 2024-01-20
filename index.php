<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h2 class="alert alert-success text-center">
        Cara Input dan Tampil Data Tanpa Reload dengan Ajax Jquery
        </h2>
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form id="form-input">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    placeholder="Input Jurusan">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Jenis Kelamin</label>
                                <select name="jk" class="form-control" id="jk">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                            <button type="submit" id="tombol-simpan" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div id="tabeldata">
                
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
            update();
        });
        $("#tombol-simpan").click(function () {
            //validasi form
            $('#form-input').validate({
                rules: {
                    nama: {
                        required: true
                    },
                    jurusan: {
                        required: true
                    }
                },
                //jika validasi sukses maka lakukan
                submitHandler: function (form) {
                    $.ajax({
                        type: 'POST',
                        url: "simpan.php",
                        data: $('#form-input').serialize(),
                        success: function () {
                            //setelah simpan data, update data terbaru
                            update()
                        }
                    });
                    //kosongkan form nama dan jurusan
                    document.getElementById("nama").value = "";
                    document.getElementById("jurusan").value = "";
                    return false;
                }
            });
        });

        //fungsi tampil data
        function update() {
            $.ajax({
                url: 'datamahasiswa.php',
                type: 'get',
                success: function(data) {
                    $('#tabeldata').html(data);
                }
            });
        }
    </script>
</body>

</html>
