@extends('layouts.master')

@section('title', 'Profile')

@section('content')
	<div class="card" style="text-align: center; margin : 50px 16px 50px 16px; border: 2px solid white;">

	<div class="profile-header img-responsive">
		<img src="img/user.png" alt="User" class="img-circle img-responsive" style="width: 20vh; height: 20vh; background-color:#a6a6a6; margin-left:auto; margin-right:auto;">
	</div>

		<!-- <div id="img-profile">
			<img id="img-avatar" src="img/user.png" alt="User" class="img-circle img-responsive" style="width: 20vh; height: 20vh; background-color:#a6a6a6; position: absolute; left:auto; right:auto; text-align:center;">
			<img src="img/header.png" alt="Header" class="img-responsive header">
		</div> -->

		<a style="margin-top:20px; font-size:3.7vh">Qrim.in/user</a> <br>

		<button style="margin:16px; text-decoration: none;">TRANSFER</button>

		<div class="row" style="margin-left:auto; margin-right:auto; width:80%; border:2px solid #ddd">
			<div>Welcome</div>
			<div style="width:100%; height:275px; border-top:1px solid #ddd; border-bottom:1px solid #ddd; overflow-y:scroll; background:white"></div>
			<div class="row" style="width:100%; height:30px; margin-left:auto; margin-right:auto; position:inline-block;">
				<form>
					<input type="text" name="text" style="height:30px; width:75%; margin:0px;"><!--
					--><input type="submit" name="submit" value="SEND" style="height:30px; width:25%; margin:0px; font-size:auto">
				</form>
			</div>
		</div>
	</div>
@endsection