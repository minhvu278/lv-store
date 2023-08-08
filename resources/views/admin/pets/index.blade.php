@extends('admin.layouts.app')

@section('content')
    @component('admin.components.content.common')
            <h1>Pets</h1>
            <div class="search  justify-content-between mt-3">
                <div class="d-flex justify-content-end align-items-start">
                    <button type="button" class="btn btn-success" id="btnAdd">
                        Create
                    </button>
                </div>
            </div>
            <form action="{{ route('admin.pets.change-data') }}" method="POST" id="formLabel"
                  enctype="multipart/form-data">
                @csrf
                @component('admin.components.table.index-custom')
                    <thead>
                    <tr>
                        <th>{{  __('admin/material-group.index.index_id') }}</th>
                        <th>{{  __('admin/label.index.name') }}</th>
                        <th>{{  __('admin/label.index.image') }}</th>
                        <th>{{  __('admin/label.index.description') }}</th>
                        <th class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @if ($labels->count())--}}
{{--                        @foreach ($labels as $item)--}}
                            <tr class="item-label">
                                <input type="hidden" class="item-id" value="">
                                <td>
                                    @include('admin.components.input.input_base', [
                                       'classWrapper' => 'w-75',
                                       'inputType' => 'text',
                                       'inputName' => '',
                                       'inputValue' =>  '',
                                       'inputClass' => 'field index-id',
                                       'readonly' => 'readonly',
                                    ])
                                </td>
                                <td>
                                    @include('admin.components.input.input_base', [
                                       'classWrapper' => 'w-100',
                                       'inputType' => 'text',
                                       'inputName' => '',
                                       'inputValue' =>  '',
                                       'inputClass' => 'field name'
                                    ])
                                </td>
{{--                                <td>--}}
{{--                                    @include('admin.components.input.input-file-image', [--}}
{{--                                        'fieldName' => "old_data[". $item->id ."][image]",--}}
{{--                                        'value' => empty($item->image) ? ''--}}
{{--                                            : Storage::url($item->image)--}}
{{--                                    ])--}}
{{--                                </td>--}}
                                <td>
                                    @include('admin.components.input.textarea', [
                                       'boxInputClass' => 'w-100',
                                       'inputType' => 'text',
                                       'inputName' => '',
                                       'inputValue' =>  '',
                                       'inputClass' => 'field description',
                                       'inputMaxLength' => 500,
                                       'rows' => 3,
                                    ])
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                    <span type="button" class="cursor-pointer btn-up">
                                        <i class="p-3 fa-solid fa-arrow-up"></i>
                                    </span>
                                        <span type="button" class="cursor-pointer btn-down">
                                        <i class="p-3 fa-solid fa-arrow-down"></i>
                                    </span>
                                        <span type="button" class="delete-item">
                                        <i class="p-3 fa-solid fa-xmark"></i>
                                    </span>
                                    </div>
                                </td>
                            </tr>
{{--                        @endforeach--}}
{{--                    @endif--}}
                    </tbody>
                @endcomponent
                <div class="mt-3 d-flex justify-content-center">
                    <input class="btn btn-primary" type="submit" value="{{ __('admin/material-group.buttons.submit') }}">
                </div>
            </form>
    @endcomponent
@endsection
