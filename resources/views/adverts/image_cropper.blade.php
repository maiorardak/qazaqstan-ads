@extends('layouts.admin')
@push('styles')
    <link href="{{asset('cropper/cropper.css')}}" rel="stylesheet" />
    <link href="{{asset('cropper/main.css')}}" rel="stylesheet" />
@endpush
@section('content')
       <!--[if lt IE 9]>
<div class="alert alert-warning alert-dismissible fade show m-0 rounded-0" role="alert">
    You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<![endif]-->
    <div class="container-fluid">
        <h1 class="mt-4">Отредактировать изображение</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">/</li>
        </ol>
        <!-- Content -->
        <div class="row">
            <div class="col-md-9">
                <!-- <h3>Demo:</h3> -->
                <div class="docs-demo">
                    <div class="img-container">
                        <img src="{{asset('upload/'.$advert->file_hash)}}" alt="Picture">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- <h3>Preview:</h3> -->
                <div class="docs-preview clearfix">
                    <div class="img-preview preview-lg"></div>
                    <div class="img-preview preview-md"></div>
                    <div class="img-preview preview-sm"></div>
                    <div class="img-preview preview-xs"></div>
                </div>

                <!-- <h3>Data:</h3> -->
                <div class="docs-data">
                    <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataX">X</label>
            </span>
                        <input type="text" class="form-control" id="dataX" placeholder="x">
                        <span class="input-group-append">
              <span class="input-group-text">px</span>
            </span>
                    </div>
                    <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataY">Y</label>
            </span>
                        <input type="text" class="form-control" id="dataY" placeholder="y">
                        <span class="input-group-append">
              <span class="input-group-text">px</span>
            </span>
                    </div>
                    <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataWidth">Ширина</label>
            </span>
                        <input type="text" class="form-control" id="dataWidth" placeholder="width">
                        <span class="input-group-append">
              <span class="input-group-text">px</span>
            </span>
                    </div>
                    <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataHeight">Высота</label>
            </span>
                        <input type="text" class="form-control" id="dataHeight" placeholder="height">
                        <span class="input-group-append">
              <span class="input-group-text">px</span>
            </span>
                    </div>
                    <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataRotate">Rotate</label>
            </span>
                        <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                        <span class="input-group-append">
              <span class="input-group-text">deg</span>
            </span>
                    </div>
                    <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataScaleX">ScaleX</label>
            </span>
                        <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                    </div>
                    <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataScaleY">ScaleY</label>
            </span>
                        <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                    </div>
                </div>

            </div>
        </div>
        <div class="row" id="actions">
            <div class="col-md-9 docs-buttons">
                <!-- <h3>Toolbar:</h3> -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
            <span class="docs-tooltip" data-toggle="tooltip" title="Перемешать">
              <span class="fa fa-arrows-alt"></span>
            </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="Обрезать">
              <span class="fa fa-crop-alt"></span>
            </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="Увеличить">
              <span class="fa fa-search-plus"></span>
            </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="Уменшить">
              <span class="fa fa-search-minus"></span>
            </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="На лево">
              <span class="fa fa-arrow-left"></span>
            </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="На право">
              <span class="fa fa-arrow-right"></span>
            </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
            <span class="docs-tooltip" data-toggle="tooltip" title="Вверх">
              <span class="fa fa-arrow-up"></span>
            </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
            <span class="docs-tooltip" data-toggle="tooltip" title="Вниз">
              <span class="fa fa-arrow-down"></span>
            </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="Повернуть на лево">
              <span class="fa fa-undo-alt"></span>
            </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="Повернуть на право">
              <span class="fa fa-redo-alt"></span>
            </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
            <span class="docs-tooltip" data-toggle="tooltip" title="Растенуть горизонтально">
              <span class="fa fa-arrows-alt-h"></span>
            </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
            <span class="docs-tooltip" data-toggle="tooltip" title="Растенуть вертикально">
              <span class="fa fa-arrows-alt-v"></span>
            </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="Выполнить обрезать">
              <span class="fa fa-check"></span>
            </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
            <span class="docs-tooltip" data-toggle="tooltip" title="Очистить">
              <span class="fa fa-times"></span>
            </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
            <span class="docs-tooltip" data-toggle="tooltip" title="Сбросить">
              <span class="fa fa-sync-alt"></span>
            </span>
                    </button>

                </div>

                <div class="btn-group btn-group-crop">
                    <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-id="{{$advert->id}}"  data-token="{{csrf_token()}}" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="Обрезать и сохранить результат">
             <i class="fa fa-save mr-2"></i>Сохранить
            </span>
                    </button>
                    <button type="button" class="btn btn-info" data-method="getCroppedCanvas" data-id="{{$advert->id}}" data-token="{{csrf_token()}}" data-option="{ &quot;width&quot;: 728, &quot;height&quot;: 90 }">
            <span class="docs-tooltip" data-toggle="tooltip"  title="Обрезать и сохранить результат:размер 728X90">
              728&times;90
            </span>
                    </button>

                </div>

                <!-- Show the cropped image in modal -->
                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="getCroppedCanvasTitle">Результат</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                {{--<a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>--}}
                                <!--<a class="btn btn-primary" id="save_cropped_image" data-method="saveCroppedImage" href="javascript:void(0);" data-id="{{$advert->id}}"></a>-->


                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->

            </div><!-- /.docs-buttons -->

            <div class="col-md-3 docs-toggles">
                <!-- <h3>Toggles:</h3> -->
                <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">
                        <span class="docs-tooltip" data-toggle="tooltip" title="соотношениеCторон: 16 / 9">
              16:9
            </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1.3333333333333333">
                        <span class="docs-tooltip" data-toggle="tooltip" title="соотношениеCторон: 4 / 3">
              4:3
            </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1">
                        <span class="docs-tooltip" data-toggle="tooltip" title="соотношениеCторон: 1 / 1">
              1:1
            </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="0.6666666666666666">
                        <span class="docs-tooltip" data-toggle="tooltip" title="соотношениеCторон: 2 / 3">
              2:3
            </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
                        <span class="docs-tooltip" data-toggle="tooltip" title="соотношениеCторон: NaN">
              Free
            </span>
                    </label>
                </div>

                <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                        <span class="docs-tooltip" data-toggle="tooltip" title="Режим просмотра 0">
              VM0
            </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                        <span class="docs-tooltip" data-toggle="tooltip" title="Режим просмотра 1">
              VM1
            </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                        <span class="docs-tooltip" data-toggle="tooltip" title="Режим просмотра 2">
              VM2
            </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                        <span class="docs-tooltip" data-toggle="tooltip" title="Режим просмотра 3">
              VM3
            </span>
                    </label>
                </div>

            </div><!-- /.docs-toggles -->
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('cropper/cropper.js')}}"></script>
    <script src="{{asset('cropper/main.js')}}"></script>
@endpush
