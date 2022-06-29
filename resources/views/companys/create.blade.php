


@extends('companys.layout')
   
@section('content')
<div class="container ">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left ">
                        <h2>Add Company Form</h2>
                    </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('companys.index') }}"> Back</a>
                </div>
                </div>
            </div>
             @if(session('status'))
             <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
        </div>
            <form action="{{ route('companys.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Company Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Company Name">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Company Email:</strong>
                            <input type="email" name="email" class="form-control" placeholder="Company Email">
                            @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Company Website:</strong>
                            <input type="text" name="website" class="form-control" placeholder="Company website">
                            <!-- @error('website')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror -->
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Company Logo:</strong>
                            <input type="file" name="logo" class="form-control" placeholder="logo">
                            @error('logo')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        
        
            </form>
</div>
@endsection

