<?php
    $id = $_REQUEST['id'];
    $model = new Pesanan();
    $pesanan = $model->getPesanan($id);
?>


<div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <h3>Detail Pesanan</h3>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>ID Pelanggan</th>

                            </tr>
                        </thead>
                        <tfoot>
                        <th>No</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>ID Pelanggan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $pesanan['tanggal'] ?></td>
                        <td><?= $pesanan['total'] ?></td>
                        <td><?= $pesanan['pelanggan_id'] ?></td>
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