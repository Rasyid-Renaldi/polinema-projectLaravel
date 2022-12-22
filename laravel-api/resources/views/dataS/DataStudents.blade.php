<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Memanggil API Student</title>
</head>

<body>
    <h2>ini halaman data students</h2>
    <table id="tableku">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
        </thead>
        <tbody>
        </tbody>
    </table>
</body>

<script>
    $(document).ready(function() {
        tampilData();
    });

    function tampilData() {
        $('tbody').html('');
        $.ajax({
            url: 'http://localhost:8000/api/students',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $.each(data, function(key, values) {
                    console.log(data[key].id);
                    id = data[key].id;
                    name = data[key].name;
                    email = data[key].email;
                    status = data[key].status;

                    $('tbody').append('<tr>\
                        <td>' + id + '</td>\
                        <td>' + name + '</td>\
                        <td>' + email + '</td>\
                        <td>' + status + '</td>\
                        </tr>');
                });
            }
        });
    }
</script>

</html>