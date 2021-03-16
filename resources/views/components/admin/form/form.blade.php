@props(['cancelLink', 'submitLink'])

<form id="form" {{ $attributes }} enctype="multipart/form-data" role="form" action="{{ $submitLink }}">
    @csrf
    <div class="card card-primary card-outline">
        <div class="card-header p-2">
            <button class="btn btn-info btn-sm" type="submit" name="submit"><i class="fas fa-save"></i> Thêm</button>
            <a href="{{ $cancelLink }}" class="btn btn-danger btn-sm"><i class="fas fa-window-close"></i> Hủy bỏ</a>
        </div>
        <div class="card-body">
            <div class="row">
                {{ $slot }}
            </div>
        </div>
</form>
