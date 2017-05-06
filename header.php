<div class="header col-md-12 col-xs-12 ">
    <div class="row">
        <div class="col-md-2 col-sm-2 hidden-xs">
            <img src="assets/images/andra.jpg" id="andra"/>
        </div>
        <div id="social-top" class="col-md-1 col-md-offset-0 col-sm-1 col-sm-offset-1 hidden-xs item social">
            <h4>Contact:</h4>
            <a href="https://www.facebook.com/andra.dragomir.50" target="_blank"><i class="icon fa fa-facebook"></i></a>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12 title">
            <h1 id="welcome">Welcome to Andra's Blog</h1>
        </div>

    </div>
    <nav class="navbar navbar-inverse col-xs-12">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="holidays.php">Holidays</a></li>
                    <li><a href="thingsThatMatter.php">Things that matter</a></li>
                    <li><a href="#">Life events</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<script>
    $(document).ready(function() {
        const paths = this.location.pathname.split('/');
        const lastPath = paths[paths.length - 1];
        $('a[href="' + lastPath + '"]').parents('li').addClass('active');
    });
</script>
