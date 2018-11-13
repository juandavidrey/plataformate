<?php
// general HDQ functions


/* Get Question Answer Meta
 * Returns array metaID, answer text, [featuredImageURL or ID]
------------------------------------------------------- */
function hdq_get_answers($hdq_id)
{
    $data = array();
    $hdq_1_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class1', true));
    $hdq_1_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class13', true));
    array_push($data, array(1, $hdq_1_answer, $hdq_1_image));
    $hdq_2_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class3', true));
    $hdq_2_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class14', true));
    array_push($data, array(3, $hdq_2_answer, $hdq_2_image));
    $hdq_3_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class4', true));
    $hdq_3_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class15', true));
    array_push($data, array(4, $hdq_3_answer, $hdq_3_image));
    $hdq_4_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class5', true));
    $hdq_4_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class16', true));
    array_push($data, array(5, $hdq_4_answer, $hdq_4_image));
    $hdq_5_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class6', true));
    $hdq_5_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class17', true));
    array_push($data, array(6, $hdq_5_answer, $hdq_5_image));
    $hdq_6_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class7', true));
    $hdq_6_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class18', true));
    array_push($data, array(7, $hdq_6_answer, $hdq_6_image));
    $hdq_7_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class8', true));
    $hdq_7_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class19', true));
    array_push($data, array(8, $hdq_7_answer, $hdq_7_image));
    $hdq_8_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class9', true));
    $hdq_8_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class20', true));
    array_push($data, array(9, $hdq_8_answer, $hdq_8_image));
    $hdq_9_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class10', true));
    $hdq_9_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class21', true));
    array_push($data, array(10, $hdq_9_answer, $hdq_9_image));
    $hdq_10_answer = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class11', true));
    $hdq_10_image = sanitize_text_field(get_post_meta($hdq_id, 'hdQue_post_class22', true));
    array_push($data, array(11, $hdq_10_answer, $hdq_10_image));

    return $data;
}

function hdq_get_featured_image_container($image)
{
    $image_ar = hdq_get_featured_image($image);
    $data = '<div class = "hdq_featured_image" data-id = "'.$image_ar[0].'"><img src = "'.$image_ar[1].'" alt = ""/></div>';
    return $data;
}

function hdq_get_featured_image($image)
{
    $data = array();
    if (is_numeric($image)) {
        // if this uses image ID instead of URL
        $hdc_featured_image = wp_get_attachment_image_src($image, "thumbnail", false);
        $hdc_featured_image = $hdc_featured_image[0];
        $data = array($image, $hdc_featured_image);
    } else {
        // created with old version of HD Quiz
        if ($image != null && $image != "") {
            $data = array(0, $image);
        } else {
            $data = array(0, "https://via.placeholder.com/150x150?text=UPLOAD");
        }
    }
    return $data;
}

/* Returns object of all quiz options
------------------------------------------------------- */
function hdq_get_quiz_options($hdq_id)
{
    $term_meta = get_option("taxonomy_term_$hdq_id");
    return $term_meta;
}

function hdq_get_answer_image_url($image)
{
    if (is_numeric($image)) {
        // if this uses image ID instead of URL
        $image_url = wp_get_attachment_image_src($image, "hd_qu_size2", false);
        if ($image_url[0] == "" || $image_url[0] == null) {
            $image_url = wp_get_attachment_image_src($image, "thumbnail", false);
        }
        $image = $image_url[0];
        return $image;
    } else {
        // figure out what the original custom image size was
        // get the extention -400x400
        $image_parts = explode(".", $image);
        $image_extention = end($image_parts);
        unset($image_parts[count($image_parts)-1]);
        $image_url = implode(".", $image_parts);
        $image_url = $image_url.'-400x400.'.$image_extention;
        return $image_url;
    }
}

