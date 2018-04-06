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
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">NEWS</h4>
            </div>
        </div>



        <div class="row page-titles">
            <div class="col-md-5 col-sm-12 align-self-center">
                <h4 class="text-themecolor">ACTIVITY</h4>
            </div>
            <div class="col-md-7 col-sm-12 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">

                    <!--                            <div class="input-group">-->
                    <!--                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="Date Range">-->
                    <!--                                <div class="input-group-append">-->
                    <!--                                    <span class="input-group-text"><i class="fas fa-calendar-alt fa-sm"></i></span>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="Date Range">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-calendar-alt fa-sm"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span> Duration: </span>
                        <button type="button" class="btn waves-effect waves-light btn-secondary">30 d </button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary"> 6 m </button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary"> 12 m </button>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
<!--                        <h4 class="card-title">NEWS | Total News</h4>-->


                        <div class="col-lg-12 m-b-30">
                            <div data-label="30%" class="css-bar css-bar-30 css-bar-lg css-bar-success"></div>
                        </div>

                        <div class="col-lg-12 m-b-30">
                            <div data-label="10%" class="css-bar css-bar-10 css-bar-lg "></div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">NEWS | Total News</h4>
                        <!--                                <h6 class="card-subtitle">Add class <code>.table</code></h6>-->

                        <h5 class="m-t-30">Jan<span class="pull-right">25%</span></h5>
                        <div class="progress ">
                            <div class="progress-bar bg-success wow animated progress-animated" style="width: 25%; height:6px;" role="progressbar"> <span class="sr-only">25% Complete</span> </div>
                        </div>
                        <h5 class="m-t-30">Feb<span class="pull-right">90%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-success wow animated progress-animated" style="width: 90%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                        <h5 class="m-t-30">Mar<span class="pull-right">65%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-success wow animated progress-animated" style="width: 65%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                        <h5 class="m-t-30">Mar<span class="pull-right">65%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-success wow animated progress-animated" style="width: 65%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!--                        <h4 class="card-title">Contact Emplyee list</h4>-->
                        <!--                        <h6 class="card-subtitle"></h6>-->
                        <div class="table-responsive">
                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                        <div class="modal-body">
                                            <from class="form-horizontal form-material">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Type name"> </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Email"> </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Phone"> </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Designation"> </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Age"> </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Salary"> </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                            <input type="file" class="upload"> </div>
                                                    </div>
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
                            </div><table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                <tr>
                                    <th class="footable-sortable">Name<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">Participator Score<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">Photos</th>
                                    <th class="footable-sortable">Videos</th>
                                    <th class="footable-sortable">Total</th>
                                    <th class="footable-sortable">Goal</th>
                                    <th class="footable-sortable">Quality Score (%)<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">Posted</th>
                                    <th class="footable-sortable">Viewed<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">Quality Score (%)<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">Posted</th>
                                    <th class="footable-sortable">Viewed<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">Quality Score (%)<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">Posted</th>
                                    <th class="footable-sortable">Viewed<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">Quality Score (%)<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable">App Opens<span class="footable-sort-indicator"></span></th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr style="" class="footable-even">
                                    <td>
                                        <a href="javascript:void(0)"> John Smith</a>
                                    </td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3 </td>
                                    <td>23</td>
                                    <td>99</td>
                                    <td>100%</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td><i class="fas fa-star fa-lg"></i></td>
                                </tr>
                                <tr style="" class="footable-odd">
                                    <td>
                                        <a href="javascript:void(0)"> John Smith</a>
                                    </td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3 </td>
                                    <td>23</td>
                                    <td>99</td>
                                    <td>100%</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td><i class="fas fa-star fa-lg"></i></td>
                                </tr>
                                <tr style="" class="footable-even">
                                    <td>
                                        <a href="javascript:void(0)"> John Smith</a>
                                    </td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3 </td>
                                    <td>23</td>
                                    <td>99</td>
                                    <td>100%</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td><i class="fas fa-star fa-lg"></i></td>
                                </tr>
                                <tr style="" class="footable-even">
                                    <td>
                                        <a href="javascript:void(0)"> John Smith</a>
                                    </td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3 </td>
                                    <td>23</td>
                                    <td>99</td>
                                    <td>100%</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td><i class="fas fa-star fa-lg"></i></td>
                                </tr>

                                </tbody>

                            </table>
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
