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
                <h2 class="text-themecolor">MEDIA-Edit</h2>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row whitebg roundcorners" >


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!--                        <h4 class="card-title">Contact Emplyee list</h4>-->
                                <!--                        <h6 class="card-subtitle"></h6>-->
                                <div class="col-7">



                                    <form class="form">
                                        <div class="form-group row">
                                            <div class="col-10">
                                                <h5 class="">CAPTION</h5>
                                                <input class="form-control" type="text" value="Text here" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-10">
                                                <h5 class="">CAPTION</h5>
                                                <select class="custom-select" id="inlineFormCustomSelect">
                                                    <option selected="">Choose...</option>
                                                    <option value="1">Like</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-10">
                                                <h5 class="">CATEGORY</h5>
                                                <select class="custom-select" id="inlineFormCustomSelect">
                                                    <option selected="">Social</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-10 ">
                                                <h5 class="">SOCIAL</h5>
                                                <div style="margin-top:30px;">
                                                    <div class="custom-control custom-checkbox social1">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"><img src="assets/images/media/facebook.png"></label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox social1">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck2"><img src="assets/images/media/instagram.png"></label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox social1">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3"><img src="assets/images/media/twitter.png"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <img src="assets/images/media/city.png">
                                            </div>
<!--                                            <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>-->
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-info text-white">Modal</a>
                                        </div>

                                        <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">NEED MORE INFO?</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <from class="form-horizontal">

                                                            <div class="form-group">
<!--                                                                <label class="col-md-12">Select Number of people</label>-->
                                                                <div class="col-md-12">
                                                                    <select class="form-control">
                                                                        <option>John</option>
                                                                        <option>10</option>
                                                                        <option>20</option>
                                                                        <option>30</option>
                                                                        <option>40</option>
                                                                        <option>Custome</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
<!--                                                                <label class="col-md-12">Name of Label</label>-->
                                                                <div class="col-md-12">
                                                                    <input type="textarea" class="form-control" placeholder="Your message here"> </div>
                                                            </div>
                                                        </from>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>




                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>






        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->


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
