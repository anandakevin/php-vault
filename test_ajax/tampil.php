<html>
<head>

<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(function() {
        var i = 0;
        $('button').click(function() {
            console.log("kepencet nih");
            $.ajax({
                url: "hitung.php",
                type: "GET",
                data: "count="+i,
                success: function(data) {
                    // alert(data) >> ini untuk debugging kalau ada error
                    // command di atas akan menampilkan output yg dikirim oleh hitung.php
                    // namun command ini hny bisa menampilkan error apabila data yang diterima dari
                    // hitung.php berupa format HTML. Jika data yang dikirim dari hitung.php berupa 
                    // JSON atau XML, maka diganti dulu jadi format HTML untuk sementara
                    i = data;
                    $('.tampil').append(" "+data);
                },
                error: function(data) {
                    alert("Tidak dapat memproses");
                }
            });
        });
    });
</script>
</head>
<body>
    <button> Hitung </button><br/><br/>
    <div class = "tampil"></div>
</body>