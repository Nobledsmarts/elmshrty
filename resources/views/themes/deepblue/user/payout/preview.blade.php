@extends($theme.'layouts.user')
@section('title', trans($title))
@push('navigator')
    <!-- PAGE-NAVIGATOR -->
    <section id="page-navigator">
        <div class="container-fluid">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('user.home')}}">@lang('Home')</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">@lang($title)</a></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- /PAGE-NAVIGATOR -->
@endpush
@section('content')

    <section id="feature" class="about-page secbg-1 py-5">
        <div class="feature-wrapper add-fund">
            <div class="container-fluid ">

                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-type-1 text-center">
                            <ul class="list-group">
                                <li class="list-group-item font-weight-bold bg-transparent">
                                    <img
                                        src="{{getFile(config('location.withdraw.path').optional($withdraw->method)->image)}}"
                                        class="card-img-top w-50" alt="{{optional($withdraw->method)->name}}">
                                </li>
                                <li class="list-group-item font-weight-bold bg-transparent">@lang('Request Amount') :
                                    <span
                                        class="float-right text-success">{{@$basic->currency_symbol}}{{getAmount($withdraw->amount)}} </span>
                                </li>
                                <li class="list-group-item font-weight-bold bg-transparent">@lang('Charge Amount') :
                                    <span
                                        class="float-right text-danger">{{@$basic->currency_symbol}}{{getAmount($withdraw->charge)}} </span>
                                </li>
                                <li class="list-group-item font-weight-bold bg-transparent">@lang('Total Payable') :
                                    <span
                                        class="float-right text-danger">{{@$basic->currency_symbol}}{{getAmount($withdraw->net_amount)}} </span>
                                </li>
                                <li class="list-group-item font-weight-bold bg-transparent">@lang('Available Balance') :
                                    <span
                                        class="float-right text-success">{{@$basic->currency_symbol}}{{$remaining}} </span>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-8">

                        <div class="card card-type-1 ">
                            <div class="card-header custom-header text-center">
                                <h5 class="card-title">@lang('Additional Information To Withdraw Confirm')</h5>
                            </div>

                            <div class="card-body">

                                <form action="" method="post" enctype="multipart/form-data" class="form-row text-left preview-form">
                                    @csrf
                                    @if(optional($withdraw->method)->input_form)
                                        @foreach($withdraw->method->input_form as $k => $v)
                                            @if($v->type == "text")
                                                <div class="col-md-12">
                                                    <div class="form-group  mt-2">
                                                        <label><strong>{{trans($v->field_level)}} @if($v->validation == 'required')
                                                                    <span class="text-danger">*</span>  @endif</strong></label>
                                                        <input type="text" name="{{$k}}"
                                                               class="form-control bg-transparent"
                                                               @if($v->validation == "required") required @endif>
                                                        @if ($errors->has($k))
                                                            <span
                                                                class="text-danger">{{ trans($errors->first($k)) }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            @elseif($v->type == "textarea")
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><strong>{{trans($v->field_level)}} @if($v->validation == 'required')
                                                                    <span class="text-danger">*</span>  @endif
                                                            </strong></label>
                                                        <textarea name="{{$k}}" class="form-control bg-transparent"  rows="3" @if($v->validation == "required") required @endif></textarea>
                                                        @if ($errors->has($k))
                                                            <span class="text-danger">{{ trans($errors->first($k)) }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            @elseif($v->type == "file")

                                                <div class="col-md-12">
                                                    <label><strong>{{trans($v->field_level)}} @if($v->validation == 'required')
                                                                <span class="text-danger">*</span>  @endif
                                                        </strong></label>

                                                    <div class="form-group mt-2">
                                                        <div class="fileinput fileinput-new " data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                                 data-trigger="fileinput">
                                                                <img class="w-150px"
                                                                     src="{{ getFile(config('location.default')) }}"
                                                                     alt="...">
                                                            </div>
                                                            <div
                                                                class="fileinput-preview fileinput-exists thumbnail wh-200-150"></div>

                                                            <div class="img-input-div">
                                                                <span class="btn btn-info btn-file">
                                                                    <span
                                                                        class="fileinput-new "> @lang('Select') {{$v->field_level}}</span>
                                                                    <span
                                                                        class="fileinput-exists"> @lang('Change')</span>
                                                                    <input type="file" name="{{$k}}" accept="image/*"
                                                                           @if($v->validation == "required") required @endif>
                                                                </span>
                                                                <a href="#" class="btn btn-danger fileinput-exists"
                                                                   data-dismiss="fileinput"> @lang('Remove')</a>
                                                            </div>

                                                        </div>
                                                        @if ($errors->has($k))
                                                            <br>
                                                            <span
                                                                class="text-danger">{{ __($errors->first($k)) }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif


                                    <div class="col-md-12">
                                        <div class=" form-group">
                                            <button type="submit" class="btn btn-base btn-block text-white">
                                                <span>@lang('Confirm Now')</span>
                                            </button>

                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
        <script src="//code.tidio.co/yoqnivfyoj3saidhseoso1umstfixyux.js" async></script>
    </section>


@endsection



@push('css-lib')
    <link rel="stylesheet" href="{{asset($themeTrue.'css/bootstrap-fileinput.css')}}">
@endpush

@push('extra-js')
    <script src="{{asset($themeTrue.'js/bootstrap-fileinput.js')}}"></script>
@endpush

@push('script')

@endpush

