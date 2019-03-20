$(function () {
    $('#select-beast').selectize({
        create: true,
        sortField: 'text'
    });
    console.log('Heloo I\'m hear', $('.nice-select'));
    $('.nice-select').css('float','none');
});