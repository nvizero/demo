@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding: 25px;">
                <form action='{{ route('businessDesigns.designFormStore') }}' enctype="multipart/form-data" method="POST">

                    @csrf
                    <input type="hidden" name="id" value="{{ $obj->id }}">
                    <div class="row">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.title') }}</label>
                            <div class="col-sm-10 col-form-label">
                                <input type="text" class="form-control" name="title" value="{{ $obj->title }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-12 col-form-label">
                                {{ __('form.is_show') }}
                            </label>
                            <hr>
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.case1') }}</label>
                            <div class="col-sm-10 col-form-label">
                                {{ Form::checkbox('condition1', 1, $obj->condition1, ['class' => 'check_all form-group']) }}
                            </div>

                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.case2') }}</label>
                            <div class="col-sm-10 col-form-label">

                                {{ Form::checkbox('condition2', 1, $obj->condition2, ['class' => 'check_all form-group']) }}
                            </div>

                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.case3') }}</label>
                            <div class="col-sm-10 col-form-label">
                                {{ Form::checkbox('condition3', 1, $obj->condition3, ['class' => 'check_all form-group']) }}
                            </div>

                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.area') }}</label>
                            <div class="col-sm-10 col-form-label">
                                {{ Form::checkbox('condition3', 1, $obj->has_area, ['class' => 'check_all form-group']) }}
                            </div>

                            <label for="example-text-input"
                                class="col-sm-2 col-form-label">{{ __('form.industry') }}</label>
                            <div class="col-sm-10 col-form-label">
                                {{ Form::checkbox('condition3', 1, $obj->has_industries, ['class' => 'check_all form-group']) }}

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input"
                                class="col-sm-2 col-form-label">{{ __('form.busCate1') }}</label>
                            <div class="col-sm-10 col-form-label">

                                @include('backend.components.radio_association', [
                                    'setting' => $setting['business_category_1_id'],
                                    'datas' => $obj->business_category_1_id,
                                    'name' => 'business_category_1_id',
                                    'main' => $main,
                                    'checked' => $obj->business_category_1_id,
                                ])
                            </div>
                        </div>

                        
                        @include('backend.form.edit', [
                            'name' => 'business_category_2_id',
                            'setting' => $setting['business_category_2_id'],
                            'main' => $main,
                            'obj' => $obj,
                        ])



                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.status') }}</label>
                            <div class="col-sm-10 col-form-label">
                                {{ Form::checkbox('status', 1, $obj->status, ['class' => 'check_all form-group']) }}
                            </div>
                        </div>
                        @if ($obj->text_attrs)
                            <div class="row mb-3">
                                <label for="example-text-input"
                                    class="col-sm-2 col-form-label">{{ __('form.text') }}</label>
                                <div class="col-sm-10 col-form-label">
                                    {!! htmlArrts('text', $obj->text_attrs, $obj->id) !!}
                                </div>
                            </div>
                        @endif

                        @if ($obj->radio_attrs)
                            <div class="row mb-3">
                                <label for="example-text-input"
                                    class="col-sm-2 col-form-label">{{ __('form.radio') }}</label>
                                <div class="col-sm-10 col-form-label">
                                    {!! htmlArrts('radio', $obj->radio_attrs, $obj->id) !!}
                                </div>
                            </div>
                        @endif

                        @if ($obj->checkbox_attrs)
                            <div class="row mb-3">
                                <label for="example-text-input"
                                    class="col-sm-2 col-form-label">{{ __('form.checkbox') }}</label>
                                <div class="col-sm-10 col-form-label">
                                    {!! htmlArrts('checkbox', $obj->checkbox_attrs, $obj->id) !!}
                                </div>
                            </div>
                        @endif

                        <hr>
                        <div class="row mb-3">
                            <label for="example-text-input"
                                class="col-sm-2 col-form-label">{{ __('form.html_type') }}</label><br>
                            <div class="col-sm-10">
                                <select name="" id="multi_select">
                                    <option value="">----</option>
                                    <option value="1">{{ __('form.text') }}</option>
                                    <option value="2">{{ __('form.radio') }}</option>
                                    <option value="3">{{ __('form.checkbox') }}</option>
                                    {{-- <option value="4">{{ __('form.textarea') }}</option> --}}
                                </select>
                            </div>

                            <input type="hidden" class="radio_count" value="1">
                            <input type="hidden" class="checkbox_count" value="1">
                            <input type="hidden" class="required_count" value="1">
                            <input type="hidden" class="around" value="1">
                        </div>


                        <div class="multi_select_html"></div>
                        <div class="jquery_generate_html"></div>

                    </div>

            </div>
            <br>
            <br><br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{ __('default.generate_form') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="/js/createNewForm.js"></script>
    <script>
        $("document").ready(function() {
            $(".delattr").bind('click', function() {
                var yes = confirm('是否要刪除' + $(this).data("title"));
                if (yes) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('destroyHtmlAttr') }}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "id": $(this).data("id"),
                            "type": $(this).data("type"),
                            "around": $(this).data("around"),
                        },
                        success: function(data) {
                            if (parseInt(data) == 1) {
                                alert('{{ __('default.deleted_successfully') }}');
                                window.location.reload();
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
