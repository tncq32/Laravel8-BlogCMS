<!--begin::List Widget 2-->
<?php
    // List items
    $listRows = array(
        array(
            'avatar' => '',
            'name' => 'Yazar 1',
            'description' => 'Laravel Manager',
        ),
        array(
            'avatar' => '',
            'name' => 'Yazar 2',
            'description' => 'PHP, SQLite, Artisan CLI',
        ),
        array(
            'avatar' => '',
            'name' => 'Yazar 3',
            'description' => 'PHP, SQLite, Artisan CLI',
        ),
        array(
            'avatar' => '',
            'name' => 'Yazar 4',
            'description' => 'PHP, SQLite, Artisan CLI',
        ),
        array(
            'avatar' => '',
            'name' => 'Yazar 5',
            'description' => 'PHP, SQLite, Artisan CLI',
        )
    );
?>

<div class="card {{ $class }}">
    <!--begin::Header-->
    <div class="card-header border-0">
        <h3 class="card-title fw-bolder text-dark">Yazarlar</h3>

        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                {!! theme()->getSvgIcon("icons/duotune/general/gen024.svg", "svg-icon-2") !!}
            </button>
            {{ theme()->getView('partials/menus/_menu-2') }}
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-2">
        @foreach($listRows as $index => $row)
            <!--begin::Item-->
            <div class="d-flex align-items-center {{ util()->putIf(next($listRows), 'mb-7') }}">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img src="{{ asset(theme()->getMediaUrlPath() . $row['avatar']) }}" class="" alt=""/>
                </div>
                <!--end::Avatar-->

                <!--begin::Text-->
                <div class="flex-grow-1">
                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{ $row['name'] }}</a>

                    <span class="text-muted d-block fw-bold">{{ $row['description'] }}</span>
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
        @endforeach
    </div>
    <!--end::Body-->
</div>
<!--end::List Widget 2-->
