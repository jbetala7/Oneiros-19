<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        function error()
        {
            Swal.fire({
  title: 'Registration Successfull!',
  text: 'Do you want to continue',
  type: 'success',
  confirmButtonText: 'Cool'
})
        }
    </script>
</head>
<body>
    <?php echo "<script>error()</script>";?>
</body>
</html>