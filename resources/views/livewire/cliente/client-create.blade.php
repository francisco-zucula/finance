<div>

    <form role="form" wire:submit.prevent="submit">
        @csrf

        <div class='col'>
            <div class="form-row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <label for="client-firstname">Nome</label>
                    <div class="form-group{{ $errors->has('firstname') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="material-icons">
                                        account_circle
                                    </span>
                                </div>
                            </div>
                            <input id='client-firstname' type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" placeholder="Primeiro nome..." wire:model.lazy='firstname' value={{ old('firstname') }}>
                        </div>

                        @if ($errors->has('firstname'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <label for="client-lastname">Apelido</label>
                    <div class="form-group{{ $errors->has('lastname') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="material-icons">
                                        assignment_ind
                                    </span>
                                </div>
                            </div>
                            <input id='client-lastname' type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Apelido..." wire:model.lazy='lastname'>
                        </div>

                        @if ($errors->has('lastname'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class='col-xl-12'>
                <label for="client-firstname">Descrição da Catégoria</label>
                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="material-icons">
                                    <i class="fa fa-file" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <textarea class="form-control form-control-alternative" rows="3" placeholder="Escreva uma descrição" wire:model.lazy='description'></textarea>
                    </div>

                    @if ($errors->has('description'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>

                <div class='row justify-content-center'>
                    <div class="form-group mr-2">
                        <button type="button" class="btn btn-primary">
                            <i class="far fa-times-circle"></i>
                            Cadastrar
                        </button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger">
                            <i class="far fa-times-circle"></i>
                            Cancelar
                        </button>
                    </div>
                </div>


            </div>
        </div>

    </form>
</div>