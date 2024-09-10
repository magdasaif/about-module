@extends('admin.layouts.app')

@section('page.title', 'اضافة عن الموقع')

@section('content')
  <div class="card">
    <header class="card-header">
      <a href="{{ route('admin.abouts.index') }}" class="button is-success">
          <span class="icon is-small">
            <i class="fa fa-list"></i>
          </span>
        <span>قائمة عن الموقع</span>
      </a>
    </header>
    {!! Form::open(['method' => 'POST','files' => true, 'route' => ['admin.abouts.store']]) !!}
    @include('admin.abouts._form')
    {!! Form::close() !!}
  </div>
@endsection
