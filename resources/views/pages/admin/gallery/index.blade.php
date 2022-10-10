@extends('layouts.admin')
    @section('header')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection
@section('content')
        {{-- <!-- Begin Page Content --> --}}
        <div class="container-fluid">

        {{-- <!-- Page Heading --> --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
            <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Travel</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->travel_package->title }}</td>
                                    <td>
                                    @if (count(json_decode($item->image)) > 0)
                                        @foreach (json_decode($item->image) as $imageName)
                                            <img src="{{ Storage::url($imageName) }}" alt="" style="width: 150px" class="img-thumbnail" />
                                        @endforeach
                                    @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button class="btn btn-danger" onclick="alert('halo')">
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
                        // $.ajax({
                        //     type: 'delete',
                        //     url: "{{url('/admin/gallery')}}/" + id,
                        //     // data: {
                        //     // '_method': 'delete'
                        //     // },
                        //     success: function (response) {
                        //         Swal.fire({
                        //             icon: 'success',
                        //             title: 'Success',
                        //             text: 'Your gallery is succes deleted',
                        //         })
                        //         location.reload('admin/gallery')
                        //     }
                        // });
                        alert('logins')
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
