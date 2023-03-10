<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin | Katte Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/katteshop.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				{{-- <form id="myForm" class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="#" method="POST">
                    @csrf

					<span class="login100-form-title">
                        <i class="fa fa-paw">
                        </i>
						Katte Shop
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="T??i kho???n">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="M???t kh???u">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Qu??n
						</span>

						<a href="#" class="txt2">
							T??i kho???n / M???t kh???u?
						</a>
					</div>

					<div class="container-login100-form-btn">
                      <button class="login100-form-btn" onclick="window.location.href='/admin/dashboard'">

                                ????ng nh???p
                            </button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Kh??ng c?? t??i kho???n
						</span>

						<a href="#" class="txt3">
							????ng k?? ngay
						</a>
					</div>
				</form> --}}

                <form name="myForm" id="myForm" class="form-horizontal form-label-left" action="/admin/dashboard" method="POST" enctype="multipart/form-data">
                    <span class="login100-form-title">
                        <i >
                        </i>
						Trang qu???n l?? Katte Shop
					</span>
                    @csrf
                    @if ($message = Session::get('info'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">??</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="TENDANGNHAP" placeholder="T??i kho???n">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="MATKHAU" placeholder="M???t kh???u">
						<span class="focus-input100"></span>
					</div>
                    {{-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">T??i kho???n
                            <span class="required">*</span>
                        </label>
                        <div  class="wrap-input100 validate-input m-b-16"  >
                            <input type="text" name="taikhoan" required="required"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">M???t kh???u
                            <span class="required">*</span>
                        </label>
                        <div class="wrap-input100 validate-input m-b-16">
                            <input type="text" name="matkhau" required="required"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div> --}}
                    <BR></BR>

                    <div class="form-group">
                        {{-- <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            class="btn btn-success"
                            --}}
                            <div class="container-login100-form-btn">
                            <button type="submit"  class="login100-form-btn"  >????NG NH???P</button>
                            </div>
                    </div>

                </form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
