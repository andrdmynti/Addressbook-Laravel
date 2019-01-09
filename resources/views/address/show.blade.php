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
          <h2>Show Detail User Address</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $address->id }}">
            <table class="table table-bordered">
              <tr>
                <td width="200px">Nama</td>
                <td>{{ $address->name }}</td>
              </tr>
              <tr>
                <td width="200px">Initial</td>
                <td>{{ $address->initial }}</td>
              </tr>
              <tr>
                <td width="200px">No. HP</td>
                <td>{{ $address->nohp }}</td>
              </tr>
              <tr>
                <td width="200px">Alamat</td>
                <td>{{ $address->alamat }}</td>
              </tr>
              <tr>
                <td width="200px">Kota</td>
                <td>{{ $address->city->city }}</td>
              </tr>
              <tr>
                <td width="200px">Kota</td>
                <td>{{ $address->province->province }}</td>
              </tr>
            <table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection