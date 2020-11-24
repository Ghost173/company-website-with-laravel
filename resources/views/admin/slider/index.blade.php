@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Home slider</h2>
            <a href="{{route('add.slider')}}"  class="btn btn-success">new slider</a>
                <div class="col-md-12">
                    <div class="card table-responsive">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif
                            
                        
                            <div class="card-header">All Sliders</div>

             
                    
                        <table class="table table-striped table-hover mx-auto w-auto">
                            <thead>
                              <tr>
                                <th scope="col" width="5%">ID NO</th>
                                <th scope="col" width="20%">slider title</th>
                                <th scope="col" width="35%">slider decrption</th>
                                <th scope="col" width="20%">image</th>
                                <th scope="col" width="20%">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php ($i = 1)
                                @foreach ($sliders as $slider)
                                <th scope="row">{{$slider->id}}</th>
                                <td>{{ $slider->title}}</td>
                                <td>{{ Str::limit($slider->dec, 40)}}</td>
                            <td><img src="{{asset($slider->image)}}" style="height:50px; width:70px;" ></td>
                                    {{-- <td>
                                        @if($brd->created_at == NULL)
                                        <span class="text-danger"> <b>NO DATE SET </b></span>
                                        @else
                                        {{ $brd->created_at->diffForhumans()}}
                                        </td>
                                        @endif --}}
                                    <td>
                                       
                                        <a href="{{route('slider.edit',[$slider->id])}}" class="btn btn-info">Edit</a>    
                                        <a href="{{route('slider.delete',[$slider->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>  
                                    </td>    
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>

                    
               
                  
                </div>
            </div>


            
        </div>


    </div>

    @endsection