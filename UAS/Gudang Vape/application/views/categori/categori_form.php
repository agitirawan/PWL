<section class="content-header">
    <h1>
        Supplier
        <small>Distributor</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
         <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Kategori</h3>
            <div class="pull-right">
                <a href="<?=site_url('categori')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('categori/process')?>" method="post">
                        <div class="form-group">
                            <label>Nama Kategori *</label>
                            <input type="hidden" name="id" value="<?=$row->categori_id?>">
                            <input type="text" name="categori_name" value="<?=$row->name?>" class="form-control" required>
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