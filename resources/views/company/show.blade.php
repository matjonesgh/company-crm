@extends('dashboard.index')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Company Details</h3>
    </div>

    <div class="box-body">
        <div class="col-xs-3">
            @if(! @empty($company->logo))
                <img class="img-responsive" src="/storage/{{ $company->logo }}" alt="{{ $company->name }}">
            @endif
        </div>
        <div class="col-xs-9">
            <h1>{{ $company->name }}</h1>
            <i class="fa fa-envelope-o fa-lg fa-fw"></i> <a href="mailto:{{ $company->email }}">{{ $company->email }}</a><br />
            <i class="fa fa-globe fa-lg fa-fw"></i> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a>
            </ul>

        </div>
    </div>
 

    <div class="box-body table-responsive">
        <h3>Employees</h3>
        <table class="table">
            <tbody>
                @foreach ($company->employees as $employee)
                <tr>
                    <td><i class="fa fa-user-o fa-lg fa-fw"></i> {{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td>
                        @if (! @empty($employee->email))
                        <i class="fa fa-envelope-o fa-lg fa-fw"></i> <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a>
                        @endif
                    </td>
                    <td>
                        @if (! @empty($employee->phone))
                        <i class="fa fa-phone fa-lg fa-fw"></i>{{ $employee->phone }}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  

    <div class="box-footer clearfix text-right">                                                   
        <a href="{{route('company.index')}}" class="btn btn-default">List All Companies</a>
    </div>          
</div>

@endsection