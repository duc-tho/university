{{--
    int:col số cột
    string:fieldName là giá trị đại diện cho các trường bao gồm id, name, for, error .... (nói cung là trong db là gì thì trường này là vậy)
    string:label tiêu đề của trường này
    bool:required trường này có bắt buộc hay không nếu có sẽ tạo ra dấu * sau label
--}}
@props(['col', 'fieldName', 'label', 'required'])

<div class="form-group col-sm-{{ $col }} px-3">
    <label for="{{ $fieldName }}">{{ $label }}{!! $required ? '<span class="text-danger">*</span>' : '' !!}</label>
    <select class="form-control custom-select @error($fieldName) is-invalid @enderror" name="{{ $fieldName }}" id="{{ $fieldName }}">
        {{ $slot }}
    </select>
    <div class="invalid-feedback">
        @error($fieldName)
        {{ $message }}
        @enderror
    </div>
</div>
