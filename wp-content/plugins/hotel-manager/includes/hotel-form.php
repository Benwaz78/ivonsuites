<?php
function pf_handle_hotel_booking_submission() {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return;
    }

    // Make sure this is the correct form
    if (!isset($_POST['action']) || $_POST['action'] !== 'pf_submit_hotel_form') {
        return;
    }

    // Nonce check
    if (!isset($_POST['hotel_booking_nonce']) ||
        !wp_verify_nonce($_POST['hotel_booking_nonce'], 'hotel_booking_nonce_action')) {
        wp_die('Security check failed.');
    }

    // Sanitize fields
    $full_name   = sanitize_text_field($_POST['bookNowFullName']);
    $phone       = sanitize_text_field($_POST['phoneNumber']);
    $email       = sanitize_email($_POST['email']);
    $check_in    = sanitize_text_field($_POST['checkIn']);
    $check_out   = sanitize_text_field($_POST['checkOut']);

    // Parent hotel ID
    $hotel_id = isset($_POST['hotel_id']) ? intval($_POST['hotel_id']) : 0;
    $hotel_name = $hotel_id ? get_the_title($hotel_id) : '';

    // Create booking post
    $booking_id = wp_insert_post([
        'post_type'   => 'hotel_booking',
        'post_title'  => $full_name . ' - ' . $hotel_name,
        'post_status' => 'publish',
    ]);

    if ($booking_id) {

        // Save meta data
        update_post_meta($booking_id, '_hotel_id', $hotel_id);
        update_post_meta($booking_id, '_hotel_name', $hotel_name);
        update_post_meta($booking_id, '_full_name', $full_name);
        update_post_meta($booking_id, '_phone', $phone);
        update_post_meta($booking_id, '_email', $email);
        update_post_meta($booking_id, '_check_in', $check_in);
        update_post_meta($booking_id, '_check_out', $check_out);

        // Email admin
        $email_template_path = plugin_dir_path(__FILE__) . '../templates/booking-email-template.html';
        if ( file_exists($email_template_path) ) {
            $message = file_get_contents($email_template_path);
            // Replace placeholders
            $message = str_replace('{logo}', plugin_dir_url(__FILE__) . 'assets/logo.png', $message);
            $message = str_replace('{full_name}', $full_name, $message);
            $message = str_replace('{phone}', $phone, $message);
            $message = str_replace('{email}', $email, $message);
            $message = str_replace('{hotel}', $hotel_name, $message);
            $message = str_replace('{check_in}', $check_in, $message);
            $message = str_replace('{check_out}', $check_out, $message);
            $message = str_replace('{{dashboard_link}}', admin_url("post.php?post=$booking_id&action=edit"), $message);
            $message = str_replace('{{year}}', date('Y'), $message);
        }

         /* ---------------------------
           SEND EMAIL
        ---------------------------- */
        $admin_email = "nonwaz78@gmail.com";
        $subject = "New Hotel Booking: $hotel_name";

        add_filter( 'wp_mail_content_type', function() { return 'text/html'; } );
        wp_mail($admin_email, $subject, $message);
        remove_filter( 'wp_mail_content_type', 'set_html_content_type' );


        // Redirect back with success
        $redirect_url = add_query_arg('booking_status', 'success', wp_get_referer()) . '#hotelDiv';
        wp_safe_redirect($redirect_url);
        exit;

    } else {
        wp_die('Error: unable to process booking.');
    }
}

add_action('admin_post_nopriv_pf_submit_hotel_form', 'pf_handle_hotel_booking_submission');
add_action('admin_post_pf_submit_hotel_form', 'pf_handle_hotel_booking_submission');
