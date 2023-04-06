
<?php
    class login extends Dcontroller{
        public function __construct(){
            parent::__construct();
            // $data= array();
        }
        public function loadregister(){
            $this->load->view('register');
        }
        public function load(){
            $this->load->view('header');
        }
        public function login(){
            $this->load->view('login');
        }
        public function checklogin(){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password=md5($password);
            if(isset($email)&&isset($password))
            {
            $user = $this->load->model('adminlogin');
            $sql = "select *from user where email = '$email' and matkhau = '$password' and quyen=1";
            $data['count'] =$user->login($sql);
            if($data['count']==1){
                Session::init();
                Session::set('login',$email);
                $this->load->view('header',);
                $this->load->view('menu',);
                $this->load->view('quanliloai' ,);
                $this->load->view('footer',);
            }
            else
                echo 'loii';
            }   
        }
        public function checkregister(){
            $hoten = $_POST['hoten'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];
            $repeatpassword = $_POST['repeatpassword'];
            $diachi = $_POST['diachi'];
            $sodt = $_POST['sodt'];
            if(!empty($hoten)&&!empty($username)&&!empty($email)&&!empty($matkhau)&&!empty($repeatpassword)&&!empty($sodt)){
                $sql = "INSERT INTO user (username, matkhau,hoten,email,diachi,sodt,quyen)
                        VALUES ('$username', md5('$matkhau'),'$hoten','$email','$diachi','$sodt',1)";
                $insert = $this->load->model('adminlogin');
                $insert->register($sql);
                echo '<script type="text/javascript">alert("dang ki thanh cong")</script>';
            }
            else{
                echo "<h1><center>Vui lòng nhập đầy đủ thông tin</center></h1>";  
            }
        }
        public function logout(){
            Session::destroy();
            header("Location:".BASE_URL."");
        }
    }       
?>