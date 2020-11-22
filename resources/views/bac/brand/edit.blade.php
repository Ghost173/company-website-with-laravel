@extends('admin.admin_master')


@section('admin')
    

    <div class="py-12">
        <div class="container">
            <div class="row">
               

            <div class="col-md-8">
                <div class="card">
                    @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                    @endif
                    <div class="card-header">edit Brand</div>
                    <div class="card-body">
                    <form action="{{route('brand.update',[$brands->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="old_image" value="{{$brands->brand_image}}">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Update Category name</label>
                              <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                            value="{{$brands->brand_name}}"
                               >
                                @error('brand_name')
                            <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                            <!-- image -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Update brand_image name</label>
                                <input type="file" class="form-control" name="brand_image" id="exampleInputEmail1"
                                 aria-describedby="emailHelp"
                              value="{{$brands->brand_image}}"
                                 >
                                  @error('brand_image')
                              <span class="text-danger"> {{$message}}</span>
                                  @enderror
                              </div>

                              <div class="form-group">
                              <img src="{{asset($brands->brand_image)}}" style="width: 400px;height:200px;">
                              </div>
                            
                            <button type="submit" class="btn btn-primary">Update category</button>
                          </form>
                    </div>
                    
                </div>
            </div>                    

            </div>
        </div>
    </div>
    @endsection 
