


@extends('backend.dashboard_layout.main'); 
@section('main-content');
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Start Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Edit Choose </h5>
              </div>
              <div class="card-body">
              <form action="{{route('chosen.update',$dat->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title" value="{{$dat->title}}" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Details</Details></label>
                      <input type="text" name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter Details" value="{{$dat->details}}" >
                  </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Icon</Details></label>
                      <input type="text" name="icone" class="form-control" id="exampleInputEmail1" placeholder="Enter update icon" value="{{$dat->icone}}" >
                  </div>

                    </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Headline</label>
                        <input type="text" name="headline" class="form-control" id="exampleInputEmail1" placeholder="Enter update headline" value="{{$dat->headline}}" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter update headline" value="{{$dat->description}}" >
                    </div>
                    
                    <div>
                        <label for="">Old photo</label>
                        <img src="{{ asset('/uploads/'.$dat->photo) }}" style='height:60px; width:80px;'/>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputFile">Photo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"></label>
                      <input type="submit" class="btn btn-primary btn-block" value="Save">
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
    </div>
    <!-- /.content -->
  </div>
@endsection
  <!-- Content Wrapper. Contains page content -->
  

<!-- ./wrapper -->


