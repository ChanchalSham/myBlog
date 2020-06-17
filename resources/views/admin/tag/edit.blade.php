@extends('layouts.backend.app')
@section('title','Edit Tag')
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
                                EDIT TAG
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('admin.tag.update',$tag->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="tag_name" name="name" value="{{ $tag->name }}" class="form-control">
                                        <label class="form-label">Tag Name</label>
                                    </div>
                                </div>

                                <br>
                                <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.tag.index') }}">BACK</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
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
