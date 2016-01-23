<?php if( get_theme_mod('fixed-header') ): ?>
    <script>
        (function($) {
            $(document).ready(function(){
                var headHeight = $("header").outerHeight();
                $("body").css({"margin-top": headHeight});
                $("header").css({
                    "position": "fixed",
                    "z-index": "999",
                    "top": "0",
                    "width": "100%"
                });
            });
        })(jQuery);
    </script>
<?php else : ?>
<?php endif; ?>