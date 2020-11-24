@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Home About</h2>
                {{-- {{route('add.about')}} add buton route  --}}
            <a href=""  class="btn btn-success" role="button" aria-disabled="true">Add About</a>
                <div class="col-md-12">
                    <div class="card table-responsive">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif
                            
                        
                            <div class="card-header">All About Data</div>

             
                    
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" >ID NO</th>
                                <th scope="col" >About title</th>
                                <th scope="col" >Short decrption</th>
                                <th scope="col" >Long decrption</th>
                                <th scope="col" >list 1</th>
                                <th scope="col" >list 2</th>
                                <th scope="col" >list 3</th>
                                <th scope="col" >Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php ($i = 1)
                                @foreach ($homeabouts as $about)
                                <th scope="row">{{$about->id}}</th>
                                <td>{{ Str::limit($about->title, 35)}}</td>
                                <td>{{ Str::limit($about->short_dis, 40)}}</td>
                                <td>{{ Str::limit($about->long_dis, 40)}}</td>
                                <td>{{ Str::limit($about->l1, 5)}}</td>
                                <td>{{ Str::limit($about->l2, 5)}}</td>
                                <td>{{ Str::limit($about->l3, 5)}}</td>
                                    <td>
                                        <a href="{{route('about.edit',[$about->id])}}" class="btn btn-info">Edit</a>    
                                        {{-- about delete route {{route('about.delete',[$about->id])}} --}}
                                        <a href="" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>  
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