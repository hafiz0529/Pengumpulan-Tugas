<?php
    $id = $_REQUEST['id'];
    $model = new Pelanggan();
    $pelanggan = $model->getPelanggan($id);
?>


<div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <h3>Detail pelanggan</h3>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>jk</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>ID Kartu</th>
                            </tr>
                        </thead>
                        <tfoot>
                        <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>jk</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>ID Kartu</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $pelanggan['kode'] ?></td>
                        <td><?= $pelanggan['nama'] ?></td>
                        <td><?= $pelanggan['jk'] ?></td>
                        <td><?= $pelanggan['tmp_lahir'] ?></td>
                        <td><?= $pelanggan['tgl_lahir'] ?></td>
                        <td><?= $pelanggan['email'] ?></td>
                        <td><?= $pelanggan['kartu_id'] ?></td>
                    </tr>
                            <?php
                                $no++;
                                 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>