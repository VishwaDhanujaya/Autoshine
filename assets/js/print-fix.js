(function($) {
    "use strict";

    $(document).ready(function() {

        // Main button click handler
        $(document).on('click', '.print-ele-link', function(e) {
            e.preventDefault();
            
            var $promo = $(this).closest('.promo01');
            if ($promo.length) {
                var htm = $promo.clone();
                var $modal = $('#couponForm');
                
                $modal.find('.modal-body').html(htm);
                $modal.find('.modal-body .print-ele-link').remove();
                $modal.modal('show');
            }
        });

        // Modal print button click handler
        $(document).on('click', '#btn_save_and_close_for_ele', function() {
            
            var htm = $('#couponForm .modal-body').html();
            if (htm) {
                var $printContainer = $('#print-only-container');
                if (!$printContainer.length) {
                    $printContainer = $('<div id="print-only-container" class="print-only"></div>').appendTo('body');
                }
                
                $printContainer.html(htm);
                window.print();
                
                setTimeout(function() {
                    $printContainer.empty();
                }, 1000);
            } else {
                alert('Coupon content not found.');
            }
        });

        // --- Interactive Form Validation (Real-time Feedback) ---
        
        // Helper function for email validation
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        // Helper function for phone validation (basic)
        function isValidPhone(phone) {
            return /^[\d\s\-\+\(\)]{7,15}$/.test(phone);
        }

        // Apply real-time feedback
        $(document).on('input blur', 'input[type="email"], input[name*="phone"]', function() {
            var $field = $(this);
            var value = $field.val();
            var isValid = true;

            if ($field.attr('type') === 'email') {
                isValid = value === '' || isValidEmail(value);
            } else if ($field.attr('name').indexOf('phone') !== -1) {
                isValid = value === '' || isValidPhone(value);
            }

            if (!isValid) {
                $field.css('border-color', '#ff4d4d').addClass('field-error');
            } else {
                $field.css('border-color', '').removeClass('field-error');
            }
        });

        // Style for errors
        $('<style>.field-error { background-color: #fff8f8 !important; }</style>').appendTo('head');
    });
})(jQuery);
