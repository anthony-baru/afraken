@extends('layouts.template1')

@section('title')
	<title>Admin </title>
@endsection

@section('css')
<style>
		.panel-heading{
			font-size:20px;
			font-weight:bold;
		}
		.profile-picture{
			width:200px;
			height:200px;
		}
		#profile-picture {
			width: 100%;
			height: 100%;
			background-size: 100% 100%;
			border: 1px solid #6396bc;
		}
		.account-item{
			padding-top:10px;
		}
		.education-item{
			padding:10px 0 2px 0;
		}
		.political-item{
			padding:10px 0 5px 0;
		}
		.work-item{
			padding:10px 0 5px 0;
		}
		.item-label{
			font-weight:bold;
			color:#6396bc;
		}
	</style>
 
@endsection


@section('contents')
<div id="wrapper">
        <!-- Sidebar -->
     @include('menu.admin-menu')
        <!-- Page Content -->
       
            <div class="container-fluid xyz">
			
                <div class="row">
	                     
<div style="padding-top: 50px;padding-bottom: 300px" class="col-md-10 col-md-offset-1">
				
			</div>
		</div>  
   

  </div>
  </div>


   
@endsection

@section('scripts')


@endsection
