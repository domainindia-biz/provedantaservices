@extends('admin.layouts.main') 

@push('styles')
<script src="https://cdn.ckeditor.com/4.11.2/standard-all/ckeditor.js"></script>    
@endpush

@push('scripts')
<script>
  CKEDITOR.replace('editor1', {
    fullPage: true,
    allowedContent: true,
    height: 320
  });
</script>

@endpush

@section('content')

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ ucfirst(config('admin.prefix')) }} Edit Pages</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
       

          <textarea cols="80" id="editor1" name="editor1" rows="10">

            @include('admin.layouts.theme')
            @include('pages.about')
              
         
         
          </textarea>
          


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@endsection