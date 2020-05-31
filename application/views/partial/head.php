<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIOPAK - Kemendagri </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/loader-style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/button/ladda/ladda.min.css">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/ico/minus.png">
    <?php 
    if(@$css){
        $this->load->view(@$css);
    }
    ?>


</head>