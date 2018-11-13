/*
	HD Quiz main script
*/

let jPage = 0;
let hdq_nextlink = "";
let hdq_active_timer = false;

jQuery(window).load(function() {
    console.log("HD Quiz initiated");
    hdq_start();
});

function hdq_start() {
    let firstjpage = jQuery(".hdq_jPaginate")[0];
    if (!jQuery(firstjpage).hasClass("hdq_finish")) {
        jQuery(".hdq_finish").hide();
        jQuery(".hdq_jPaginate").first().fadeIn();
        jQuery(".hdq_jPaginate").nextAll(".hdq_question").hide();
    } else {
        jQuery(".hdq_finish").show();
    }
    if (hdq_timer > 3) {
        hdq_active_timer = true;
        hdq_start_timer();
    }
}

/* Quiz Timer
------------------------------------------------------- */
function hdq_start_timer() {
    function hdq_decrease_timer() {
        if (hdq_timer > 0 && hdq_active_timer == true) {
            jQuery(".hdq_timer").html(hdq_timer);
            if (hdq_timer > 10 && hdq_timer < 30) {
                jQuery(".hdq_timer").addClass("hdq_timer_warning");
            } else if (hdq_timer <= 10) {
                jQuery(".hdq_timer").removeClass("hdq_timer_warning");
                jQuery(".hdq_timer").addClass("hdq_timer_danger");
            }
            hdq_timer = hdq_timer - 1;
            setTimeout(hdq_decrease_timer, 1000);
        } else {
            if (hdq_active_timer == true) {
                // uh oh! Out of time
                jQuery(".hdq_timer").html("0");
                jQuery(".hdq_timer").removeClass("hdq_timer_danger");
                jQuery(".hdq_finsh_button").click();
                hdq_active_timer = false;
            } else {
                // user finished in time
                jQuery(".hdq_timer").removeClass("hdq_timer_danger");
                jQuery(".hdq_timer").removeClass("hdq_timer_warning");
            }
        }
    }
    hdq_decrease_timer();
}

/* For now, only allow 1 correct answer for a question
------------------------------------------------------- */
jQuery(".hdq_label_answer").click(function() {
    // get the parent id
    hdq_question_id = jQuery(this).attr("data-id");
    jQuery("#" + hdq_question_id + " .hdq_label_answer").children(".hdq-options-check").children(".hdq_check_input").prop('checked', false);
    jQuery(this).children(".hdq-options-check").children(".hdq_check_input").prop('checked', true);
});

/* For now, only allow 1 correct answer for a question
------------------------------------------------------- */
jQuery(".hdq_next_page_button").click(function(e) {
    jQuery(this).fadeOut();

    // update the next page link and attributes
    let hdq_current_score = jQuery("#hdq_current_score").val(); // get page load values
    let hdq_total_questions = jQuery("#hdq_total_questions").val(); // get page load values
    if (!hdq_current_score) {
        hdq_current_score = 0;
    }
    if (!hdq_total_questions) {
        hdq_total_questions = 0;
    }
    // add any correct answer to score
    jQuery(".hdq_option").each(function() {
        if (jQuery(this).val() == 1 && jQuery(this).prop("checked")) {
            hdq_current_score = parseInt(hdq_current_score) + 1;
        }
    });

    // get how many new questions are on this page, excluding titles
    let total_questions_on_page = jQuery(".hdq_question").length - jQuery(".hdq_question_title").length - 1;
    hdq_total_questions = parseInt(hdq_total_questions) + parseInt(total_questions_on_page);

    let hdq_nextlink = jQuery(".hdq_next_page_button").attr("href");
    jQuery(".hdq_next_page_button").attr("href", hdq_nextlink + hdq_current_score + "&totalQuestions=" + hdq_total_questions);


});
/* jPagination
------------------------------------------------------- */
jQuery(".hdq_jPaginate .hdq_next_button").click(function() {
    let hdq_form_id = jQuery(this).attr('data-id');
    jQuery(".hdq_jPaginate .hdq_next_button").removeClass("hdq_next_selected");
    jQuery(this).addClass("hdq_next_selected");

    jQuery("#hdq_" + hdq_form_id + " .hdq_jPaginate:visible").prevAll("#hdq_" + hdq_form_id + " .hdq_question").hide();
    jQuery("#hdq_" + hdq_form_id + " .hdq_jPaginate:eq(" + parseInt(jPage) + ")").nextUntil("#hdq_" + hdq_form_id + " .hdq_jPaginate ").show();
    jPage = parseInt(jPage + 1);

    jQuery(this).parent().hide();
    jQuery("#hdq_" + hdq_form_id + " .hdq_jPaginate:eq(" + parseInt(jPage) + ")").show();

    // TODO: remove #content from here
    jQuery('html, body, #content').delay(200).animate({
        scrollTop: jQuery("#hdq_" + hdq_form_id).offset().top - 100
    }, 150);
});

