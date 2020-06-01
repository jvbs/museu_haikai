$(".open-modal").click(function(){
    content = $(this).parent().parent().parent();

    titulo = content.find('.obra-titulo').html()
    conteudo = content.find('.obra-conteudo').val()
    artista = content.find('.obra-artista').html()
    backgroundColor = content.find('.obra-titulo').css('background-color')
    fontColor = content.find('.obra-titulo').css('color')
    timer = parseInt(content.find('.obra-timer').html())


    $("#modalTitle").html(titulo)
    $("#modalBody").html(conteudo)
    $("#modalBody").css({ 'background-color': backgroundColor, 'color': fontColor })
    $("#modalArtista").html(artista)
    $("#modalTimer").html(timer)


    $("#modal-obra").modal({
        backdrop: 'static',
        keyboard: false
    });

    
});
