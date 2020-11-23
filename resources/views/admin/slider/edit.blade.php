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
                    <div class="card-header">edit Slider</div>
                    <div class="card-body">
                    <form action="{{route('slider.update', [$sliders->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="old_image" value="{{$sliders->image}}">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Update Slider title</label>
                              <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                                value="{{$sliders->title}}"
                               >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descrptions</label>
                            <textarea class="form-control" name="dec" id="exampleFormControlTextarea1" rows="3">{{$sliders->dec}}</textarea>
                            </div>
                            <!-- image -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Update brand_image name</label>
                                <input type="file" class="form-control" name="image" id="exampleInputEmail1"
                                 aria-describedby="emailHelp"
                                value="{{$sliders->image}}"
                                 >
                            
                              </div>

                              <div class="form-group">
                              <img src="{{asset($sliders->image)}}" style="width: 400px;height:200px;">
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
