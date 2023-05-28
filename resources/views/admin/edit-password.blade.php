{{-- Password content --}}
@extends('layouts.app')

@section('content')
    <form class="p-5" action="{{ route('users.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data" style="font-size: 1.15rem">
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

            <input type="submit" class="btn btn-success" value="Update Password">
        </div>
    </form>
@endsection
