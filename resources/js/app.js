import './bootstrap';
import jQuery from 'jquery';

window.$ = jQuery;

$(document).ready(function () {
    $.ajaxSetup({
        headers:
            {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    var publicationsUrl = 'publications';

    if ($('.col-md-3').length === 0) {
        getPublicationsData(publicationsUrl);
    }
});

window.getPublicationsData = function(url) {
    $.ajax({
        url: url,
        method: "GET",
        contentType: "application/json",
        success: function (data, textStatus, jqXHR) {
            getPublicationsContent(data);
            getPublicationsPagination(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('error');
        }
    });
}

window.getPublicationsContent = function(data) {
    $('#publications-content').empty();
    $.each(data.data, function (key, val) {
        $('#publications-content').append('<div class="col-md-3 mt-4"><h2>' + val.title + '</h2><p>' + val.body + '</p></div>');
    });
}

window.getPublicationsPagination = function(data) {
    var previousPage = 1;
    var nextPage = lastPage = data.pagination.last_page;

    $('#publications-pagination').empty();

    if (data.pagination.current_page > 1) {
        previousPage = data.pagination.current_page - 1;
        $('#publications-pagination').append('<li class="page-item"><a class="page-link" href="#" aria-label="Previous" onclick="event.preventDefault(); getPublicationsData(\'' + data.pagination.path + previousPage + '\');"><span aria-hidden="true">&laquo;</span></a></li>');
    }

    for (var page = 1; page <= data.pagination.last_page; page++) {
        var active = '';

        if (page === data.pagination.current_page) {
            active = 'active';
        }

        $('#publications-pagination').append('<li class="page-item ' + active + '"><a class="page-link" href="#" onclick="event.preventDefault(); getPublicationsData(\'' + data.pagination.path + page + '\');">' + page + '</a></li>');
    }

    if (data.pagination.current_page < lastPage) {
        nextPage = data.pagination.current_page + 1;
        $('#publications-pagination').append('<li class="page-item"><a class="page-link" href="#" aria-label="Next" onclick="event.preventDefault(); getPublicationsData(\'' + data.pagination.path + nextPage + '\');"><span aria-hidden="true">&raquo;</span></a></li>');
    }

}
