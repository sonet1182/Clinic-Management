@extends('backend.layouts.master')

@section('title', 'Edit Package')

@section('content')

    <div class="card card-default">

        <div class="card-header">
            <div class="d-flex">
                <a class="btn btn-primary ml-auto" href="{{ route('packages.index') }}"> 
                    Back 
                </a>
            </div>
        </div>

        <div class="card-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Something went wrong.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('packages.update', $package->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Package Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name', $package->name) }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Fee:</strong>
                            <input type="text" name="price" class="form-control" value="{{ old('price', $package->price) }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tests:</strong>
                            <br />

                            <div class="row">
                                @php
                                    $selectedTests = old('tests', json_decode($package->test_list, true) ?? []);
                                @endphp

                                @foreach ($tests as $test)
                                    <span class="col-md-3">
                                        <input type="checkbox" name="tests[]" value="{{ $test->id }}" class="id"
                                            {{ in_array($test->id, $selectedTests) ? 'checked' : '' }}>
                                        {{ $test->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
