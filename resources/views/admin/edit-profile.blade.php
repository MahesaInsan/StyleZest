{{-- Profile content --}}
@extends('layouts.box')

@section('box-content')
    <form action="{{ route('users.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="header">
            <h4 class="modal-title mb-3">Edit Profile</h4>
        </div>
        <div class="body d-flex flex-column gap-4">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ Auth::user()->name }}"
                    required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email Address" class="form-control"
                    value="{{ Auth::user()->email }}" required>
            </div>
            <div>
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phoneNumber" placeholder="Phone Number" class="form-control"
                    value="{{ Auth::user()->phoneNumber }}" required>
            </div>
            <div>
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="5" class="form-control">{{ Auth::user()->address }}</textarea>
            </div>

            <input type="submit" class="button btn btn-primary" value="Update Profile">
        </div>
    </form>
@endsection
