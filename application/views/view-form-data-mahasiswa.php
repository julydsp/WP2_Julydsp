<html>

<head>
    <title>Form Data Mahasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('data_mahasiswa/cetak'); ?>"method="post">
            <table>
                <tr>
                    <th colspan="3">
                    Form Data Mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>   
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="name" id="name">
                        <?= form_error('name', '<small class="text-danger pl-3">','<small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Nis</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                        <?= form_error('nis', '<small class="text-danger pl-3">','<small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="class" id="class">
                        <?= form_error('class', '<small class="text-danger pl-3">','<small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal" id="tanggal">
                        <?= form_error('tanggal', '<small class="text-danger pl-3">','<small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                        <?= form_error('tempat', '<small class="text-danger pl-3">','<small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                        <?= form_error('alamat', '<small class="text-danger pl-3">','<small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="laki-laki">laki-laki<br>
                        <input type="radio" name="gender" value="perempuan">perempuan<br>
                        <?= form_error('gender', '<small class="text-danger pl-3">','<small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Budha</option>
                            <option value="4">Hindu</option>
                            <option value="5">Protestan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>