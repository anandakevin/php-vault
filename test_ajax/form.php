<html>
<head>

<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#myform').click(function() {
            $.ajax({
                url: "simpan.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    alert(data);
                    $['[name=nama'].val(""); 
                    $['[name=harga'].val("");
                    //ini untuk mengosongkan data di input field form myform apabila fungsinya berhasil
                },
                error: function(data) {
                    alert("Tidak dapat memproses");
                }
            });
            return false;
        });
    });
</script>
</head>
<body>
    Masukkan data produk!
    <form id = "myform">
        <table>
            <tr>
                <td>Product Name</td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td>: <input type="text" name="harga"></td>
            </tr>
            <tr>
                <td colspan="2"><button>Simpan</button></td>
            </tr>
        </table>
    </form>
</body>