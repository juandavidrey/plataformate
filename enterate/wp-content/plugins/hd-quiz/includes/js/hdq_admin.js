/*
	HD Quiz main admin script
*/

jQuery(window).load(function() {
    console.log("HD Quiz initiated");
    hdq_start();
});

function hdq_start() {
    hdq_load_active_tab();
}

// show the default tab on load
function hdq_load_active_tab() {
    var activeTab = jQuery("#hdq_tabs .hdq_active_tab").attr("data-hdq-content");
    jQuery("#" + activeTab).addClass("hdq_tab_active");
    jQuery(".hdq_tab_active").slideDown(500);
}

jQuery(".hdq_accordion h3").click(function() {
    jQuery(this).next("div").toggle(600);
});

/* Tab navigation
------------------------------------------------------- */
jQuery("#hdq_form_wrapper").on("click", "#hdq_tabs li", function(event) {
    jQuery('#hdq_tabs li').removeClass("hdq_active_tab");
    jQuery(this).addClass("hdq_active_tab");
    var hdqContent = jQuery(this).attr("data-hdq-content");
    jQuery(".hdq_tab_active").fadeOut();
    jQuery(".hdq_tab").removeClass("hdq_tab_active");
    jQuery("#" + hdqContent).delay(250).fadeIn();
    jQuery("#" + hdqContent).addClass("hdq_tab_active");
})


/* Show or hide answer images
------------------------------------------------------- */
jQuery("#hdQue-post-class23").click(function() {
    jQuery(".hdq_answer_as_image").toggleClass("hdq_use_image_as_answer");
});

/* Show or hide answers
------------------------------------------------------- */
jQuery("#hdQue-post-class24").click(function() {
    jQuery("#hdq_tab_wrapper").fadeToggle();
});

/* For now, only allow 1 correct answer at a time
------------------------------------------------------- */
jQuery(".hdq_correct").click(function() {
    jQuery(".hdq_correct").prop('checked', false);
    jQuery(this).prop('checked', true);
    //get index hdQue-post-class2
    let hdq_selected_val = jQuery(".hdq_correct").index(this) + 1;
    jQuery("#hdQue-post-class2").val(hdq_selected_val);
});

/* Upload a feature answer image
------------------------------------------------------- */
let hdq_file_frame_featured_image;
let hdq_file_frame_input = "";
jQuery('.hdq_featured_image').click(function(event) {
    event.preventDefault();
    // get the input to update
    hdq_file_frame_input = jQuery(this).next("input");
    hdq_file_frame_image = jQuery(".hdq_featured_image").index(this);
    // If the media frame already exists, reopen it.
    if (hdq_file_frame_featured_image) {
        hdq_file_frame_featured_image.open();
        return;
    }

    // Create the media frame.
    hdq_file_frame_featured_image = wp.media.frames.file_frame = wp.media({
        title: "Upload an image for this answer",
        button: {
            text: "SET IMAGE",
        },
        multiple: false
    });

    // When an image is selected, run a callback.
    hdq_file_frame_featured_image.on('select', function() {
        attachment = hdq_file_frame_featured_image.state().get('selection').first().toJSON();
        imgURL = attachment.sizes.thumbnail.url;
        jQuery('.hdq_featured_image img').eq(hdq_file_frame_image).attr("src", imgURL);
        jQuery(hdq_file_frame_input).val(attachment.id);
    });
    hdq_file_frame_featured_image.open();
});
