@extends('admin.layouts.app')

@section('page.title', 'تعديل عن الموقع')

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
    {!! Form::model($about,['method' => 'PATCH', 'files' => true, 'url' => route('admin.abouts.update', $about->id)]) !!}
    @include('admin.abouts._form')
    {!! Form::close() !!}
  </div>
@endsection