/* FINISH
------------------------------------------------------- */
jQuery(".hdq_finsh_button").click(function() {
    hdq_active_timer = false;
    let hdq_form_id = jQuery(this).attr('data-id');
    jQuery(this).fadeOut();
    jQuery(".hdq_loading_bar").addClass("hdq_animate");

    function hdq_calculate_total(hdq_form_id) {
        // first, calculate the total
        let total_score = jQuery("#hdq_current_score").val(); // get page load values
        let total_questions = jQuery("#hdq_total_questions").val(); // get page load values
        if (!total_score) {
            total_score = 0;
        }
        if (!total_questions) {
            total_questions = 0;
        }
        // get score
        jQuery("#hdq_" + hdq_form_id + " .hdq_option").each(function() {
            if (jQuery(this).val() == 1 && jQuery(this).prop("checked")) {
                total_score = parseInt(total_score) + 1;
            }
        });

        // get total questions
        total_questions = parseInt(jQuery("#hdq_" + hdq_form_id + " .hdq_question").length) - parseInt(jQuery("#hdq_" + hdq_form_id + " .hdq_question_title").length) - 1 + parseInt(total_questions);

        let data = total_score + " / " + total_questions;
        jQuery("#hdq_" + hdq_form_id + " .hdq_results_inner .hdq_result").html(data);
        let pass_percent = 0;
        pass_percent = total_score / total_questions;
        pass_percent = pass_percent * 100;
        if (pass_percent >= hdq_pass_percent) {
            jQuery("#hdq_" + hdq_form_id + " .hdq_result_pass").show();
        } else {
            jQuery("#hdq_" + hdq_form_id + " .hdq_result_fail").show();
        }

        if (hdq_share_results === "yes") {
            hdq_create_share_link(hdq_form_id, total_score, total_questions);
        }

        jQuery("#hdq_" + hdq_form_id + " .hdq_results_wrapper").fadeIn();
        if (hdq_show_what_answers_were_right_wrong === "yes" || hdq_show_correct === "yes") {
            hdq_show_all_questions(hdq_form_id);
            if (hdq_show_what_answers_were_right_wrong === "yes") {
                hdq_set_correct_incorrect(hdq_form_id);
            }
        } else {
            hdq_scroll_to_results(hdq_form_id);
        }

        hdq_show_extra_question_info(hdq_form_id);

    }

    function hdq_create_share_link(hdq_form_id, total_score, total_questions) {

        function hdq_create_twitter_share(hdq_form_id, total_score, total_questions) {
            let baseURL = "https://twitter.com/intent/tweet?screen_name=";
            let shareText = "&amp;text=I scored " + total_score + "/" + total_questions + " on the " + hdq_quiz_name + " quiz. Can you beat me? ";
            let shareLink = baseURL + hdq_twitter_handle + shareText + " " + hdq_quiz_permalink;
            jQuery("#hdq_" + hdq_form_id + " .hdq_twitter").attr("href", shareLink);
        }
        hdq_create_twitter_share(hdq_form_id, total_score, total_questions);
    }

    function hdq_show_extra_question_info(hdq_form_id) {
        // only run if there is a question with extra info
        if (jQuery("#hdq_" + hdq_form_id + " .hdq_question_after_text")[0]) {
            if (hdq_show_answer_text === "yes") {
                jQuery("#hdq_" + hdq_form_id + " .hdq_question_after_text").fadeIn();
            } else {
                jQuery("#hdq_" + hdq_form_id + " .hdq_option").each(function() {
                    if (jQuery(this).prop("checked") && jQuery(this).val() != 1) {
                        let hdq_parent_question = jQuery(this).closest(".hdq_question");
                        if (jQuery(hdq_parent_question).children(".hdq_question_after_text")[0]) {
                            jQuery(hdq_parent_question).children(".hdq_question_after_text").fadeIn();
                        }
                    }
                });
            }
        }
    }

    function hdq_set_correct_incorrect(hdq_form_id) {
        jQuery("#hdq_" + hdq_form_id + " .hdq_option").each(function() {
            if (jQuery(this).prop("checked")) {
                if (jQuery(this).val() == 1) {
                    jQuery(this).closest(".hdq_label_answer").addClass("hdq_correct");
                } else {
                    jQuery(this).closest(".hdq_label_answer").addClass("hdq_wrong");
                }
            } else {
                if (hdq_show_correct === "yes") {
                    if (jQuery(this).val() == 1) {
                        jQuery(this).closest(".hdq_label_answer").addClass("hdq_correct_not_selected");
                    }
                }
            }
        });
    }

    function hdq_show_all_questions(hdq_form_id) {
        jQuery("#hdq_" + hdq_form_id + " .hdq_question").fadeIn();
        setTimeout(function() {
            hdq_scroll_to_results(hdq_form_id);
        }, 1000);
    }

    function hdq_scroll_to_results(hdq_form_id) {
        // TODO: remove #content from here
        let hdq_scroll_pos = jQuery("#hdq_" + hdq_form_id + " .hdq_results_wrapper").position().top - 100;
        jQuery('html, body, #content').delay(500).animate({
            scrollTop: hdq_scroll_pos
        }, 1500);
    }
    hdq_calculate_total(hdq_form_id);
});
