<?php
// List items
$alerts = [
    [
        'title' => 'Project Alice',
        'description' => 'Phase 1 development',
        'time' => '1 hr',
        'icon' => 'icons/duotune/technology/teh008.svg',
        'state' => 'primary',
    ],
    [
        'title' => 'HR Confidential',
        'description' => 'Confidential staff documents',
        'time' => '2 hrs',
        'icon' => 'icons/duotune/general/gen044.svg',
        'state' => 'danger',
    ],
    [
        'title' => 'Company HR',
        'description' => 'Corporeate staff profiles',
        'time' => '5 hrs',
        'icon' => 'icons/duotune/finance/fin006.svg',
        'state' => 'warning',
    ],
    [
        'title' => 'Project Redux',
        'description' => 'New frontend admin theme',
        'time' => '2 days',
        'icon' => 'icons/duotune/files/fil023.svg',
        'state' => 'success',
    ],
    [
        'title' => 'Project Breafing',
        'description' => 'Product launch status update',
        'time' => '21 Jan',
        'icon' => 'icons/duotune/maps/map001.svg',
        'state' => 'primary',
    ],
    [
        'title' => 'Banner Assets',
        'description' => 'Collection of banner images',
        'time' => '21 Jan',
        'icon' => 'icons/duotune/general/gen006.svg',
        'state' => 'info',
    ],
    [
        'title' => 'Icon Assets',
        'description' => 'Collection of SVG icons',
        'time' => '20 March',
        'icon' => 'icons/duotune/art/art002.svg',
        'state' => 'warning',
    ],
];

// Content library
$logs = [
    ['code' => '200 OK', 'state' => 'success', 'message' => 'New order', 'time' => 'Just now'],
    ['code' => '500 ERR', 'state' => 'danger', 'message' => 'New customer', 'time' => '2 hrs'],
    ['code' => '200 OK', 'state' => 'success', 'message' => 'Payment process', 'time' => '5 hrs'],
    ['code' => '300 WRN', 'state' => 'warning', 'message' => 'Search query', 'time' => '2 days'],
    ['code' => '200 OK', 'state' => 'success', 'message' => 'API connection', 'time' => '1 week'],
    ['code' => '200 OK', 'state' => 'success', 'message' => 'Database restore', 'time' => 'Mar 5'],
    ['code' => '300 WRN', 'state' => 'warning', 'message' => 'System update', 'time' => 'May 15'],
    ['code' => '300 WRN', 'state' => 'warning', 'message' => 'Server OS update', 'time' => 'Apr 3'],
    ['code' => '300 WRN', 'state' => 'warning', 'message' => 'API rollback', 'time' => 'Jun 30'],
    ['code' => '500 ERR', 'state' => 'danger', 'message' => 'Refund process', 'time' => 'Jul 10'],
    ['code' => '500 ERR', 'state' => 'danger', 'message' => 'Withdrawal process', 'time' => 'Sep 10'],
    ['code' => '500 ERR', 'state' => 'danger', 'message' => 'Mail tasks', 'time' => 'Dec 10'],
];
?>

<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
    <!--begin::Heading-->
    <div class="d-flex flex-column bgi-no-repeat rounded-top"
        style="background-image:url('{{ asset(theme()->getMediaUrlPath() . 'misc/pattern-1.jpg') }}')">
        <!--begin::Title-->
        <h3 class="text-white fw-bold px-9 mt-10 mb-6">
            Bildirimler <span class="fs-8 opacity-75 ps-3"></span>
        </h3>
        <!--end::Title-->

        <!--begin::Tabs-->
        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
                    href="#kt_topbar_notifications_1">Alerts</a>
            </li>


        </ul>
        <!--end::Tabs-->
    </div>
    <!--end::Heading-->




@if(auth()->user()->notifications->isNotEmpty())
    @foreach (auth()->user()->notifications as $notification)
    <div class="tab-content">
        <!--begin::Tab panel-->
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
                            <a href="{{ $notification->data['link'] }}" class="fs-6 text-gray-800 text-hover-primary fw-bolder">
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
        <!--end::Tab panel-->
    </div>
    <!--end::Tab content-->
@endforeach
@else
    <p>Kullanıcının bildirimi bulunmamaktadır.</p>
@endif
    <div class="py-3 text-center border-top">
        <a href="/admin/notifications"
            class="btn btn-color-gray-600 btn-active-color-primary">
            View All
            <i class="ki-outline ki-arrow-right fs-5"></i> </a>
    </div>
</div>
<!--end::Menu-->
