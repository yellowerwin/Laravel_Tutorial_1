@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">Companies</div>
        <div class="panel-body">
            <ul class="list-group">
                @foreach($companies as $company)
                    <li class="list-group-item">
                        <a href="/companies/{{ $company->id }}">{{ $company->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection