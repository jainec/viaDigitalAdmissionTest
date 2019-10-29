Vue.component('lane-card', {
        template: `<div class="col-md-2 lane">
                        <label class="lane-title">{{lane.title}}</label>
                        <div :id="lane.id" class="lane-tasks">
                        
                        </div>
                    </div>`,
        props: {
            lane: Object,
            btnFunc: Function,
        }
    });
    new Vue({
        el: '#lanes',
        data: {
            lanes: [{
                    id: 1,
                    title: "To Do",
                },
                {
                    id: 2,
                    title: "In Progress",
                },
                {
                    id: 3,
                    title: "Done",
                },
                
               
            ],
            nextId: 4,
            idTask: 0,
        },
        methods: {
            addLane: function() {
                updateDragAndDrop();
                var title = $('#nomeLista').val();
                this.lanes.push({
                    id: this.nextId++,
                    title: title,
                })
            },
            removeElement(index) {
                this.lanes.splice(index, 1);
            },
            addTask() {
                var nomeTarefa = $('#nomeTarefa').val();
                var idLane = $( "#id-lane option:selected" ).val();
                $('#'+ idLane).append('<div draggable="true" id="task'+ ++this.idTask +'" class="task">'+nomeTarefa+'<button value="task'+ this.idTask +'" onClick="deleteTask(this.value)" class="btn btn-danger btn-xs" style="float:right; font-size: 0.6em;" ><i class="fas fa-trash-alt"></i></button></div>');
                updateDragAndDrop();
            }
        }
    });