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

    <form role="form" method="post" action="{{ route('employee.delete', ['id' => $employee->id]) }}">
        @csrf

        <div class="box-body">
            <div class="form-group">
                <label for="name">First Name:</label>
                {{ $employee->first_name }}
            </div>
            <div class="form-group">
                <label for="name">Last Name:</label>
                {{ $employee->last_name }}
            </div>
            @if (! @empty($employee->email))
            <div class="form-group">
                <label for="email">Email:</label>
                {{ $employee->email }}
            </div>
            @endif
            @if (! @empty($employee->phone))
            <div class="form-group">
                <label for="website">Phone:</label>
                {{ $employee->phone }}
            </div>
            @endif
            @if (! @empty($employee->company->name))
            <div class="form-group">
                <label for="website">Company:</label>
                {{ $employee->company->name }}
            </div>
            @endif
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Delete</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </form>
</div>

@endsection