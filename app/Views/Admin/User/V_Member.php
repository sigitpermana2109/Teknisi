<div class="col-md-12 grid-margin">
    <div class="card">
        <div class="card-header">
            <h3 class="box-title">Manajemen User - Member</h3>
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
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Tgl. Lahir</th>
                    <th>JK</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($Member as $key) {?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $key->nama_depan;?>&nbsp;<?= $key->nama_belakang?></td>
                    <td><?= $key->email;?></td>
                    <td><?= $key->no_telp;?></td>
                    <td><?= $key->tgl_lahir;?></td>
                    <td><?= $key->jk;?></td>
                    <td width="100"><img src="<?= base_url()?>/global_assets/images/<?= $key->foto?>" width="100%"></td>
                    <td>
                        <?php if ($key->active === "Aktif") {?>
                        <span class="badge badge-success">Aktif</span>
                    <?php } else {?>
                        <span class="badge badge-danger">Tidak Aktif</span>
                        <?php } ?>
                    </td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">

                                    <a
                                        href="#"
                                        class="dropdown-item"
                                        data-toggle="modal"
                                        data-target="#detailMember"
                                        onclick="detailMember('<?= $key->id_member;?>')">
                                        <div class="btn btn-info" style="width:100%;">
                                            <i class="fa fa-eye"></i>
                                            Lihat Detail</div>
                                    </a>
                                    <a
                                        data-toggle="modal"
                                        data-target="#HapusData"
                                        onclick="Hapus('<?= base_url('Member/Hapus/'.$key->id_member)?>')"
                                        class="dropdown-item">
                                        <div class="btn btn-danger" style="width:100%;">
                                            <i class="fa fa-trash"></i>
                                            Hapus Data</div>
                                    </a>
                                </div>
                            </div>
                        </div>
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
                <h6 class="modal-title">Olah Data</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form
                    class="forms-sample"
                    id="addForm"
                    method="POST"
                    enctype="multipart/form-data"
                    action="<?= base_url('Member/Tambah');  ?>">
                    <select
                        data-placeholder="Type 'aero'"
                        class="form-control select-search"
                        data-fouc="data-fouc">
                        <option>Aeróbics</option>
                        <option>Aeróbics en Agua</option>
                        <option>Aerografía</option>
                        <option>Aeromodelaje</option>
                        <option>Águilas</option>
                        <option>Ajedrez</option>
                        <option>Ala Delta</option>
                        <option>Álbumes de Música</option>
                        <option>Alusivos</option>
                        <option>Análisis de Escritura a Mano</option>
                    </select>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail3">Nama Depan</label>
                            <input
                                type="text"
                                name="nama_depan"
                                id="nama_depan"
                                class="form-control"
                                placeholder="Nama Depan ..."></div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail3">Nama Belakang</label>
                            <input
                                type="text"
                                name="nama_belakang"
                                id="nama_belakang"
                                class="form-control"
                                placeholder="Nama Belakang ..."></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            placeholder="Email ...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Tanggal Lahir</label>
                        <input
                            type="date"
                            name="tgl_lahir"
                            id="tgl_lahir"
                            class="form-control"
                            placeholder="Tanggal Lahir ...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Jenis Kelamin</label><br>
                        <input type="radio" name="jk" id="jk" value="Pria" placeholder="Jk ...">
                        Laki - Laki&nbsp;
                        <input type="radio" name="jk" id="jk" value="Wanita" placeholder="Jk ...">
                        Perempuan
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">No. Telephone</label>
                        <input
                            type="text"
                            name="no_telp"
                            id="no_telp"
                            class="form-control"
                            placeholder="No. Telephone ...">
                        <input type="hidden" name="id_admin" id="id_admin"></div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail3">Password</label>
                            <input
                                type="password"
                                name="password1"
                                id="password1"
                                class="form-control"
                                placeholder="Password ..."></div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail3">Ulangi Password</label>
                            <input
                                type="password"
                                name="password2"
                                id="password2"
                                class="form-control"
                                placeholder="Ulangi Password ..."></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Foto</label>
                        <input
                            type="file"
                            id="file_upload"
                            name="file_upload"
                            class="form-control"
                            onchange="loadFile(event)"/>
                        <!-- <br> -->
                        <img
                            id="foto_profile"
                            class="m-2"
                            style="width:30%;border: 1px solid #ddd;border-radius: 4px;padding: 5px;width: 150px;"
                            src="<?=base_url('global_assets/images/default.jpg'); ?>"></div>

                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-warning btn-sm btn-rounded"
                            data-dismiss="modal">Batal</button>
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

<div
    class="modal fade"
    id="detailMember"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h6 class="modal-title">Alamat Member</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h6 class="font-weight-semibold">Provinsi</h6>
                <p>Jawa Barat</p>
                <hr>
                <h6 class="font-weight-semibold">Kabupaten / Kota</h6>
                <p>Bandung</p>
                <hr>
                <h6 class="font-weight-semibold">Kecamatan / Kelurahan</h6>
                <p>Margaasih / Margaasih</p>
                <hr>
                <h6 class="font-weight-semibold">Alamat Lengkap</h6>
                <p>Kp. Cigugur RT/RW 03/03 No. 64</p><hr>
                <h6 class="font-weight-semibold">Kode Pos</h6>
                <p>40215</p>
            </div>
        </div>
    </div>
</div>

<script>
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
        new Noty({text: 'Anda Berhasil Memperbarui Data.', type: 'success'}).show();
    });
</script>
<?php } else if(session()->getFlashdata('gagal')){  ?>
    <script type="text/javascript">
    $(document).ready(function () {
        new Noty({text: 'Anda Gagal Memperbarui Data.', type: 'warning'}).show();
    });
</script>
<?php } ?>