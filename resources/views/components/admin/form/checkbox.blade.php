@props(['col', 'fieldName', 'label', 'required', 'labelContent'])

<div class="form-check col-md-{{ $col }}">
    <label class="w-100" for="{{ $fieldName }}">{{ $label }}{!! $required ? '<span class="text-danger">*</span>' : '' !!}</label>
    <div class="custom-control custom-switch form-control @error($fieldName) is-invalid @enderror">
        <input type="checkbox" id="{{ $fieldName }}" class="custom-control-input" name="{{ $fieldName }}" {{ old($fieldName) ? "checked" : ""  }}>
        <label class="custom-control-label ml-3" for="status" style="cursor: pointer;">{{ $labelContent }}</label>
        <div class="invalid-feedback">
            @error($fieldName)
            {{ $message }}
            @enderror
        </div>
    </div>
</div>
