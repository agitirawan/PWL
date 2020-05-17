<section class="content-header">
    <h1>
        Satuan Barang
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Unit</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
         <div class="box-header">
            <h3 class="box-title">Data Satuan Barang</h3>
            <div class="pull-right">
                <a href="<?=site_url('unit/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Satuan</th>
                        <?php if($this->fungsi->user_login()->level == 1) { ?>
                        <th>Action</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <?php if($this->fungsi->user_login()->level == 1) { ?>
                        <td class="text-center" width="160px">
                                <a href="<?=site_url('unit/edit/' .$data->unit_id)?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="<?=site_url('unit/del/' .$data->unit_id)?>" onclick="return confirm('Apakah Ingin Menghapus Kategori? ')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>