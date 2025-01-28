<form action="{{ $action }}" method="POST">
    @csrf
    @yield('form-fields')
    <button type="submit">@yield('button-text', 'Submit')</button>
</form>