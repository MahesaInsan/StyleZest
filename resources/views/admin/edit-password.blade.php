{{-- Password content --}}
@extends('layouts.box')

@section('box-content')
    <form action="{{ route('users.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="header">
            <h4 class="modal-title mb-3">Edit Password</h4>
        </div>
        <div class="body d-flex flex-column gap-4">
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" required>
                <span class="text-secondary">Write down your new password</span>
            </div>

            <input type="submit" class="button btn btn-primary" value="Update Password">
        </div>
    </form>
@endsection
