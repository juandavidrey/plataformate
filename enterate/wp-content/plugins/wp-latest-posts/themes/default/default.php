<?php
$titleChecked = '';
$textChecked = '';
$dateChecked = '';
$categoryChecked = '';
$authorChecked = '';
$readMoreChecked = '';
$imageChecked = '';

if (isset($settings['dfTitle']) && (!empty($settings['dfTitle']))) {
    $titleChecked = 'checked';
}
if (isset($settings['dfText']) && (!empty($settings['dfText']))) {
    $textChecked = 'checked';
}
if (isset($settings['dfDate']) && (!empty($settings['dfDate']))) {
    $dateChecked = 'checked';
}
if (isset($settings['dfCategory']) && (!empty($settings['dfCategory']))) {
    $categoryChecked = 'checked';
}
if (isset($settings['dfAuthor']) && (!empty($settings['dfAuthor']))) {
    $authorChecked = 'checked';
}
if (isset($settings['dfReadMore']) && (!empty($settings['dfReadMore']))) {
    $readMoreChecked = 'checked';
}
if (isset($settings['dfThumbnail']) && (!empty($settings['dfThumbnail']))) {
    $imageChecked = 'checked';
}
$dfThumbnailPositionTop = '';
$dfThumbnailPositionLeft = '';
$dfThumbnailPositionRight = '';
if (isset($settings['dfThumbnailPosition']) && (!empty($settings['dfThumbnailPosition']))) {
    if ($settings['dfThumbnailPosition'] === 'top') {
        $dfThumbnailPositionTop = 'selected';
    }
    if ($settings['dfThumbnailPosition'] === 'left') {
        $dfThumbnailPositionLeft = 'selected';
    }
    if ($settings['dfThumbnailPosition'] === 'right') {
        $dfThumbnailPositionRight = 'selected';
    }
} else {
    $dfThumbnailPositionTop = 'selected';
}

/**
 *  New setting theme default
 */
echo '<div id="wplp_config_zone_new" class="wpcu-inner-admin-block with-title with-border ' .
    esc_attr($classdisabled) . esc_attr($classdisabledsmooth) . '">';
echo '<h4>' . esc_html__('A new item', 'wp-latest-posts') . '</h4>';
echo '<div class="wplp-drag-config"></div>';
echo '<div class="imagePosition input-field input-select">';
echo '<label for="dfThumbnailPosition">' . esc_html__('Image Position', 'wp-latest-posts') . '</label>';
echo '<select id="dfThumbnailPosition" name="wplp_dfThumbnailPosition">
              <option ' . esc_html($dfThumbnailPositionTop) . ' value="top">' . esc_html__('Top', 'wp-latest-posts') . '</option>
              <option ' . esc_html($dfThumbnailPositionLeft) . ' value="left">' . esc_html__('Left', 'wp-latest-posts') . '</option>
              <option ' . esc_html($dfThumbnailPositionRight) . ' value="right"> ' . esc_html__('Right', 'wp-latest-posts') . '</option>
          </select>';
echo '</div>';
echo '<div class="arrow_col_wrapper"><ul class="arrow_col">';

/**
 * Display image field
 */
echo '<input type="hidden" name="wplp_dfThumbnail" value="">';
echo '<input id="dfThumbnail" ' . esc_attr($imageChecked) . ' type="checkbox" name="wplp_dfThumbnail" value="' .
    esc_html(htmlspecialchars('Thumbnail')) . '">';
echo '<label for="dfThumbnail">' . esc_html__('Thumbnail', 'wp-latest-posts') . '</label><br/>';


/**
 * Display title field
 */
echo '<input type="hidden" name="wplp_dfTitle" value="">';
echo '<input id="dfTitle" ' . esc_attr($titleChecked) . ' type="checkbox" name="wplp_dfTitle" value="' .
    esc_html(htmlspecialchars('Title')) . '">';
echo '<label for="dfTitle">' . esc_html__('Title', 'wp-latest-posts') . '</label><br/>';

/**
 * Display author field
 */
echo '<input type="hidden" name="wplp_dfAuthor" value="">';
echo '<input id="dfAuthor"' . esc_attr($authorChecked) . ' type="checkbox" name="wplp_dfAuthor" value="' .
    esc_html(htmlspecialchars('Author')) . '">';
echo '<label for="dfAuthor">' . esc_html__('Author', 'wp-latest-posts') . '</label><br/>';

/**
 * Display date field
 */
echo '<input type="hidden" name="wplp_dfDate" value="">';
echo '<input id="dfDate"' . esc_attr($dateChecked) . ' type="checkbox" name="wplp_dfDate" value="' .
    esc_html(htmlspecialchars('Date')) . '">';
echo '<label for="dfDate">' . esc_html__('Date', 'wp-latest-posts') . '</label><br/>';

/**
 * Display category field
 */
echo '<input type="hidden" name="wplp_dfCategory" value="">';
echo '<input id="dfCategory" ' . esc_attr($categoryChecked) . ' type="checkbox" name="wplp_dfCategory" value="' .
    esc_html(htmlspecialchars('Category')) . '">';
echo '<label for="dfCategory">' . esc_html__('Category', 'wp-latest-posts') . '</label><br/>';

/**
 * Display text field
 */
echo '<input type="hidden" name="wplp_dfText" value="">';
echo '<input id="dfText"' . esc_attr($textChecked) . ' type="checkbox" name="wplp_dfText" value="' .
    esc_html(htmlspecialchars('Text')) . '">';
echo '<label for="dfText">' . esc_html__('Text', 'wp-latest-posts') . '</label><br/>';

/**
 * Display read more field
 */
echo '<input type="hidden" name="wplp_dfReadMore" value="">';
echo '<input id="dfReadMore"' . esc_attr($readMoreChecked) . ' type="checkbox" name="wplp_dfReadMore" value="' .
    esc_html(htmlspecialchars('Read more')) . '">';
echo '<label for="dfReadMore">' . esc_html__('Read more', 'wp-latest-posts') . '</label><br/>';

echo '</ul></div>';    //arrow_col
echo '</div>';
echo '</div>';
