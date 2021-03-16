@props(['col', 'fieldName', 'label', 'required', 'placeholder', 'type', 'data'])

<div class="form-group col-md-{{ $col }} px-3">
    <label class="w-100" for="{{ $fieldName }}">{{ $label }}{!! $required ? '<span class="text-danger">*</span>' : '' !!}</label>
    <div class="w-100">
        <input type="{{ $type }}" id="{{ $fieldName }}" name="{{ $fieldName }}" class="form-control @error($fieldName) is-invalid @enderror" placeholder="{{ $placeholder }}" value="{{ old($fieldName) ?? $data[$fieldName] ?? ""  }}">
        <div class="invalid-feedback">
            @error($fieldName)
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
