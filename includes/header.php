<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="margin-bottom: 80px;" class="navbar-brand" >
                    <img src="assets/img/RMUTTO.png">
                    <img src="assets/img/logo.png"/>
                </a>

            </div>
<?php if($_SESSION['login'])
{
?> 
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">ลงชื่อออก</a>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>    
<section  class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" >หน้าแรก</a></li>
                           
                            <li><a href="issue-book.php">ยืมอุปกรณ์กีฬา</a></li> 

                            <li><a href="issued-books.php">ประวัติการทำรายการ</a></li>  
                            
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> บัญชีผู้ใช้ <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">แก้ไขโปรไฟล์</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">เปลี่ยนรหัสผ่าน</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                        
                            <li><a href="signup.php">ลงทะเบียน</a></li>
                             <li><a href="index.php">เข้าสู่ระบบ</a></li>
                             <li><a href="adminlogin.php">สำหรับเจ้าหน้าที่</a></li>
                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php } ?>