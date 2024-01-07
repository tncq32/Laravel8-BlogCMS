<x-base-layout>
    <h1 style="text-align: center;">BİLDİRİMLER</h1>
    @if(auth()->user()->notifications->isNotEmpty())

    @foreach (auth()->user()->notifications as $notification)
    <div class="tab-pane fade active show" id="kt_topbar_notifications_1" role="tabpanel">
        <!--begin::Items-->
        <div class="scroll-y mh-325px my-5 px-8">
            <!--begin::Item-->
            <div class="d-flex flex-stack py-4">
                <!--begin::Section-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Title-->

                        <div class="mb-0 me-2">
                            <a href="{{ $notification->data['link'] }}"
                                class="fs-6 text-gray-800 text-hover-primary fw-bolder">
                                {{ $notification->data['message'] }}
                            </a>

                            @if (isset($notification->data['blog_title']))
                                <div class="text-gray-400 fs-7">{{ $notification->data['blog_title'] }}</div>
                            @endif
                        </div>


                        <!--end::Title-->
                </div>
                <!--end::Section-->

                <!--begin::Label-->
                <span class="badge badge-light fs-8">{{ $notification->created_at->diffForHumans() }}</span>
                <!--end::Label-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->

            <!--end::Item-->
        </div>
        <!--end::Items-->

        <!--begin::View more-->

        <!--end::View more-->
    </div>

@endforeach
@else
    <p>Kullanıcının bildirimi bulunmamaktadır.</p>
@endif


</x-base-layout>
