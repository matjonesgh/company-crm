@extends('dashboard.index')

@section('content')

<div class="box-body table-responsive">
<a href="{{ route('company.create') }}" class="btn btn-primary btn-standard"><i class="fa fa-plus" title="Create"></i> Add Company</a>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Company List</h3>
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
                  <th>Logo</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th></th>
                </tr>

                @foreach ($companies as $company)
                <tr>
                  <td>@if(! @empty($company->logo))
                        <img src="/storage/{{ $company->logo }}" width="30">
                      @endif
                  </td>
                  <td>{{ $company->name }}</td>
                  <td><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></td>
                  <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                  <td>
                    <a href="{{ route('company.show', ['id' => $company->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-eye" title="View"></i> view</a>
                    <a href="{{ route('company.edit', ['id' => $company->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil" title="Edit"></i> edit</a>
                    <a href="{{ route('company.delete', ['id' => $company->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> delete</a>
                   </td>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="box-footer clearfix text-center">                                                   
        {{ $companies->links() }}
    </div>


@endsection