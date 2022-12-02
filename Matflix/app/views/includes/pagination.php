<nav aria-label="navigation users" class="mt-1">
  <ul class="pagination justify-content-center">

    <li class="page-item <?= $page <=1 ? "disabled" : " " ?>">
      <a class="page-link linkdapagina" href="?pagina=<?= $page > 1 ? $page-1 :1  ?>" aria-label="anterior">
        <span aria-hidden="true" class="text-black">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>

    <?php for($page_n = 1; $page_n <= $total_pages; $page_n++): ?>

    <li class="page-item "><a class="page-link linkdapagina <?= $page_n == $page ? "ativo": ""?>" href="?pagina=<?=$page_n?>"><?=$page_n?></a></li>

    <?php endfor;?>
    <li class="page-item <?= $page >= $total_pages ? "disabled" : " " ?>">
      <a class="page-link linkdapagina" href="?pagina=<?= $page < $total_pages ? $page+1 : $total_pages?>" aria-label="proximo">
        <span aria-hidden="true" class="text-black">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
    
  </ul>
</nav>