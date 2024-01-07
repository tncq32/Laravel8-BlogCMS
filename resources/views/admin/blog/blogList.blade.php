<x-base-layout>

    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Blog</span>

                <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new blog</span>
            </h3>
            <div class="card-toolbar">
                <a href="list/new" class="btn btn-sm btn-light-primary">
                    <i class="ki-duotone ki-plus fs-2"></i> New Blog
                </a>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">

                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-325px rounded-start">Blog</th>
                            <th class="min-w-125px">Description</th>
                            <th class="min-w-125px">Rank</th>

                            <th class="min-w-150px">Status</th>
                            <th class="min-w-150px">Actions</th>

                            <th class="min-w-200px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>


                        @foreach ($blog as $blogList)
                            <tr class="odd">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <div class="d-flex" style="padding-left:15px; ">
                                            <!--begin::Thumbnail-->
                                            @if ($blogList->blog_front_image)
                                                <a href="{{ asset($blogList->blog_front_image) }}" target="_blank"
                                                    class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url({{ asset($blogList->blog_front_image) }});"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                            @endif
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{ route('blog.webShowBlog', ['title' => $blogList->blog_title, 'id' => $blogList->id]) }}"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                                    data-kt-ecommerce-category-filter="category_name">{{ $blogList->blog_title }}</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->

                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <div class="text-muted fs-7 fw-bold">
                                        {{ $blogList->blog_description }}</div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $blogList->blog_rank }}</span>
                                </td>



                                <td class="text pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    @switch($blogList->blog_status)
                                        @case('active')
                                            <span class="badge badge-success" style="background: green">Akitf</span>
                                        @break

                                        @case('passive')
                                            <span class="badge badge-danger" style="background: red">Pasif</span>
                                        @break
                                    @endswitch
                                    <!--end::Badges-->
                                </td>
                                <td class="text">
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('blog.edit', $blogList->id) }}" class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('blog.destroy', $blogList->id) }}"
                                                class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                        @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
</x-base-layout>
