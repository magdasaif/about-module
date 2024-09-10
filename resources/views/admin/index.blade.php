@extends('about::layouts.app')

@section('page.title', 'عن الموقع')


@section('content')

  <div class="card">
    <header class="card-header">
      <a href="{{ route('admin.abouts.create') }}" class="button is-success">
        <span class="icon is-small">
          <i class="fa fa-plus-circle"></i>
        </span>
        <span>اضافة عن الموقع</span>
      </a>
    </header>
    <div class="card-content">
      <div class="table-container">
        <table class="table is-fullwidth" id="abouts">
          <thead>
          <tr>
            <th>الصوره </th>
            <th>عنوان الفقرة</th>
            <th>الاجراءات</th>
          </tr>
          </thead>
          <tbody>
          @foreach($abouts as $about)
            <tr>
              <td><img src="{{ $about->image }}" style="width:100px;"></td>
              <td>{{ $about->title }}</td>
              <td>
                <div class="buttons has-addons">
                  <a class="button is-info" href="{{ route('admin.abouts.edit', $about->id) }}"> تعديل </a>
                  <span class="modal-open button is-danger" status-name="تأكيد الحذف"  traget-modal=".delete-modal" data_id="{{ $about->id }}" data_name="{{ $about->title }}" data-url="{{ route('admin.abouts.destroy', $about->id) }}">مسح</span>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script src="{{asset('vendor/category/admin/js/datatables.min.js')}}"></script>
  <script>
      $(document).ready(function() {
          $('#abouts').DataTable( {
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'print'
              ]
          });
      });
  </script>
@endsection


