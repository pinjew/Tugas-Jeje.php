<?php include('header.php') ?>
    <!-- main content start -->
    <div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>Data Siswa</h2>
        <div class="input-group dashboard-filter">
            <button class="btn-succes"><i class="fa-solid fa-plus"></i>Tambah Siswa</button>
        </div>
    </div>
    <?php $students = [
    
    [
        "Joel",
        "XI",
        "PPLG",
        17,
        "Hadir"
    ],
    [
        "Vinze",
        "X",
        "PPLG",
        16,
        "Izin"
    ],
    [
        "Athira",
        "XI",
        "PPLG",
        16,
        "Sakit"
    ],
]?>
        <div class="row">
            <div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                <th></th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for ($i=0; $i < count($students); $i++){?>

                                <tr>
                                    <td><?= $i + 1?></td>
                                    <td><?= $students[$i][0]?></td>
                                    <td><?= $students[$i][1]?></td>
                                    <td><?= $students[$i][2]?></td>
                                    <td><?= $students[$i][3]?></td>
                                    
                                    <td><span class="badge bg-success p-3"><?= $students[$i][4]?></span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                              <?php }?>
                                <tr>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

    <?php include('header.php') ?>