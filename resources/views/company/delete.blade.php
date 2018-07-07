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

    <form role="form" method="post" action="{{ route('company.delete', ['id' => $company->id]) }}">
        @csrf
        
        <div class="box-body">
            <div class="form-group">
                <label for="name">Company Name:</label>
                {{ $company->name }}
            </div>
            @if (! @empty($company->email))
            <div class="form-group">
                <label for="email">Email:</label>
                {{ $company->email }}
            </div>
            @endif
            @if (! @empty($company->website))
            <div class="form-group">
                <label for="website">Website:</label>
                {{ $company->website }}
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