@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{-- @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif --}}
                            <div class="card-header">All Brand</div>

                    
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL NO</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Brand image</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php ($i = 1)
                        @foreach ($brand as $brd)
                        <th scope="row">{{$brd->id}}</th>
                            <td>{{ $brd->brand_name}}</td>
                    <td><img src="{{asset($brd->brand_image)}}" style="height:50px; width:70px;" ></td>
                            <td>
                                @if($brd->created_at == NULL)
                                <span class="text-danger"> <b>NO DATE SET </b></span>
                                @else
                                {{ $brd->created_at->diffForhumans()}}
                                </td>
                                @endif
                            <td>
                               
                                <a href="{{route('brand.edit',[$brd->id])}}" class="btn btn-info">Edit</a>    
                                <a href="{{route('brand.delete',[$brd->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>  
                            </td>    
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{-- {{$brand->links()}} --}}
                </div>
            </div>


            <div class="col-md-4">
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
            </div>                    

            </div>
        </div>


    </div>

    @endsection