const input = document.querySelector('input');
    const botao = document.querySelector('button');
    const lista = document.querySelector('ul');

    botao.addEventListener('click' , ()=>{
        let novaTarefa = document.createElement('Li');
        novaTarefa.textContent = tarefa;
        lista.appendChild(novaTarefa);

        if(tarefa != " "){
            addToList("tarefa");
        }

        input.value = " ";

    })
    
    function addToList(tarefa){
        let novaTarefa = document.createElement('Li');
        novaTarefa.textContent = tarefa;

        //Botão de exclusão da tarefa
        let excluir = document.createElement('button');
        excluir.value = 'excluir';

        novaTarefa.appendChild(excluir)
        lista.appendChild(novaTarefa);

        excluir.addEventListener('click', ()=>{
            novaTarefa.remove()
        })

        novaTarefa.appendChild(excluir);

        lista.appendChild(novaTarefa);
    }

    function salvarNoLocalStorage(tarefa){

        const tarefas = obterTodasAsTarefas();
        tarefas.push(tarefa);

        localStorage.setItem('tarefa' , JSON.stringfy(tarefa))
    }

    function obterTodasAsTarefas(){

        const tarefas = localStorage.getItem('tarefa')

        return tarefas ? JSON.parse(tarefas) : [];
        
        
        /*if(tarefas){
            tarefas = JSON.parse(tarefas);
        } else{
            tarefas = [];
        }*/
    }
    