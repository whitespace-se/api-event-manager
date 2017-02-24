ImportEvents = ImportEvents || {};
ImportEvents.Admin = ImportEvents.Admin || {};

ImportEvents.Admin.Suggestions = (function ($) {

    var typingTimer;
    var lastTerm;

    var acceptedPagenow = [
        'contact',
        'location',
        'event',
        'sponsor',
        'package',
        'membership-card'
    ];

    function Suggestions() {
        if (acceptedPagenow.indexOf(pagenow) < 0) {
            return;
        }

        $(document).on('keyup', 'input[name="post_title"]', function (e) {
            var $this = $(e.target);

            clearTimeout(typingTimer);

            typingTimer = setTimeout(function() {
                this.search($this.val());
            }.bind(this), 300);
        }.bind(this));

        $(document).on('click', '[data-action="suggestions-close"]', function (e) {
            e.preventDefault();
            this.dismiss();
        }.bind(this));
    }

    /**
     * Performs the search for similar titles
     * @param  {string} term Search term
     * @return {void}
     */
    Suggestions.prototype.search = function(term) {
        if (term.length <= 3 || term === lastTerm) {
            return false;
        }

        // Set last term to the current term
        lastTerm = term;

        // Get API endpoint for performning the search
        var geturl = eventmanager.wpapiurl + '/wp/v2/' + pagenow + '?search=' + term;

        if (pagenow === 'event') {
            geturl = eventmanager.wpapiurl + '/wp/v2/' + pagenow + '/search?term=' + term;
        }

        // Do the search request
        $.get(geturl, function(response) {
            if (!response.length) {
                this.dismiss();
                return;
            }

            this.output(response, term);
        }.bind(this), 'JSON');
    };

    /**
     * Outputs the title suggestions
     * @param  {array} suggestions
     * @param  {string} term
     * @return {void}
     */
    Suggestions.prototype.output = function(suggestions, term) {
        var $suggestions = $('#title-suggestions');

        if (!$suggestions.length) {
            $suggestions = $('<div id="title-suggestions"></div>');
            $suggestions.append('<ul></ul>');
        }

        $suggestions.find('ul').empty();

        $suggestions.find('ul').append('<li><strong>' + eventmanager.similar_posts + ':</strong> <button type="button" class="notice-dismiss suggestion-hide" data-action="suggestions-close"></button></li>');

        $.each(suggestions, function (index, suggestion) {
            var title = pagenow === 'event' ? suggestion.title : suggestion.title.rendered;
            var pageText = title.replace("<span>","").replace("</span>"),
            regex = new RegExp("(" + term + ")", "igm"),
            highlighted = pageText.replace(regex ,"<span>$1</span>");

            $suggestions.find('ul').append('<li><a href="/wp/wp-admin/post.php?post=' + suggestion.id + '&action=edit" class="suggestion">' + highlighted + '</a></li>');
        });

        $('#titlewrap').append($suggestions);
        $suggestions.slideDown(200);
    };

    /**
     * Dismisses the suggestions
     * @return {void}
     */
    Suggestions.prototype.dismiss = function() {
        $('#title-suggestions').slideUp(200, function () {
            $('#title-suggestions').remove();
        });
    };

    return new Suggestions();

})(jQuery);
