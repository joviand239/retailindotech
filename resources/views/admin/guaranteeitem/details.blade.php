@extends('cms.layouts.authorized')

@section('headerCustom')
    @php
        $id = 0;
        if (!empty($model) && !empty($model->getKey())) $id = $model->getKey();

        if(empty($id)) $title = getPrefixTitleDetails() . ' ' . $model::getTitleDetails();
        else $title = $model::getTitleDetails();

        $formUrl = $model->getUrlDetails(['id' => $id]);
        $cancelUrl = $model->getUrlIndex();

        $language = '';
    @endphp
@endsection

@section('button')

    @include('cms.form.button')

@endsection

@section('content')

    @include('cms.form.errorbox')

    <form id="form" action="{!! route('admin.guaranteeitem-save', ['guaranteeId' => @$guaranteeId, 'guaranteeItemId' => @$id]) !!}" class="create-project form-horizontal" method="POST"  enctype="multipart/form-data">

        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $model->getTitleDetails() }}</div>
                    <div class="card-body">
                        <div class="row">

                            @include('cms.form.section')


                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label class="control-label">List Serial Number</label>
                                    <p class="control-label-help">(gunakan ',' sebagai pemisah antara serial number, tanpa spasi dan enter)</p>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="listSerialNumber">@foreach($model->itemSerial as $key => $item){!! $item->serialNumber !!}{!! ($key+1 != count($model->itemSerial)) ? ',' : '' !!}@endforeach</textarea>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="col-md-9 col-md-offset-3">
                                    <a class="btn btn-default" href="{!! route('admin.guarantee', ['id' => @$guaranteeId]) !!}">Cancel</a>
                                    @if( !(count($model::FORM_DISABLED) == 1 && $model::FORM_DISABLED[0] == 'ALL') )<button class="btn btn-primary submitButton" type="button">Submit</button> @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>


@endsection

