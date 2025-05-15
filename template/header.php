<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $header = "Расписание занятий колледжа";
        ($header)? $header : 'Расписание занятий колледжа';?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../template/css/bootstrap-theme.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../template/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../template/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../template/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="../template/css/skins/skin-blue.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .user-footer a.btn::before,
        .user-footer a.btn::after,
        .user-footer::before,
        .user-footer::after {
            content: none !important;
            display: none !important;
        }
    </style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini" style="margin: 0">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <span class="logo" style="padding: 0">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Рас</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><strong>Расписание</strong></span>
        </span>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" >
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <!-- Tasks Menu -->

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu list-unstyled open">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration: none; padding: 10px">
                            <!-- The user image in the navbar-->

                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Здравствуйте, Джон Смит Тимофеевич</span>
                        </a>
                        <ul class="dropdown-menu list-unstyled" style="margin-top: 15px; width: 294px">
                            <!-- The user image in the menu -->
                            <li class="user-header">


                                <p>
                                    Джон Смит Тимофеевич - Администратор
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <div class="user-footer d-flex justify-content-between p-3" style="display: flex; justify-content: space-between">
                                <a href="#" class="btn btn-default btn-flat" style="padding: 6px 12px; display: inline-block; text-decoration: none">Профиль</a>
                                <a href="#" class="btn btn-default btn-flat" style="padding: 6px 12px; display: inline-block; text-decoration: none">Выход</a>
                            </div>




                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">


            <?php require_once 'template/menu.php'; ?>

        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content container-fluid">
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->