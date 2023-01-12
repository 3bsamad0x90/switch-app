@extends('AdminPanel.layouts.master')
@section('content')


    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$title}}</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-2">
                        <thead>
                            <tr>
                                <th>{{trans('common.name')}}</th>
                                <th class="text-center">{{trans('common.photo')}}</th>
                                <th class="text-center">{{trans('common.books')}}</th>
                                <th class="text-center">{{trans('common.status')}}</th>
                                <th class="text-center">{{trans('common.actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($writers as $writer)
                            <tr id="row_{{$writer->id}}">
                                <td>
                                    {{$writer['name_ar']}}<br>
                                    {{$writer['name_en']}}<br>
                                    {{$writer['name_fr']}}
                                </td>
                                <td class="text-center">
                                    <span class="avatar mb-2">
                                        <img class="round" src="{{$writer->photoLink()}}" alt="avatar" height="90" width="90">
                                    </span>
                                </td>
                                <td class="text-center">
                                    {{ $writer->books()->count() }}
                                </td>
                                <td class="text-center">{!!$writer->statusText()!!}</td>
                                <td class="text-center">
                                    <a href="{{route('admin.writers.books',$writer->id)}}" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.books')}}">
                                        <i data-feather='list'></i>
                                    </a>
                                    <a href="javascript:;" data-bs-target="#editwriter{{$writer->id}}" data-bs-toggle="modal" class="btn btn-icon btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.edit')}}">
                                        <i data-feather='edit'></i>
                                    </a>
                                    <?php $delete = route('admin.writers.delete',['id'=>$writer->id]); ?>
                                    <button type="button" class="btn btn-icon btn-danger" onclick="confirmDelete('{{$delete}}','{{$writer->id}}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.delete')}}">
                                        <i data-feather='trash-2'></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-3 text-center ">
                                        <h2>{{trans('common.nothingToView')}}</h2>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @foreach($writers as $writer)
                    <div class="modal fade text-md-start" id="editwriter{{$writer->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">{{trans('common.edit')}}</h1>
                                    </div>
                                    {{Form::open(['url'=>route('admin.writers.update',['id'=>$writer->id]), 'files'=>'true', 'id'=>'editwriterForm', 'class'=>'row gy-1 pt-75'])}}
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-12 text-center">
                                                <span class="avatar mb-2">
                                                    <img class="round" src="{{$writer->photoLink()}}" alt="avatar" height="90" width="90">
                                                </span>
                                                <div class="file-loading"> 
                                                    <input class="files" name="photo" type="file">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="name_ar">{{trans('common.name_ar')}} <span class="text-danger">*</span></label>
                                            {{Form::text('name_ar',$writer->name_ar,['id'=>'name_ar', 'class'=>'form-control','required'])}}
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="name_en">{{trans('common.name_en')}}</label>
                                            {{Form::text('name_en',$writer->name_en,['id'=>'name_en', 'class'=>'form-control'])}}
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="name_fr">{{trans('common.name_fr')}}</label>
                                            {{Form::text('name_fr',$writer->name_fr,['id'=>'name_fr', 'class'=>'form-control '])}}
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="bio_ar">{{trans('common.bio_ar')}}</label>
                                            {{Form::textarea('bio_ar',$writer->bio_ar,['id'=>'bio_ar', 'class'=>'form-control editor_ar'])}}
                                        </div> 
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="bio_en">{{trans('common.bio_en')}}</label>
                                            {{Form::textarea('bio_en',$writer->bio_en,['id'=>'bio_en', 'class'=>'form-control editor_en'])}}
                                        </div> 
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="bio_fr">{{trans('common.bio_fr')}}</label>
                                            {{Form::textarea('bio_fr',$writer->bio_fr,['id'=>'bio_fr', 'class'=>'form-control editor_en'])}}
                                        </div>  
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="country">{{trans('common.country')}}</label>
                                            {{Form::select('country',getCountriesList(session()->get('Lang'),'id'),$writer->country,['id'=>'country','class'=>'form-control selectpicker','data-live-search'=>'true'])}}
                                        </div>         
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="active">{{trans('common.active')}}</label>
                                            <div class="form-check form-check-success form-switch">
                                                {{Form::checkbox('active','1',$writer->active != '0' ? true : false,['id'=>'active', 'class'=>'form-check-input'])}}
                                                <label class="form-check-label" for="active"></label>
                                            </div>
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
                @endforeach


                {{ $writers->links('vendor.pagination.default') }}


            </div>
        </div>
    </div>
    <!-- Bordered table end -->



@stop

@section('page_buttons')
    <a href="javascript:;" data-bs-target="#createwriter" data-bs-toggle="modal" class="btn btn-sm btn-primary">
        {{trans('common.CreateNew')}}
    </a>

    <div class="modal fade text-md-start" id="createwriter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50" id="full-container">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">{{trans('common.CreateNew')}}</h1>
                    </div>
                    {{Form::open(['url'=>route('admin.writers.store'), 'files'=>'true', 'id'=>'createwriterForm', 'class'=>'row gy-1 pt-75'])}}
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12 text-center">
                                <div class="file-loading"> 
                                    <input class="files" name="photo" type="file">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <label class="form-label" for="name_ar">{{trans('common.name_ar')}} <span class="text-danger">*</span></label>
                            {{Form::text('name_ar','',['id'=>'name_ar', 'class'=>'form-control','required'])}}
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="name_en">{{trans('common.name_en')}}</label>
                            {{Form::text('name_en','',['id'=>'name_en', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="name_fr">{{trans('common.name_fr')}}</label>
                            {{Form::text('name_fr','',['id'=>'name_fr', 'class'=>'form-control '])}}
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="bio_ar">{{trans('common.bio_ar')}}</label>
                            {{Form::textarea('bio_ar','',['id'=>'bio_ar', 'class'=>'form-control editor_ar'])}}
                        </div> 
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="bio_en">{{trans('common.bio_en')}}</label>
                            {{Form::textarea('bio_en','',['id'=>'bio_en', 'class'=>'form-control editor_en'])}}
                        </div> 
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="bio_fr">{{trans('common.bio_fr')}}</label>
                            {{Form::textarea('bio_fr','',['id'=>'bio_fr', 'class'=>'form-control editor_en'])}}
                        </div>  
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="country">{{trans('common.country')}}</label>
                            {{Form::select('country',getCountriesList(session()->get('Lang'),'id'),'',['id'=>'country','class'=>'form-control selectpicker','data-live-search'=>'true'])}}
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="active">{{trans('common.active')}}</label>
                            <div class="form-check form-check-success form-switch">
                                {{Form::checkbox('active','1',true,['id'=>'active', 'class'=>'form-check-input'])}}
                                <label class="form-check-label" for="active"></label>
                            </div>
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
    
    <a href="javascript:;" data-bs-target="#uploadWritersExcel" data-bs-toggle="modal" class="btn btn-primary btn-sm">
        {{trans('common.uploadWritersExcel')}}
    </a>

    <div class="modal fade text-md-start" id="uploadWritersExcel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">{{trans('common.uploadWritersExcel')}}</h1>
                    </div>
                    {{Form::open(['files'=>'true','url'=>route('admin.writers.store.excel'), 'id'=>'uploadWritersExcelForm', 'class'=>'row gy-1 pt-75'])}}
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="file">{{trans('common.file')}} <span class="text-danger">*</span></label>
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

@section('new_style')
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/vendors/css/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/vendors/css/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/vendors/css/editors/quill/quill.bubble.css')}}">
@stop

@section('scripts')
@stop