@props(['col', 'fieldName', 'label', 'required', 'readonly'])
<div class="form-group col-sm-{{ $col }} px-3">
    <label for="{{ $fieldName }}">{{ $label }}{!! $required ? '<span class="text-danger">*</span>' : '' !!}</label>
    <select class="select2bs4 form-control custom-select @error($fieldName) is-invalid @enderror" name="{{ $fieldName }}[]" multiple="multiple" id="{{ $fieldName }}">
        {{ $slot }}
    </select>
    <div class="invalid-feedback">
        @error($fieldName)
        {{ $message }}
        @enderror
    </div>
</div>
@if ($readonly ?? false)
<script>
    $(document).ready(function () {
        $('#{{ $fieldName }}').select2({ disabled: true });
    });
</script>
@endif
