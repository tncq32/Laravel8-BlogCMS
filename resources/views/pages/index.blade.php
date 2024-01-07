<x-base-layout>
    <div class="row g-5 gx-xxl-8" style="
    margin-bottom: 50px;">

        <div class="col-xxl-12">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Son Yazılar</span>

                    <span class="text-muted mt-1 fw-bold fs-7"></span>
                </h3>

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

                        @foreach ($latestBlogs as $blogList)
                            <tr class="odd">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">

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
                                            <a href="{{ route('blog.destroy', $blogList->id) }}" class="menu-link px-3"
                                                data-kt-ecommerce-product-filter="delete_row">
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
            </div>
        </div>
        <!--end::Col-->
    </div>




    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-6">

            <!--begin::Table Widget 7-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Son Yapılan Yorumlar</span>

                        <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
                    </h3>

                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body py-3">
                    <div class="tab-content">

                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_table_widget_7_tab_1" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-3">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>

                                            <th class="p-0 min-w-150px">Yorum</th>
                                            <th class="p-0 min-w-140px">Blog</th>
                                            <th class="p-0 min-w-120px">Tarih</th>
                                            <th class="p-0 min-w-120px">İşlemler</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($latestComments as $comment)
                                            <tr>

                                                <td>
                                                    <a href="#"
                                                        class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">{{ $comment->content }}
                                                    </a>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">{{ $comment->user->name }}</span>
                                                </td>
                                                <td class="text">
                                                    <span
                                                        class="text-gray-900 fw-bold d-block fs-7">{{ $comment->blog->blog_title }}</span>

                                                </td>
                                                <td class="text">
                                                    {{ $comment->created_at->diffForHumans() }}
                                                </td>
                                                <td class="text">
                                                    <a href="#"
                                                        class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                        Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ route('blog.edit', $blogList->id) }}"
                                                                class="menu-link px-3">
                                                                Edit
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{ route('comment.destroy', $comment->id) }}"
                                                                class="menu-link px-3"
                                                                data-kt-ecommerce-product-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->

                        <!--begin::Tap pane-->

                        <!--end::Tap pane-->

                        <!--begin::Tap pane-->

                        <!--end::Tap pane-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Tables Widget 7-->
        </div>

        <!--begin::Col-->
        <div class="col-xl-6">
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title fw-bold text-gray-900">Blog & Yorum Sayısı</h3>

                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i> </button>

                        <!--begin::Menu 3-->

                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-0">
                    <!--begin::Item-->
                    @foreach ($latestComments as $comment)
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                            <i class="ki-duotone ki-abstract-26 text-warning fs-1 me-5"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <!--begin::Title-->
                            <div class="flex-grow-1 me-2">
                                <a href="{{ route('blog.webShowBlog', ['title' => $comment->blog->blog_title, 'id' => $comment->blog->id]) }}"
                                    class="fw-bold text-gray-800 text-hover-primary fs-6">
                                    {{ $comment->blog->blog_title }}
                                </a>

                                <span class="text-muted fw-semibold d-block">
                                    {{ $comment->created_at->diffForHumans() }}
                                </span>
                            </div>
                            <!--end::Title-->

                            <!--begin::Label-->
                            <span class="fw-bold text-warning py-1">{{ $comment->blog->comments->count() }}</span>
                            <!--end::Label-->
                        </div>
                    @endforeach







                </div>
                <!--end::Body-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->

            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->

        <!--end::Row-->

    </div>
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Blog Categories</span>

            </h3>

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
                            <th class="ps-4 min-w-325px rounded-start">Categories</th>
                            <th class="min-w-125px">Description</th>
                            <th class="min-w-50px">Rank</th>
                            <th class="min-w-150px">Status</th>
                            <th class="min-w-200px  rounded-end">Transactions</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($latestCategories as $category)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        @if($category->front_image)

                                        <a href="{{asset($category->front_image)}}" target="_blank"
                                            class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url({{asset($category->front_image)}});"></span>
                                        </a>
                                        @endif
                                    </div>

                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$category->title}}</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                            ReactJS</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex justify-content-start flex-column">

                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{$category->description}}</span>
                                </div>
                            </td>

                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$category->rank}}</a>

                            </td>



                            <td>
                                @switch($category->status)
                                @case('active')
                                    <span class="badge badge-success"
                                        style="background: green">Akitf</span>
                                @break

                                @case('passive')
                                    <span class="badge badge-danger"
                                        style="background: red">Pasif</span>
                                @break
                            @endswitch
                            </td>

                            <td class="">

                                <a href="{{route('blogCategories.edit',$category->id)}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="k-icon k-i-pencil fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> Düzenle</a>

                                <a href="{{route('blogCategories.destroy',$category->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <i class="ki-duotone ki-trash fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span></i> Sil</a>
                            </td>
                        </tr>
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
    <div class="row gy-5 g-xl-8">


        <div class="col-xl-6">
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <div class="card-header border-0">
                    <h3 class="card-title fw-bold text-gray-900">Blog & Yorum Sayısı</h3>

                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i> </button>

                    </div>
                </div>

                <div class="card-body pt-0">
                    @foreach ($latestComments as $comment)
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                            <i class="ki-duotone ki-abstract-26 text-warning fs-1 me-5"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <div class="flex-grow-1 me-2">
                                <a href="{{ route('blog.webShowBlog', ['title' => $comment->blog->blog_title, 'id' => $comment->blog->id]) }}"
                                    class="fw-bold text-gray-800 text-hover-primary fs-6">
                                    {{ $comment->blog->blog_title }}
                                </a>

                                <span class="text-muted fw-semibold d-block">
                                    {{ $comment->created_at->diffForHumans() }}
                                </span>
                            </div>

                            <span class="fw-bold text-warning py-1">{{ $comment->blog->comments->count() }}</span>
                        </div>
                    @endforeach







                </div>
            </div>


        </div>



    </div>
    </x-base-layout>
