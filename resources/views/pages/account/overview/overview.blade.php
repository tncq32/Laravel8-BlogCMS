<x-base-layout>

{{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10')) }}

{{ theme()->getView('pages/account/overview/_details', array('class' => 'mb-5 mb-xl-10', 'info' => auth()->user()->info)) }}

<!--begin::Row-->
    <div class="row gy-10 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xl-6">

        </div>
        <!--end::Col-->

        <!--begin::Col-->

        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row gy-10 gx-xl-10">
        <!--begin::Col-->

        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xl-6">
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

</x-base-layout>
