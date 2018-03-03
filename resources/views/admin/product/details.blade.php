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

    <form id="form" action="{{ $formUrl }}" class="create-project form-horizontal" method="POST"  enctype="multipart/form-data">

        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $model->getTitleDetails() }}</div>
                    <div class="card-body">
                        <div class="row">

                            @include('cms.form.section')

                            @yield('button')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(@$id != 0)
            <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-add ">
                        <span>Category</span>
                        <a type="button" class="btn btn-success btn-xs pull-right" href="{!! route('admin.category-details', ['productId' => $id, 'categoryId' => 0]) !!}">
                            <i class="icon fa fa-plus"></i>
                            <span class="help-text">Create Category</span>
                        </a>
                    </div>
                    <div class="card-body no-padding">
                        <table class="datatable table table-striped primary">
                            <thead>
                            <tr>
                                @foreach($modelCategory::INDEX_FIELD as $field)
                                    <th>{{ keyToLabel($field) }}</th>
                                @endforeach
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    @foreach($modelCategory::INDEX_FIELD as $field)
                                        <td>{{ $item->getValue($field, '', '') }}</td>
                                    @endforeach
                                    <td class="text-center td-button">
                                        <a href="{!! route('admin.category-details', ['productId' => $id, 'categoryId' => @$item->id]) !!}">
                                            <button type="button" class="btn btn-default btn-xs"> Edit Details</button>
                                        </a>
                                        <button type="button" class="btn btn-default btn-xs delete-button-modal" data-toggle="modal" data-target="#modal-delete-alert" data-url="{!! route('admin.category-delete', ['productId' => $id, 'categoryId' => @$item->id]) !!}"> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif






    </form>


@endsection

