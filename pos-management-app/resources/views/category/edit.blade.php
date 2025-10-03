@extends('layout')
@section('content')

<div class="container">
        <h3 align="center" class="mt-5">Category</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('category.update', $category->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="catname" value="{{ $category->catname }}">
                        </div>
                        <div class="col-md-6">
                            <label>Status</label>
                            <select class="form-control" name="status" id="status">
                                <option selected>Select menu</option>
                                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>True</option>
                                <option value="2" {{ $category->status == 2 ? 'selected' : '' }}>False</option>
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection

@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }
    </style>
@endpush
