<section class="content-header">
    <h1>
        Dashboard
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-archive"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Barang</span>
              <span class="info-box-number"><?=$this->fungsi->count_item();?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Distributor</span>
              <span class="info-box-number"><?=$this->fungsi->count_supplier();?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Member</span>
              <span class="info-box-number"><?=$this->fungsi->count_member();?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user  "></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Karyawan</span>
              <span class="info-box-number"><?=$this->fungsi->count_user();?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

</section>