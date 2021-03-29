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
    <!-- content-with-photo4 block -->
    {{-- <section class="w3l-content-with-photo-4">
        <div id="content-with-photo4-block" class="pt-5">
            <div class="container py-md-5">
                <div class="cwp4-two row">
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <img src="{{ asset($specialized->image) }}"
                            width="100%" height="auto" class="img-fluid" alt="" />
                        <hr>
                        <img src=" {{ asset($specialized->image2) }}"
                            width="100%" height="auto" class="img-fluid" alt="" />
                    </div>
                    <div class="cwp4-text col-lg-6">
                                <h2 id="titleqtks">{{ $specialized->name }}</h2>
                                <p id="des"> {!! $specialized->intro !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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
                            <img class="img-fluid rounded" src="{{ asset($item->image) }}"
                                alt="">
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
            <h5 class="modal-title text-light">Lý lịch khoa học tóm tắt - {{$item->position}} {{$item->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                {!!$item->intro!!}
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
