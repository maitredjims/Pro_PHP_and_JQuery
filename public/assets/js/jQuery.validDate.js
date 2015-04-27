(function($){
    // Extends the jQuery object to validate date strings
    $.validDate = function(date, options)
    {
        // Sets up default values for the method
        var defaults = {
            "pattern" : /^\d{4}-\d{2}-\d{2}\s\d{2}:\d{2}:\d{2}$/
        },
        // Extends the defaults with user-supplied options
            opts = $.extend(defaults, options);
            alert(date.match(opts));
        // Returns true if a match is found, false otherwise
        return date.match(opts.pattern) !== null;
    };
})(jQuery);