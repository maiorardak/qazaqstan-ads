@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Список</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">/</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatable-adverts" class="table table-bordered table-striped">

                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var table=$('#datatable-adverts').DataTable({
            responsive: true,
            searching:false,
            lengthChange:false,
            pageLength: 50,
            processing: true,
            serverSide: true,
            language:{
                "decimal":        "",
                "emptyTable":     "Данные отсутствуют",
                "info":           "Показано с _START_ до _END_ из _TOTAL_ записей",
                "infoEmpty":      "Показано с 0 до 0 из 0 записей",
                "infoFiltered":   "(отфильтровано из _MAX_ всего записей)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     "Показать _MENU_ записей",
                "loadingRecords": "Загружается...",
                "processing":     "В процессе...",
                "search":         "Поиск:",
                "zeroRecords":    "Совпадающих записей не найдено",
                "paginate": {
                    "first":      "Первый",
                    "last":       "Последний",
                    "next":       "Следующий",
                    "previous":   "Придедущий"
                },
                "aria": {
                    "sortAscending":  ": активировать для сортировки столбца по возрастанию",
                    "sortDescending": ": активировать для сортировки столбца по убыванию"
                }
            },
            ajax: {
                url:"{{route('adverts.ajax')}}",
                method:'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },

            },
            columns:[
                {data: "id",
                    title:'#'},
                {data: "title",
                title:'Название'},
                {data:'type.name',
                title:'Тип'},
                {data:function (raw) {
                    var src="{{asset('upload/')}}";
                        src+='/'+raw.file_hash;

                        if(jQuery.inArray(raw.file_ext, ['jpg','jpeg','png','bmp']) !== -1){
                            return '<img src="'+src+'" width="100px"/>';
                        }
                        return '<video controls  width="360" height="150"> <source src="'+src+'" ></video>';


                    },
                    title:'Файл'},
                {
                    data:function(raw){


                        return "<a class='btn text-danger' href='/adverts/destroy/"+raw.id+"' onclick='return confirm(\"Вы уверены что хотите удалить этот запись?\");'><i class='fa fa-trash'></i></a>";
                    },

                },
                {
                    data:function(raw){
                        if(jQuery.inArray(raw.file_ext, ['jpg','jpeg','png','bmp']) !== -1){
                            return "<a class='btn text-primary' href='/adverts/image-crop/"+raw.id+"' title='Отредактировать изображение'><i class='fa fa-scissors'></i></a>";

                        }
                        return '';
                    },

                }


            ],
        });

    </script>
@endpush
