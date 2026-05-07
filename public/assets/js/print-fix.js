(function($) {
    "use strict";

    $(document).ready(function() {
        console.log('Print fix script loaded');

        // Main button click handler
        $(document).on('click', '.print-ele-link', function(e) {
            e.preventDefault();
            console.log('Print button clicked');
            
            var $promo = $(this).closest('.promo01');
            if ($promo.length) {
                var htm = $promo.clone();
                var $modal = $('#couponForm');
                
                $modal.find('.modal-body').html(htm);
                $modal.find('.modal-body .print-ele-link').remove();
                $modal.modal('show');
            } else {
                console.error('Promo container not found');
            }
        });

        // Modal print button click handler
        $(document).on('click', '#btn_save_and_close_for_ele', function() {
            console.log('Modal print button clicked');
            
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

        // Appointment and Contact Form Loading States
        $(document).on('submit', '#appointment-form-element', function(e) {
            e.preventDefault(); // Stop page reload
            
            var $form = $(this);
            var $btn = $form.find('button[type="submit"]');
            var $msgContainer = $form.find('.col-sm-8'); // Where the alert lives
            
            // Loading state
            $btn.prop('disabled', true);
            var originalBtnHtml = $btn.find('span').html();
            $btn.find('span').html('<i class="icon icon-sync animation"></i> Sending...');
            
            $.ajax({
                url: 'ajax-appointment.php',
                type: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function(response) {
                    var alertClass = response.status === 'success' ? 'alert-success' : 'alert-danger';
                    $msgContainer.html('<div class="alert ' + alertClass + '" style="padding: 10px; margin: 0; border-radius: 4px; display: inline-block;">' + response.message + '</div>');
                    
                    if (response.status === 'success') {
                        $form[0].reset(); // Clear form on success
                    }
                },
                error: function() {
                    $msgContainer.html('<div class="alert alert-danger" style="padding: 10px; margin: 0; border-radius: 4px; display: inline-block;">Oops! Something went wrong. Please try again.</div>');
                },
                complete: function() {
                    $btn.prop('disabled', false);
                    $btn.find('span').html(originalBtnHtml);
                }
            });
        });

        $(document).on('submit', '#contact-form-element', function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var $btn = $form.find('button[type="submit"]');
            var $msgContainer = $form.find('.alert').length ? $form.find('.alert').parent() : $form.prepend('<div class="msg-container"></div>').find('.msg-container');
            
            // Loading state
            $btn.prop('disabled', true);
            var originalBtnHtml = $btn.find('span').html();
            $btn.find('span').html('<i class="icon icon-sync animation"></i> Sending...');
            
            $.ajax({
                url: 'ajax-contact.php',
                type: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function(response) {
                    var alertClass = response.status === 'success' ? 'alert-success' : 'alert-danger';
                    // Custom styling for contact form alert to match original
                    var style = response.status === 'success' ? 'background: #dff0d8; color: #3c763d; border: 1px solid #d6e9c6;' : 'background: #f2dede; color: #a94442; border: 1px solid #ebccd1;';
                    
                    $msgContainer.html('<div class="alert ' + alertClass + '" style="padding: 15px; margin-bottom: 20px; border-radius: 5px; ' + style + '">' + response.message + '</div>');
                    
                    if (response.status === 'success') {
                        $form[0].reset();
                    }
                },
                error: function() {
                    $msgContainer.html('<div class="alert alert-danger" style="padding: 15px; margin-bottom: 20px; border-radius: 5px; background: #f2dede; color: #a94442; border: 1px solid #ebccd1;">Oops! Something went wrong. Please try again.</div>');
                },
                complete: function() {
                    $btn.prop('disabled', false);
                    $btn.find('span').html(originalBtnHtml);
                }
            });
        });

        // --- Interactive Form Validation ---
        
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
