$(function () {
    $('.time-table-day').on('click', function () {
        $(this).find('.time-table-body').toggle();
    });
    $('#d14').on('click', function () {
        $('.time-table-day').hide();
        $('.m_14').show();
    });
    $('#d15').on('click', function () {
        $('.time-table-day').hide();
        $('.m_15').show();
    });
    $('#newsviewport-bg').on('click', function () {
        $('#newsviewport-container').hide();
    });
    $('#newslist li').on('click', function () {
        $.get($(this).attr('data-href'), function (data) {
            $('#newsviewport').html(data);
            $('#newsviewport-container').show();
        });
    });
    $('#ranking_list').find('li:nth-child(n+5)').addClass('ranking-list-collapse').hide();
    $('#more').on('click', function () {
        $('.ranking-list-collapse').toggle();
    });
    $('#h5').on('click', function () {
        location.href = 'http://h5.2017.eeyes.net';
    });
});
