<div class="sidebar">
    <ul class="category-list">
      <?php $categories = get_terms('category');
      foreach($categories as $mycategorie): ?>

<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo $mycategorie->slug; ?>/"><?php echo $mycategorie->name; ?></a></li>
      <?php endforeach; ?>
    </ul>
    <div class="side-right-wrap">
      <aside id="archives-3" class="widget widget_archive">
        <select id="archives-dropdown-3" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
        <option value="">月を選択</option>
        <option value="https://find-ochanomizu.com/2016/08/"> 2016年8月 &nbsp;(1)</option>
        <option value="https://find-ochanomizu.com/2016/07/"> 2016年7月 &nbsp;(1)</option>
        <option value="https://find-ochanomizu.com/2016/06/"> 2016年6月 &nbsp;(1)</option>
      </select>
      </aside>
      <form role="search" method="get" class="search-box" action="/">
        <label>
          <input type="search" class="search-field roboto-nomal" placeholder="" name="s" id="s2" value="" title="検索:">
        </label>
        <input class="btn-search" type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-search.png" alt="検索ボタン">
      </form>
    </div>