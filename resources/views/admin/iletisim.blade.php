<x-base-layout>

    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>İletişim Bilgileri</h2>
            </div>
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Form-->
            <form action="{{ route('iletisim.guncelle') }}" method="post">
                @csrf <!-- CSRF koruma token'ı -->

                <!-- Telefon Numarası -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class="required form-label">Telefon Numarası</label>
                    <input type="text" name="telnumara" class="form-control mb-2" placeholder="Lütfen telefon numarası giriniz.." value="{{ $iletisim->telnumara ?? '' }}">
                    <div class="text-muted fs-7">Lütfen telefon numaranızı giriniz</div>
                </div>

                <!-- Adres -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class="required form-label">Adres</label>
                    <input type="text" name="adres" class="form-control mb-2" placeholder="Lütfen adres giriniz" value="{{ $iletisim->adres ?? '' }}">
                    <div class="text-muted fs-7">Lütfen adresinizi giriniz</div>
                </div>
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class="required form-label">Harita</label>
                    <input type="text" name="harita_iframe" class="form-control mb-2" placeholder="Lütfen haritianın linkini giriniz" value="{{ $iletisim->harita_iframe ?? '' }}">
                    <div class="text-muted fs-7">Lütfen haritianın src" " etiketi arasındaki linki giriniz</div>
                </div>
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
