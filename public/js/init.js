$(function(){
    // start summernote
    $('#summernote').summernote({
        lang: "pt-BR",
        height: 250,
        toolbar: [
            // ['style', ['style']],
            ['font', ['bold', 'underline', 'italic', 'strikethrough']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']],
        ],
    });

    // alterando timer caption
    updateTimerCaption();
});


$("#timer").change(function(){
    updateTimerCaption();
});


function checkTimerValue(){
    return $("#timer").val();
}

function updateTimerCaption(){
    timerValue = checkTimerValue();

    $("#timer-caption").html(timerValue);
}
