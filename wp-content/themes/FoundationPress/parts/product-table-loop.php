<?php foreach($table_meta as $table_id): ?>
    <div class="product-table__wrapper">
        <?php tablepress_print_table( array( 'id' => $table_id, 'use_datatables' => false, 'print_name' => false ) ); ?>
    </div>
<?php endforeach; ?>