/* Prints the result divs
------------------------------------------------------- */
function hdq_get_results($hdq_quiz_options)
{
    $pass = stripslashes(wp_kses_post($hdq_quiz_options["passText"]));
    $pass = apply_filters('the_content', $pass);
    $fail = stripslashes(wp_kses_post($hdq_quiz_options["failText"]));
    $fail = apply_filters('the_content', $fail);
    $result_text = sanitize_text_field(get_option("hd_qu_results"));
    if ($result_text == null || $result_text == "") {
        $result_text = "Results";
    }
    $shareResults = sanitize_text_field($hdq_quiz_options["shareResults"]); ?>

	<div class = "hdq_results_wrapper hdq_question">
		<div class = "hdq_results_inner">
			<h2><?php echo $result_text; ?></h2>
			<div class = "hdq_result"></div>
			<div class = "hdq_result_pass"><?php echo $pass; ?></div>
			<div class = "hdq_result_fail"><?php echo $fail; ?></div>
			<?php
                if ($shareResults === "yes") {
                    ?>
					<div class = "hdq_share">
						<div class = "hdq_social_icon">
							<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>&amp;title=Quiz" target="_blank" class = "hdq_facebook">
								<img src="<?php echo plugins_url('/images/fbshare.png', __FILE__); ?>" alt="Share your score!">
							</a>						</div>
						<div class = "hdq_social_icon">
							<a href="#" target="_blank" class = "hdq_twitter"><img src="<?php echo plugins_url('/images/twshare.png', __FILE__); ?>" alt="Tweet your score!"></a>
						</div>
					</div>
				<?php
                } ?>
		</div>
	</div>

	<?php
}

function hdq_print_question_as_title($i, $hdq_q_id, $hdq_tooltip)
{
    $hdq_answers = hdq_get_answers($hdq_q_id); ?>
				<div class = "hdq_question hdq_question_title">
					<?php
                        if (has_post_thumbnail()) {
                            echo '<div class = "hdq_question_featured_image">';
                            the_post_thumbnail();
                            echo '</div>';
                        } ?>
					<h3><?php echo get_the_title($hdq_q_id); ?></h3>
				</div>
	<?php
}

function hdq_print_question_normal($i, $hdq_q_id, $hdq_tooltip, $hdq_after_answer, $hdq_selected, $hdq_random_answer_order)
{
    $hdq_answers = hdq_get_answers($hdq_q_id);
    // add the 'correct' to array in case we randomize
    array_push($hdq_answers[$hdq_selected - 1], "checked");
    if ($hdq_random_answer_order === "yes") {
        shuffle($hdq_answers);
    } ?>

				<div class = "hdq_question" id = "hdq_question_<?php echo $i; ?>">
					<?php
                        if (has_post_thumbnail()) {
                            echo '<div class = "hdq_question_featured_image">';
                            the_post_thumbnail();
                            echo '</div>';
                        } ?>
					<h3>
						<?php
                            $question_number = hdq_get_paginate_question_number($i);
    echo "#".$question_number." ".get_the_title($hdq_q_id);
    if ($hdq_tooltip != "" && $hdq_tooltip != null) {
        echo '<span class="hdq_tooltip hdq_tooltip_question">?<span class="hdq_tooltip_content"><span>'.$hdq_tooltip.'</span></span></span>';
    } ?>
					</h3>
					<?php
                        $x = 0;
    foreach ($hdq_answers as $answer) {
        if ($answer[1] != "" && $answer[1] != null) {
            $x = $x + 1;
            $hdq_is_correct = "";
            if (array_key_exists(3, $answer)) {
                $hdq_is_correct = "1";
            } else {
                $hdq_is_correct = "0";
            } ?>
								<div class = "hdq_row">
									<label class="hdq_label_answer" data-type = "radio" data-id = "hdq_question_<?php echo $i; ?>" for="hdq_option_<?php echo $i.'_'.$x; ?>">
										<div class="hdq-options-check">
											<input type="checkbox" class="hdq_option hdq_check_input" value="<?php echo $hdq_is_correct; ?>" name="hdq_option_<?php echo $i.'_'.$x; ?>" id="hdq_option_<?php echo $i.'_'.$x; ?>">
											<label for="hdq_option_<?php echo $i.'_'.$x; ?>"></label>
										</div>
										<?php echo $answer[1]; ?>
									</label>
								</div>
							<?php
        }
    }
    if ($hdq_after_answer != "" && $hdq_after_answer != null) {
        echo '<div class = "hdq_question_after_text">';
        echo apply_filters('the_content', $hdq_after_answer);
        echo '</div>';
    } ?>
				</div>


	<?php
}


