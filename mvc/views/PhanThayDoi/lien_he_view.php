
 <!-- breadcrumbs -->
        <div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Liên Hệ" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Liên Hệ</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" 
							class="linkListBreadcrumb" >Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Liên Hệ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- page contact -->
        <div class="wrapPageContact">
            <div class="container-xl containerPageContact">
                <div class="contentPageContact">
        			<div class="row rowInfoHotel">
        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Địa chỉ</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p>WJ2M+28R Thủy Nguyên, Hải Phòng, Việt Nam</p>

                                            </div>
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Hotline</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-phone"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p><a href="tel:0971877369" >0971 877 369</a></p>
                                        </div>										
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Email</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-envelope"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p><a href="mailto:gametructiep1234@gmail.com" title="gametructiep1234@gmail.com">gametructiep1234@gmail.com</a></p>
                                        </div>										
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Giờ mở cửa</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="far fa-clock"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p>6:00 sáng đến 11:00 tối</p>
                                        </div>
									</div>
								</div>
        					</div>
        				</div>
        			</div>

        			<div class="wrapFrmAndMap">
        				<div class="row rowFrmAndMapContact">
        					<div class="col-sm-5 colFrmContact">
        						<div class="contentFrmContact">
        							<div class="frmSendMessage">
	        							<h2 class="wrapTitleType1 titleItemContact">Gửi tin nhắn</h2>

	        							<h3 class="textSendMessage">Nếu bạn có bất kỳ câu hỏi nào, vui lòng gửi tin nhắn với của chúng tôi. Chúng tôi luôn ở đây để trả lời câu hỏi của bạn.</h4>

	        						<form action="./lienhe/tinnhan" method="POST" name="lien_he_form" onsubmit=" return check_lh()"> 
									<div class="form-group">
											<label class="titleInputSendMessage">Họ và tên</label>
											<input type="text" class="form-control" name="hoten" />
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage">Email</label>
											<input type="email" class="form-control" name="email"/>
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage">Số điện thoại</label>
											<input type="text" class="form-control" name="sdt" />
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage"  >Tin nhắn</label>
											<textarea class="form-control" rows="5" name="noidung"></textarea>
										</div>

										<button type="submit" class="btnType1 btnSendFrm" name="sent-lien-he" >
											<i class="far fa-paper-plane"></i> Gửi ngay</button>
									</form>
									</div>
        						</div>
        					</div>

        					<div>
								<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1VqwfN4oqH4oVa1byFUcm1dzPL96r3qc&ehbc=2E312F" width="640" height="690"></iframe>
    					</div>
        			</div>
        		</div>
            </div>
        </div>
		<!-- end page contact -->


		<script src="public/assets/js/contact.js"></script>
		<!-- Ngoại vi cho php java script -->
	
		<script type="text/javascript">

			function thanhcong(){
				swal("Cảm ơn bạn đã liên hệ!",
				"Bộ phận chúng tôi sẽ xem và xủa lý yêu cầu của bạn trong thơi gian sớm nhất");
			}	

			function them_that_bai(){
				swal("Đã xảy ra lỗi! ",
				"Chúng tôi không thể xử lý yêu cầu của bạn lúc này. Hãy thử lại hoặc liên hệ chúng tôi quan số điện thoại ! ");
			}

			function check_lh(){
				var hoten = document.forms["lien_he_form"]["hoten"].value;
				if (hoten== "") {
					swal("Lỗi....!", 
					"Vui lòng cho chúng tôi biết họ tên của bạn");
					return false;
				}
				var email = document.forms["lien_he_form"]["email"].value;
				if (email== "") {
					swal("Lỗi....!", 
					"Để lại email chúng tôi sẽ liên hệ lại với bạn");
					return false;
				}
				var sdt = document.forms["lien_he_form"]["sdt"].value;
				if (sdt== "") {
					swal("Lỗi....!", 
					"Để lại Số điện thoại chúng tôi sẽ liên hệ lại với bạn");
					return false;
				}
				var noidung = document.forms["lien_he_form"]["noidung"].value;
				if (noidung== "") {
					swal("Lỗi....!", 
					"Cho chúng tôi biết bạn muốn gì ở chúng tôi hay có bất kì câu hỏi nào?");
					return false;
				}
				return true
			}


		</script>
			<?php if(  isset($data["ketqua"])){		
				if($data["ketqua"] == 1){
				
				echo '<script type="text/javascript">    thanhcong();      </script>';
				}else{
				
					echo '<script type="text/javascript">    them_that_bai();      </script>';
				}
	
			} ?>