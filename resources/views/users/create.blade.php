@extends('layout')
@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show col-4" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="row">
    <div class="col-12">
        <div class="card card-info card-outline text-sm-3">
            <div class="card-header bg-info">
                <h4 class="card-title text-light"> <i class="fas fa-edit text-light mr-2"></i>Form Input Buku
                </h4>
            </div>
            <div class="card-body">
               
                <table class="table table-borderless">
                    <form action="{{ route('users.store')}}" method="POST">
                        @csrf

                <tr>
                    <td><label class="offset-4">Nama</label> </td>
                    <td><input type="text" name="name" class="form-control col-9">
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="offset-4">Email</label> </td>
                    <td><input type="text" name="email" class="form-control col-9">
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="offset-4">Password</label> </td>
                    <td><input type="password" name="password" class="form-control col-9">
                    </td>
                </tr>
               
                    
                    
                   </table>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Input</button>
                    <a href="{{ route('users.index')}}" class="btn btn-default ">Cancel</a>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</div>


@endsection
