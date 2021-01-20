@extends('layouts.master')

@section('title')
    About Us 
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> About Us - Edit Data </h4>

                    <form action="{{url('aboutus-update/'.$aboutus->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="receipt-name" class="col-form-label">Title :</label>
                                <input type="text" name="title" class="form-control" value="{{ $aboutus->title}}">
                            </div>
                            <div class="form-group">
                                <label for="receipt-name" class="col-form-label">Sub-Title :</label>
                                <input type="text" name="subtitle" class="form-control" value="{{ $aboutus->subtitle}}">
                            </div>
                            <div class="form-group">
                                <label for="receipt-name" class="col-form-label">Description :</label>
                                <textarea name="description" class="form-control">{{ $aboutus->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('abouts') }}"class="btn btn-secondary">Back</a>
                            </div>
                        </div>

                    </form>    
            </div>
        </div>
    </div>
</div>

@endsection
