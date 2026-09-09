<?php get_header(); 
/*
Template Name: Search
*/
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/styles/search-results.css" />
<div id="content" class="search_page">
<div class="left_index_content">
 <h2 id="search-result">Rezultatele căutării</h2>
<div id="cse" style="width: 100%;">Se încarcă</div>
 
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'ro'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('011348303528365521459:opwj9prepp0');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
	jQuery(".gsc-input").val("<?php echo isset($_GET['q']) ? esc_js($_GET['q']) : ''; ?>");//insert into search field requested search text
    jQuery(".gsc-search-button").click();//call button click event, show results
  }, true);
</script>


      
      
      </div>
			
<?php get_sidebar(); ?>

</div>
</div>
<?php get_footer(); ?>
