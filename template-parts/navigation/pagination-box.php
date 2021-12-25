<div class="col-md-12 hidden-mb-45 pagination-box text-center"> 
  <nav aria-label="Page navigation example"> 
    <?php if ( PG_Pagination::isPaginated() ) : ?>
      <ul class="pagination"> 
        <li class="page-item"> 
          <?php if( PG_Pagination::getCurrentPage() > 1 ) : ?>
            <a class="page-link" <?php echo PG_Pagination::getPreviousHrefAttribute(); ?>><i class="fa fa-angle-left"></i></a>
          <?php endif; ?> 
        </li>         
        <?php for( $page_num = 1; $page_num <= PG_Pagination::getMaxPages(); $page_num++) : ?>
          <li class="<?php if( $page_num == PG_Pagination::getCurrentPage() ) echo 'active'; ?> page-item"> <a class="page-link" href="<?php echo esc_url( get_pagenum_link( $page_num ) ) ?>"><?php echo $page_num ?></a> 
          </li>
        <?php endfor; ?>                   
        <li class="page-item"> 
          <?php if( PG_Pagination::getCurrentPage() < PG_Pagination::getMaxPages() ) : ?>
            <a class="page-link" <?php echo PG_Pagination::getNextHrefAttribute(); ?>><i class="fa fa-angle-right"></i></a>
          <?php endif; ?> 
        </li>         
      </ul>
    <?php endif; ?> 
  </nav>   
</div>