
<div class='tableWrapper'>
    <div class='tableHeader'>
        <ul class='tableActions'>

            <li class='inactive activeIfSelected'>

            <li>
                <input type="text" style="width: 200px;" maxlength="25" name="search_trans" id="search_trans" placeholder="Search By Product"/>
            </li>

             <li>
                <input type="text" style="width: 200px;" maxlength="25" name="search_trans_second" id="search_trans_second" placeholder="Search By Type"/>
            </li>
             <li>
                <input type="text" style="width: 200px;" maxlength="25" name="search_trans_third" id="search_trans_third" placeholder="Search By Date"/>
            </li>
            <li>
                <input type="text" style="width: 100px;" maxlength="25" name="search_trans_fourth" id="search_trans_fourth" placeholder="Search By Name"/>
            </li>
            </li>
        </ul>



        <div class='clear'></div>
        <div class='corner left'></div>
        <div class='corner right'></div>
    </div>


    <div name="table_info" id="table_info">

    </div>

    <input type="hidden" name="transaction_list_url" id="transaction_list_url" value="<?php echo $html->url(array('controller' => 'Customer', 'action' => 'transaction_history')); ?>" />

</div>

<?php echo $html->script('view_trans.js'); ?>

