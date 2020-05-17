<section class="content-header">
    <h1>
        Barang
        <small>/ item</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Item</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
         <div class="box-header">
            <h3 class="box-title">Data Barang</h3>
            <div class="pull-right">
                <a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Satuan</th>
                        <th>Harga Barang</th>
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
                        <td><?=$data->barcode?></td>
                        <td><?=$data->name?></td>
                        <td><?=$data->categori_name?></td>
                        <td><?=$data->stock?></td>
                        <td><?=$data->unit_name?></td>
                        <td><?=$data->price?></td>
                        <?php if($this->fungsi->user_login()->level == 1) { ?>
                        <td class="text-center" width="160px">
                                <a href="<?=site_url('item/edit/' .$data->item_id)?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="<?=site_url('item/del/' .$data->item_id)?>" onclick="return confirm('Apakah Ingin Menghapus Kategori? ')" class="btn btn-danger btn-xs">
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