<x-base-layout>

    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Hakkımızda Sayfası</h2>
            </div>
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Form-->
            <form action="{{ route('hakkimizda.guncelle') }}" method="POST">
                @csrf <!-- CSRF koruma token'ı -->

                <!-- Telefon Numarası -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class="required form-label">Hakkımzıda Kısa Yazı</label>
                    <input type="text" name="hakkimizdakisayazi" class="form-control mb-2" placeholder="Lütfen hakkımızda sayfası için kısa  yazı giriniz.." value="{{ $hakkimizda->hakkimizdakisayazi ?? '' }}">
                    <div class="text-muted fs-7">Lütfen hakkımızda sayfası için kısa yazı giriniz</div>
                </div>
                <div>
                    <!--begin::Label-->
                    <label class="required form-label">Hakkımızda Yazısı</label>
                    <!--end::Label-->

                    <!--begin::Editor-->

                    <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px mb-2 ql-container ql-snow">
                        <textarea name="hakkimizdaicerik" class="form-control" rows="4" value="{{ $hakkimizda->hakkimizdaicerik ?? '' }}" placeholder="Lütfen hakkımızda yazınızı giriniz" >{{ $hakkimizda->hakkimizdaicerik ?? '' }} </textarea>

                        <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                        <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>
                        </div>
                    </div>
                    <!--end::Editor-->

                    <!--begin::Description-->
                    <div class="text-muted fs-7">Lütfen hakkımızda yazınızı  giriniz</div>
                    <!--end::Description-->
                </div>
                <!-- Adres -->


                <!-- Buttonlar -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Kaydet</span>
                        <span class="indicator-progress">
                            Lütfen Bekleyin... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>

</x-base-layout>
