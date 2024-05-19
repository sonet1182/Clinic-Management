@extends('backend.layouts.master')

@section('title', 'Create New Role')

@section('content')

    <div class="card card-default">

        <div class="card-header">
            <div class="d-flex">
                <a class="btn btn-primary ml-auto" href="{{ route('categories.index') }}"> Back </a>
            </div>
        </div>


        <div class="card-body">

            <form class="row" action="{{ route('categories.store') }}" method="post">
                @csrf

                <div class="form-group col-md-6">
                    <label for="">Category Name:</label>
                    <input class="form-control" type="text" name="title" id="title" required>
                </div>


                <div class="form-group col-md-6">

                    <label for="parent_id">Parent Category:</label>
                    <select name="parent_id" id="parent_id" class="form-control select2bs4">
                        <option value="">No Parent</option>
                        @foreach ($categories as $id => $title)
                            <option value="{{ $id }}">{{ $title }}</option>
                        @endforeach
                    </select>

                </div>

                <button class="btn btn-success" type="submit">Add Category</button>
            </form>

        </div>

    @endsection
