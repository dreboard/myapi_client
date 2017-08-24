<?php
/* Smarty version 3.1.31, created on 2017-01-28 02:56:03
  from "C:\xampp\htdocs\CodeIgniter\ci3\application\views\welcome.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_588bfa33851e55_99589177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a62e0faa37979272efbc6c60922d942694dc0b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CodeIgniter\\ci3\\application\\views\\welcome.tpl',
      1 => 1485568557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/header.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_588bfa33851e55_99589177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '25799588bfa33758332_51788876';
?>
    <?php $_smarty_tpl->_subTemplateRender('file:inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="img/codeigniter.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>Codeigniter 3 Basic Template</h1>
                <p>CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.</p>
                <a class="btn btn-primary btn-lg" href="https://codeigniter.com/">Visit Site</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    This is a well that is a great spot for a business tagline or phone number for easy access!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 text-center">
                <h2>Bootstrap 3.3.7 SASS.</h2>
                <p>bootstrap-sass is a Sass-powered version of Bootstrap 3, ready to drop right into your Sass powered applications.</p>
                <a target="_blank" class="btn btn-default" href="https://www.npmjs.com/package/bootstrap-sass">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 text-center">
                <h2>Smarty templating system.</h2>
                <p>Smarty is a web template system written in PHP. Smarty is primarily promoted as a tool for separation of concerns, allowing the front-end of a web page to change separately from its back-end.</p>
                <a target="_blank" class="btn btn-default" href="https://github.com/smarty-php/smarty">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 text-center">
                <h2>Composer dependencies.</h2>
                <p>Composer is not a package manager in the same sense as Yum or Apt are. Yes, it deals with "packages" or libraries, but it manages them on a per-project basis, installing them in a directory (e.g. vendor ) inside your project.</p>
                <a target="_blank" class="btn btn-default" href="https://getcomposer.org/">More Info</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
