@extends('layouts.master')

@section('head')
<link href="css/styleTransfer.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Cousine:700" rel="stylesheet"> 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
	@endsection

	@section('title', 'Home')

	@section('content')
	<div class="main" style="background-color: #f9f9f9">
		<h1 style="font-weight: 300;font-family:'Open Sans'; color: #000; font-size:1.7em; margin: 0.3em 0 0 0;">Detail Transfer</h1>
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
				});
			</script>

			<!-- Nominal -->
			<div class="resp-tabs-container" style="margin-bottom:15px;">
				<h3 style="font-size: 26px;text-align: center;margin-bottom: 15px;color: #3AD5A0;font-weight: 500;font-family: 'Open Sans', sans-serif; ">
					Nominal Transfer
				</h3>
				<div class="input-group">
				<input type="text" placeholder="" id="tambahpel" class="form-control" value="{{ app('request')->input('nominal') }}" style="font-size: 1.5em; text-align: center">
					<div class="input-group-btn">
						<button onclick="addElem()" id="tambahbtn" class="btn btn-success">Konfirmasi</button>
					</div>
				</div>
			</div>
			<!-- total -->
			<div class="resp-tabs-container" style="margin-bottom:15px;background-color:#eeeeee">
				<h3 style="font-size: 26px;text-align: center;margin-bottom: 15px;color: #3AD5A0;font-weight: 500;font-family: 'Open Sans', sans-serif; ">
					Total
				</h3>						
				<div style="text-align: center; padding-top: 15%; padding-bottom: 0px; font-size: 50px;  margin-top: 10px; height: 100px; overflow-y: scroll; font-family: 'Fondamento'; font-weight: 700;" id="matpels"></div>
			</div>					

			<div class="sap_tabs"> 
				<!--Tabel Pilihan  -->
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<div class="pay-tabs">
						<h2>Pilih Metode Pembayaran</h2>
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic4"></label>DompetQ</span></li> 
							<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Bank Transfer</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic2"></label>Credit/Debit Card</span></li>
						</ul>	
					</div>
					<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="payment-info">
								<h3>Qrim</h3>
								@if(\Auth::guest())
								<h4>Already Have A Qrim Account?</h4>
								<div class="login-tab">
								
									<div class="user-login">
										<h2>Login</h2>
										<form>
											<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
											<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
											<div class="user-grids">
												<div class="user-left">
													<div class="single-bottom">
														<ul>
															<li>
																<input type="checkbox"  id="brand1" value="">
																<label for="brand1"><span></span>Remember me?</label>
															</li>
														</ul>
													</div>
												</div>
												<div class="user-right">
													<input type="submit" value="LOGIN">
												</div>
												<div class="clear"></div>
											</div>
										</form>
									</div>
									
								</div>
								@endif
							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="payment-info">
								<h3>Bank Transfer</h3>
								<div class="">
									<div class="swit">								
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i><a href="https://www.bankmega.com/e-banking.php">Bank Mega</a></label> </div></div>
										<div class="check_box" > <div class="radio"> <label><input type="radio" name="radio"><i></i><a href="https://ibank.klikbca.com/">BCA</a></label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i><a href="https://ib.bukopin.co.id/business/">Bank Bukopin</a></label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i><a href="https://www.danamonline.com/">Bank Danamon</a></label> </div></div>		
									</div>
									<div class="swit">								
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i><a href="https://ib.bankmandiri.co.id/retail/Login.do?action=form&lang=en_US">Bank Mandiri</a></label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i><a href="https://ibank.bni.co.id/corp/AuthenticationController?__START_TRAN_FLAG__=Y&FORMSGROUP_ID__=AuthenticationFG&__EVENT_ID__=LOAD&FG_BUTTONS__=LOAD/ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=BNI01&LANGUAGE_ID=002">BNI</a></label> </div></div>
										<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i><a href="https://ib.bri.co.id/ib-bri/">BRI</a></label> </div></div>
									</div>
									<div class="clear"></div>
								</div>
								<a href="#">Continue</a>
							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">	
							<div class="payment-info">

								<h3 class="pay-title">Debit Card Info</h3>
								<form>
									<div class="tab-for">				
										<h5>NAME ON CARD</h5>
										<input type="text" value="">
										<h5>CARD NUMBER</h5>													
										<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
									</div>	
									<div class="transaction">
										<div class="tab-form-left user-form">
											<h5>EXPIRATION</h5>
											<ul>
												<li>
													<input type="number" class="text_box" type="text" value="28" min="1" max="31" />	
												</li>
												<li>
													<input type="number" class="text_box" type="text" value="12" min="1" max="12" />	
												</li>
											</ul>
										</div>
										<div class="tab-form-right user-form-rt">
											<h5 st>CVV NUMBER</h5>													
											<input style="" type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
										</div>
										<div class="clear"></div>
									</div>
									<input type="submit" value="SUBMIT">
								</form>
								<div class="single-bottom">
									<ul>
										<li>
											<input type="checkbox"  id="brand" value="">
											<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
										</li>
									</ul>
								</div>
							</div>	
						</div>
						<div>
						</div>	
					</div>
				</div>	
			</div>
		</div>
		<script>
			function addElem() {
				if(!(document.getElementById("total") == null)){
					delElem(document.getElementById("total"));
				}

				var box = document.createElement("div");
				box.setAttribute("id", "total");

				var boxContent = document.createElement("div");

				var txtSpan = document.createElement("span");

				var txtInput = document.getElementById("tambahpel");
				x = parseInt(txtInput.value);
				if (x<=50000) {
					x += 2000;
				}
				else if (x > 50000 && x <= 100000){
					x += 3000;
				}
				else if (x>100000 && x<=250000){
					x += 5000;
				}
				else if (x>250000 && x<=500000){
					x += 8000;
				}
				else if (x>500000 && x<=1000000){
					x += 15000;
				}
				var text = document.createTextNode(x);

														// hapusBtn.appendChild(btnTxt);
														txtSpan.appendChild(text);

														boxContent.appendChild(txtSpan);
							// box.appendChild(hapusBtn);
							box.appendChild(boxContent);

							document.getElementById("matpels").appendChild(box);
						}

						document.getElementById("tambahpel").onkeydown = function(e){
							if(e.keyCode == 13 ){
								addElem();
							}
						}

						function delElem(e) {
							var pr = e; pr.parentNode.removeChild(pr);
						}
					</script>
					@endsection