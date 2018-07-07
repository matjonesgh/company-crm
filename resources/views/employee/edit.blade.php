@extends('dashboard.index')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Employee Details</h3>
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

    <form role="form" method="post" action="{{ route('employee.update', $employee->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <input type="hidden" name="id" value="{{ $employee->id }}"/>

        <div class="box-body">
            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $employee->first_name) }}"/>
            </div>
            <div class="form-group">
                <label for="name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $employee->last_name) }}"/>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ old('email', $employee->email) }}"></textarea>
            </div>
            <div class="form-group">
                <label for="website">Phone:</label>
                <input type="tel" class="form-control" name="phone" value="{{ old('phone', $employee->phone) }}"></textarea>
            </div>
            <div class="form-group">
                <label for="website">Company:</label>
            <select class="form-control" name="company_id">
                <option selected disabled>Please select an option</option>
                @foreach($companies as $company)
                    <option value="{{$company->id}}" 
                    @if ($company->id == old('company_id', $employee->company_id))
                        selected="selected"
                    @endif
                    >{{$company->name}}</option>
                @endforeach
            </select>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </form>
</div>

@endsection