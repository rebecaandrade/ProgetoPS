<!DOCTYPE html>
<html>
    <head>
        <style media="screen">
            body{
                width: 60%;
                background-color: #39DDDD;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/javascript/jcrop/css/jquery.Jcrop.css">
        <script src="<?php echo base_url()?>assets/javascript/jcrop/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/javascript/jcrop/js/jquery.Jcrop.js"></script>
    </head>
    <body>
        <img src=" <?php echo base_url() ?>assets/images/rock.jpg " alt="" id="jcrop"/>
        <script type="text/javascript">
            $(function(){
                $('#jcrop').Jcrop();
            });
        </script>
    </body>
</html>
