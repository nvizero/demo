@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding: 25px;">
                <form action='{{ route('businessDesigns.designFormStore') }}' enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.title') }}</label>
                            <div class="col-sm-10 col-form-label">
                                <input type="text" class="form-control" name="title" value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-12 col-form-label">
                                {{ __('form.is_show') }}
                            </label>
                            <hr>
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.case1') }}</label>
                            <div class="col-sm-10 col-form-label">
                                <input type="checkbox" class="form-group" name="condition1" value="1">
                            </div>

                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.case2') }}</label>
                            <div class="col-sm-10 col-form-label">
                                <input type="checkbox" class="form-group" name="condition2" value="1">
                            </div>

                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.case3') }}</label>
                            <div class="col-sm-10 col-form-label">
                                <input type="checkbox" class="form-group" name="condition3" value="1">
                            </div>
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.area') }}</label>
                            <div class="col-sm-10 col-form-label">
                                <input type="checkbox" class="form-group" name="has_area" value="1">
                            </div>

                            <label for="example-text-input"
                                class="col-sm-2 col-form-label">{{ __('form.industry') }}</label>
                            <div class="col-sm-10 col-form-label">
                                <input type="checkbox" class="form-group" name="has_industries" value="1">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.busCate1') }}</label>
                            <div class="col-sm-10 col-form-label">
                                @include('backend.components.radio_association', [ 
                                    'setting'=>$setting['business_category_1_id'],                                   
                                    'name' => 'business_category_1_id'
                                ])
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.busCate1') }}</label>
                            <div class="col-sm-10 col-form-label business_category_2_id" id="business_category_2_id">
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{ __('form.status') }}</label>
                            <div class="col-sm-10 col-form-label">
                                <input type="checkbox" class="form-group" name="status" value="1">
                            </div>
                        </div>

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
@endsection
