<!DOCTYPE html>
<html>
<head>
<meta charset="utf_8">
<title>Insert title here</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
	<section class="vh-200" style="background-color: #eee;">
  <div class="container 100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="<?php echo BASE_URL?>login/checkregister" method="post">

                  <div class="d-flex flex-row align-items-center ">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="hoten" id="hoten" class="form-control" placeholder=""/>
                      <label class="form-label" for="form3Example1c">Họ tên</label><br>
                    </div>

                  </div>
                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="username" id="username" class="form-control" placeholder=""/>
                      <label class="form-label" for="form3Example1c">username</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="email" class="form-control" placeholder=""/>
                      <label class="form-label" for="form3Example3c">Email</label>
                    </div>
                  </div>
                  
                   <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="matkhau" id="password" class="form-control" placeholder=""/>
                      <label class="form-label" for="form3Example3c">Mật khẩu</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="repeatpassword" id="repeatpassword" class="form-control" placeholder=""/>
                      <label class="form-label" for="form3Example4c">Xác nhận mật khẩu</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="diachi" id="diachi" class="form-control" placeholder=""/>
                      <label class="form-label" for="form3Example4c">Địa chỉ</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="sodt" id="phone" class="form-control" placeholder=""/>
                      <label class="form-label" for="form3Example4c">Số điện thoại</label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="btn-lg" style="margin-right: 10px;">Register</button>
                    <a class="btn btn-secondary" href="<?php echo BASE_URL?>">login</a>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://phan.vn/wp-content/uploads/2020/10/thu-tuc-ban-quyen-e1604052813703.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<script src="./app/views/js/register.js"></script>