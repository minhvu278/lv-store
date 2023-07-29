@component('mail::message')
    @lang('mail.body.register_agencies_travel.success', [
        'name' => $data['name'],
        'url' => $data['url'],
        'password' => $data['password']
    ])
@endcomponent
