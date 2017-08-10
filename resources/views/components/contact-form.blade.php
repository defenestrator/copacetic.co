@if ($errors->count() >= 1)
    <div class="errors">
        @foreach($errors->all() as $error)
            <ul>
                <li class="message-list-item">{{ $error }}</li>
            </ul>
        @endforeach
    </div>
@elseif (session('success'))
    <div class="success">
        <ul>
            <li class="message-list-item">
                {{ session('success') }}
            </li>
        </ul>
    </div>
@else
    <div class="converse">Talk to me.</div>
@endif

<div class="email-capture">

    <form method="POST" action="{{ route('landing-page-email') }}">
        <div class="form-group">
            <input name="email"
                   class="input email address"
                   type="text"
                   placeholder="your email"
                   value="{{ old('address') }}"
            >
        </div>

        <div class="form-group">
            <textarea name="message" class="input email message" rows="8" placeholder="message">{{ old('message') }}</textarea>
        </div>
        @include('partials.recaptcha;);

        <div class="form-group">
            <button type="submit"
                    class="btn btn-primary btn-big"
            >
                HOWDY!
            </button>
        </div>

        @include('partials.csrf;);
    </form>

</div>