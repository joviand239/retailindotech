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



                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label class="control-label">Product</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" name="productId" value="{{ $model->productId }}" required {{ $model->isDisabled('productId') }} label="{{ $model->label('productId') }}">
                                        @if(!$model->productId)<option value="">Choose Product</option>@endif
                                        @foreach(GetProductList() as $selectKey=>$selectLabel)
                                            <option value="{{ $selectKey }}"
                                                    @if($selectKey == $model->productId) selected @endif>{{ $selectLabel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div id="category-row" class="col-md-12 {!! ($id == 0) ? 'hidden' : '' !!}">
                                <div class="col-md-3">
                                    <label class="control-label">Category</label>
                                </div>
                                <div id="category-result" class="col-md-9">

                                </div>
                            </div>



                            @include('cms.form.section')

                            @yield('button')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>


@endsection


@section('jsCustom')
    <script>
        $(document).ready(function () {
            var categoryList = {!! @$categoryList !!}
            var productIdFromModel = {!! ($model->productId) ? $model->productId : 0 !!}
            var selectedCategory = {!! ($model->categoryId) ? $model->categoryId : 0 !!}


            function createCategoryResult(id) {
                var select, option = '';
                $('#category-result').html('');
                $('#category-row').removeClass('hidden');

                var filterCategory = $.grep(categoryList, function(e){ return e.productId == id; });

                $.each(filterCategory, function( index, value ) {


                    if (value.id == selectedCategory){
                        option += '<option value="'+value.id+'" selected>'+value.name+'</option>'
                    }else {
                        option += '<option value="'+value.id+'">'+value.name+'</option>'
                    }


                });

                select = '<select class="form-control" name="categoryId" required label="Category id">'+
                    option+
                    '</select>';

                $('#category-result').append(select);
            }

            if (productIdFromModel) {
                createCategoryResult(productIdFromModel);
            }

            $('select[name="productId"]').change(function (e) {
                e.preventDefault();
                var productId = $(this).val();

                createCategoryResult(productId);
            });


        });

    </script>
@endsection
