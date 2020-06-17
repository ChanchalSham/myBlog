@extends('layouts.backend.app')
@section('title','Add Category')
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
                                ADD NEW CATEGORY
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="tag_name" name="name" class="form-control">
                                        <label class="form-label">Category Name</label>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <input type="file" name="image">
                                </div>
                                <br>
                                <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.category.index') }}">BACK</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
            <!-- Horizontal Layout -->

            <!-- #END# Horizontal Layout -->
            <!-- Inline Layout -->

            <!-- #END# Inline Layout -->
            <!-- Inline Layout | With Floating Label -->

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->

            <!-- #END# Multi Column -->
        </div>
@endsection
@push('js')

@endpush
