@extends('layouts.app')
@section('content')

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <label id="board-title">Board</label>
            <button  class="btn-create btn" data-toggle="modal" data-target="#novaListaModal">Nova lista
                <i class="fas fa-plus-square"></i>
            </button>
            <button  class="btn-nova-tarefa btn-create btn" data-toggle="modal" data-target="#novaTarefaModal">Nova tarefa
                <i class="fas fa-plus-square"></i>
            </button>            
        </div>
        <div class="panel-body">
            <div id="board" class="row">
                <div id="lanes">
                    <div  v-for="(lane,index) in lanes" class="scrolling-wrapper">
                        <div id="a" class="">
                            <lane-card :lane="lane"></lane-card>
                            <div style="float:left;"><button type="button" class="btn-delete btn btn-danger btn-xs" v-on:click="removeElement(index)"><i class="fas fa-trash-alt"></i></button>
                        </div>    
                    </div> 
                </div>

                <!-- MODAL CREATE LANE-->
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
                </div>
                <!-- MODAL CREATE LANE-->

                <!-- MODAL CREATE TASK-->
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
                </div>
                <!-- MODAL CREATE TASK-->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#novaListaModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggewhite the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Adicionar Nova Lista')
        modal.find('.modal-body input').val(recipient)
    })

    function deleteTask(value) {
        $("#"+value).remove();
    }
</script>

<script type="text/javascript" src="{{ URL::asset('js/dragAndDrop.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/lanesComponent.js') }}"></script>

@endsection