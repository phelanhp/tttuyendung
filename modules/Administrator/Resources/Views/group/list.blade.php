
	<div class="portlet">

		<div class="portlet-header">

			<h3>
				<i class="fa fa-table"></i>
				Danh sách nhóm
			</h3>

		</div> <!-- /.portlet-header -->

		<div class="portlet-content">						

			<div class="table-responsive">

			<table 
				class="table table-striped table-bordered table-hover table-highlight table-checkable" 
				data-provide="datatable" 
				data-display-rows="10"
				data-info="true"
				data-search="true"
				data-length-change="true"
				data-paginate="true"
			>
					<thead>
						<tr>
							<th class="checkbox-column">
								<input type="checkbox" class="icheck-input">
							</th>
							<th data-filterable="true" data-sortable="true" data-direction="asc">STT</th>
							<th data-direction="asc" data-filterable="true" data-sortable="true" width="300px">Tên</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key => $val)
						<tr>
							<td class="checkbox-column">
								<input type="checkbox" class="icheck-input">
							</td>
							<td>{{ $key+1 }}</td>
							<td>{{ $val->title }}</td>
							<td class="center">
								<a href="{{ route('get.edit.admin_group',$val->id) }}"><i class="fas fa-edit" style="font-size: 20px; margin-right: 20px"></i></a>
								<a href="{{ route('get.delete.admin_group',$val->id) }}"><i class="fas fa-trash" style="font-size: 20px"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div> <!-- /.table-responsive -->
			

		</div> <!-- /.portlet-content -->

	</div> <!-- /.portlet -->




