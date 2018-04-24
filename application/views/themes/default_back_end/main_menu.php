<?php // echo "<pre>"; var_dump($page_var); exit; ?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= site_url(['dashboard', 'editfile']) ?>">FUSION CMS</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php if(isset($user_info['email'])) echo $user_info['email'] ; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href=<?= site_url(['auth', 'logout']) ?>><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">

            <li <?= ($this->uri->uri_string() == 'dashboard/editfile') ? 'class="active"' : "" ?> >
                <a href="<?= site_url(['dashboard', 'editfile']) ?>"><i class="fa fa-fw fa-edit"></i> Website Editor</a>
            </li>
            <li <?= ($this->uri->uri_string() == 'dashboard/media') ? 'class="active"' : "" ?> >
                <a href=<?= site_url(['dashboard', 'media']) ?> ><i class="fa fa-fw fa-desktop"></i> Media</a>
            </li>
            <li <?= ($this->uri->uri_string() == 'dashboard/show_all_articles') ? 'class="active"' : "" ?> >
                <a href=<?= site_url(['dashboard', 'show_all_articles']) ?>><i class="fa fa-fw fa-file"></i> Blog</a>
            </li>
            <li <?= (strpos($this->uri->uri_string(), 'auth') !== FALSE) ? 'class="active"' : "" ?> >
                <a href=<?= site_url(['auth']) ?>><i class="fa fa-user"></i> Users</a>
            </li>
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
