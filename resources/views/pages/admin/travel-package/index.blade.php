@extends('layouts.admin')
    @section('header')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection
@section('content')
        {{-- <!-- Begin Page Content --> --}}
        <div class="container-fluid">

        {{-- <!-- Page Heading --> --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Travel Package</h1>
            <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                {{--  {{dd($items)}}  --}}
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Location</th>
                                {{-- <th>Departure Date</th> --}}
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            {{--  {{dd($item)}}  --}}
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->type }}</td>
                                    {{-- <td>{{ $item->departure_date }}</td> --}}
                                    <td>
                                        <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        {{--  <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>  --}}
                                        @isset($item->galleries->id)
                                            <a href="{{ route('travel_gallery', $item->id) }}" class="btn btn-success">
                                                <i class="fa fa-photo-video"></i>
                                            </a>
                                        @endisset
                                        @if (!isset($item->galleries->id))
                                            <a href="{{ route('gallery.create') }}" class="btn btn-success">
                                                <i class="fa fa-photo-video"></i>
                                            </a>
                                        @endif
                                        <button class="btn btn-danger" onclick="deleteTransaction({{$item->id}})">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" >

        function deleteTransaction(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            Swal.fire({
                title: 'Please input text CONFIRM',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Delete',
                showLoaderOnConfirm: true,
                preConfirm: (login) => {
                    if(login == 'CONFIRM'){
                        $.ajax({
                            type: 'delete',
                            url: "{{url('/admin/travel-package')}}/" + id,
                            // data: {
                            // '_method': 'delete'
                            // },
                            success: function (response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Your travel package is succes deleted',
                                })
                                location.reload ()
                            }
                        });
                    }else{
                        Swal.showValidationMessage(
                            `Failed`
                        )
                    }
                }
            })
        }

    </script>
@endsection
