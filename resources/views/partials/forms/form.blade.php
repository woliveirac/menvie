<form method="POST" action="{{ route('add_post') }}" onsubmit="">
    <input name="person_id" type="hidden" value="{{ (isset($person) ? $person->id : '') }}" />
    {{ csrf_field() }}
    <div class="inputs-form">
        <div class="form-group">
            <input type="text" required class="form-control"  name="name" value="{{ (isset($person) ? $person->name : '') }}" id="name" placeholder="Nome:" data-toggle="tooltip" data-placement="left" title="Nome" data-trigger="focus"/>
            <span class="color-white">{{ ( $errors->has('name') ? 'O campo Nome é obrigatório' : '' ) }}</span>
        </div>

        <div class="form-group">
            <input type="text" required class="form-control"  name="email" id="email" placeholder="E-mail:" value="{{ (isset($person) ? $person->email : '') }}" data-toggle="tooltip" data-placement="left" title="E-mail" data-trigger="focus" />
            <span class="color-white">{{ ( $errors->has('email') ? 'O campo E-mail é obrigatório e precisa ser um e-mail válido' : '' ) }}</span>
        </div>

        <button type="submit" class="btn btn-success text-center" id="submit-send" title="Enviar">Salvar</button>
    </div>
</form>