$(function(){
    // starts localstorage
    load()
})

$("#form-obra").change(function(){
    // save after every update
    save()
})

$("#form-obra").submit(function(){
    // reset localstorage
    reset()
})

function save(){
    nomeObra = $("#nome").val()
    conteudoObra = $("#summernote").val()
    timerObra = $("#timer").val()
    // definindo local storage
    localStorage.setItem('nome', nomeObra)
    localStorage.setItem('conteudo', conteudoObra)
    localStorage.setItem('timer', timerObra)

}

function load(){
    storedNomeObra = localStorage.getItem('nome')
    storedConteudoObra = localStorage.getItem('conteudo')
    storedTimerObra = localStorage.getItem('timer')

    $("#nome").val(storedNomeObra)
    $("#summernote").summernote("code", storedConteudoObra)
    $("#timer").val(storedTimerObra)

    updateTimerCaption()
}

function reset(){
    localStorage.removeItem('nome')
    localStorage.removeItem('conteudo')
    localStorage.removeItem('timer')
}



