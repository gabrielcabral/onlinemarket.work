<?php

namespace Market\Controller;

/**
 * Description of ListingsTableTrait
 *
 * @author Gabriel Cabral
 */
trait ListingsTableTrait {

    private $listingsTable;

    function setListingsTable($listingsTable) {
        $this->listingsTable = $listingsTable;
    }

}
