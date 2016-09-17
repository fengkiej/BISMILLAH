@extends('layouts.master')

@section('head')
	<link href="css/styleTransfer.css" rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="js/jquery.min.js"></script>
@endsection

@section('title', 'Home')

@section('content')
<div class="main" style="background-color: lightblue">
		<h1>Detail Transfer</h1>
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
							<h3 style="font-size: 26px;text-align: center;margin-bottom: 15px;color: #3AD5A0;font-weight: 500;font-family: 'Alegreya Sans', sans-serif;
">Nominal Transfer</h3>
							<input type="text" value="Rp." style="display: block; width: 100%; margin: 0px;">
						</div>
						<div class="sap_tabs"> 
						<!--Tabel Pilihan  -->
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Pilih Metode Pembayaran</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>DompetQ</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
											<form>
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="text" value="">
													<h5>FIRST NAME</h5>													
														<input type="text" value="">
												</div>			
											</form>
											<h3 class="pay-title">Credit Card Info</h3>
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
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
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
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="radio-btns">
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Bank Mega</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Central Asia</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Bukopin </label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Danamon</label> </div></div>		
												</div>
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Bank Mandiri</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Negara Indonesia</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Rakyat Indonesia</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Tabungan Negara</label> </div></div>
												</div>
												<div class="clear"></div>
											</div>
											<a href="#">Continue</a>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>Qrim</h3>
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
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
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
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
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
										<!-- Expiration date form -->
									</div>
									<div>
										<!-- Submit button -->
									</div>
								</div>	
							</div>
						</div>	

		</div>
	</div>
@endsection