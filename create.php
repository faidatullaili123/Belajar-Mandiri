<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>create</title>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <form id="form-pengarang" action="proses.php" method="POST">
    <table cellpadding="10" cellspacing="0" class="table table-striped">

        <tr>
            <td>Id</td>
            <td><input type="text" id="input-id" name="id_pengarang" class="form-control"></td>
            <td><p id="text-error-id"></p></td>
        </tr>
        <tr>
            <td>Nama pengarang</td>
            <td><input type="text" id="input-nama" name="nama_pengarang" class="form-control"></td>
            <td><p id="text-error-nama"></p></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" id="input-email" name="email" class="form-control"></td>
            <td><p id="text-error-email"></p></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td><input type="number"  id="input-telpon" name="telp" class="form-control"></td>
            <td><p id="text-error-telpon"></p></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" id="input-alamat" name="alamat" class="form-control"></td>
            <td><p id="text-error-alamat"></p></td>
        </tr>
        <td> 
            <button id="my-button" type="button" name="button" class="btn btn-primary">Submit</button>
        </td>
            </form>
        </div>




    </table>
    
</body>
</html>
<script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#input-id').val().length == 0 || $('#input-nama').val().length == 0 || $ ('#input-email').val().length == 0 || $('#input-telpon').val().length == 0 || $('#input-alamat').val().length == 0 ) {
            $('#input-id').css({"backgroundColor" : "#ff00002b"});
            $('#text-error-id').text('Silahkan isi ID terlebih dahulu');
            $('#input-nama').css({"backgroundColor" : "#ff00002b"});
            $('#text-error-nama').text('Silahkan isi Nama terlebih dahulu');
            $('#input-email').css({"backgroundColor" : "#ff00002b"});
            $('#text-error-email').text('Silahkan isi Email terlebih dahulu');
            $('#input-telpon').css({"backgroundColor" : "#ff00002b"});
            $('#text-error-telpon').text('Silahkan isi Telpon terlebih dahulu');
            $('#input-alamat').css({"backgroundColor" : "#ff00002b"});
            $('#text-error-alamat').text('Silahkan isi Alamat terlebih dahulu');

        } else {
            $('#form-pengarang').submit();
        }
    });
</script>

