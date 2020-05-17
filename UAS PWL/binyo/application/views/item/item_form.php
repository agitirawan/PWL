<section class="content-header">
    <h1>
        Barang
        <small>/ item</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> item</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
         <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Barang</h3>
            <div class="pull-right">
                <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('item/process')?>" method="post">
                        <div class="form-group">
                            <label>Kode Barang *</label>
                            <input type="hidden" name="id" value="<?=$row->item_id?>">
                            <input type="text" name="barcode" value="<?=$row->barcode?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang *</label>
                            <input type="text" name="item_name" value="<?=$row->name?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori Barang *</label>
                            <select name="categori" class="form-control" required> 
                                <option value="">-- Pilih --</option>
                                <?php foreach($categori->result() as $key => $data) { ?>
                                    <option value="<?=$data->categori_id?>" <?=$data->categori_id == $row->categori_id ? 'selected' : NULL?>><?=$data->name?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>unit *</label>
                            <?php echo form_dropdown('unit', $unit, $selectedunit, ['class' => 'form-control', 'required' => 'required']); ?>
                            
                            
                        </div>
                        <div class="form-group">
                            <label>Harga Barang *</label>
                            <input type="number" name="price" value="<?=$row->price?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">Save</button>
                            <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>