<html>
<head>

<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(function() {
        $.ajax({
            url: "json.php",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                for(i = 0; i < data.length; i++) {
                    $('tbody').append('<tr><td>' + data[i].nama_produk + 
                                        '</td><td>' + data[i].harga + '</td></tr>')
                }
            },
            error: function(data) {
                alert("Tidak dapat memproses");
            }
        });
        return false;
    });
</script>
</head>
<body>
    Masukkan data produk!
    <form id = "myform">
        <table border = "1" cellspacing = "0" width = "100%">
            <thead>
                <tr>
                    <th>PRODUCT NAME</th>
                    <th>PRICE</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </form>
</body>