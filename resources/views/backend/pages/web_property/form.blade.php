@extends('backend.layouts.master')

@section('title', 'Advanced Form')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Select2 (Bootstrap4 Theme)</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- dynamicForm.blade.php -->
                    <form method="POST"
                        action="{{ isset($record) ? route('web_property.update', $record->id) : route('web_property.store') }}">
                        @csrf
                        @if (isset($record))
                            @method('PUT')
                        @endif


                        <div class="row">
                            @foreach ($formInputs as $input)
                                @if ($input->type == 'file')
                                    <div class="form-group col-md-6">
                                        <label for="{{ $input->form_id }}">{{ $input->label }}:</label>
                                        <div class="col-md-8">
                                            <div class="mt-2" id="{{ $input->form_id }}"></div>
                                            <input type="{{ $input->type }}"
                                                class="@error($input->form_id) is-invalid @enderror"
                                                name="{{ $input->name }}"
                                                onchange="previewImage(this, '{{ $input->form_id }}' , '250px', '250px')">
                                        </div>
                                    </div>
                                @elseif($input->type == 'text-area')
                                    <div class="form-group col-md-6">
                                        <label for="{{ $input->form_id }}">{{ $input->label }}</label>
                                        <textarea class="summernote">{{ isset($record) ? $record->{$input->name} : '' }}</textarea>
                                    </div>
                                @elseif (isset(${"{$input->name}Options"}) && is_array(${"{$input->name}Options"}))
                                    <div class="form-group col-md-6">
                                        <label for="{{ $input->form_id }}">{{ $input->label }}</label>
                                        <select name="{{ $input->name }}" class="form-control select2bs4">
                                            @foreach (${"{$input->name}Options"} as $option)
                                                <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @else
                                    <div class="form-group col-md-6">
                                        <label for="{{ $input->form_id }}">{{ $input->label }}</label>
                                        <input type="{{ $input->type }}" name="{{ $input->name }}" class="form-control"
                                            id="{{ $input->form_id }}" placeholder="{{ $input->placeholder }}"
                                            value="{{ isset($record) ? $record->{$input->name} : '' }}">
                                    </div>
                                @endif
                            @endforeach
                        </div>



                        <button type="submit" class="btn btn-primary">{{ isset($record) ? 'Update' : 'Add' }}</button>
                    </form>

                </div>
            </div>


        </div>

    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').each(function() {
                $(this).summernote({
                    height: 150,
                });
            });
        });
    </script>
@endsection
