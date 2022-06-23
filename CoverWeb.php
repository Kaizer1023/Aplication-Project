<html>
<head>
    <title>Pembayaran Pajak Daerah lainnya(PDL)</title>
</head>
<body>
    <h3>Form Hitung Total Bayar</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Pajang</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
            <td>Muka</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jenis Reklame</td>
                <td>:</td>
                <td>
                    <select name="jenisReklame">
                        <option value="">- Jenis Reklame -</option>
                        <option value="papan_nama">Papan Nama</option>
                        <option value="neon_box">Neon Box</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
            <td>tarif</td>
                <td>:</td>
                <td>
                    <select name="qty">
                        <option value="">- tarif -</option>
                        <?php
                            for($x=Atas Tanah;$x<=Atas Gedung;$x<=Tarif Khusus;$x<=Tarif Normal;$x<=Tarif Normal;$x<=Tarif Rokok;){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3>Hasil :</h3>
    <!-- Coding PHP hitung total bayar ketik disini -->
</body>
</html>