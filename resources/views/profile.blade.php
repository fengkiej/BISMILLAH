@extends('layouts.master')

@section('title', 'Profile')

@section('content')
	<div style="text-align: center; margin-top:50px">

		<img src="img/user.png" alt="User" class="img-circle img-responsive" style="width: 32vh; height: 32vh; background-color:#a6a6a6; margin-left:auto; margin-right:auto;">
		<div style="margin-top:20px; font-size:3.7vh">Qrim.in/user</div>

		<button style="margin:16px">TRANSFER</button>

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