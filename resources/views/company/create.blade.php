@extends('dashboard.index')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Company Details</h3>
    </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif

    <form role="form" method="post" action="{{ route('company.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="box-body">
            <div class="form-group">
                <label for="name">Company Name:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}"/>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}"></textarea>
            </div>
            <div class="form-group">
                <label for="website">Website:</label>
                <input type="url" class="form-control" name="website" value="{{ old('website') }}"></textarea>
            </div>
            <div class="form-group">
                  <label for="logo">Company Logo</label>
                  <input type="file" id="logo" name="logo">
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </form>
</div>

@endsection