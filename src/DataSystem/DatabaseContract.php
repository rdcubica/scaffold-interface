<?php

namespace Amranidev\ScaffoldInterface\DataSystem;

/**
 * interface DatabaseContract.
 *
 * @author Athi Krishnan <athikrishnan5@gmail.com>
 */
interface DatabaseContract
{
    /**
     * retrieve table names from database.
     *
     * @return /Illuminate/Support/Collection
     */
    public function tableNames();
}
