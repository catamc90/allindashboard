<?php
include 'header.php';
?>



<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 928px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <div class="row page-titles">
            <div class="col-md-5 text-left">
                <h2 class="text-themecolor">SETTINGS</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row whitebg roundcorners" >
                    <div class="col-12 m-t-20 m-b-20">
                        <div class="row">
                            <div class="col-10">
                                <h3 class="" style="display: inline;">MONTHLY GOALS</h3>
                                <span class="userline w80"></span>
                            </div>
                            <div class="col-2 pull-right text-right">
                                <button type="button" class="btn waves-effect waves-light btn-xs btn-settings ico-m-b">5</button>
                                <img src="assets/images/settings/pen.png" class="ico-m-l">
                                <img src="assets/images/settings/trash.png" class="ico-m-l">
                                <img src="assets/images/settings/arrow-d.png" class="ico-m-b">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row whitebg roundcorners" >
                    <div class="col-12 m-t-20 m-b-20">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="" style="display: inline;">LOGO</h3>
                                <span class="userline w90"></span>
                            </div>
                            <div class="col-3 pull-right text-right">
                                <img src="assets/images/settings/logo-settings.png" class="ico-m-l" style="height: 45px;margin-right:20px;">
                                <img src="assets/images/settings/download.png" class="ico-m-l">
                                <img src="assets/images/settings/arrow-d.png" class="ico-m-b">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row whitebg roundcorners" >
                    <div class="col-12 m-t-20 m-b-20">
                        <div class="row">
                            <div class="col-10">
                                <h3 class="" style="display: inline;">COLORS</h3>
                                <span class="userline w80"></span>
                            </div>
                            <div class="col-2 pull-right text-right">
                                <button type="button" class="btn waves-effect waves-light btn-xs btn-settings ico-m-b" data-toggle="modal" data-target="#myModal" >&nbsp;</button>
                                <button type="button" class="btn waves-effect waves-light btn-xs btn-settings-grey ico-m-b">&nbsp;</button>
<!--                                <img src="../assets/images/alert/model.png" alt="default" data-toggle="modal" data-target="#myModal" class="model_img img-responsive">-->
                                <img src="assets/images/settings/pen.png" class="ico-m-l">
                                <img src="assets/images/settings/arrow-d.png" class="ico-m-b">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
<!--                        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>-->
<!--                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
                    </div>
                    <div class="modal-body text-center">
                        <div class="col-12 m-t-20 m-b-40">
                            <h4 style="display: inline">Top Bar Color</h4>
<!--                            <button type="button" class="btn waves-effect waves-light btn-xs btn-settings ico-m-b"  >&nbsp;</button>-->
                            <input class=" btn-color-picker ico-m-b" type="color" value="#e4e4e4" style="">
                        </div>
                        <div class="col-12 m-b-40">
                            <h4 style="display: inline">Sidebar Color</h4>
                            <input class="btn-color-picker ico-m-b" type="color" value="#ff0000"  style="">
<!--                            <button type="color" class="btn waves-effect waves-light btn-xs btn-settings-grey ico-m-b">&nbsp;</button>-->
                        </div>

                    </div>
                    <div class="text-center m-b-40">
                        <button type="button" class="btn btn-update-settings waves-effect text-center" >UPDATE</button>
<!--                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">UPDATE</button>-->
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->



<?php
include 'footer.php';
?>
