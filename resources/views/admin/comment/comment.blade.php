<x-base-layout>

    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Yorumlar</span>

                <span class="text-muted mt-1 fw-semibold fs-7">Over 500 comments</span>
            </h3>

            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                data-bs-original-title="Click to add a user" data-kt-initialized="1">

            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                        data-kt-check-target=".widget-9-check">
                                </div>
                            </th>
                            <th class="min-w-200px">Content</th>
                            <th class="min-w-150px">Author</th>

                            <th class="min-w-100px text-end">Actions</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($comments as $comment)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox" value="1">
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="/metronic8/demo1/assets/media/avatars/300-14.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">                        {{ $comment->content }}
                                        </a>

                                        <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                            ReactJS</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <a href="#"
                                    class="text-gray-900 fw-bold text-hover-primary d-block fs-6">{{ $comment->user->name }}</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7"></span>
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

                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{route('comment.destroy', $comment->id) }}"
                                            class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
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
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>







    </div>
    <!--end::Body-->
    </div>
    <!--end::Post card-->
    </div>

    <!--end::Content container-->
    </div>
</x-base-layout>
