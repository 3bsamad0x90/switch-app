@extends('PublisherPanel.layouts.master')
@section('content')

{{Form::open(['url'=>route('publisher.books.booksBulkDelete'),'id'=>'assignClientsForm'])}}

    <!-- Bordered table start -->

    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        {{$title}}
                        <br>
                        <small>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="selectAll" />
                                <label class="form-check-label" for="selectAll"> {{trans('common.Select All')}} </label>
                            </div>
                        </small>
                    </h4>
                    <button type="submit" class="btn btn-danger btn-sm me-1 float-right">
                        {{trans('common.delete')}}
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-2">
                        <thead>
                            <tr>
                                <th>{{trans('common.name')}}</th>
                                <th>{{trans('common.writer')}}</th>
                                <th>{{trans('common.Section')}}</th>
                                <th>{{trans('common.language')}}</th>
                                <th class="text-center">{{ trans('common.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                                <tr id="row_{{$book->id}}">
                                    <td class="text-wrap">
                                        <div class="form-check me-3 me-lg-1">
                                            <input class="form-check-input" type="checkbox" id="book{{$book->id}}" name="books[]" value="{{$book->id}}" />
                                            <label class="form-check-label" for="book{{$book->id}}">
                                                {{$book->name_ar}}<br>
                                                {{$book->name_en}}<br>
                                                {{$book->name_fr}}
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        {{$book->writer['name_'.session()->get('Lang')] ?? ''}}
                                    </td>
                                    <td>
                                        {{$book->section['name_'.session()->get('Lang')] ?? ''}}
                                    </td>
                                    <td>
                                        {{$book->languageText()}}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('publisher.books.edit', ['id' => $book->id]) }}"
                                            class="btn btn-icon btn-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="{{ trans('common.edit') }}">
                                            <i data-feather='edit'></i>
                                        </a>
                                        <?php $delete = route('publisher.books.delete', ['id' => $book->id]); ?>
                                        <button type="button" class="btn btn-icon btn-danger"
                                            onclick="confirmDelete('{{ $delete }}','{{ $book->id }}')">
                                            <i data-feather='trash-2'></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="22" class="p-3 text-center ">
                                        <h2>{{ trans('common.nothingToView') }}</h2>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{$books->links('vendor.pagination.default') }}


            </div>
        </div>
    </div>
    <!-- Bordered table end -->
{{Form::close()}}



@stop

@if(getSettingValue('stopAllPublishers') == 0)
    @section('page_buttons')
        <a href="{{ route('publisher.books.create') }}" class="btn btn-primary btn-sm">
            {{ trans('common.CreateNew') }}
        </a>
        <a href="javascript:;" data-bs-target="#uploadBooksExcel" data-bs-toggle="modal" class="btn btn-primary btn-sm">
            {{trans('common.uploadBooksExcel')}}
        </a>

        <div class="modal fade text-md-start" id="uploadBooksExcel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                            <h1 class="mb-1">{{trans('common.uploadBooksExcel')}}</h1>
                        </div>
                        {{Form::open(['files'=>'true','url'=>route('publisher.books.store.excel'), 'id'=>'uploadBooksExcelForm', 'class'=>'row gy-1 pt-75'])}}
                            <div class="col-12 col-md-12">
                                <label class="form-label" for="file">{{trans('common.file')}}</label>
                                <div class="file-loading"> 
                                    <input class="files" name="file" type="file">
                                </div>
                                @if($errors->has('file'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('file') }}</b>
                                    </span>
                                @endif
                            </div>
                                        
                            <div class="col-12 text-center mt-2 pt-50">
                                <button type="submit" class="btn btn-primary me-1">{{trans('common.Save changes')}}</button>
                                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                    {{trans('common.Cancel')}}
                                </button>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    @stop
@endif


@section('scripts')
<script src="{{asset('AdminAssets/app-assets/js/scripts/pages/modal-add-role.js')}}"></script>
@stop