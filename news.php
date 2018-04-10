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
                <h2 class="text-themecolor">NEWS</h2>
            </div>
        </div>






        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row whitebg roundcorners" >


                    <div class="col-md-5 col-sm-12 align-self-center">
<!--                        <h4 class="">ACTIVITY</h4>-->
                    </div>
                    <div class="col-md-7 col-sm-12 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">


                            <div class="col-lg-3 col-md-6 col-sm-12">

                                <div class="input-group" >
                                    <input type="text" class="form-control mydatepicker" placeholder="Date Range">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><img src="assets/images/calendar.png" class="pickcalendar"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <span> Duration: </span>
                                <button type="button" class="btn waves-effect waves-light btn-secondary">30 d </button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary"> 6 m </button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary"> 12 m </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 m-t-40">

                        <!--                                <br><div class="pickcalendar">cc</div>-->
                    </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <div class="newscharts" >
                            <div style="position: relative;display: inline;width: 100%;">
                                <input data-plugin="knob" data-linecap="butt" data-fgcolor="#b457ff" value="24%"
                                       data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1"
                                       readonly="readonly" style="" >
                                <span class="newschartsNr" style="">240 of 1000</span>
                                <span class="newschartsPercent" style="color:#b457ff;">%</span>
                                <span class="newschartsDetails" style="color:#b457ff;">QUALITY SCORE</span>
                            </div>

                            <div style="position: relative;display: inline;width: 100%;">
                            <input data-plugin="knob" data-linecap="butt" data-fgcolor="#f4e219" value="30%"
                                   data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1"
                                   readonly="readonly" style="">
                                <span class="newschartsNr" style="">240 of 1000</span>
                                <span class="newschartsPercent" style="color:#f4e219;">%</span>
                                <span class="newschartsDetails" style="color:#f4e219;">QUALITY SCORE</span>
                            </div>
                            <div style="position: relative;display: inline;width: 100%;">
                            <input data-plugin="knob" data-linecap="butt" data-fgcolor="#13d164" value="33%"
                                   data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1"
                                   readonly="readonly" style="">
                                <span class="newschartsNr" style="">240 of 1000</span>
                                <span class="newschartsPercent" style="color:#13d164;">%</span>
                                <span class="newschartsDetails" style="color:#13d164;">QUALITY SCORE</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>




            <div class="col-lg-6 whitebg roundcorners ">
                <div class="card ">
                    <div class="card-body ">
                        <h4 class="card-title">News | Total News</h4>

                        <div class="m-t-40 progressbarNews">

                            <h5 class="" style="">Jan</h5>
                            <div class="progress " style="">
                                <div class="progress-bar bgprogress wow animated progress-animated" style="width: 25%; height:10px;" role="progressbar"> <span class="sr-only">25 Complete</span> </div>
                            </div>

                            <h5 class="">Feb</h5>
                            <div class="progress">
                                <div class="progress-bar bgprogress wow animated progress-animated" style="width: 90%; height:10px;" role="progressbar"> <span class="sr-only">60 Complete</span> </div>
                            </div>

                            <h5 class="">Mar</h5>
                            <div class="progress">
                                <div class="progress-bar bgprogress wow animated progress-animated" style="width: 65%; height:10px;" role="progressbar"> <span class="sr-only">60 Complete</span> </div>
                            </div>

                            <h5 class="">Apr</h5>
                            <div class="progress">
                                <div class="progress-bar bgprogress wow animated progress-animated" style="width: 60%; height:10px;" role="progressbar"> <span class="sr-only">60 Complete</span> </div>
                            </div>
                        </div>

                        <div>
                            <div style="width: 9%;float:left;"></div>

                            <div style="width: 91%;position: relative;    float: right;">
                            <hr style="border-top: 2px solid rgba(0, 0, 0, .1)">
                            <ul class="procentaj2" >
                                <li>0</li>
                                <li>10</li>
                                <li>20</li>
                                <li>30</li>
                                <li>40</li>
                                <li>50</li>
                                <li>60</li>
                                <li>70</li>
                                <li>80</li>
                            </ul>
                            </div>

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


                            <table id="table-news" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10">
                                <thead>
                                <tr>
                                    <th class="footable-sortable footable-sorted text-center">Headline<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable footable-sorted text-center">Date Added<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable footable-sorted text-center">Media Type<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable footable-sorted text-center">Potential Opens<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable footable-sorted text-center">Actual Opens<span class="footable-sort-indicator"></span></th>
                                    <th class="footable-sortable footable-sorted text-center">Quality Score<span class="footable-sort-indicator"></span></th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr style="" class="footable-even">
                                    <td class="text-center">
                                        <a href="javascript:void(0)"> Article #1</a>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">3 </td>
                                    <td class="text-center">23</td>
                                    <td class="text-center">100%</td>

                                </tr>
                                <tr style="" class="footable-odd">
                                    <td class="text-center">
                                        <a href="javascript:void(0)"> Article #1</a>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">3 </td>
                                    <td class="text-center">23</td>
                                    <td class="text-center">100%</td>
                                </tr>
                                <tr style="" class="footable-even">
                                    <td class="text-center">
                                        <a href="javascript:void(0)"> Article #1</a>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">3 </td>
                                    <td class="text-center">23</td>
                                    <td class="text-center">100%</td>
                                </tr>
                                <tr style="" class="footable-odd">
                                    <td class="text-center">
                                        <a href="javascript:void(0)"> Article #1</a>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">3 </td>
                                    <td class="text-center">23</td>
                                    <td class="text-center">100%</td>
                                </tr>

                                </tbody>

                            </table>
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
