@extends('layouts.admin')

@section('content')
{{-- <!-- Begin Page Content --> --}}
<div class="container-fluid">

    {{-- <!-- Page Heading --> --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit User {{ $user->username }}</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required name="name" placeholder="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" required name="username" placeholder="username" value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" required name="email" placeholder="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <select class="form-control" required name="roles" id="roles">
                        <option value="ADMIN" {{ $user->roles =='ADMIN' ? 'selected' : '' }}>Admin</option>
                        <option value="USER" {{ $user->roles =='USER' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Change
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
