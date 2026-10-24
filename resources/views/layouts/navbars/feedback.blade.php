@if($errors->has($field))
    <span class="text-red" role="alert">{{ $errors->first($field) }}</span>
@endif
