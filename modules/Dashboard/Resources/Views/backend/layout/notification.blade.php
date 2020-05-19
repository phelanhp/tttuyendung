<div class="container">
    <!-- Notification -->
    <div class="notification-box">
        @if (session('success'))
            <div class="alert alert-info notification">{{session('success')}}</div>
        @elseif (session('danger'))
            <div class="alert alert-danger notification">{{session('danger')}}</div>
        @endif
    </div>
    <!-- Validation -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