function hdq_print_question_image($i, $hdq_q_id, $hdq_tooltip, $hdq_after_answer, $hdq_selected, $hdq_random_answer_order)
{
    $hdq_answers = hdq_get_answers($hdq_q_id);
    // add the 'correct' to array in case we randomize
    array_push($hdq_answers[$hdq_selected - 1], "checked");
    if ($hdq_random_answer_order === "yes") {
        shuffle($hdq_answers);
    } ?>

				<div class = "hdq_question" id = "hdq_question_<?php echo $i; ?>">
					<?php
                        if (has_post_thumbnail()) {
                            echo '<div class = "hdq_question_featured_image">';
                            the_post_thumbnail();
                            echo '</div>';
                        } ?>
					<h3>
						<?php
                            $question_number = hdq_get_paginate_question_number($i);
    echo "#".$question_number." ".get_the_title($hdq_q_id);
    if ($hdq_tooltip != "" && $hdq_tooltip != null) {
        echo '<span class="hdq_tooltip hdq_tooltip_question">?<span class="hdq_tooltip_content"><span>'.$hdq_tooltip.'</span></span></span>';
    } ?>
					</h3>
					<?php
                        $x = 0;
    foreach ($hdq_answers as $answer) {
        if ($answer[1] != "" && $answer[1] != null) {
            $answer_image = hdq_get_answer_image_url($answer[2]);
            $x = $x + 1;
            $hdq_is_correct = "";
            if (array_key_exists(3, $answer)) {
                $hdq_is_correct = "1";
            } else {
                $hdq_is_correct = "0";
            }
            if ($x % 2 != 0) {
                echo '<div class = "hdq_one_half">';
            } else {
                echo '<div class = "hdq_one_half hdq_last">';
            } ?>

								<div class = "hdq_row">
									<label class="hdq_label_answer" data-type = "image" data-id = "hdq_question_<?php echo $i; ?>" for="hdq_option_<?php echo $i.'_'.$x; ?>">
										<img src = "<?php echo $answer_image; ?>" alt = ""/>
										<div class="hdq-options-check">
											<input type="checkbox" class="hdq_option hdq_check_input" value="<?php echo $hdq_is_correct; ?>" name="hdq_option_<?php echo $i.'_'.$x; ?>" id="hdq_option_<?php echo $i.'_'.$x; ?>">
											<label for="hdq_option_<?php echo $i.'_'.$x; ?>"></label>
										</div>
										<?php echo $answer[1]; ?>
									</label>
								</div>
						</div>
							<?php
                                if ($x % 2 == 0) {
                                    echo '<div class = "clear"></div>';
                                }
        }
    }
    if ($hdq_after_answer != "" && $hdq_after_answer != null) {
        echo '<div class = "hdq_question_after_text">';
        echo apply_filters('the_content', $hdq_after_answer);
        echo '</div>';
    } ?>
				</div>


	<?php
}

function hdq_print_jPaginate($hdq_id)
{
    $next_text = sanitize_text_field(get_option("hd_qu_next"));
    if ($next_text == "" || $next_text == null) {
        $next_text = "next";
    }
    echo '<div class = "hdq_jPaginate"><div class = "hdq_next_button hdq_button" data-id = "'.$hdq_id.'">'.$next_text.'</div></div>';
}

function hdq_print_finish($hdq_id)
{
    $finish_text = sanitize_text_field(get_option("hd_qu_finish"));
    if ($finish_text == "" || $finish_text == null) {
        $finish_text = "finish";
    }
    echo '<div class = "hdq_finish hdq_jPaginate"><div class = "hdq_finsh_button hdq_button" data-id = "'.$hdq_id.'">'.$finish_text.'</div></div>';
}

function hdq_print_next($hdq_id, $page_num)
{
    $next_text = sanitize_text_field(get_option("hd_qu_next"));
    if ($next_text == "" || $next_text == null) {
        $next_text = "next";
    }
    $page_num = $page_num + 1;
    $next_page_data = get_the_permalink();
    $next_page_data = $next_page_data.'page/'.$page_num.'?currentScore=';
    echo '<div class = "hdq_next_page"><a class = "hdq_next_page_button hdq_button" data-id = "'.$hdq_id.'" href = "'.$next_page_data.'">'.$next_text.'</a></div>';
}

function hdq_get_paginate_question_number($i)
{
    if (isset($_GET['totalQuestions'])) {
        return intval($_GET['totalQuestions'] + $i);
    } else {
        return $i;
    }
}
