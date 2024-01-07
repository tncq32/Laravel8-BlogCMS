<x-base-layout>

    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Blog Categories</span>

            </h3>
            <div class="card-toolbar">
                <a href="categories/new" class="btn btn-sm btn-light-primary">
                    <i class="ki-duotone ki-plus fs-2"></i> New Categories
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
                        @foreach ($blogCategory as $blog)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        @if($blog->front_image)

                                        <a href="{{asset($blog->front_image)}}" target="_blank"
                                            class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url({{asset($blog->front_image)}});"></span>
                                        </a>
                                        @endif
                                    </div>

                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$blog->title}}</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                            ReactJS</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex justify-content-start flex-column">

                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{$blog->description}}</span>
                                </div>
                            </td>

                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$blog->rank}}</a>

                            </td>



                            <td>
                                @switch($blog->status)
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

                                <a href="{{route('blogCategories.edit',$blog->id)}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="k-icon k-i-pencil fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> Düzenle</a>

                                <a href="{{route('blogCategories.destroy',$blog->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
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
</x-base-layout>
