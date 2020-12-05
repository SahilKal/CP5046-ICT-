@extends('layouts.master')

@section('title')
    David and Smith 
@endsection

@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                    Icon
                </th>
                <th>
                  Business Reference Name
                </th>
                <th>
                  Short Business Description
                </th>
                <th>
                  Description
                </th>

              </thead>
              <tbody>
                <tr>
                  <td>Image Goes Here</td>
                  <td>Joe Smith Farm Products</td>                       
                  <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum</td>                
                  <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum   </td>
                </tr>                        
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