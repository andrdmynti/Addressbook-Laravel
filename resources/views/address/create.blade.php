@extends('layouts.layouts')

@section('content')
<br />
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User Address</h3>
      </div>
    </div>
  </div>
  <br>
  <div class="row">

  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Add User Address</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form id="demo-form2" action="{{ route ('address.insert')}}" data-parsley-validate class="form-horizontal form-label-left" method="POST">
            
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="name" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Initial</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" name="initial" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No. HP <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" name="nohp" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Pulau <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="pulau" class="form-control" id="pulau">
                  @foreach ($pulau as $show)
                  <option value="{{ $show->id }}">{{ $show->pulau_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Province <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="province" id="province" class="form-control">
                  
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">City <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="city" class="form-control" id="city">
                  
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Address <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="message" required="required" class="form-control" name="address" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100"
                  data-parsley-validation-threshold="10"></textarea>
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a href="{{ url ('/address')}}"><button type="button" class="btn btn-primary">Cancel</button></a>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('#pulau').change(function(){
     var id = $(this).val();
     $.ajax({
        url : '{{ route( 'loadProvince' ) }}',
        data: {
          "_token": "{{ csrf_token() }}",
          "id": id
          },
        type: 'post',
        dataType: 'json',
        success: function( result )
        {
             console.log(result)
             $("#province").empty()
             $.each( result, function(k, v) {
                  $('#province').append($('<option>', {value:k, text:v}));
             });
        },
        error: function()
        {
          //handle errors
          alert('error...');
        }
     });
  });

  $('#province').change(function(){
     var id = $(this).val();
     $.ajax({
        url : '{{ route( 'loadCity' ) }}',
        data: {
          "_token": "{{ csrf_token() }}",
          "id": id
          },
        type: 'post',
        dataType: 'json',
        success: function( result )
        {
             console.log(result)
             $("#city").empty()
             $.each( result, function(k, v) {
                  $('#city').append($('<option>', {value:k, text:v}));
             });
        },
        error: function()
       {
           //handle errors
           alert('error...');
       }
     });
  });
</script>
@endsection