<?php $this->load->view('layout/header') ; ?>
<body class="sb-nav-fixed">
    <?php $this->load->view('layout/topbar') ; ?>
  
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view('layout/sidebar') ; ?>
        </div>

        <!-- content -->
        <div id="layoutSidenav_content" class="sb-sidenav-dark" style="margin-left: 200px !important; font-family:'Courier New', monospace;">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"><b>ALAT MASUK</b></h1>
                    <hr style="border-bottom: solid 2px #e1e1e1;">

                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div><br>
                    <?php } ?>

                    <?php if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div><br>
                    <?php } ?>
                    <br>
                    <table id="tb_alat" class="table table-secondary" style="width:100%; font-size:22px;">
                        <thead>
                            <tr>
                                <th class="text-center" width="50">ID</th>
                                <th class="text-center" width="250">Nama Alat</th>
                                <th class="text-center" width="250">Harga Alat</th>
                                <th class="text-center" width="300">Alasan Pengajuan</th>
                                <th class="text-center" width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($data){ ?>
                                <?php for($i =0; $i < count($data);$i++){ ?>
                                    <tr>
                                        <td class="text-center"><?= $data[$i]->kodePengajuan ?></td>
                                        <td ><?= $data[$i]->namaAlat ?></td>
                                        <td class="text-center"><?= $data[$i]->hargaAlat ?></td>
                                        <td><?= $data[$i]->alasan ?></td>
                                        <td class="text-center">
                                            <?php if($data[$i]->status == 0){ ?>
                                                <a href="<?php echo base_url('inventaris/alat/input_alat/'.$data[$i]->kodePengajuan); ?>" class="btn btn-success">Accept</a>
                                                <a onclick="return confirm(' Apakah anda yakin untuk menghapus data?')" href="<?php echo base_url('inventaris/alat/delete/'.$data[$i]->kodePengajuan); ?>" class="btn btn-danger">Reject</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>        
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
<?php $this->load->view('layout/script_list') ; ?>
<script type="text/javascript">
    $(document).ready( function () {
        $('#tb_alat').DataTable();
    } );
</script>