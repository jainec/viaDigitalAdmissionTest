Vue.component('task-modal', {
    template: `
    <div class="modal fade" id="novaTarefaModal" tabindex="-1" role="dialog" aria-labelledby="novaTarefaModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="novaTarefaModalLabel">Adicionar Nova Tarefa</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nomeTarefa" class="control-label">Nome da Tarefa:</label>
                            <input type="text" class="form-control" id="nomeTarefa" name="nomeTarefa">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Inserir na Lista:</label><br>
                            <select id="id-lane" class="form-control">
                                <option v-for="lane in lanes" :value=lane.id>@{{lane.title}}</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-submit" data-dismiss="modal" v-on:click="addTask">Salvar</button>
                </div>
            </div>
        </div>
    </div>`
});



   
