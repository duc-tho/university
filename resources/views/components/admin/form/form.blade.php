@props(['cancelLink', 'submitLink', 'deleteLink'])

<form id="form" {{ $attributes }} enctype="multipart/form-data" role="form" action="{{ $submitLink ?? '#' }}">
    @csrf
    <div class="card card-primary card-outline">
        <div class="card-header p-2">
            <div class="d-flex justify-content-between px-3">
                <div>
                    <button class="btn btn-info btn-sm" type="submit" name="submit"><i class="fas fa-save"></i> Lưu</button>
                    <a href="{{ $cancelLink ?? 'javascript:' }}" class="btn btn-secondary btn-sm"><i class="fas fa-backspace"></i> Hủy bỏ</a>
                </div>
                @if ($deleteLink ?? false)
                <div>
                    <a href="{{ $deleteLink ?? 'javascript:' }}" onclick="return confirm('Bạn có chắc chắn muốn xóa !')" class="btn btn-danger btn-sm"><i class="fas fa-trash" ></i> Xóa</a>
                </div>
                @endif
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{ $slot }}
            </div>
        </div>
</form>
