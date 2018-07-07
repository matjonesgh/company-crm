@extends('dashboard.index')

@section('content')

<div class="box-body table-responsive">
<a href="{{ route('employee.create') }}" class="btn btn-primary btn-standard"><i class="fa fa-plus" title="Create"></i> Add Employee</a>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Employee List</h3>
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


    <div class="box-body table-responsive no-padding">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Company</th>
                  <th></th>
                </tr>

                @foreach ($employees as $employee)
                <tr>
                  <td>{{ $employee->first_name }}</td>
                  <td>{{ $employee->last_name }}</td>
                  <td>{{ $employee->email }}</td>
                  <td>{{ $employee->phone }}</td>
                  <td>@unless ( empty ($employee->company->name))
                      {{ $employee->company->name }}
                      @endunless
                  </td>
                  <td>
                    <a href="{{ route('employee.edit', ['id' => $employee->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil" title="Edit"></i> edit</a>
                    <a href="{{ route('employee.delete', ['id' => $employee->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Delete</a>
                   </td>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="box-footer clearfix text-center">                                                   
        {{ $employees->links() }}
    </div>


@endsection