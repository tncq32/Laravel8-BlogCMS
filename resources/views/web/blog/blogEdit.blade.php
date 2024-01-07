<x-base-layout>

Burası aslında {{$blog->blog_title}} ve idsi {{$blog->id}} dir.


    <!--begin::Toolbar-->
    <div class="toolbar py-3 py-lg-6" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class=" container-xxl  d-flex flex-stack flex-wrap gap-2">


            <!--begin::Page title-->
            <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold m-0 fs-3">
                    Product Form
                </h1>
                <!--end::Title-->


                <!--end::Breadcrumb-->
            </div>

            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start  container-xxl ">

        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
                data-kt-redirect="/metronic8/demo20/../demo20/apps/ecommerce/catalog/products.html"
                action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Thumbnail</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <!--begin::Image input placeholder-->
                            <style>
                                .image-input-placeholder {
                                    background-image: url('/metronic8/demo20/assets/media/svg/files/blank-image.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('/metronic8/demo20/assets/media/svg/files/blank-image-dark.svg');
                                }
                            </style>
                            <!--end::Image input placeholder-->

                            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3 "
                                data-kt-image-input="true">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px" style="background-image: url(http://127.0.0.1:8000/{{$blog->blog_front_image}})"></div>
                                <!--end::Preview existing avatar-->

                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                    aria-label="Change avatar" data-bs-original-title="Change avatar"
                                    data-kt-initialized="1">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <!--end::Icon-->

                                    <!--begin::Inputs-->
                                    <input type="file" name="blog_front_image" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="avatar_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->

                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                    aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                    data-kt-initialized="1">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Cancel-->

                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                    aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                    data-kt-initialized="1">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg
                                image files are accepted</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <div class="rounded-circle bg-success w-15px h-15px"
                                    id="kt_ecommerce_add_product_status"></div>
                            </div>
                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                data-hide-search="true"
                                id="kt_ecommerce_add_product_status_select"
                                data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1"
                                aria-hidden="true" data-kt-initialized="1" name="blog_status">
                                <option data-select2-id="select2-data-132-9as2"></option>
                                <option @if($blog->blog_status === 'active') selected @endif  value="active">Aktif
                                </option>
                                <option @if($blog->blog_status === 'passive') selected @endif value="passive">Pasif
                                </option>
                            </select>
                            <!--end::Select2-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the product status.</div>
                            <!--end::Description-->

                            <!--begin::Datepicker-->
                            <div class="d-none mt-10">
                                <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select
                                    publishing date and time</label>
                                <input class="form-control flatpickr-input"
                                    id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time"
                                    type="text" readonly="readonly">
                            </div>
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Status-->

                    <!--begin::Category & tags-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Product Details</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <!--begin::Label-->
                            <label class="form-label">Categories</label>
                            <!--end::Label-->

                            <!--begin::Select2-->
                            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                data-placeholder="{{$blog->category_id}}" data-allow-clear="true" multiple=""
                                data-select2-id="select2-data-9-0t8t" tabindex="-1" aria-hidden="true"
                                data-kt-initialized="1" name="category_id">
                                <option></option>
                               @foreach($blogCategory as $blogKategori )
                                <option @if($blogKategori->id===$blogKategori->category_id) selected @endif value="{{$blogKategori->id}}"> {{$blogKategori->title}}</option>
                                @endforeach

                            </select>
                            <!--end::Select2-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                            <!--end::Description-->
                            <!--end::Input group-->

                            <!--begin::Button-->
                            <a href="/metronic8/demo20/../demo20/apps/ecommerce/catalog/add-category.html"
                                class="btn btn-light-primary btn-sm mb-10">
                                <i class="ki-duotone ki-plus fs-2"></i> Create new category
                            </a>
                            <!--end::Button-->

                            <!--begin::Input group-->
                            <!--begin::Label-->
                            <label class="form-label d-block">Tags</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <tags class="tagify form-control mb-2 tagify--noTags tagify--empty" tabindex="-1">
                                <span contenteditable="" tabindex="0" data-placeholder="&ZeroWidthSpace;"
                                    aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both"
                                    aria-multiline="false"></span>
                                &ZeroWidthSpace;
                            </tags><input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags"
                                class="form-control mb-2" value="" tabindex="-1">
                            <!--end::Input-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Add tags to a product.</div>
                            <!--end::Description-->
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Category & tags-->
                    <!--begin::Weekly sales-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Weekly Sales</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <span class="text-muted">No data available. Sales data will begin capturing once product has
                                been published.</span>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Weekly sales-->
                    <!--begin::Template settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Product Template</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select store template-->
                            <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a product
                                template</label>
                            <!--end::Select store template-->

                            <!--begin::Select2-->
                            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="Select an option"
                                id="kt_ecommerce_add_product_store_template"
                                data-select2-id="select2-data-kt_ecommerce_add_product_store_template" tabindex="-1"
                                aria-hidden="true" data-kt-initialized="1">
                                <option></option>
                                <option value="default" selected="" data-select2-id="select2-data-12-sy71">Default
                                    template</option>
                                <option value="electronics">Electronics</option>
                                <option value="office">Office stationary</option>
                                <option value="fashion">Fashion</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                data-select2-id="select2-data-11-s4sp" style="width: 100%;"><span
                                    class="selection"><span
                                        class="select2-selection select2-selection--single form-select mb-2"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false"
                                        aria-labelledby="select2-kt_ecommerce_add_product_store_template-container"
                                        aria-controls="select2-kt_ecommerce_add_product_store_template-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-kt_ecommerce_add_product_store_template-container"
                                            role="textbox" aria-readonly="true" title="Default template">Default
                                            template</span><span class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!--end::Select2-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Assign a template from your current theme to define how a
                                single product is displayed.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Template settings-->
                </div>
                <!--end::Aside column-->

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
                        role="tablist">
                        <!--begin:::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">General</a>
                        </li>
                        <!--end:::Tab item-->

                        <!--begin:::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_advanced" aria-selected="false" tabindex="-1"
                                role="tab">Advanced</a>
                        </li>
                        <!--end:::Tab item-->

                    </ul>
                    <!--end:::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">

                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">Product name</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="blog_title" class="form-control mb-2"
                                                placeholder="Product name" value="{{$blog->blog_title}}">
                                            <!--end::Input-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">A product name is required and recommended to
                                                be unique.</div>
                                            <!--end::Description-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->

                                            <!--begin::Editor-->
                                            <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                                        class="ql-header ql-picker"><span class="ql-picker-label"
                                                            tabindex="0" role="button" aria-expanded="false"
                                                            aria-controls="ql-picker-options-0"><svg
                                                                viewBox="0 0 18 18">
                                                                <polygon class="ql-stroke"
                                                                    points="7 11 9 13 11 11 7 11"></polygon>
                                                                <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                                </polygon>
                                                            </svg></span><span class="ql-picker-options"
                                                            aria-hidden="true" tabindex="-1"
                                                            id="ql-picker-options-0"><span tabindex="0" role="button"
                                                                class="ql-picker-item" data-value="1"></span><span
                                                                tabindex="0" role="button" class="ql-picker-item"
                                                                data-value="2"></span><span tabindex="0" role="button"
                                                                class="ql-picker-item ql-selected"></span></span></span><select
                                                        class="ql-header" style="display: none;">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option selected="selected"></option>
                                                    </select></span><span class="ql-formats"><button type="button"
                                                        class="ql-bold"><svg viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                            </path>
                                                            <path class="ql-stroke"
                                                                d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                            </path>
                                                        </svg></button><button type="button" class="ql-italic"><svg
                                                            viewBox="0 0 18 18">
                                                            <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                            <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14">
                                                            </line>
                                                            <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4">
                                                            </line>
                                                        </svg></button><button type="button" class="ql-underline"><svg
                                                            viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                            </path>
                                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                                width="12" x="3" y="15"></rect>
                                                        </svg></button></span><span class="ql-formats"><button
                                                        type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                            <rect class="ql-stroke" height="10" width="12" x="3" y="4">
                                                            </rect>
                                                            <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                            <polyline class="ql-even ql-fill"
                                                                points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12">
                                                            </polyline>
                                                        </svg></button><button type="button" class="ql-code-block"><svg
                                                            viewBox="0 0 18 18">
                                                            <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11">
                                                            </polyline>
                                                            <polyline class="ql-even ql-stroke"
                                                                points="13 7 15 9 13 11"></polyline>
                                                            <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13">
                                                            </line>
                                                        </svg></button></span></div>
                                            <div id="kt_ecommerce_add_product_description"
                                                name="kt_ecommerce_add_product_description"
                                                class="min-h-200px mb-2 ql-container ql-snow">
                                                <textarea name="blog_description" id="" cols="30" rows="10">{{$blog->blog_description}}</textarea>

                                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                                <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                        rel="noopener noreferrer" target="_blank"
                                                        href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                        data-link="https://quilljs.com" data-video="Embed URL"><a
                                                        class="ql-action"></a><a class="ql-remove"></a></div>
                                            </div>
                                            <!--end::Editor-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a description to the product for better
                                                visibility.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->
                                <!--begin::Media-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Media</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-2">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone dz-clickable" id="kt_ecommerce_add_product_media">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-file-up text-primary fs-3x"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or
                                                            click to upload.</h3>
                                                        <span class="fs-7 fw-semibold text-gray-400">Upload up to 10
                                                            files</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product media gallery.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Media-->

                                <!--begin::Pricing-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Pricing</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">Base Price</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="price" class="form-control mb-2"
                                                placeholder="Product price" value="">
                                            <!--end::Input-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the product price.</div>
                                            <!--end::Description-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                Discount Type


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Select a discount type that will be applied to this product"
                                                    data-bs-original-title="Select a discount type that will be applied to this product"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--End::Label-->

                                            <!--begin::Row-->
                                            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']"
                                                data-kt-initialized="1">
                                                <!--begin::Col-->
                                                <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="1" checked="checked">
                                                        </span>
                                                        <!--end::Radio-->

                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">No
                                                                Discount</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary  d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="2">
                                                        </span>
                                                        <!--end::Radio-->

                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">Percentage
                                                                %</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="3">
                                                        </span>
                                                        <!--end::Radio-->

                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">Fixed
                                                                Price</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="d-none mb-10 fv-row"
                                            id="kt_ecommerce_add_product_discount_percentage">
                                            <!--begin::Label-->
                                            <label class="form-label">Set Discount Percentage</label>
                                            <!--end::Label-->

                                            <!--begin::Slider-->
                                            <div class="d-flex flex-column text-center mb-5">
                                                <div class="d-flex align-items-start justify-content-center mb-7">
                                                    <span class="fw-bold fs-3x"
                                                        id="kt_ecommerce_add_product_discount_label">10</span>
                                                    <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                </div>
                                                <div id="kt_ecommerce_add_product_discount_slider"
                                                    class="noUi-sm noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects"></div>
                                                        <div class="noUi-origin"
                                                            style="transform: translate(-90.9091%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                                tabindex="0" role="slider" aria-orientation="horizontal"
                                                                aria-valuemin="1.0" aria-valuemax="100.0"
                                                                aria-valuenow="10.0" aria-valuetext="10.00">
                                                                <div class="noUi-touch-area"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Slider-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a percentage discount to be applied on this
                                                product.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                            <!--begin::Label-->
                                            <label class="form-label">Fixed Discounted Price</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="dicsounted_price" class="form-control mb-2"
                                                placeholder="Discounted price">
                                            <!--end::Input-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the discounted product price. The product
                                                will be reduced at the determined fixed price</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Tax-->
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required form-label">Tax Class</label>
                                                <!--end::Label-->

                                                <!--begin::Select2-->
                                                <select class="form-select mb-2 select2-hidden-accessible" name="tax"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select an option"
                                                    data-select2-id="select2-data-13-djha" tabindex="-1"
                                                    aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-15-nx8d"></option>
                                                    <option value="0">Tax Free</option>
                                                    <option value="1">Taxable Goods</option>
                                                    <option value="2">Downloadable Product</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-14-qx9h"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select mb-2"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-tax-2r-container"
                                                            aria-controls="select2-tax-2r-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-tax-2r-container" role="textbox"
                                                                aria-readonly="true" title="Select an option"><span
                                                                    class="select2-selection__placeholder">Select an
                                                                    option</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <!--end::Select2-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the product tax class.</div>
                                                <!--end::Description-->
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="form-label">VAT Amount (%)</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" class="form-control mb-2" value="">
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the product VAT about.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end:Tax-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Pricing-->
                            </div>
                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">

                                <!--begin::Inventory-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Inventory</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">

                                        <!--end::Input group-->



                                <!--end::Shipping-->
                                <!--begin::Meta options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Meta Options</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Title</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control mb-2" name="meta_title"
                                                placeholder="Meta tag name">
                                            <!--end::Input-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple
                                                and precise keywords.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Description</label>
                                            <!--end::Label-->

                                            <!--begin::Editor-->
                                            <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                                        class="ql-header ql-picker"><span class="ql-picker-label"
                                                            tabindex="0" role="button" aria-expanded="false"
                                                            aria-controls="ql-picker-options-1"><svg
                                                                viewBox="0 0 18 18">
                                                                <polygon class="ql-stroke"
                                                                    points="7 11 9 13 11 11 7 11"></polygon>
                                                                <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                                </polygon>
                                                            </svg></span><span class="ql-picker-options"
                                                            aria-hidden="true" tabindex="-1"
                                                            id="ql-picker-options-1"><span tabindex="0" role="button"
                                                                class="ql-picker-item" data-value="1"></span><span
                                                                tabindex="0" role="button" class="ql-picker-item"
                                                                data-value="2"></span><span tabindex="0" role="button"
                                                                class="ql-picker-item ql-selected"></span></span></span><select
                                                        class="ql-header" style="display: none;">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option selected="selected"></option>
                                                    </select></span><span class="ql-formats"><button type="button"
                                                        class="ql-bold"><svg viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                            </path>
                                                            <path class="ql-stroke"
                                                                d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                            </path>
                                                        </svg></button><button type="button" class="ql-italic"><svg
                                                            viewBox="0 0 18 18">
                                                            <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                            <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14">
                                                            </line>
                                                            <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4">
                                                            </line>
                                                        </svg></button><button type="button" class="ql-underline"><svg
                                                            viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                            </path>
                                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                                width="12" x="3" y="15"></rect>
                                                        </svg></button></span><span class="ql-formats"><button
                                                        type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                            <rect class="ql-stroke" height="10" width="12" x="3" y="4">
                                                            </rect>
                                                            <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                            <polyline class="ql-even ql-fill"
                                                                points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12">
                                                            </polyline>
                                                        </svg></button><button type="button" class="ql-code-block"><svg
                                                            viewBox="0 0 18 18">
                                                            <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11">
                                                            </polyline>
                                                            <polyline class="ql-even ql-stroke"
                                                                points="13 7 15 9 13 11"></polyline>
                                                            <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13">
                                                            </line>
                                                        </svg></button></span></div>
                                            <div id="kt_ecommerce_add_product_meta_description"
                                                name="kt_ecommerce_add_product_meta_description"
                                                class="min-h-100px mb-2 ql-container ql-snow">

                                                <p><br></p>

                                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                                <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                        rel="noopener noreferrer" target="_blank"
                                                        href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                        data-link="https://quilljs.com" data-video="Embed URL"><a
                                                        class="ql-action"></a><a class="ql-remove"></a></div>
                                            </div>
                                            <!--end::Editor-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a meta tag description to the product for
                                                increased SEO ranking.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Keywords</label>
                                            <!--end::Label-->

                                            <!--begin::Editor-->
                                            <input id="kt_ecommerce_add_product_meta_keywords"
                                                name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2">
                                            <!--end::Editor-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a list of keywords that the product is
                                                related to. Separate the keywords by adding a comma <code>,</code>
                                                between each keyword.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Meta options-->
                            </div>
                        </div>
                        <!--end::Tab pane-->

                    </div>
                    <!--end::Tab content-->
                        </div>
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->

                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Kaydet
                            </span>
                            <span class="indicator-progress">
                                Lütfen Bekleyin... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Container-->



</x-base-layout>
