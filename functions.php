<?php
include_once ('db/DBGestion.php');
$gestion= new gestion();
/* 
 * Desarrollo TOBE.
 * Programador: Alexis Montero
 * Version 1.0
 */

function getHeader(){
    include_once ('header.php');
}

function getFooter(){
    include_once ('footer.php');
}

function getAside(){
    include_once ('aside.php');
}

function getTitle(){
    echo '<title>Sistema de Administracion Tobe</title>';
}

function getMeta(){
    echo '<meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">';
}

function getCss(){
    echo '<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="../css/londinium-theme.css" rel="stylesheet" type="text/css">
          <link href="../css/styles.css" rel="stylesheet" type="text/css">
          <link href="../css/icons.css" rel="stylesheet" type="text/css">
          <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">';
}

function getJS(){
    echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
          <script type="text/javascript" src="../js/plugins/charts/sparkline.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/uniform.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/select2.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/inputmask.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/autosize.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/inputlimit.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/listbox.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/multiselect.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/validate.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/tags.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/switch.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/uploader/plupload.full.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/uploader/plupload.queue.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
          <script type="text/javascript" src="../js/plugins/forms/wysihtml5/toolbar.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/daterangepicker.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/fancybox.min.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/moment.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/jgrowl.min.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/datatables.min.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/tabletools.min.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/colorpicker.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/fullcalendar.min.js"></script>
          <script type="text/javascript" src="../js/plugins/interface/timepicker.min.js"></script>
          <script type="text/javascript" src="../js/bootstrap.min.js"></script>
          <script type="text/javascript" src="../js/application.js"></script>
          <script type="text/javascript" src="../js/ajax.js"></script>';
}

function getDepartamento(){
            $sql="SELECT d.* FROM departamento as d";
            $x = mysql_query($sql);
            $rowP = mysql_fetch_row($x);
            do {
                echo '<option  value="'.$rowP[0].'" >'.$rowP[1].'</option>';
               }
            while($rowP = mysql_fetch_row($x));
            mysql_free_result($x);
            }