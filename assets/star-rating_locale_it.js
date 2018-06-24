/*!
 * Star Rating <LANG> Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-star-rating
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";
    $.fn.ratingLocales['it'] = {
        defaultCaption: '{rating} punti',
        starCaptions: {
            0.5: 'Orribile',
            1: 'Pessimo',
            1.5: 'Deficiente',
            2: 'Regolare',
            2.5: 'Normale',
            3: 'Buono',
            3.5: 'Molto Buono',
            4: 'Ottimo',
            4.5: 'Incredibile',
            5: 'Il migliore'
        },
        clearButtonTitle: 'Azzera',
        clearCaption: 'Senza puntuare'
    };
})(window.jQuery);
