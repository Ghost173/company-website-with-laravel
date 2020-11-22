@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Home slider</h2>
            <a href="{{route('add.slider')}}"  class="btn btn-success">new slider</a>
                <div class="col-md-12">
                    <div class="card">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif
                            <div class="card-header">All Sliders</div>

                    
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID NO</th>
                        <th scope="col">slider title</th>
                        <th scope="col">slider decrption</th>
                        <th scope="col">image</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php ($i = 1)
                        @foreach ($sliders as $slider)
                        <th scope="row">{{$slider->id}}</th>
                        <td>{{ $slider->title}}</td>
                        <td>{{ $slider->dec}}</td>
                    <td><img src="{{asset($slider->image)}}" style="height:50px; width:70px;" ></td>
                            {{-- <td>
                                @if($brd->created_at == NULL)
                                <span class="text-danger"> <b>NO DATE SET </b></span>
                                @else
                                {{ $brd->created_at->diffForhumans()}}
                                </td>
                                @endif --}}
                            <td>
                               
                                <a href="" class="btn btn-info">Edit</a>    
                                <a href="{{route('slider.delete',[$slider->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>  
                            </td>    
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{-- {{$brand->links()}} --}}
                </div>
            </div>


            {{-- <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add brand</div>
                    <div class="card-body">
                    <form action="{{route('store.brand')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">brand name</label>
                              <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('brand_name')
                            <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">brand image</label>
                              <input type="file" class="form-control" name="brand_image" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('brand_image')
                            <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                
                            <button type="submit" class="btn btn-primary">ADD brand</button>
                          </form>
                    </div>
                    
                </div>
            </div>                     --}}

            </div>
        </div>


    </div>

    @endsection