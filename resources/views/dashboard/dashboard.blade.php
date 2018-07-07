@extends('dashboard.index')

@section('content')

    	<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $company_count }}</h3>

              <p>Companies Registered</p>
            </div>
            <div class="icon">
              <i class="fa fa-building"></i>
            </div>
            <a href="{{ route('company.index') }}" class="small-box-footer">View Companies <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    	</div>

		<div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $employee_count }}</h3>

              <p>Employees Registered</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('employee.index') }}" class="small-box-footer">View Employees <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    	</div>

@endsection