<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTS</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span> Dashboard</span></a></li>
        <li class="header">MANAGE</li>
        
        <li><a href="sales.php"><i class="fa fa-dollar"></i> <span>Sales</span></a></li>
        <li><a href="bank.php"><i class="fa fa-bank"></i> <span>Maintain Bank</span></a></li>
        <li><a href="deduction.php"><i class="fa fa-file-text"></i> <span>Deductions</span></a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> <span>Agent Roles</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>