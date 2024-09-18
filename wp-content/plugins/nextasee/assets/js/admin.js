jQuery(document).ready(function($) {
    function loadModule(module) {
        $('#module-content').load(nextasee_ajax.ajax_url, {
            action: 'nextasee_load_module',
            module: module
        }, function() {
            // Load and execute the module-specific JavaScript
            $.getScript(nextasee_ajax.plugin_url + 'assets/js/' + module + '.js');
        });
    }

    $('.sidebar a').on('click', function(e) {
        e.preventDefault();
        var module = $(this).data('module');
        loadModule(module);
    });

    // Load the Army module by default
    loadModule('army');
});