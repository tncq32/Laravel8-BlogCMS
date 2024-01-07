<x-base-layout>






    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start  container-xxl ">

        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
                data-kt-redirect="/metronic8/demo20/../demo20/apps/ecommerce/catalog/products.html"
                action="{{route('blogCategories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
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

                           <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <!--end::Preview existing avatar-->

                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                                data-bs-original-title="Change avatar" data-kt-initialized="1">
                                <!--begin::Icon-->
                                <i class="bi bi-pencil-fill fs-7"><span class="path1"></span><span class="path2"></span></i>
                                <!--end::Icon-->

                                <!--begin::Inputs-->
                                <input type="file" name="front_image" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="avatar_remove">
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                <i class="bi bi-x fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                                data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                <i class="bi bi-x fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                            <!--end::Remove-->
                        </div>
                            <!--end::Image input-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the Category thumbnail image. Only *.png, *.jpg and *.jpeg
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
                                data-hide-search="true" data-placeholder="Select an option"
                                id="kt_ecommerce_add_product_status_select"
                                data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1"
                                aria-hidden="true" data-kt-initialized="1" name="status">

                                <option data-select2-id="select2-data-132-9as2"></option>
                                <option @if(request()->get('status')=='active') selected @endif value="active">Aktif
                                </option>
                                <option @if(request()->get('status')=='passive') selected @endif value="passive">Pasif
                                </option>
                            </select>
                            <!--end::Select2-->

                            <!--begin::Description-->

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
                                <h2>Category Rank</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <!--begin::Label-->

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
                            </tags><input type="text" name="rank" class="form-control mb-2"
                            placeholder="Blog Category Rank" value="">
                            <!--end::Input-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Add tags to a Category.</div>
                            <!--end::Description-->
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Category & tags-->
                    <!--begin::Weekly sales-->

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
                                            <label class="required form-label">Category Name</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="title" class="form-control mb-2"
                                                placeholder="Category name" value="">
                                            <!--end::Input-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">A Category name is required and recommended to
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
                                               <textarea name="description" id="" cols="30" rows="10"></textarea>

                                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                                <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                        rel="noopener noreferrer" target="_blank"
                                                        href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                        data-link="https://quilljs.com" data-video="Embed URL"><a
                                                        class="ql-action"></a><a class="ql-remove"></a></div>
                                            </div>
                                            <!--end::Editor-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a description to the Category for better
                                                visibility.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->

                            </div>
                        </div>


                    </div>
                    <!--end::Tab content-->

                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->

                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Kaydet
                            </span>
                            <span class="indicator-progress">
                                Lütfen bekleyin... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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