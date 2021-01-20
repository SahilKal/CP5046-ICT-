@extends('layouts.master')

@section('title')
    About Us 
@endsection

@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">About Us</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                    ID
                </th>
                <th>
                    Title
                </th>
                <th>
                    Subtitle
                </th>
                <th>
                    Description
                </th>
                <th>
                    Edit
                </th>



              </thead>
              <tbody>
                  @foreach ($aboutus as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->title }}</td>                       
                  <td>{{ $data->subtitle }}</td>                
                  <td>{{ $data->description }}</td>
                  <td>
                      <a href="{{ url('about-us/'.$data->id) }}" class="btn btn-success">Edit</a>
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

@section('scripts')

@endsection