@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Contact</h2>
                {{-- {{route('add.contact')}} add buton route  --}}
                <a href="{{route('add.contact')}}"  class="btn btn-success" role="button" aria-disabled="true">Add Contact</a>
                <div class="col-md-12">
                    <div class="card table-responsive">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif
                            
                        
                            <div class="card-header">Contact Details</div>

             
                    
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" >ID NO</th>
                                <th scope="col" >Contact Address</th>
                                <th scope="col" >Contact Email</th>
                                <th scope="col" >Contact phone</th>
                                <th scope="col" >Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php ($i = 1)
                                @foreach ($contacts as $contact)
                                <th scope="row">{{$contact->id}}</th>
                                <td>{{ Str::limit($contact->address, 35)}}</td>
                                <td>{{ Str::limit($contact->email, 40)}}</td>
                                <td>{{ Str::limit($contact->phone, 40)}}</td>
                                
                                    <td>
                                        <a href="{{route('contact.edit',[$contact->id])}}" class="btn btn-info">Edit</a>    
                                        {{-- about delete route {{route('about.delete',[$about->id])}} --}}
                                        <a href="{{route('contact.delete',[$contact->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>  
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