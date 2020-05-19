@extends('Dashboard::backend.layout.master')

@include('Administrator::group.breadcumb')

@section('content')

	<div id="content-container">
		<div class="row">

			<div class="col-sm-4">

            	<div class="portlet">

					<div class="portlet-header">

						<h3>
							<i class="fa fa-tasks"></i>
							Thêm mới nhóm quản trị viên
						</h3>

					</div> <!-- /.portlet-header -->

					<div class="portlet-content">
						
						<form id="validate-enhanced" method="post" action="{{ route('post.create.admin_group') }}" class="form parsley-form">
							{{ csrf_field() }}
							<div class="row">
								<div class="form-group col-md-12">	
									<label for="validateSelect">Tên nhóm:</label>
		                            <input class="form-control" name="title" type="text">
								</div>
								<div class="form-group col-md-12">
									<label for="time-2">Mô tả</label>
		                            <textarea class="form-control" rows="5"></textarea>
								</div>

							</div>
			            	

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Thêm</button>
							</div>

						</form>

					</div> <!-- /.portlet-content -->

				</div> <!-- /.portlet -->

            </div> 
			
			<div class="col-sm-8">
				@include('Administrator::group.list')
			</div>
		</div>
	</div> 
@endsection