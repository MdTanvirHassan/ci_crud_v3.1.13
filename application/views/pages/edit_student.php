<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword"
        content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="../front-end/css/bootstrap.min.css" rel="stylesheet">
    <link href="../front-end/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="../front-end/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="../front-end/css/style-responsive.css" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->




</head>

<body>

    <div class="container">
        <div class="box-content">

            <fieldset>
                <div class="control-group">

                    <div class="box span12">
                        <div class="box-header" data-original-title>
                            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
                            <div class="box-icon">
                                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                            </div>
                        </div>


                        <p>
                            <?php
                            $message = $this->session->userdata('message');
                            if ($message) {
                                echo "<span class='alert alert-danger'>$message</span>";
                                $this->session->unset_userdata('message');
                            }
                            ?>
                        </p>

                        <div class="box-content">
                            <form class="form-horizontal" action="<?php echo base_url(); ?>update-student"
                                method="post">
                                <fieldset>

                                    <div class="control-group">
                                        <label class="control-label" for="date01">Student Name</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge " id="date01" name="student_name"
                                                value="<?php echo $all_students_info_by_id->student_name; ?>">
                                            <input type="hidden" class="input-xlarge " id="date01" name="student_id"
                                                value="<?php echo $all_students_info_by_id->student_id; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="date01">Student Phone</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge " id="date01" name="student_phone"
                                                value="<?php echo $all_students_info_by_id->student_phone; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="date01">Student Roll</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge " id="date01" name="student_roll"
                                                value="<?php echo $all_students_info_by_id->student_roll; ?>">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Update Student</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                    </div>
            </fieldset>
        </div>
    </div>





    <!-- start: JavaScript-->

    <script src="../front-end/js/jquery-1.9.1.min.js"></script>
    <script src="../front-end/js/jquery-migrate-1.0.0.min.js"></script>

    <script src="../front-end/js/jquery-ui-1.10.0.custom.min.js"></script>

    <script src="../front-end/js/jquery.ui.touch-punch.js"></script>

    <script src="../front-end/js/modernizr.js"></script>

    <script src="../front-end/js/bootstrap.min.js"></script>

    <script src="../front-end/js/jquery.cookie.js"></script>

    <script src='../front-end/js/fullcalendar.min.js'></script>

    <script src='../front-end/js/jquery.dataTables.min.js'></script>

    <script src="../front-end/js/excanvas.js"></script>
    <script src="../front-end/js/jquery.flot.js"></script>
    <script src="../front-end/js/jquery.flot.pie.js"></script>
    <script src="../front-end/js/jquery.flot.stack.js"></script>
    <script src="../front-end/js/jquery.flot.resize.min.js"></script>

    <script src="../front-end/js/jquery.chosen.min.js"></script>

    <script src="../front-end/js/jquery.uniform.min.js"></script>

    <script src="../front-end/js/jquery.cleditor.min.js"></script>

    <script src="../front-end/js/jquery.noty.js"></script>

    <script src="../front-end/js/jquery.elfinder.min.js"></script>

    <script src="../front-end/js/jquery.raty.min.js"></script>

    <script src="../front-end/js/jquery.iphone.toggle.js"></script>

    <script src="../front-end/js/jquery.uploadify-3.1.min.js"></script>

    <script src="../front-end/js/jquery.gritter.min.js"></script>

    <script src="../front-end/js/jquery.imagesloaded.js"></script>

    <script src="../front-end/js/jquery.masonry.min.js"></script>

    <script src="../front-end/js/jquery.knob.modified.js"></script>

    <script src="../front-end/js/jquery.sparkline.min.js"></script>

    <script src="../front-end/js/counter.js"></script>

    <script src="../front-end/js/retina.js"></script>

    <script src="../front-end/js/custom.js"></script>
    <!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->

</html>