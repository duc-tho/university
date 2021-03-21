@props(['col', 'fieldName', 'label', 'required', 'data', 'previewSrc'])

<div class="form-group col-md-{{ $col }} px-3">
    <label class="w-100" for="{{ $fieldName }}">{{ $label }}{!! $required ? '<span class="text-danger">*</span>' : '' !!}</label>
    <div class="w-100 custom-file">
        <input id="{{ $fieldName }}" type="file" name="{{ $fieldName }}" class="form-control custom-file-input" accept="video/*">
        <label class="custom-file-label" for="inputImageFile" style="white-space: nowrap; overflow: hidden;">Bấm vào để chọn tệp</label>
        <div class="invalid-feedback">
            @error($fieldName)
            {{ $message }}
            @enderror
        </div>
    </div>
    <video class="w-100" controls>
        <!--[if lte IE 8]>
        <EMBED SCR="TestMovie.avi" />
        <![endif]-->
        <source SRC="{{ asset($previewSrc) }}" TYPE="video/avi">
        <source SRC="{{ asset($previewSrc) }}" TYPE="video/ogg; codecs=" THEORA, VORBIS"">
        <source SRC="{{ asset($previewSrc) }}" TYPE="video/mp4; codecs=" AVC1.4D401E, MP4A.40.2"">
        <p>The video can't be played on this browser.</p>
    </video>
</div>
