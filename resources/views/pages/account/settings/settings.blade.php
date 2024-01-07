<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/account/settings/_profile-details', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/account/settings/_signin-method', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    @section('scripts')
    <script src="{{ asset('demo1\js\custom\account\settings\signin-methods.js') }}" type="application/javascript"></script>
    @endsection

</x-base-layout>
