@extends('layouts.app-master')
@section('title','Activity log')

@section('content')
	<div class="side-app userlist">

		<!-- PAGE-HEADER -->
		<div class="page-header">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Activity Log</a></li>
			</ol>
			<div>
				<a href="#" class="btn btn-sm btn-primary"><i class="ti-settings"></i> General Settings </a>
				<a href="#" class="btn btn-sm btn-secondary"><i class="ti-file"></i> Print </a>
				<a href="#" class="btn btn-sm btn-danger">Buy Now </a>
			</div>
		</div>
		<!-- PAGE-HEADER END -->

		<!-- ROW OPEN -->
		<div class="row row-cards">
			<div class="w-45 input-group mb-5">
				<input type="text" class="form-control" placeholder="">
				<div class="input-group-append ">
					<button type="button" class="btn btn-primary-light">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
				</div>
			</div>
			<div class="card">
				
				<div class="e-table">
					<div class="table-responsive table-lg br-bl-10 br-br-10">
						{{-- <table class="table table-bordered mb-0">
							<thead>
								<tr>
									<th>USERNAME</th>
									<th>EMAIL</th>
									<th class="text-center">USER_TYPE</th>
									<th class="text-center">USER_STATE</th>
									<th>DATA_CREATED</th>
									<th class="text-center">OPTIONS</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($users as $user)
									<tr>
										
										<td class="text-nowrap align-middle">{{ $user->username }}</td>
										<td class="text-nowrap align-middle">{{ $user->email }}</td>
										<td class="text-center align-middle">
											@if ($user->state == 1)
												<span class="badge badge-danger mr-1 mb-1 mt-1">Non-verified</span>
											@elseif ($user->state == 2)
												<span class="badge badge-success mr-1 mb-1 mt-1 pl-3 pr-3">Verified</span>
											@else
												<span class="badge badge-primary mr-1 mb-1 mt-1 pl-4 pr-4">Guest</span>
											@endif
										</td>
										<td class="text-center align-middle">
											@if ($user->user_type == 1)
												<span class="badge badge-warning mr-1 mb-1 mt-1 pl-3 pr-3">Person</span>
											@else
												<span class="badge badge-info mr-1 mb-1 mt-1">Company</span>
											@endif
										</td>
										<td class="text-nowrap align-middle">{{ $user->created_at }}</td>

										<td class="text-center align-middle">
											<div class="btn-group align-top">
												<form action="{{ route('users.destroy', $user->id) }}" method="Post">
													<a class="btn btn-sm btn-success-light badge" href="{{ route('users.edit', $user->id) }}">Edit</a>
													@csrf
													@method('DELETE')
													<button type="submit" class="btn btn-sm btn-danger-light badge"><i class="fa fa-trash"></i></button>
												</form>
											</div>
										</td>
									</tr>
								@endforeach
								
								
							</tbody>
						</table> --}}
						<table class="table table-bordered">
							<tr>
								{{-- <th>No</th> --}}
								<th>User_Id</th>
								<th>URL</th>
								<th>IP Address</th>
								<th>Message</th>
								<th>Log Time</th>
								<th width="300px">More Info</th>
							</tr>
							@if($logs->count())
								@foreach($logs as $key => $log)
								<tr>
									{{-- <td>{{ ++$key }}</td> --}}
									<td>{{ $log->user_id }}</td>
									<td class="text-success">{{ $log->url }}</td>
									<td class="text-warning">{{ $log->ip }}</td>
									<td>{{ $log->subject }}</td>
									<td>{{ $log->created_at }}</td>
									<td class="text-danger">{{ $log->agent }}</td>
								</tr>
								@endforeach
							@endif
						</table>
					</div>
				</div>
			</div>
			{{-- <div class="mb-5">
				<ul class="pagination float-right">
					{!! $logs->links() !!}
				</ul>
			</div> --}}
		</div>
		<!-- ROW CLOSED -->
	</div>
@endsection
