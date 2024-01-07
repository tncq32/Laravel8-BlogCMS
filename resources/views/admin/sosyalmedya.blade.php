<x-base-layout>

    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Sosyal Medya</h2>
            </div>
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Form-->
            <form action="{{ route('sosyalmedya.update') }}" method="post">
                @csrf <!-- CSRF koruma token'ı -->


                <!-- Facebook -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class=" form-label">Facebook</label>
                    <input type="text" name="facebook" class="form-control mb-2" placeholder="Lütfen linkleri giriniz.." value="{{ $sosyalmedya->facebook ?? '' }}">
                </div>

                <!-- İnstagram -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class=" form-label">İnstagram</label>
                    <input type="text" name="instagram" class="form-control mb-2" placeholder="Lütfen linkleri giriniz" value="{{ $sosyalmedya->instagram ?? '' }}">
                </div>
                <!-- Behance -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class=" form-label">Behance</label>
                    <input type="text" name="behance" class="form-control mb-2" placeholder="Lütfen linkleri giriniz" value="{{ $sosyalmedya->behance ?? '' }}">
                </div>

                <!-- Twitter -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class=" form-label">Twitter</label>
                    <input type="text" name="twitter" class="form-control mb-2" placeholder="Lütfen linkleri giriniz" value="{{ $sosyalmedya->twitter ?? '' }}">
                </div>
                <!-- Github -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class=" form-label">Github</label>
                    <input type="text" name="github" class="form-control mb-2" placeholder="Lütfen linkleri giriniz" value="{{ $sosyalmedya->github ?? '' }}">
                </div>
                <!-- Pinteres -->
                <div class="mb-10 fv-row fv-plugins-icon-container">
                    <label class=" form-label">Pinterest</label>
                    <input type="text" name="pinterest" class="form-control mb-2" placeholder="Lütfen linkleri giriniz" value="{{ $sosyalmedya->pinterest ?? '' }}">
                </div>
                <!-- Buttonlar -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Kaydet</span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>

</x-base-layout>
