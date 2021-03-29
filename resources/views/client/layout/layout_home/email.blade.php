<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>SAIGON_ACT University - Hoàn thành</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/email.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>
					<div id="wrap-inner">
						<div id="khach-hang">
							<h3>Thông tin </h3>
							<p>
								<span class="info">Họ : </span>
								{{$info['surname']}}
							</p>
                            <p>
								<span class="info">Tên : </span>
								{{$info['name']}}
							</p>
							<p>
								<span class="info">Email: </span>
								{{$info['email']}}
							</p>
							<p>
								<span class="info">Nội Dung: </span>
								{{$info['content']}}
							</p>
						</div>

						<div id="xac-nhan">
							<br>
							<p align = "justify">
								<b>Đã xác nhận nội dung :</b><br />
								• Thông tin đã được tiếp nhận.<br />
								• Nhân sự bên trường sẽ xem xét.<br />
								<b><br />Cám ơn bạn đã liên hệ tại SAIGON_ACT</b>
							</p>
						</div>
					</div>
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
</body>
</html>
