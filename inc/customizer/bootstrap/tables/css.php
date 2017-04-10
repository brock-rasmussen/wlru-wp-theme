<?php
add_action( 'wp_head', 'wlru_customize_bs_tables_css' );
function wlru_customize_bs_tables_css() { ?>
<style type="text/css" id="wlru-tables"><?php
$table_cell_padding = get_theme_mod( 'wlru_table_cell_padding', 8 );
if ( $table_cell_padding !== 8 ) : ?>
caption {
  padding-top: <?php echo $table_cell_padding; ?>px;
  padding-bottom: <?php echo $table_cell_padding; ?>px;
}
.table:not(.table-condensed) > thead > tr > th,
.table:not(.table-condensed) > thead > tr > td,
.table:not(.table-condensed) > tbody > tr > th,
.table:not(.table-condensed) > tbody > tr > td,
.table:not(.table-condensed) > tfoot > tr > th,
.table:not(.table-condensed) > tfoot > tr > td {
  padding: <?php echo $table_cell_padding; ?>px;
}
<?php endif;


$table_condensed_cell_padding = get_theme_mod( 'wlru_table_condensed_cell_padding', 5 );
if ( $table_condensed_cell_padding !== 5 ) : ?>
.table-condensed > thead > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > th,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > th,
.table-condensed > tfoot > tr > td {
  padding: <?php echo $table_condensed_cell_padding; ?>px;
}
<?php endif;


// $table_bg = 'transparent';


$table_bg_accent = get_theme_mod( 'wlru_table_bg_accent', '#f9f9f9' );
if ( $table_bg_accent !== '#f9f9f9' ) : ?>
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: <?php echo $table_bg_accent; ?>;
}
<?php endif;


$table_bg_hover = get_theme_mod( 'wlru_table_bg_hover', '#f5f5f5' );
if ( $table_bg_hover !== '#f5f5f5' ) : ?>
.table-hover > tbody > tr:hover {
  background-color: <?php echo $table_bg_hover; ?>;
}
<?php endif;


$table_bg_active = $table_bg_hover;
if ( $table_bg_active !== '#f5f5f5' ) : ?>
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: <?php echo $table_bg_active; ?>;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: <?php echo darken( $table_bg_active, 5 ); ?>;
}
<?php endif;


$table_border_color = get_theme_mod( 'wlru_table_border_color', '#dddddd' );
if ( $table_border_color !== '#dddddd' ) : ?>
.table > thead > tr > th,
.table > thead > tr > td,
.table > tbody > tr > th,
.table > tbody > tr > td,
.table > tfoot > tr > th,
.table > tfoot > tr > td,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid <?php echo $table_border_color; ?>;
}
.table > thead > tr > th,
.table > tbody + tbody {
  border-bottom: 2px solid <?php echo $table_border_color; ?>;
}
.table-bordered,
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > th,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > th,
.table-bordered > tfoot > tr > td {
  border: 1px solid <?php echo $table_border_color; ?>;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    border: 1px solid <?php echo $table_border_color; ?>;
  }
}
<?php endif; ?>
</style>
<?php }
