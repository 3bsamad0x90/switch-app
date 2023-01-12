@extends('AdminPanel.layouts.master')
@section('content')


    <!-- Bordered table start -->
    @error('serial_number')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror()
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$title}}</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-2">
                        <thead class="text-center">
                            <tr>
                                <th>الرقم</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @forelse($SerialNumbers as $SerialNumber)
                            <tr id="row_{{ $SerialNumber->id }}">
                                <td>
                                    {{$SerialNumber['serial_number']}}
                                </td>
                                <td class="text-center">
                                    <a href="javascript:;" data-bs-target="#editSerialNumber{{$SerialNumber->id}}" data-bs-toggle="modal" class="btn btn-icon btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.edit')}}">
                                        <i data-feather='edit'></i>
                                    </a>
                                    <?php $delete = route('admin.SerialNumbers.delete',['id'=>$SerialNumber->id]); ?>
                                    <button type="button" class="btn btn-icon btn-danger" onclick="confirmDelete('{{$delete}}','{{$SerialNumber->id}}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.delete')}}">
                                        <i data-feather='trash-2'></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-3 text-center ">
                                        <h2>لا يوجد أي بيانات لعرضها الآن</h2>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @foreach($SerialNumbers as $SerialNumber)
                    <div class="modal fade text-md-start" id="editSerialNumber{{$SerialNumber->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">{{trans('common.edit')}}</h1>
                                    </div>
                                    {{Form::open(['url'=>route('admin.SerialNumbers.update',['id'=>$SerialNumber->id]), 'id'=>'editSerialNumberForm', 'class'=>'row gy-1 pt-75'])}}
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="serial_number">الرقم التسلسلي</label>
                                            {{Form::text('serial_number',$SerialNumber->serial_number,['id'=>'serial_number', 'class'=>'form-control'])}}
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


                {{-- {{ $SerialNumbers->links('vendor.pagination.default') }} --}}


            </div>
        </div>
    </div>
    <!-- Bordered table end -->



@stop

@section('page_buttons')
    <a href="javascript:;" data-bs-target="#createSerialNumber" data-bs-toggle="modal" class="btn btn-primary">
        {{trans('common.CreateNew')}}
    </a>

    <div class="modal fade text-md-start" id="createSerialNumber" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">{{trans('common.CreateNew')}}</h1>
                    </div>
                    {{Form::open(['url'=>route('admin.SerialNumbers.store'), 'id'=>'createSerialNumberForm', 'class'=>'row gy-1 pt-75'])}}
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="serial_number">الرقم التسلسلي</label>
                            {{Form::text('serial_number','',['id'=>'serial_number', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" class="btn btn-primary me-1">حفظ التغييرات</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                إالغاء
                            </button>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop
