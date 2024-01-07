<x-base-layout>
    <div id="kt_app_content" class="app-content  flex-column-fluid " data-select2-id="select2-data-kt_app_content">
        <div id="kt_app_content_container" class="app-container  container-xxl " data-select2-id="select2-data-kt_app_content_container">
            <h1>Edit Category</h1>
            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="/metronic8/demo1/../demo1/apps/ecommerce/catalog/categories.html" data-select2-id="select2-data-kt_ecommerce_add_category_form" action="{{route('blogCategories.update',$blogCategories->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
               @method('PUT')
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10" data-select2-id="select2-data-130-fuu7">
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
                                    background-image: url('/metronic8/demo1/assets/media/svg/files/blank-image.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('/metronic8/demo1/assets/media/svg/files/blank-image-dark.svg');
                                }

                            </style>
                            <!--end::Image input placeholder-->

                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true"  style="background-image: url(http://127.0.0.1:8000/{{$blogCategories->front_image}})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->

                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
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
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                    <i class="bi bi-x fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                <!--end::Cancel-->

                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                    <i class="bi bi-x fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg
                                image files are accepted</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    <div class="card card-flush py-4" data-select2-id="select2-data-129-6dtk">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status">
                                </div>
                            </div>
                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0" data-select2-id="select2-data-128-8bkj">
                            <!--begin::Select2-->
                            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="{{$blogCategories->status}}" id="kt_ecommerce_add_category_status_select" data-select2-id="select2-data-kt_ecommerce_add_category_status_select" tabindex="-1" aria-hidden="true" data-kt-initialized="1" name="status">
                                <option data-select2-id="select2-data-132-9as2"></option>
                                <option @if($blogCategories->status === 'active') selected @endif  value="active">Active
                                </option>
                                <option @if($blogCategories->status === 'passive') selected @endif value="passive">Passive
                                </option>
                            </select>

                            <!--end::Select2-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the category status.</div>
                            <!--end::Description-->

                            <!--begin::Datepicker-->
                            <div class="d-none mt-10">
                                <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select
                                    publishing date and time</label>
                                <input class="form-control flatpickr-input" id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date &amp; time" type="text" readonly="readonly">
                            </div>
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Status-->
                    <!--begin::Template settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Store Template</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select store template-->
                            <label for="kt_ecommerce_add_category_store_template" class="form-label">Select a store
                                template</label>
                            <!--end::Select store template-->

                            <!--begin::Select2-->
                            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_store_template" data-select2-id="select2-data-kt_ecommerce_add_category_store_template" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                <option></option>
                                <option value="default" selected="" data-select2-id="select2-data-12-c5td">Default
                                    template
                                </option>
                                <option value="electronics">Electronics</option>
                                <option value="office">Office stationary</option>
                                <option value="fashion">Fashion</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-1cw3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_ecommerce_add_category_store_template-container" aria-controls="select2-kt_ecommerce_add_category_store_template-container"><span class="select2-selection__rendered" id="select2-kt_ecommerce_add_category_store_template-container" role="textbox" aria-readonly="true" title="Default template">Default
                                            template</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!--end::Select2-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Assign a template from your current theme to define how the
                                category products are displayed.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Template settings-->
                </div>
                <!--end::Aside column-->

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
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
                                <input type="text" name="title" class="form-control mb-2"  value="{{$blogCategories->title}}">
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">A category name is required and recommended to be unique.
                                </div>
                                <!--end::Description-->
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Description</label>
                                <!--end::Label-->

                                <!--begin::Editor-->
                                <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                                    <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                                </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span><select class="ql-header" style="display: none;">
                                            <option value="1"></option>
                                            <option value="2"></option>
                                            <option selected="selected"></option>
                                        </select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18">
                                                <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                </path>
                                                <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                </path>
                                            </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                                <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                            </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18">
                                                <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15">
                                                </rect>
                                            </svg></button></span><span class="ql-formats"><button type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                                <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                            </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18">
                                                <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline>
                                                <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline>
                                                <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line>
                                            </svg></button></span>
                                </div>
                                <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px mb-2 ql-container ql-snow">
                                    <textarea name="description" class="form-control" rows="4" value="{{old('description')}}"> {{$blogCategories->description}}</textarea>

                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>
                                    </div>
                                </div>
                                <!--end::Editor-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a description to the category for better visibility.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
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
                                <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name">
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise
                                    keywords.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label">Meta Tag Description</label>
                                <!--end::Label-->

                                <!--begin::Editor-->
                                <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18">
                                                    <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                                </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item"></span></span></span><select class="ql-header" style="display: none;">
                                            <option value="1"></option>
                                            <option value="2"></option>
                                            <option selected="selected"></option>
                                        </select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18">
                                                <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                </path>
                                                <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                </path>
                                            </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                                <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                            </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18">
                                                <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15">
                                                </rect>
                                            </svg></button></span><span class="ql-formats"><button type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                                <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                            </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18">
                                                <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline>
                                                <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline>
                                                <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line>
                                            </svg></button></span></div>
                                <div id="kt_ecommerce_add_category_meta_description" name="kt_ecommerce_add_category_meta_description" class="min-h-100px mb-2 ql-container ql-snow">
                                    <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here...">
                                        <p><br></p>
                                    </div>
                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>
                                    </div>
                                </div>
                                <!--end::Editor-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a meta tag description to the category for increased
                                    SEO
                                    ranking.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Meta Tag Keywords</label>
                                <!--end::Label-->

                                <!--begin::Editor-->
                                <tags class="tagify form-control mb-2 tagify--noTags tagify--empty" tabindex="-1">
                                    <span contenteditable="" tabindex="0" data-placeholder="&ZeroWidthSpace;" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                                    &ZeroWidthSpace;
                                </tags><input id="kt_ecommerce_add_category_meta_keywords" name="kt_ecommerce_add_category_meta_keywords" class="form-control mb-2" tabindex="-1">
                                <!--end::Editor-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a list of keywords that the category is related to.
                                    Separate the keywords by adding a comma <code>,</code> between each keyword.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Meta options-->

                    <!--begin::Automation-->

                    <!--end::Automation-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->


                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
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
        </div>
        <!--end::Content container-->
    </div>





</x-base-layout>
