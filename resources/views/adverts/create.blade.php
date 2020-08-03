@extends('layouts.admin')
@push('styles')
    <link href="{{asset('cropper/cropper.css')}}" rel="stylesheet" />
    @endpush
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Добавить: {{\App\AdvertTypes::getTypeList()[$type]}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">/</li>
        </ol>
        <div class="card mb-4">

            <form method="POST" action="{{ route('adverts.store') }}" role="form" enctype="multipart/form-data" id="advert-create-form">
                @csrf
                @method('POST')



            <div class="card-body">
                   <div class="row">
                       @if($errors->any())
                           <div class="col-md-12">
                               <div class="alert alert-danger">
                                       {{ implode('', $errors->all(':message')) }}
                               </div>
                           </div>
                           @endif
                       <div class="col-md-6">
                           <input type="hidden" value="{{$type}}" name="advert_types_id" id="advert_types_id">

                           <input type="text" name="title" id="title" class="form-control  @error('title') is-invalid @enderror" required placeholder="Название рекламы" autocomplete="title" autofocus>

                       </div>
                           <div class="col-md-12"><br></div>
                           <div class="col-md-6">
                               <input type="text" name="link" id="title" class="form-control  @error('link') is-invalid @enderror"  placeholder="Ссылка рекламы" autocomplete="link" autofocus>
                           </div>
                       <div class="col-md-12"><br></div>
                       <div class="col-md-6">
                           <input type="file" class="" id="input" name="file">


                       </div>
                   </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
            </form>

        </div>
    </div>
@endsection
@push('scripts')

@endpush
