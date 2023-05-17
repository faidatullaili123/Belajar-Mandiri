<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>create</title>
</head>
<body>
    <div class="container">
        <form action="proses.php" method="POST">
    <table cellpadding="10" cellspacing="0" class="table table-striped">

        <tr>
            <td>Id</td>
            <td><input type="text" name="id_pengarang"></td>
        </tr>
        <tr>
            <td>Nama pengarang</td>
            <td><input type="text" name="nama_pengarang"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td><input type="number" name="telp"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <td> 
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </td>
            </form>
        </div>




    </table>
    
</body>
</html>