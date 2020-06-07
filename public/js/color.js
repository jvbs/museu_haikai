$("#color-input").change(function(){
    bgColor = $("option:selected", this).css('background-color')
    fontColor = $("option:selected", this).css('color')
    $("#color-input").css({ 'background-color': bgColor, 'color': fontColor })
});

$(function(){
    bgColor = $("option:selected", this).css('background-color')
    fontColor = $("option:selected", this).css('color')
    $("#color-input").css({ 'background-color': bgColor, 'color': fontColor })
})
