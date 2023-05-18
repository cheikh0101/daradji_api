<x-mail::message>
    # Message

    Prénom et nom: {{ $objet }}

    Objet: {{ $objet }}

    Envoyé par: {{ $email }}

    Message: {{ $message }}

    Merci,
    {{ config('app.name') }}
</x-mail::message>
