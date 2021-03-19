@props(['col', 'fieldName', 'label', 'required', 'labelContent', 'data', 'checked', 'readonly'])

<div class="form-check col-md-{{ $col }} px-3">
    <label class="w-100" for="{{ $fieldName }}">{{ $label }}{!! $required ? '<span class="text-danger">*</span>' : '' !!}</label>
    <div class="custom-control custom-switch form-control @error($fieldName) is-invalid @enderror">
        <input type="hidden" name="{{ $fieldName }}" value="off">
        <input type="checkbox" id="{{ $fieldName }}" class="custom-control-input" name="{{ $fieldName }}" {{ old($fieldName) ?? $data[$fieldName] ?? $checked ?? 0 ? "checked" : ""  }} {{ $readonly ?? false ? 'onclick=this.checked=!this.checked;' : '' }}>
        <label class="custom-control-label ml-3" for="{{ $fieldName }}" style="cursor: pointer;">{{ $labelContent }}</label>
        <div class="invalid-feedback">
            @error($fieldName)
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
