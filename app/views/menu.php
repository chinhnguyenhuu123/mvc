<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo BASE_URL?>quanliloai/loadquanliloai">Quản lí loại</a></li>
      <li><a href="<?php echo BASE_URL?>quanlisanpham/loadquanlisanpham">Quản lí sản phẩm</a></li>
      <li><a href="<?php echo BASE_URL?>xacnhan/loadxacnhan">Xác nhận</a></li>
      <li><a href="<?php echo BASE_URL?>chuyentien/loadchuyentien">Chuyển tiền</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li>
         
        </li>
        <li><a href="<?php echo BASE_URL?>login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php
            if(isset($_SESSION['login'])){
        ?>
       <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['login'];?></a></li>
        <?php
            }
        ?>
        
      </ul>
  </div>  
</nav>
