<div class="card-content">
  <div class="field is-horizontal">
    <div class="field-label is-normal">
      <label class="label required"> العنوان</label>
    </div>
    <div class="field-body">
      <div class="field">
        <div class="control">
          {!! Form::text('title_ar', null, ['class' => 'input' , 'required'] )!!}
        </div>
      </div>
    </div>
  </div>
  <div class="field is-horizontal">
    <div class="field-label is-normal">
      <label class="label required">العنوان  بالانجليزية </label>
    </div>
    <div class="field-body">
      <div class="field">
        <div class="control">
          {!! Form::text('title_en', null, ['class' => 'input' , 'required'] )!!}
        </div>
      </div>
    </div>
  </div>
  <div class="field is-horizontal">
    <div class="field-label is-normal">
      <label class="label required"> المحتوي </label>
    </div>
      <div class="field-body">
          <div class="field">
              <div class="control">
                  <murabba-editor id="content_ar" name="content_ar" @if(isset($about)) old-data="{{ $about->content_ar }}" @endif></murabba-editor>
              </div>
          </div>
      </div>
</div>
  <div class="field is-horizontal">
    <div class="field-label is-normal">
      <label class="label required">المحتوي بالانجليزية</label>
    </div>
      <div class="field-body">
          <div class="field">
              <div class="control">
                  <murabba-editor id="content_en" name="content_en" @if(isset($about)) old-data="{{ $about->content_en }}" @endif></murabba-editor>
              </div>
          </div>
      </div>
  </div>
  <div class="field is-horizontal">
    <div class="field-label is-normal">
      <label class="label required">الصورة</label>
    </div>
    <div class="field-body">
      <div class="field">
        <div class="control">
          <uploader label="الصورة" name="image" @if(isset($about)) file="{{ $about->image }}" @endif></uploader>
        </div>
      </div>
    </div>
  </div>


</div>
<footer class="card-footer">
  <div class="buttons has-addons">
    <a class="button is-info" href="{{ route('admin.abouts.index') }}"> الغاء </a>
    <button type="submit" class="button is-success">حفظ</button>
  </div>
</footer>
