@props(['col', 'fieldName', 'label', 'required', 'data'])

<div class="form-group col-md-{{ $col }} px-3">
    <label class="w-100" for="{{ $fieldName }}">{{ $label }}{!! $required ? '<span class="text-danger">*</span>' : '' !!}</label>
    <div class="w-100 custom-file">
        <input id="{{ $fieldName }}" type="file" name="{{ $fieldName }}" class="form-control custom-file-input" onchange="changeImg(this)">
        <label class="custom-file-label" for="inputImageFile" style="white-space: nowrap; overflow: hidden;">Bấm vào để chọn tệp</label>
        <div class="invalid-feedback">
            @error($fieldName)
            {{ $message }}
            @enderror
        </div>
    </div>
    <label for="{{ $fieldName }}" style="width: 100% !important;">
        <img id="preview_image" class="thumbnail" width="100%" src="{{ asset($data[$fieldName] ?? '/dist/img/imgdefault.png') }}">
    </label>
</div>
