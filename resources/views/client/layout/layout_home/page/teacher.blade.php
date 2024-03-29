@extends('client.layout.layout_kdl.index')
@section('title', 'Ngành QTKS')
@section('main')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Giảng Viên {{ $faculty['name'] }}</h2>
            <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Giảng Viên</p>
        </div>
    </div>
</section>

<section class="teams-1">
    <section class="teams text-center py-5" id="team">
        <div class="container py-xl-5 py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Giảng Viên {{ $faculty->name }}</h3>
            </div>
            <div class="row inner-sec-w3ls-w3pvt-aminfo pt-5 mt-3">
                @foreach ($teacher as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="team-grid text-center">
                        <div class="team-img">
                            <img class="img-fluid rounded" src="{{ asset($item->image) }}" alt="">
                        </div>
                        <div class="team-info">
                            <div>
                                <button data-model-id="{{ $item->id }}" class="btn btn-primary">Xem Chi Tiết</button>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
@foreach ($teacher as $item)
<div id="teacher-modal" data-model-id="{{ $item->id }}" class="modal">
    <div class="modal-content p-0">
        <div class="modal-header" style="background: #067186;">
            <h5 class="modal-title text-light">Lý lịch khoa học tóm tắt</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="h3" style="color: #067186;">THÔNG TIN</h3>
                </div>
                <div class="col-lg-3 my-3">
                    <img src="{{ asset($item->image) }}" class="w-100 rounded" alt="">
                </div>
                <div class="col-lg-9 teacher-info my-3">
                    <h4>{{ $item->name }}</h4>
                    <p>{!! $item->evaluate !!}</p>
                    <h3 class="h3" style="color: #067186;">Giới thiêu</h3>
                    {!! $item['intro'] ?? '' !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<script>
    $(document).ready(function() {
        // Get all modal
        let allModal = document.querySelectorAll("div[data-model-id]");

        // Get all button that opens the modal
        let allBtn = document.querySelectorAll("button[data-model-id]");

        if(allModal && allBtn) {
            allModal.forEach(modal => {
            let closeModalBtn = modal.querySelector('.close');

            closeModalBtn.onclick = function() {
                modal.style.display = "none";
            }

            let modalBtn = Array.from(allBtn).filter(i => i.attributes['data-model-id'].value == modal.attributes['data-model-id'].value)[0];

            modalBtn.onclick = function() {
                modal.style.display = "block";
            }
        });
        }
    });
</script>
@stop
