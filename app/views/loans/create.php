<!-- app/views/loans/create.php -->
<div style="max-width: 800px; margin: 20px auto; padding: 20px;">
    <h2 style="text-align: center;">Tambah Data Peminjaman</h2>
    <form action="/loans/store" method="POST">
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right; width: 30%;">ID Pinjam:</td>
                <td style="padding: 10px;"><input type="number" name="id_pinjam" id="id_pinjam" required style="width: 100%; padding: 5px; border: 1px solid #000;"></td>
            </tr>
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right;">Buku yang Dipinjam:</td>
                <td style="padding: 10px;"><input type="text" name="buku_yang_dipinjam" id="buku_yang_dipinjam" required style="width: 100%; padding: 5px; border: 1px solid #000;"></td>
            </tr>
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right;">Nama Peminjam:</td>
                <td style="padding: 10px;"><input type="text" name="peminjam" id="peminjam" required style="width: 100%; padding: 5px; border: 1px solid #000;"></td>
            </tr>
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right;">Tanggal Pinjam:</td>
                <td style="padding: 10px;"><input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required style="width: 100%; padding: 5px; border: 1px solid #000;"></td>
            </tr>
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right;">Tanggal Kembali:</td>
                <td style="padding: 10px;"><input type="date" name="tanggal_kembali" id="tanggal_kembali" style="width: 100%; padding: 5px; border: 1px solid #000;"></td>
            </tr>
            <tr style="border-bottom: 1px solid #000;">
                <td style="padding: 10px; text-align: right;">ID Buku:</td>
                <td style="padding: 10px;">
                    <select name="id_buku" id="id_buku" required style="width: 100%; padding: 5px; border: 1px solid #000;">
                        <?php foreach ($books as $book): ?>
                            <option value="<?php echo $book['id_buku']; ?>">
                                <?php echo $book['id_buku']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" style="padding: 8px 16px; border: 1px solid #000; background: none; cursor: pointer;">Simpan</button>
        </div>
    </form>
</div>