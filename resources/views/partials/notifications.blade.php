<div id="toast-container" class="toast-container">

    {{-- Success Message --}}
    @if (session('success'))
        <div class="toast toast-success">
            <span class="toast-icon">✓</span>
            <div class="toast-content">
                <strong>Success</strong>
                <p>{{ session('success') }}</p>
            </div>
            <button type="button" class="toast-close" aria-label="Close">×</button>
        </div>
    @endif

    {{-- Error Message --}}
    @if (session('error'))
        <div class="toast toast-error">
            <span class="toast-icon">!</span>
            <div class="toast-content">
                <strong>Error</strong>
                <p>{{ session('error') }}</p>
            </div>
            <button type="button" class="toast-close" aria-label="Close">×</button>
        </div>
    @endif

    {{-- Warning Message --}}
    @if (session('warning'))
        <div class="toast toast-warning">
            <span class="toast-icon">!</span>
            <div class="toast-content">
                <strong>Warning</strong>
                <p>{{ session('warning') }}</p>
            </div>
            <button type="button" class="toast-close" aria-label="Close">×</button>
        </div>
    @endif

    {{-- Info Message --}}
    @if (session('info'))
        <div class="toast toast-info">
            <span class="toast-icon">i</span>
            <div class="toast-content">
                <strong>Information</strong>
                <p>{{ session('info') }}</p>
            </div>
            <button type="button" class="toast-close" aria-label="Close">×</button>
        </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="toast toast-error">
            <span class="toast-icon">!</span>
            <div class="toast-content">
                <strong>Please check your input</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="toast-close" aria-label="Close">×</button>
        </div>
    @endif

</div>