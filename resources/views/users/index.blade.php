@extends('layouts.app-master')
@section('title','User list')

@section('content')
    <div class="side-app userlist">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
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
            <div class="col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Company</h3>
                    </div>
                    <div class="card-body o-auto team">
                        <ul class="list-unstyled list-separated">
                            @foreach ($users as $user)
                                @if ($user->user_type == 2 && $user->name)
                                    <li class="list-separated-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img src="{{ asset($user->image_business) }}" class="avatar brround avatar-md d-block cover-image" alt="avatar">
                                                {{-- <span class="avatar brround avatar-md d-block cover-image " data-image-src="{{ asset('images/avatar/(1).jpeg') }}"></span> --}}
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <a href="javascript:void(0)" class="text-inherit">{{ $user->name }}</a>
                                                </div>
                                                <small class="d-block item-except text-sm text-muted h-1x">{{ $user->email }}</small>
                                            </div>

                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div><!-- COL-END -->
            <div class="col-lg-8 col-xl-9">
                <div class="input-group mb-5">
                    <input type="text" class="form-control" placeholder="">
                    <div class="input-group-append ">
                        <button type="button" class="btn btn-primary-light">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-bottom-0 p-4">
                        {{-- <h2 class="card-title">1 - 30 of 546 users</h2> --}}
                        <a href="{{ route('users.create') }}" class="btn btn-cyan float-right"><i class="typcn typcn-plus"></i>Add New User</a>
                        <div class="page-options d-flex float-right">
                            <select class="form-control custom-select w-auto">
                                <option value="asc">Latest</option>
                                <option value="desc">Oldest</option>
                            </select>
                        </div>
                    </div>
                    <div class="e-table">
                        <div class="table-responsive table-lg br-bl-10 br-br-10">
                            @if ($message = Session::get('success'))
                                <div class="col-sm-12 col-md-12">
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Success Message</strong>
                                        <hr class="message-inner-separator">
                                        <p>{{ $message }}</p>
                                    </div>
                                </div>
                            @endif

                            
                            
                            <table class="table table-bordered mb-0">
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
                                            
                                            {{-- <td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="../assets/images/faces/female/26.jpg"></td> --}}
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
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <ul class="pagination float-right">
                        {{-- <li class="page-item page-prev disabled">
                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="#">Next</a>
                        </li> --}}
                        {!! $users->links() !!}
                    </ul>
                </div>
            </div><!-- COL-END -->
        </div>
        <!-- ROW CLOSED -->
    </div>
@endsection