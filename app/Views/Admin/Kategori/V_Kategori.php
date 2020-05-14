<div class="col-md-12 grid-margin">
    <div class="card">
        <div class="card-header">
            <h3 class="box-title">Manajemen User - Admin</h3>
            <a
                data-toggle="modal"
                data-target="#OlahData"
                title="Tambah data"
                class='pull-right btn btn-success btn-sm text-white'>
                <i class="fa fa-plus"></i>&nbsp;Tambahkan Data</a>
        </div>

        <table class="table datatable-basic table-striped">
            <thead>
                <tr>
                    <th width="2">No</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>No. Telp</th>
                    <th>Foto</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($Kategori as $key) {?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $key->nama_kategori;?></td>
                    <td><?= substr($key->deskripsi, 0,50);?> ...</td>
                    <td><?= $key->no_telp;?></td>
                    <td width="100"><img src="<?= base_url()?>/global_assets/images/<?= $key->image?>" width="100%"></td>
                    <td class="text-center">
                        <a
                            href="#"
                            class="btn btn-warning"
                            onclick="select(
                            '<?= $key->id_kategori ?>',
                            '<?= $key->nama_kategori ?>',
                            '<?= $key->deskripsi ?>',
                            '<?= $key->no_telp ?>',
                            '<?= $key->image ?>'
                            );"
                            data-toggle="modal"
                            data-target="#OlahData">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a
                            href="#"
                            class="btn btn-danger"
                            data-toggle="modal"
                            data-target="#HapusData"
                            onclick="Hapus('<?= base_url('Kategori/Remove/'.$key->id_kategori)?>')">
                            <i class="fa fa-trash"></i>
                        </a>
                        
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /striped rows -->
</div>

<!-- Primary modal -->
<div id="OlahData" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h6 class="modal-title">Primary header</h6>
                <button type="button" class="close" data-dismiss="modal" onclick="refresh()">&times;</button>
            </div>

            <div class="modal-body">
                <form
                    class="forms-sample"
                    id="addForm"
                    method="POST"
                    enctype="multipart/form-data"
                    action="<?= base_url('Kategori/manageKategori');  ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail3">Nama Kategori</label>
                        <input
                            type="text"
                            name="nama_kategori"
                            id="nama_kategori"
                            class="form-control"
                            placeholder="Nama Kategori ..."></div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Deskripsi</label>
                        <input
                            type="text"
                            name="deskripsi"
                            id="deskripsi"
                            class="form-control"
                            placeholder="Deskripsi ..."></div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Nomor Telephone</label>
                        <input type="hidden" name="id_kategori" id="id_kategori">
                        <input
                            type="text"
                            name="no_telp"
                            id="no_telp"
                            class="form-control"
                            placeholder="Nomor Telephone ..."></div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Foto</label>
                        <input
                            type="file"
                            id="file_upload"
                            name="file_upload"
                            class="form-control"
                            onchange="loadFile(event)"/>
                        <br>
                        <img
                            id="foto_profile"
                            class="m-2"
                            style="width:30%;border: 1px solid #ddd;border-radius: 4px;padding: 5px;width: 150px;"
                            src="<?=base_url('global_assets/images/default.jpg'); ?>"></div>

                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-warning btn-sm btn-rounded"
                            data-dismiss="modal"
                            onclick="refresh()">Batal</button>
                        <button type="submit" id="valid" class="btn btn-primary btn-sm btn-rounded">
                            <i class="fa fa-send"></i>&nbsp;&nbsp;Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /primary modal -->

<!-- Modal Hapus-->
<div
    class="modal fade"
    id="HapusData"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img
                    src="<?= base_url('assets/img/modal/hapus.png')?>"
                    width="20%"
                    class="mx-auto d-block my-4">
                <div class="text-center text-dark">
                    <p class="text-bold" style="font-size: 20px;">Apakah Anda Yakin ?</p>
                    <p class="my-3" style="font-size: 15px;">Anda Tidak Bisa Mengembalikan Data Ini!</p>
                </div>
            </div>
            <div class="my-3 mx-auto d-block">
                <button type="button" class="btn btn-light" data-dismiss="modal">Tidak</button>
                <a class="btn px-4 text-light" id="btn-delete" style="background-color: red;">Ya</a>
            </div>
        </div>
    </div>
</div>
<script>
    function select($id_kategori, $nama_kategori, $deskripsi, $no_telp, $image){
        $('#id_kategori').val($id_kategori);
        $('#nama_kategori').val($nama_kategori);
        $('#deskripsi').val($deskripsi);
        $('#no_telp').val($no_telp);
        var link = "<?= base_url()?>global_assets/images/";
        document.getElementById("foto_cover").src = link+$image;
    }

    function refresh($id_kategori, $nama_kategori, $deskripsi, $no_telp, $image){
        $('#id_kategori').val('');
        $('#nama_kategori').val('');
        $('#deskripsi').val('');
        $('#no_telp').val('');
        var link = "<?= base_url()?>/global_assets/images/";
        document.getElementById("foto_cover").src = '<?=base_url('global_assets/images/default.jpg'); ?>';
    }

    function haha() {
        new Noty(
            {text: 'You successfully read this important alert message.', type: 'success'}
        ).show();
    }
    function Hapus(url) {
        $('#btn-delete').attr('href', url);
        $('#HapusData').modal();
    }
</script>

<?php if(session()->getFlashdata('success')){  ?>
<script type="text/javascript">
    $(document).ready(function () {
        new Noty(
            {text: 'Anda Berhasil Memperbarui Data.', type: 'success'}
        ).show();
    });
</script>
<?php } ?>