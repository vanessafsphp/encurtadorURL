<?php
?>
<form action="{{ route('generate.link.post') }}" id="form" name="urlForm" class="subscribe-form" method="post">
    <input type="hidden" name="enviado" value="1" />
    @csrf

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="form-group d-flex">
                <input type="url" name="url" id="url" class="form-control" placeholder="Digite a URL aqui" value="" required />
                <input type="submit" value="Gerar Link" class="submit px-3">
            </div>
        </div>
    </div>
</form>

@if(isset($code))
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card py-5 my-5">
            <div class="card-body pt-0">
                <a href="{{ route('short.link', $code) }}" target="_blank">{{ route('short.link', $code) }}</a>
            </div>
        </div>
    </div>
</div>
@endif
