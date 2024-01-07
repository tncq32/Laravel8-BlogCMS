<x-base-layout>
    <!--begin::Image input placeholder-->
    <style>
        .image-input-placeholder {
            background-image: url('svg/avatars/blank.svg');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('svg/avatars/blank-dark.svg');
        }
    </style>
    <h1 style="text-align: center;">ORTAM KÜTÜPHANESİ</h1>
    <!--end::Image input placeholder-->

<div class="row">
    @foreach ($blogs as $blog)

        <div class="col-2">
            <!--begin::Heading-->
            <div class="card-px text-center pt-15 pb-15">

                <a href="{{ asset($blog->blog_front_image) }}" class=" er fs-6 px-8 py-4" target="_blank"
                    >
                    <div class="image-input image-input-circle" data-kt-image-input="true"
                        style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                        <!--begin::Image preview wrapper-->
                        <div class="image-input-wrapper w-125px h-125px"
                            style="background-image: url({{ asset($blog->blog_front_image) }}"
                            alt="{{ $blog->title }})"></div>
                        <!--end::Image preview wrapper-->

                        <!--begin::Edit button-->

                        <!--end::Edit button-->


                        <!--end::Cancel button-->


                        <!--end::Remove button-->
                    </div>
                </a>

            </div>
            <!--end::Heading-->


            <!--end::Illustration-->
        </div>

@endforeach
</div>
<div class="row">

@foreach ($categories as $category)

            <div class="col-2">
                <!--begin::Heading-->
                <div class="card-px text-center pt-15 pb-15">

                    <a href="{{ asset($category->front_image) }}" class=" er fs-6 px-8 py-4" target="_blank"
                       >
                        <div class="image-input image-input-circle" data-kt-image-input="true"
                            style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                            <!--begin::Image preview wrapper-->
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: url({{ asset($category->front_image) }}"
                                alt="{{ $category->title }}"></div>
                            <!--end::Image preview wrapper-->


                        </div>
                    </a>

                </div>
                <!--end::Heading-->

                <!--begin::Illustration-->
                <div class="text-center pb-15 px-5">
                    <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/2.png" alt=""
                        class="mw-100 h-200px h-sm-325px">
                </div>
                <!--end::Illustration-->
            </div>

        @endforeach
    </div>

</x-base-layout>
