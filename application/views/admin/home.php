<div class="col-md-3 col-sm-6 info-box">
    <div class="media">
        <div class="media-left">
            <span class="icoleaf bg-danger text-white" style="background-color: #3b2457 !important;"><i class="fa fa-location-arrow"></i></span>
        </div>
        <div class="media-body">
            <h3 class="info-count text-success" style="padding-top: 10px;"><?php echo $count_iup ?></h3>
               
            <p class="info-text font-12">IUP Logam</p>
            <span class="hr-line"></span>
           
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6 info-box">
    <div class="media">
        <div class="media-left">
            <span class="icoleaf bg-danger text-white" style="background-color: #b81111 !important;"><i class="fa fa-location-arrow"></i></span>
        </div>
        <div class="media-body">
            <h3 class="info-count text-success" style="padding-top: 10px;"><?php echo $count_non ?></h3>
            <p class="info-text font-12">Total Non Logam</p>
            <span class="hr-line"></span>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6 info-box">
    <div class="media">
        <div class="media-left">
            <span class="icoleaf bg-danger text-white" style="background-color: #dc8e27 !important;"><i class="fa fa-location-arrow"></i></span>
        </div>
        <div class="media-body">
            <h3 class="info-count text-success" style="padding-top: 10px;"><?php echo $count_knt ?></h3>
            <p class="info-text font-12">Total Kontrak Karya</p>
            <span class="hr-line"></span>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6 info-box">
    <div class="media">
        <div class="media-left">
            <span class="icoleaf bg-primary text-white" style=""><i class="fa fa-fort-awesome"></i></span>
        </div>
        <div class="media-body">
            <h3 class="info-count text-success" style="padding-top: 10px;"><?php echo $count_perusahaan ?></h3>
            <p class="info-text font-12">Total Perusahaan</p>
            <span class="hr-line"></span>
        </div>
    </div>
</div>
<div class="col-md-12">
  <iframe class="embed-responsive-item" src="<?php echo base_url() ?>assets/gis/index.php?urls=<?php echo urlencode(base_url()) ?>" style="width: 100%;border: 0px;height: 500px;"></iframe>
</div>