@extends('layouts.backend.app')

@section('title', 'category')

@push('css')
    @endpush

@section('content')

	<div class="container-fluid">

            <!-- Vertical Layout -->
            <!-- #END# Vertical Layout -->
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Category
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="name" class="form-control" name="name" value="{{$category->name}}">
                                        <label class="form-label">Category Name</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image">
                                </div>

                                <a class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.category.index')}}">BACK</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
            <!-- Horizontal Layout -->
         
            <!-- #END# Multi Column -->
    </div>
@endsection

@push('js')
    @endpush


