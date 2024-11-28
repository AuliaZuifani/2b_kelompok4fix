<!-- app/views/loans/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Peminjaman Buku</title>
</head>
<body>

<div style="max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">
    <h2 style="text-align: center;">Edit Peminjaman Buku</h2>
    <form action="/loans/update/<?php echo $loan['id_pinjam']; ?>" method="POST">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right; width: 30%;">Buku yang Dipinjam:</td>
                <td style="padding: 10px;"><input type="text" id="buku_yang_dipinjam" name="buku_yang_dipinjam" value="<?php echo htmlspecialchars($loan['buku_yang_dipinjam']); ?>" required style="width: 100%; padding: 8px; border: 1px solid #000;"></td>
            </tr>
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right;">Nama Peminjam:</td>
                <td style="padding: 10px;"><input type="text" id="peminjam" name="peminjam" value="<?php echo htmlspecialchars($loan['peminjam']); ?>" required style="width: 100%; padding: 8px; border: 1px solid #000;"></td>
            </tr>
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right;">Tanggal Pinjam:</td>
                <td style="padding: 10px;"><input type="date" id="tanggal_pinjam" name="tanggal_pinjam" value="<?php echo htmlspecialchars($loan['tanggal_pinjam']); ?>" required style="width: 100%; padding: 8px; border: 1px solid #000;"></td>
            </tr>
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right;">Tanggal Kembali:</td>
                <td style="padding: 10px;"><input type="date" id="tanggal_kembali" name="tanggal_kembali" value="<?php echo htmlspecialchars($loan['tanggal_kembali']); ?>" style="width: 100%; padding: 8px; border: 1px solid #000;"></td>
            </tr>
        </table>

        <!-- Membungkus tombol dengan div untuk menempatkan di tengah -->
        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" style="padding: 8px 16px; border: 1px solid #000; background: none; cursor: pointer;">Update</button>
            <a href="/loans/index" style="padding: 8px 16px; border: 1px solid #000; text-decoration: none; background: none; cursor: pointer; margin-left: 10px;">Back to List</a>
        </div>
    </form>
</div>

</body>
</html>
