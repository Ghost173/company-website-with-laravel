@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Messages from Customers</h2>
                {{-- {{route('add.contact')}} add buton route  --}}
                
                <div class="col-md-12">
                    <div class="card table-responsive">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif
                            
                        
                            <div class="card-header">All messages </div>

             
                    
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" >ID NO</th>
                                <th scope="col" >name</th>
                                <th scope="col" >Email</th>
                                <th scope="col" >subject</th>
                                <th scope="col" >message</th>
                                <th scope="col" >date</th>
                                <th scope="col" >Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php ($i = 1)
                                @foreach ($messages as $meg)
                                <th scope="row">{{$meg->id}}</th>
                                <td>{{ Str::limit($meg->name, 10)}}</td>
                                <td>{{ Str::limit($meg->email, 15)}}</td>
                                <td>{{ Str::limit($meg->subject, 20)}}</td>
                                <td>{{ Str::limit($meg->message, 80)}}</td>
                                <td>{{$meg->created_at->diffForhumans()}}</td>
                                
                                    <td> 
                                        <a href="{{route('message.view',[$meg->id])}}"  class="btn btn-info">View</a>  
                                        {{-- about delete route {{route('about.delete',[$about->id])}} --}}
                                        <a href="{{route('message.delete',[$meg->id])}}" onclick="return confirm('Are you suree?')" class="btn btn-danger">Delete</a>  
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