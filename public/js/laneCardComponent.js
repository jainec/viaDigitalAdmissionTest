Vue.component('lane-modal', {
    template: `
    <div class="modal fade" id="novaListaModal" tabindex="-1" role="dialog" aria-labelledby="novaListaModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="novaListaModalLabel">Adicionar Nova Lista</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nomeLista" class="control-label">Nome da Lista:</label>
                            <input type="text" class="form-control" id="nomeLista" name="nomeLista" v-on:keypress.enter="addLane">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-submit" data-dismiss="modal" v-on:click="addLane">Salvar</button>
                </div>
            </div>
        </div>
    </div>`
});



   
