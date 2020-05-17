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
            <h3 class="box-title"><?=ucfirst($page)?> Member</h3>
            <div class="pull-right">
                <a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('member/process')?>" method="post">
                        <div class="form-group">
                            <label>Nama Member Kesayangan *</label>
                            <input type="hidden" name="id" value="<?=$row->member_id?>">
                            <input type="text" name="member_name" value="<?=$row->name?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin *</label>
                            <select type="text" name="gender" value="" class="form-control">
                                    <?php $level = $this->input->post('gender') ? $this->input->post('gender') : $row->gender?>
                                <option value="1" <?=$level == 1 ? 'selected' : null?>>Laki - Laki</option>
                                <option value="2" <?=$level == 2 ? 'selected' : null?>>Perempuan</option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Nomer Telp *</label>
                            <input type="number" name="phone" value="<?=$row->phone?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat *</label>
                            <textarea name="address" class="form-control" required><?=$row->address?></textarea>
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