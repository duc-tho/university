@props(['col', 'fieldName', 'label', 'required', 'data', 'value'])

<div class="form-group col-md-{{ $col }} px-3">
    <label class="w-100" for="{{ $fieldName }}">{{ $label }}{!! $required ? '<span class="text-danger">*</span>' : '' !!}</label>
    <div class="w-100">
        <textarea id="{{ $fieldName }}" name="{{ $fieldName }}" data-name="tinymce">
            {{ old($fieldName) ?? $data[$fieldName] ?? $value ?? ""  }}
        </textarea>
        <div class="invalid-feedback">
            @error($fieldName)
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
