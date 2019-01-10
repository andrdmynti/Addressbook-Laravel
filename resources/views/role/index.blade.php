@extends('layouts.layouts')

@section('content')
<br />
<script type="text/javascript">
  function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete data User Address ?");
      if(x)
        return true;
      else
        return false;
    }   
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Address Users</h3>
      </div>
    </div>
  </div>
  <div class="row">
    @if(session('status'))
      <div class="alert alert-success">
        <strong>{{ session('status') }}</strong>
      </div>
    @endif
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>User Address</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <a href="#"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#">Settings 1</a>
              </li>
              <li>
                <a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href=""><button type="button" class="btn btn-round btn-primary">Add Data +</button></a>
        <br>
        <br>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>No. Hp</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Provinsi</th>
              <th>Pulau</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <!-- @foreach($address as $show) -->
            <tr>
              <!-- <td><font size="2px">{{ $no++ }}</td>
              <td><font size="2px">{{ $show->name }}</td>
              <td><font size="2px">{{ $show->nohp }}</font></td>
              <td><font size="2px">{{ $show->address }}</font></td>
              <td><font size="2px">{{ $show->city->city_name }}</font></td>
              <td><font size="2px">{{ $show->province->province_name }}</font></td>
              <td><font size="2px">{{ $show->pulau->pulau_name }}</font></td>
              <td>                    
                <center>
                  <a  data-toggle="tooltip" data-placement="top" title="Lihat Data" href="{{ url('/show')}}/{{$show->id}}">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ url('/edit')}}/{{$show->id}}">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a type="button" onclick="ConfirmDelete()" data-toggle="tooltip" data-placement="top" title="Hapus" href="{{ url('/delete') }}/{{ $show->id }}">
                    <i class="fa fa-trash"></i>
                 </a>
                </center>
              </td> -->
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection